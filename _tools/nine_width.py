"""Standard nine-width check. Renders every page, serves it, and for each width
measures the page closed AND with the nav open. Below 64rem it opens the fixed
mobile overlay and measures overflow INSIDE it (whole-page scrollWidth cannot
see a fixed layer). Usage: python3 _tools/nine_width.py [port]"""
import sys, re, glob, shutil, pathlib, subprocess, tempfile, time, html, os
sys.path.insert(0, '_tools'); import render
PORT = sys.argv[1] if len(sys.argv) > 1 else '8141'
CHROME = '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome'
out = pathlib.Path(tempfile.mkdtemp(prefix='ninewidth-'))
shutil.copytree('assets', out / 'assets')
pages = sorted(f for f in glob.glob('**/index.php', recursive=True) if not f.startswith(('_', 'assets')))
urls = []
for f in pages:
    dst = out / f.replace('index.php', 'index.html'); dst.parent.mkdir(parents=True, exist_ok=True)
    dst.write_text(render.render_page(f), encoding='utf-8'); urls.append('/' + f.replace('index.php', ''))
(out / 'probe.html').write_text('''<meta charset="utf-8"><pre id="out">pending</pre><script>
const URLS=%s, W=[320,375,414,640,768,960,1024,1280,1440], out=[], sleep=ms=>new Promise(r=>setTimeout(r,ms));
const frame=(u,w,h)=>new Promise(r=>{const f=document.createElement('iframe');f.width=w;f.height=h;f.src=u;f.onload=()=>r(f);document.body.appendChild(f);});
const past=(root,w)=>[...root.querySelectorAll('*')].filter(e=>{const r=e.getBoundingClientRect();return r.width>0&&r.height>0&&r.right>w+0.5;}).length;
(async()=>{let fails=0;
 for(const u of URLS)for(const w of W){
  const f=await frame(u,w,800);await sleep(80);const d=f.contentDocument,q=s=>d.querySelector(s);let line,ok;
  const closed=d.documentElement.scrollWidth<=w;
  if(w>=1024){q('[data-submenu-toggle]').click();await sleep(40);const p=q('#solutions-menu').getBoundingClientRect();
   ok=closed&&p.left>=-0.5&&p.right<=w+0.5&&d.documentElement.scrollWidth<=w;line='panel '+Math.round(p.left)+'..'+Math.round(p.right);}
  else{q('[data-menu-toggle]').click();await sleep(40);q('[data-submenu-toggle]').click();await sleep(40);const n=q('.site-nav');
   const cols=new Set([...d.querySelectorAll('.site-nav__list > li')].map(li=>Math.round(li.getBoundingClientRect().left))).size;
   const pe=past(n,w),xo=n.scrollWidth>n.clientWidth;ok=closed&&!xo&&pe===0&&cols===1&&d.documentElement.scrollWidth<=w;
   line='overlay cols='+cols+' x-overflow='+xo+' past-edge='+pe;}
  if(!ok)fails++;out.push((ok?'ok   ':'FAIL ')+('w'+w).padEnd(6)+u.padEnd(46)+'closed '+(closed?'clean':'OVERFLOW')+' | open '+line);f.remove();}
 out.push(fails?fails+' FAILURES':'ALL '+URLS.length*W.length+' CHECKS PASS');document.getElementById('out').textContent=out.join('\\n');})();
</script>''' % str(urls), encoding='utf-8')
srv = subprocess.Popen([sys.executable, '-m', 'http.server', PORT, '--directory', str(out)], stdout=subprocess.DEVNULL, stderr=subprocess.DEVNULL)
time.sleep(1)
try:
    dom = subprocess.run([CHROME, '--headless', '--disable-gpu', '--no-sandbox', '--force-prefers-reduced-motion',
                          '--window-size=1600,1000', '--virtual-time-budget=300000', '--dump-dom',
                          'http://localhost:%s/probe.html' % PORT], capture_output=True, text=True, timeout=500).stdout
    m = re.search(r'<pre id="out">(.*?)</pre>', dom, re.S)
    print(html.unescape(m.group(1)) if m else '(no output)')
finally:
    srv.terminate(); shutil.rmtree(out, ignore_errors=True)

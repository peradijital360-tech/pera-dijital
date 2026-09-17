"""Renders the PHP subset used by assets/inc/ so pages can be verified
without a PHP binary. A verification aid, not a PHP implementation."""
import re, pathlib, html, urllib.parse
_cfg=open('assets/inc/config.php',encoding='utf-8').read()
def _c(n,d=None):
    m=re.search(r"const %s\s*=\s*'((?:[^'\\]|\\.)*)'"%n,_cfg); return m.group(1) if m else d
def _b(n):
    m=re.search(r'const %s\s*=\s*(true|false)'%n,_cfg); return bool(m) and m.group(1)=='true'
BASE=_c('BASE','/'); SITE_NAME=_c('SITE_NAME'); SITE_URL=_c('SITE_URL')
CONTACT_EMAIL=_c('CONTACT_EMAIL'); CONTACT_PHONE=_c('CONTACT_PHONE')
CONTACT_PHONE_HREF=_c('CONTACT_PHONE_HREF'); CONTACT_ADDRESS=_c('CONTACT_ADDRESS')
WHATSAPP_NUMBER=_c('WHATSAPP_NUMBER'); WHATSAPP_TEXT=_c('WHATSAPP_TEXT')
MAP_LAT=_c('MAP_LAT',''); MAP_LNG=_c('MAP_LNG','')
AI_PROMPT=_c('AI_PROMPT','')
OG_IMAGE=_c('OG_IMAGE',''); OG_IMAGE_ALT=_c('OG_IMAGE_ALT','')
MAP_ZOOM=(re.search(r'const MAP_ZOOM\s*=\s*(\d+)',_cfg) or [None,'17'])[1]
SHOW_WORK=_b('SHOW_WORK'); SHOW_SECTOR_FILTER=_b('SHOW_SECTOR_FILTER')
_loc=pathlib.Path('assets/inc/config.local.php')
_m=re.search(r"const SITE_ENV\s*=\s*'([^']*)'",_loc.read_text(encoding='utf-8')) if _loc.exists() else None
SITE_ENV=_m.group(1) if _m else 'staging'
SERVICES=[]
for row in re.findall(r'\[([^\]]*)\],', re.search(r'const SERVICES = \[(.*?)\n\];',_cfg,re.S).group(1)):
    d=dict(re.findall(r"'(\w+)'\s*=>\s*'([^']*)'",row)); d['built']="'built' => true" in row; SERVICES.append(d)
_cl=open('assets/inc/clients.php',encoding='utf-8').read()
SECTOR_MIN=int(re.search(r'const SECTOR_MIN\s*=\s*(\d+)',_cl).group(1))
SECTORS=dict(re.findall(r"'([a-z0-9-]+)'\s*=>\s*'([^']*)',", re.search(r'const SECTORS = \[(.*?)\];',_cl,re.S).group(1)))
CLIENTS=[]
for row in re.findall(r'\[([^\]]*)\],', re.search(r'const CLIENTS = \[(.*?)\n\];',_cl,re.S).group(1)):
    d=dict(re.findall(r"'(\w+)'\s*=>\s*'([^']*)'",row))
    d.update({k:int(v) for k,v in re.findall(r"'(\w+)'\s*=>\s*(\d+)",row)}); CLIENTS.append(d)
def e(v): return html.escape(str(v),quote=True).replace('&#x27;',"'")
def u(p): return BASE+str(p).lstrip('/')
def asset(p): return u(p)
def service_url(s): return u('cozumlerimiz/'+s['slug']+'/') if s['built'] else u('cozumlerimiz/')
def service_url_by_slug(slug):
    for x in SERVICES:
        if x['slug']==slug: return service_url(x)
    return u('cozumlerimiz/')
def whatsapp_url(): return 'https://wa.me/'+WHATSAPP_NUMBER+'?text='+urllib.parse.quote(WHATSAPP_TEXT,safe='')
def ai_url(p):
    q=urllib.parse.quote(AI_PROMPT,safe='')
    return {'chatgpt':'https://chatgpt.com/?q='+q,'claude':'https://claude.ai/new?q='+q,
            'perplexity':'https://www.perplexity.ai/search?q='+q,'gemini':'https://gemini.google.com/app'}.get(p,'')
def address_line(): return re.sub(r'\s+',' ',re.sub(r'<br\s*/?>',', ',CONTACT_ADDRESS)).strip()
def has_map(): return MAP_LAT!='' and MAP_LNG!=''
def map_embed_url(): return 'https://maps.google.com/maps?ll=%s,%s&z=%s&hl=tr&output=embed'%(MAP_LAT,MAP_LNG,MAP_ZOOM)
def map_directions_url():
    dest=(MAP_LAT+','+MAP_LNG) if has_map() else address_line()
    return 'https://www.google.com/maps/dir/?api=1&destination='+urllib.parse.quote(dest,safe='')
def client_sector_counts():
    c={}
    for x in CLIENTS: c[x['sector']]=c.get(x['sector'],0)+1
    return c
def client_filter_sectors(m=None):
    m=SECTOR_MIN if m is None else m; c=client_sector_counts()
    return {k:v for k,v in SECTORS.items() if c.get(k,0)>=m}
def client_filter_is_useful(s): return len(s)>=2
DEFAULTS={'title':SITE_NAME,'description':'','canonical':'/','nav':'','css':[],'js':[],
 'og_type':'website','body_class':'page-inner','home':u(''),'cta':u('#contact'),'robots':'',
 'og_title':'','og_desc':'','tw_title':'','tw_desc':''}
ENV=dict(sprintf=lambda fmt,*args: fmt % args,e=e,u=u,asset=asset,service_url=service_url,service_url_by_slug=service_url_by_slug,whatsapp_url=whatsapp_url,
 ai_url=ai_url,AI_PROMPT=AI_PROMPT,OG_IMAGE=OG_IMAGE,OG_IMAGE_ALT=OG_IMAGE_ALT,address_line=address_line,has_map=has_map,map_embed_url=map_embed_url,map_directions_url=map_directions_url,
 MAP_LAT=MAP_LAT,MAP_LNG=MAP_LNG,MAP_ZOOM=MAP_ZOOM,
 SITE_URL=SITE_URL,BASE=BASE,SITE_NAME=SITE_NAME,SERVICES=SERVICES,CONTACT_EMAIL=CONTACT_EMAIL,
 CONTACT_PHONE=CONTACT_PHONE,CONTACT_PHONE_HREF=CONTACT_PHONE_HREF,CONTACT_ADDRESS=CONTACT_ADDRESS,
 SHOW_WORK=SHOW_WORK,SHOW_SECTOR_FILTER=SHOW_SECTOR_FILTER,SITE_ENV=SITE_ENV,SECTORS=SECTORS,CLIENTS=CLIENTS,
 SECTOR_MIN=SECTOR_MIN,client_filter_sectors=client_filter_sectors,
 client_filter_is_useful=client_filter_is_useful,client_sector_counts=client_sector_counts)
def php_expr(x):
    x=x.strip(); x=re.sub(r"\bdate\('Y'\)","'2026'",x); x=re.sub(r'\$(\w+)',r'\1',x)
    x=re.sub(r'\(int\)\s*','',x); x=x.replace('===','==').replace('!==','!=')
    x=re.sub(r"(?<![.\d])\s\.\s(?!\d)"," + ",x)
    depth=0;qi=ci=None;i=0
    while i<len(x):
        c=x[i]
        if c in "'\"":
            q=c;i+=1
            while i<len(x):
                if x[i]=='\\': i+=2;continue
                if x[i]==q: break
                i+=1
        elif c in '([': depth+=1
        elif c in ')]': depth-=1
        elif depth==0 and c=='?' and qi is None: qi=i
        elif depth==0 and c==':' and qi is not None and ci is None: ci=i
        i+=1
    if qi is not None and ci is not None: return "((%s) if (%s) else (%s))"%(x[qi+1:ci],x[:qi],x[ci+1:])
    return x
def ev(expr,ctx):
    env=dict(ENV); env.update(ctx)
    try: return eval(php_expr(expr),{'__builtins__':{}},env)
    except Exception as ex: raise RuntimeError("expr %r -> %r : %s"%(expr.strip(),php_expr(expr),ex))
TOK=re.compile(r'<\?php(.*?)\?>|<\?=(.*?)\?>',re.S)
def walk(text,ctx):
    toks=list(TOK.finditer(text)); out=[];pos=0;k=0
    def end(start,openpat,close):
        d=1;j=start+1
        while j<len(toks):
            c=(toks[j].group(1) or '').strip()
            if re.match(openpat,c,re.S): d+=1
            elif c.startswith(close): d-=1
            if d==0: return j
            j+=1
        return len(toks)-1
    while k<len(toks):
        t=toks[k]; out.append(text[pos:t.start()]); pos=t.end()
        code=(t.group(1) or '').strip(); expr=t.group(2)
        if expr is not None: out.append(str(ev(expr,ctx))); k+=1; continue
        m=re.match(r"\$(\w+)\s*=\s*(.+?);\s*require \$_SERVER\['DOCUMENT_ROOT'\] \. '/assets/inc/([\w-]+)\.php';$",code,re.S)
        if m:
            c2=dict(ctx); c2[m.group(1)]=ev(m.group(2),ctx)
            out.append(walk(strip_lead(open('assets/inc/%s.php'%m.group(3),encoding='utf-8').read()),c2)); k+=1; continue
        m=re.match(r'foreach\s*\((.+?)\s+as\s+\$(\w+)\s*=>\s*\$(\w+)\)\s*:$',code,re.S)
        if m:
            j=end(k,r'foreach\s*\(.*\)\s*:$','endforeach'); inner=text[t.end():toks[j].start()]
            seq=ev(m.group(1),ctx)
            for kk,vv in (seq.items() if hasattr(seq,'items') else enumerate(seq)):
                c2=dict(ctx); c2[m.group(2)]=kk; c2[m.group(3)]=vv; out.append(walk(inner,c2))
            pos=toks[j].end(); k=j+1; continue
        m=re.match(r'foreach\s*\((.+?)\s+as\s+\$(\w+)\)\s*:$',code,re.S)
        if m:
            j=end(k,r'foreach\s*\(.*\)\s*:$','endforeach'); inner=text[t.end():toks[j].start()]
            for item in ev(m.group(1),ctx):
                c2=dict(ctx); c2[m.group(2)]=item; out.append(walk(inner,c2))
            pos=toks[j].end(); k=j+1; continue
        m=re.match(r'if\s*\((.+)\)\s*:$',code,re.S)
        if m:
            j=end(k,r'if\s*\(.*\)\s*:$','endif'); inner=text[t.end():toks[j].start()]
            if ev(m.group(1),ctx): out.append(walk(inner,ctx))
            pos=toks[j].end(); k=j+1; continue
        k+=1
    out.append(text[pos:]); return ''.join(out)
def strip_lead(s):
    m=re.match(r'^<\?php.*?\?>',s,re.S); return s[m.end():] if m else s
def parse_page(src):
    body=re.search(r'\$page\s*=\s*\[(.*?)\n\];',src,re.S).group(1); d={}
    for k,v in re.findall(r"'([a-z_]+)'\s*=>\s*(\[[^\]]*\]|\"(?:[^\"\\]|\\.)*\"|'(?:[^'\\]|\\.)*')",body):
        v=v.strip()
        d[k]=[x for x in re.findall(r"'([^']*)'",v)] if v.startswith('[') else v[1:-1].replace("\\'","'").replace('\\"','"')
    return d
def php_array(s):
    """Nested PHP array literal of strings/ints -> dict or list."""
    pos=[0]
    def ws():
        while pos[0]<len(s) and s[pos[0]] in ' \t\r\n': pos[0]+=1
    def val():
        ws(); c=s[pos[0]]
        if c=='[':
            pos[0]+=1; keys=[]; vals=[]; assoc=False
            while True:
                ws()
                if s[pos[0]]==']': pos[0]+=1; break
                v=val(); ws()
                if s.startswith('=>',pos[0]):
                    pos[0]+=2; assoc=True; keys.append(v); v=val(); ws()
                else: keys.append(len(vals))
                vals.append(v)
                if s[pos[0]]==',': pos[0]+=1
            return dict(zip(keys,vals)) if assoc else vals
        if c in "'\"":
            pos[0]+=1; o=''
            while s[pos[0]]!=c:
                if s[pos[0]]=='\\': o+=s[pos[0]+1]; pos[0]+=2
                else: o+=s[pos[0]]; pos[0]+=1
            pos[0]+=1; return o
        m=re.match(r'-?\d+',s[pos[0]:]); pos[0]+=m.end(); return int(m.group(0))
    return val()
def render_page(path, header_text=None):
    src=pathlib.Path(path).read_text(encoding='utf-8')
    page=dict(DEFAULTS); page.update(parse_page(src))
    m=re.search(r"\$page\['robots'\]\s*=\s*SHOW_WORK\s*\?\s*''\s*:\s*'([^']*)'",src)
    if m: page['robots']='' if SHOW_WORK else m.group(1)
    for a,b in [('og_title','title'),('og_desc','description'),('tw_title','og_title'),('tw_desc','og_desc')]:
        page[a]=page[a] or page[b]
    ctx={'page':page,'nav':page['nav']}
    sm=re.search(r'\$summaries\s*=\s*(\[.*?\n\]);',src,re.S)
    if sm: ctx['summaries']=php_array(sm.group(1))
    ctx['built']=[s for s in SERVICES if s['built']]
    # The footer's link lists are data at the top of footer.php; read them
    # from there so this copy can never drift from the real one.
    _ft=open('assets/inc/footer.php',encoding='utf-8').read()
    for _name in ('social','footerNav','legalLinks','aiLinks'):
        _m=re.search(r'\$%s\s*=\s*(\[.*?\n\]);'%_name,_ft,re.S)
        if _m: ctx[_name]=php_array(_m.group(1))
    ctx['sectors']=client_filter_sectors()
    ctx['showFilter']=SHOW_SECTOR_FILTER and client_filter_is_useful(ctx['sectors'])
    head=strip_lead(open('assets/inc/head.php',encoding='utf-8').read())
    hdr=strip_lead(header_text if header_text is not None else open('assets/inc/header.php',encoding='utf-8').read())
    ftr=strip_lead(open('assets/inc/footer.php',encoding='utf-8').read())
    mm=re.search(r"require \$_SERVER\['DOCUMENT_ROOT'\] \. '/assets/inc/header\.php';\s*\?>",src)
    ff=re.search(r"<\?php\s*require \$_SERVER\['DOCUMENT_ROOT'\] \. '/assets/inc/footer\.php';",src)
    return walk(head,ctx)+walk(hdr,ctx)+walk(src[mm.end():ff.start()],ctx)+walk(ftr,ctx)

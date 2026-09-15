"""Structural check for the PHP subset: brace/quote/heredoc balance."""
import pathlib,re
def scan(path):
    s=pathlib.Path(path).read_text(encoding='utf-8')
    i=0;n=len(s);inphp=False;stack=[];problems=[]
    line=lambda p:s.count('\n',0,p)+1
    while i<n:
        if not inphp:
            j=s.find('<?php',i);k=s.find('<?=',i)
            c=[x for x in (j,k) if x!=-1]
            if not c: break
            st=min(c); i=st+5 if s.startswith('<?php',st) else st+3; inphp=True; continue
        ch=s[i]
        if s.startswith('?>',i): inphp=False;i+=2;continue
        if ch in '\'"':
            q=ch;i+=1;closed=False
            while i<n:
                if s[i]=='\\': i+=2;continue
                if s[i]==q: i+=1;closed=True;break
                i+=1
            if not closed: problems.append("unterminated "+q)
            continue
        if s.startswith('//',i) or ch=='#':
            e=s.find('\n',i); i=n if e==-1 else e; continue
        if s.startswith('/*',i):
            e=s.find('*/',i+2)
            if e==-1: problems.append("unterminated comment line %d"%line(i));break
            i=e+2;continue
        m=re.match(r'<<<[\'"]?(\w+)[\'"]?\r?\n', s[i:])
        if m:
            tag=m.group(1);e=re.search(r'^\s*'+tag+r'\b', s[i+m.end():], re.M)
            if not e: problems.append("unterminated heredoc");break
            i=i+m.end()+e.end();continue
        if ch in '({[': stack.append((ch,line(i)))
        elif ch in ')}]':
            if not stack: problems.append("stray %r line %d"%(ch,line(i)))
            else:
                o,l=stack.pop()
                if '({['.index(o)!=')}]'.index(ch): problems.append("%r line %d closed by %r line %d"%(o,l,ch,line(i)))
        i+=1
    for o,l in stack: problems.append("unclosed %r line %d"%(o,l))
    return problems

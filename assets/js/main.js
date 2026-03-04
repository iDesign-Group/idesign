"use strict";
// Navbar scroll
const nb=document.getElementById('nb');
window.addEventListener('scroll',()=>nb.classList.toggle('scrolled',scrollY>60));

// Hamburger
const hbg=document.getElementById('hbg'),nls=document.getElementById('nls');
hbg?.addEventListener('click',()=>{hbg.classList.toggle('open');nls.classList.toggle('open')});

// Scroll reveal
const obs=new IntersectionObserver(es=>{
  es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('vis');obs.unobserve(e.target)}})
},{threshold:.13});
document.querySelectorAll('.aos').forEach(el=>obs.observe(el));

// Particle canvas
const cv=document.getElementById('pCanvas');
if(cv){
  const cx=cv.getContext('2d');
  let W=cv.width=innerWidth,H=cv.height=innerHeight;
  window.addEventListener('resize',()=>{W=cv.width=innerWidth;H=cv.height=innerHeight});
  const pts=Array.from({length:80},()=>({
    x:Math.random()*W,y:Math.random()*H,
    vx:(Math.random()-.5)*.6,vy:(Math.random()-.5)*.6,
    r:Math.random()*2+1,o:Math.random()*.5+.2}));
  (function draw(){
    cx.clearRect(0,0,W,H);
    pts.forEach(p=>{
      p.x+=p.vx;p.y+=p.vy;
      if(p.x<0||p.x>W)p.vx*=-1;
      if(p.y<0||p.y>H)p.vy*=-1;
      cx.beginPath();cx.arc(p.x,p.y,p.r,0,Math.PI*2);
      cx.fillStyle=`rgba(220,30,30,${p.o})`;cx.fill();
    });
    for(let i=0;i<pts.length;i++)for(let j=i+1;j<pts.length;j++){
      const dx=pts[i].x-pts[j].x,dy=pts[i].y-pts[j].y,d=Math.sqrt(dx*dx+dy*dy);
      if(d<120){cx.strokeStyle=`rgba(220,30,30,${.15*(1-d/120)})`;cx.lineWidth=.5;
        cx.beginPath();cx.moveTo(pts[i].x,pts[i].y);cx.lineTo(pts[j].x,pts[j].y);cx.stroke()}
    }
    requestAnimationFrame(draw);
  })();
}

// Typed text
const te=document.getElementById('typed');
if(te){
  const words=['Web Designing','Web Hosting','Email Services','Domain Names','SSL Security','Cloud Hosting'];
  let wi=0,ci=0,del=false;
  (function tw(){
    const w=words[wi];
    te.textContent=del?w.substring(0,ci--):w.substring(0,ci++);
    if(!del&&ci>w.length){del=true;setTimeout(tw,1600);return}
    if(del&&ci<0){del=false;wi=(wi+1)%words.length;ci=0}
    setTimeout(tw,del?55:105);
  })();
}

// Counters
function runCounters(){
  document.querySelectorAll('.counter').forEach(el=>{
    const tgt=+el.dataset.target,sfx=el.dataset.suffix||'';
    let cur=0;const step=tgt/80;
    const t=setInterval(()=>{cur+=step;
      if(cur>=tgt){el.textContent=tgt+sfx;clearInterval(t)}
      else el.textContent=Math.ceil(cur)+sfx;
    },20);
  });
}
const ss=document.querySelector('.stats');
if(ss){const so=new IntersectionObserver(e=>{if(e[0].isIntersecting){runCounters();so.disconnect()}},{threshold:.5});so.observe(ss)}

// ---- reCAPTCHA v3: fill hidden token input before form submits ----------
// Form POSTs natively (no AJAX) so WAF sees a normal browser request.
// JS only fills the hidden #rc-token field just before submit.
(function initRecaptcha(){
  const form=document.getElementById('cf');
  const rcInput=document.getElementById('rc-token');
  if(!form||!rcInput)return;
  // Pre-fill token on page load
  function fillToken(){
    if(typeof grecaptcha==='undefined'||!RECAPTCHA_KEY||RECAPTCHA_KEY==='YOUR_SITE_KEY')return;
    grecaptcha.ready(()=>{
      grecaptcha.execute(RECAPTCHA_KEY,{action:'contact'})
        .then(t=>{rcInput.value=t;})
        .catch(()=>{});
    });
  }
  fillToken();
  // Refresh token on submit (tokens expire after 2 mins)
  form.addEventListener('submit',function(e){
    if(typeof grecaptcha==='undefined'||!RECAPTCHA_KEY||RECAPTCHA_KEY==='YOUR_SITE_KEY')return;
    e.preventDefault();
    grecaptcha.ready(()=>{
      grecaptcha.execute(RECAPTCHA_KEY,{action:'contact'})
        .then(t=>{ rcInput.value=t; form.submit(); })
        .catch(()=>form.submit());
    });
  });
})();

// ---- Domain search (AJAX — GET request, WAF usually allows these) --------
const df=document.getElementById('df');
if(df){df.addEventListener('submit',async e=>{
  e.preventDefault();
  const q=document.getElementById('dq').value.trim().replace(/\..*/,'');
  const res=document.getElementById('dres');
  if(!q)return;
  res.innerHTML='<div class="ld"><i class="fas fa-spinner fa-spin"></i> Searching…</div>';
  try{
    const r=await fetch('/api/domain_check.php?domain='+encodeURIComponent(q));
    const text=await r.text();
    let j;
    try{j=JSON.parse(text);}catch{res.innerHTML='<div class="ld">Search error. Please try again.</div>';return;}
    if(j.success)res.innerHTML=j.results.map(d=>`
      <div class="dr ${d.available?'av':'tk'}">
        <span class="dn">${d.domain}</span>
        <span class="${d.available?'ds-av':'ds-tk'}">${d.available?'<i class="fas fa-check-circle"></i> Available':'<i class="fas fa-times-circle"></i> Taken'}</span>
        <span class="dp">${d.price}</span>
        ${d.available?'<button class="btn-xs">Add to Cart</button>':''}
      </div>`).join('');
    else res.innerHTML='<div class="ld">'+j.message+'</div>';
  }catch{res.innerHTML='<div class="ld">Search failed. Please try again.</div>'}
})}

// ---- Service flip-cards --------------------------------------------------
const aobs=new IntersectionObserver(es=>{
  es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('vis');aobs.unobserve(e.target)}})
},{threshold:.13});

async function loadSvc(id,cat){
  const el=document.getElementById(id);if(!el)return;
  try{
    const r=await fetch('/api/services.json');const d=await r.json();
    el.innerHTML=(d[cat]||[]).map(s=>`
      <div class="fc aos">
        <div class="fc-in">
          <div class="fc-f">
            <div class="svc-icon"><i class="fas ${s.icon}"></i></div>
            <h3>${s.name}</h3>
            <p class="tl">${s.tagline||''}</p>
            <div class="price">${s.price}</div>
            <span class="flip-tip">Hover to see features →</span>
          </div>
          <div class="fc-b">
            <h3>${s.name}</h3>
            <ul>${s.features.map(f=>`<li><i class="fas fa-check"></i>${f}</li>`).join('')}</ul>
            <a href="/contact?service=${s.id}" class="btn-sm">Get Started</a>
          </div>
        </div>
      </div>`).join('');
    el.querySelectorAll('.aos').forEach(x=>aobs.observe(x));
  }catch(err){el.innerHTML='<p style="color:var(--grey)">Failed to load. Refresh page.</p>'}
}
document.querySelectorAll('[data-svc]').forEach(el=>loadSvc(el.id,el.dataset.svc));

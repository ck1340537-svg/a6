(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('mnav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Jewel counter
  var r=document.getElementById('jw'),row=document.getElementById('jw-row'),txt=document.getElementById('jw-text');
  function jw(){if(!r)return;var v=parseInt(r.value,10),h='';for(var i=0;i<v;i++)h+='<i></i>';row.innerHTML=h;
    var d=v<=7?'A basic movement: jewels only at the most critical points of the escapement and balance.':v<=17?'A fully jewelled hand-wound movement: every important pivot in the gear train runs in a jewel bearing.':v<=25?'Typical of a modern automatic: extra jewels support the self-winding rotor and its gears.':'Often a movement with complications, such as a chronograph, which adds many moving parts.';
    txt.innerHTML='<b>'+v+' jewels</b> &mdash; '+d;}
  if(r){r.addEventListener('input',jw);jw();}
  // Metal tabs
  var tabs=document.querySelectorAll('[role="tab"]');
  tabs.forEach(function(t){t.addEventListener('click',function(){tabs.forEach(function(x){x.setAttribute('aria-selected','false');var p=document.getElementById(x.getAttribute('aria-controls'));if(p)p.hidden=true;});
    t.setAttribute('aria-selected','true');document.getElementById(t.getAttribute('aria-controls')).hidden=false;});});
  // Wrist sizer
  var w=document.getElementById('wrist');
  function sz(){if(!w)return;var c=parseFloat(w.value);document.getElementById('wrist-val').textContent=c.toFixed(1)+' cm ('+(c/2.54).toFixed(1)+' in)';
    var rng=c<15?[26,34]:c<16.5?[30,38]:c<18?[34,40]:c<19.5?[38,42]:[40,46];
    document.getElementById('mm').textContent=rng[0]+'–'+rng[1]+' mm';
    document.getElementById('mm-note').textContent=c<16.5?'Smaller, slimmer cases and rectangular shapes will look elegant and balanced.':c<18?'You can wear most classic sizes comfortably; mid-size round or cushion cases work well.':'Larger cases and bolder bracelets suit your wrist; check the lug-to-lug length too.';}
  if(w){w.addEventListener('input',sz);sz();}
  // Cookie
  var k=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('jf_cookie');}catch(e){}
  if(k&&!v)k.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('jf_cookie',x.dataset.cookie);}catch(e){}k.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();

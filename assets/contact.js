(function(){
  const params = new URLSearchParams(window.location.search);
  if(params.get('sent') === '1'){
    const el = document.getElementById('msg-success'); if(el) el.style.display='block';
  } else if(params.get('sent') === '0'){
    const el = document.getElementById('msg-error'); if(el) el.style.display='block';
  }
})();
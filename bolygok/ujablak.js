document.getElementById('content').addEventListener('click',(e)=>{
    console.log('target:',e.target.tagName)
    if(e.target.tagName=='IMG')
      window.open(e.target.src,'_blank')
  })
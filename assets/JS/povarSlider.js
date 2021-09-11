window.addEventListener('DOMContentLoaded', ()=>{
    const povarPic = document.querySelectorAll('.aboutus__content-pic img'),
          povarName = document.querySelectorAll('.aboutus__content-name h3'),
          povarRegal = document.querySelectorAll('.aboutus__content-subTitle h4'),
          povarDesc = document.querySelectorAll('.aboutus__content-desc p'),
          controlLeft = document.querySelectorAll('.aboutus__control-left'),
          controlRight = document.querySelectorAll('.aboutus__control-right');

    let newi = 0, old = povarPic.length - 1;

    function clear(){
        povarPic.forEach(item =>{
            item.style.zIndex = '1';
            item.style.top = '100%';
        })
        povarName.forEach(item =>{
            item.style.display = 'none'
        })
        povarRegal.forEach(item =>{
            item.style.display = 'none'
        })
        povarDesc.forEach(item =>{
            item.style.display = 'none'
        })
    }
    function show(old, newi){
        povarPic[old].style.zIndex = '1';
        povarPic[newi].style.zIndex = '2';
        povarPic[newi].style.top = '0';
        setTimeout(()=>{
            povarPic[old].style.top = '100%';
        }, 400);
        povarName[old].style.display = 'none';
        povarName[newi].style.display = 'block';

        povarRegal[old].style.display = 'none';
        povarRegal[newi].style.display = 'block';

        povarName[old].style.display = 'none';
        povarName[newi].style.display = 'block';

        povarDesc[old].style.display = 'none';
        povarDesc[newi].style.display = 'block';

        
        
    }
    clear()
    
    show(old, newi);
    controlLeft.forEach(item=>{
        item.addEventListener('click',()=>{
            old = newi;
            newi --;
            if (newi < 0){
                newi = povarPic.length - 1
            }
            show(old, newi);
        })
    })
    controlRight.forEach(item=>{
        item.addEventListener('click',()=>{
            old = newi;
            newi ++;
    
            if (newi > povarPic.length - 1){
                newi = 0
            }
            show(old, newi);
        })
    })
    
    // clear();
})
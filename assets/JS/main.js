window.addEventListener('DOMContentLoaded', ()=>{
    // мобильная навигация
    const header__mobbtn = document.querySelector('.header__mobbtn'),
          header__nav = document.querySelector('.header__nav'),
          navExit = document.querySelector('.header__nav-exit'),
          navLogo = document.querySelector('.header__nav-logo');

    header__mobbtn.addEventListener('click', ()=>{
        header__nav.style.bottom = '0';
        setTimeout(()=>{
            navLogo.classList.add('header__nav-logoAct');
        }, 400)
        
    })
    navExit.addEventListener('click', ()=>{
        closeMobNav();
    })


    // прокрутка хедера
    const headerContent = document.querySelector('.header');
    const header__logo= document.querySelector('.header__logo img');

    const whiteHeader = [0, document.querySelector('.perks').offsetTop,document.querySelector('.povar').offsetTop,document.querySelector('.contacts').offsetTop];
    const blackHeader = [538, document.querySelector('.video').offsetTop,document.querySelector('.povar').offsetTop + document.querySelector('.povar__black').offsetTop,document.querySelector('.contacts').offsetTop];
    const darkHeader = [document.querySelector('.sertif').offsetTop + document.querySelector('.sertif__black').offsetTop];

    const sostav = document.querySelector('.sostav');
    const sostav__left = document.querySelector('.sostav__left');
    const sostav__right = document.querySelector('.sostav__right');
    const povar__block = document.querySelectorAll('.povar__block');
    const cheese__imgs = document.querySelectorAll('.cheese__imgs img');
   

    for (let i = 0; i< whiteHeader.length; i++){
        whiteHeader[i]-=50;
    }
    for (let i = 0; i< blackHeader.length; i++){
        blackHeader[i]-=50;
    }

    let sostavPlus = 600;

    if (window.screen.width < 600){
        sostavPlus = -220;
    }
    console.log(whiteHeader,blackHeader);
    window.addEventListener('scroll', ()=>{
        console.log(sostav.offsetTop);
        if (window.scrollY > 100){
            headerContent.classList.add('header__action');
        } else{
            headerContent.classList.remove('header__action');
        }
        if (window.scrollY > whiteHeader[0] && window.scrollY < blackHeader[0]){
            headerContent.classList.remove('header__invers');
            header__logo.src = './Source/other/logo.png';
        }
        if (window.scrollY > blackHeader[0] && window.scrollY < whiteHeader[1]){
            headerContent.classList.add('header__invers');
            header__logo.src = './Source/other/logow.png';
        }
        if (window.scrollY > whiteHeader[1] && window.scrollY < blackHeader[1]){
            headerContent.classList.remove('header__invers');
            header__logo.src = './Source/other/logo.png';
        }
        if (window.scrollY > blackHeader[1] && window.scrollY < whiteHeader[2]){
            headerContent.classList.add('header__invers');
            header__logo.src = './Source/other/logow.png';
        }
        if (window.scrollY > whiteHeader[2] && window.scrollY < blackHeader[2]){
            headerContent.classList.remove('header__invers');
            header__logo.src = './Source/other/logo.png';
        }
        if (window.scrollY > blackHeader[2] && window.scrollY < whiteHeader[3]){
            headerContent.classList.add('header__invers');
            headerContent.classList.add('header__invers-black');
            header__logo.src = './Source/other/logow.png';
        }
        if (window.scrollY > blackHeader[2] && window.scrollY < darkHeader[0]){  
            headerContent.classList.remove('header__invers-black');

        }
        if (window.scrollY > darkHeader[0] && window.scrollY < whiteHeader[3]){
            headerContent.classList.add('header__invers-black');
            header__logo.src = './Source/other/logow.png';
        }
        if (window.scrollY >  whiteHeader[3]){
            headerContent.classList.remove('header__invers');
            headerContent.classList.remove('header__invers-black');
            header__logo.src = './Source/other/logo.png';
        }



        if (window.scrollY > sostav.offsetTop + sostavPlus){
            sostav__left.classList.add('animate__end');
            sostav__right.classList.add('animate__end');
        }


        if (window.scrollY > document.querySelector('.povar').offsetTop - 150){
            setTimeout(()=>{
                povar__block[0].classList.add('animate__end');
            }, 100)
            setTimeout(()=>{
                povar__block[1].classList.add('animate__end');
            }, 400)
            setTimeout(()=>{
                povar__block[2].classList.add('animate__end');
            }, 700)
            setTimeout(()=>{
                povar__block[3].classList.add('animate__end');
            }, 1000)
            
        }

        if (window.scrollY > document.querySelector('.cheese').offsetTop - 250){
            setTimeout(()=>{
                cheese__imgs[0].classList.add('animate__end');
            }, 100)
            setTimeout(()=>{
                cheese__imgs[1].classList.add('animate__end');
            }, 400)
            setTimeout(()=>{
                cheese__imgs[2].classList.add('animate__end');
            }, 700)
            
            
        }
       
    })

    // работа с попапом

    const closeBtn = document.querySelectorAll('.popup__exit svg'),
          popup = document.querySelectorAll('.popup');


    closeBtn.forEach(item=>{
        item.addEventListener('click',()=>{
            popup.forEach(item=>{
                item.style.display = 'none';
            })
        })
    })

    // активация попапа видео
    const popVideo = document.querySelector('#popVideo'),
          prod__left = document.querySelector('.prod__left');

    prod__left.addEventListener('click', ()=>{
        popVideo.style.display = 'flex';
    })

    // скролл до блоков

    function scrollToElement(element) {
        
        window.scroll({

            top: element.offsetTop,
            behavior: "smooth"
        });
    }

    const btnItems = document.querySelector('#btnItems'),
          btnPerks = document.querySelector('#btnPerks'),
          btnProd = document.querySelector('#btnProd'),
          btnLog = document.querySelector('#btnLog'),
          btnContacts = document.querySelector('#btnContacts'),
          btnBuy = document.querySelector('#btnBuy'),
          items = document.querySelector('#items'),
          perks = document.querySelector('#perks'),
          prod = document.querySelector('#prod'),
          log = document.querySelector('#log'),
          contacts = document.querySelector('#contacts');

    btnItems.addEventListener('click', ()=>{
        scrollToElement(items);
        closeMobNav()
    }) 
    btnPerks.addEventListener('click', ()=>{
        scrollToElement(perks);
        closeMobNav()
    }) 
    btnProd.addEventListener('click', ()=>{
        scrollToElement(prod);
        closeMobNav()
    }) 
    btnLog.addEventListener('click', ()=>{
        scrollToElement(log);
        closeMobNav()
    }) 
    btnContacts.addEventListener('click', ()=>{
        scrollToElement(contacts);
        closeMobNav()
    }) 
    btnBuy.addEventListener('click', ()=>{
        scrollToElement(contacts);
        closeMobNav()
    }) 

    const firstscreen = document.querySelector('.firstscreen');

    header__logo.addEventListener('click', ()=>{
        scrollToElement(firstscreen);
    }) 

    function closeMobNav(){
        header__nav.style.bottom = '100%';
        navLogo.classList.remove('header__nav-logoAct');
    }


    const queBtn = document.querySelector('#que'),
          popForm = document.querySelector('#popForm');
        
    queBtn.addEventListener('click', ()=>{
        popForm.style.display = 'flex';
    })
})

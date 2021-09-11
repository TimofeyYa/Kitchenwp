




var theWindow = $(window);
var winHeight = theWindow.height();
var animDuration = winHeight * 4;

var animData = {
	container: document.getElementById('lottie-1'),
	renderer: 'svg',
	loop: false,
	autoplay: false,
	path: 'https://gist.githubusercontent.com/TimofeyYa/738c10fa44d6877bf3dd11b41b2a66b4/raw/f730d65bf996fc7e1473a3d8d4e7db959df9978f/bank1.json'
};
var anim = bodymovin.loadAnimation(animData);

window.addEventListener('scroll',()=>{
    if (window.scrollY > 1450){
        window.addEventListener('scroll',animationMain);
    } else {
        window.removeEventListener('scroll',animationMain);
    }
});


function animationMain(){
    if (window.scrollY > 1450 ){
        $( window ).scroll(function() {
        animatebodymovin(3700, anim);
    });
        }
}

function animatebodymovin(duration, animObject) {
	
	var scrollPosition = theWindow.scrollTop() - 1070;
	var maxFrames = animObject.totalFrames;
	var frame = (maxFrames / 100) * (scrollPosition / (duration / 100));
	
	animObject.goToAndStop(frame, true);
    
}

const animBlock = document.querySelector('#lottie-1');

window.addEventListener('scroll',()=>{
    if (window.scrollY > 1550 && window.scrollY < 3190){
        let pos = window.scrollY - 1400;
        let size = 1500 - (window.scrollY - 1500);
        animBlock.style.top = pos + 'px';
        if (size > 1100){
           animBlock.style.width = size + 'px'; 
        }
        
    }
})
const el1 = document.querySelector('.sostav__bg-el1');
const el2 = document.querySelector('.sostav__bg-el2');
const el3 = document.querySelector('.sostav__bg-el3');

const perEl1 = document.querySelector('.perks__bg-el1');
const perEl2 = document.querySelector('.perks__bg-el2');
const perEl3 = document.querySelector('.perks__bg-el3');

function opacityScroll(el1,el2,el3,minScroll,maxScroll){
    window.addEventListener('scroll',()=>{
        if (window.scrollY > minScroll && window.scrollY < maxScroll){
            el1.style.opacity = '1';
            setTimeout(()=>{
                el2.style.opacity = '1';
            }, 150)
            setTimeout(()=>{
                el3.style.opacity = '1';
            }, 250)
        } else {
            el1.style.opacity = '0';
            setTimeout(()=>{
                el2.style.opacity = '0';
            }, 150)
            setTimeout(()=>{
                el3.style.opacity = '0';
            }, 250)
        }
    })
}
opacityScroll(el1,el2,el3,document.querySelector('.sostav .container').offsetTop + document.querySelector('.sostav').offsetTop,2520);
opacityScroll(perEl1,perEl2,perEl3,3120,3920);

console.dir(document.querySelector('.sostav .container'));
console.dir(document.querySelector('.sostav'));
// var loader = document.getElementsByClassName("lottie-1");
// function loadBMAnimation(loader) {
//  var animation = bodymovin.loadAnimation({
//    container: loader,
//    renderer: "svg",
//    loop: true,
//    autoplay: true,
//    path: "https://gist.githubusercontent.com/shlizevsky/af7875da067b50fbe161f656e7b8a765/raw/3bef83dda9bb762f31cac519dae000db0263056d/data%25202.json"
//  });


// //---------------------------------------------------
// // блок для анимации при наведении мышью
// // если эта функция вам не нужна - просто удалите эту часть кода

//  loader.addEventListener("mouseenter", function() {
//     animation.play();
//   });
//   loader.addEventListener("mouseleave", function() {
//     animation.stop();
//   });

// //---------------------------------------------------

// }
// for (var i = 0; i < loader.length; i++) {
//  loadBMAnimation(loader[i]);
// }
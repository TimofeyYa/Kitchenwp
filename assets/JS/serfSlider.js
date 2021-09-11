window.addEventListener('DOMContentLoaded', ()=>{
    let sertif__content = document.querySelector('.sertif__content');

    let speed = 2; // Скорость скролла.

    let scroll = sertif__content;

    let left = 0; // отпустили мышку - сохраняем положение скролла
    let drag = false;
    let coorX = 0; // нажали мышку - сохраняем координаты.

    scroll.addEventListener('mousedown', function(e) {
    drag = true;
    coorX = e.pageX - this.offsetLeft;
    });
    document.addEventListener('mouseup', function() {
    drag = false;
    left = scroll.scrollLeft;
    });
    scroll.addEventListener('mousemove', function(e) {
    if (drag) {
        this.scrollLeft = left - (e.pageX - this.offsetLeft - coorX)*speed;
    }
    });
// setInterval(() => {
//     sertif__content.scrollLeft = sertif__content.scrollLeft + 3 ;
//     console.log(sertif__content.scrollLeft);
// }, 100);
})
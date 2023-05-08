const horizontal = document.querySelector('[data-swiper-horizontal]');

const interleaveOffset = 0.75;

const swiper = new Swiper(horizontal, {
    loop: false,
    speed: 100,
    grabCursor: true,
    mousewheelControl: true,
    mousewheel: true,
    slidesPerView: 5,
    freeModeMomentum: true,
    freeModeSticky: true,
    centeredSlides: true,
});


const verticals = document.querySelectorAll('[data-swiper-vertical]');
verticals.forEach(vertical => {
    console.log(vertical)
    const slider = new Swiper(vertical, {
        direction: 'vertical',
        loop: false,
        speed: 100,
        grabCursor: true,
        mousewheelControl: true,
        mousewheel: true,
        slidesPerView: 5,
        freeModeMomentum: true,
        freeModeSticky: true,
        centeredSlides: true,
    });
});


/**First Slider*/

$('.site-slider-one')
    .not(".slick-initialized")
    .slick({
        autoplay: true,
        autoplaySpeed: 7000,
        dots: true,
        prevArrow: ".site-slider-one.slider-btn.prev",
        nextArrow: ".site-slider-one.slider-btn.next"
    });//command that allows user to slide through images
/*Second Slider */
$('.slider-two')
    .not(".slick-initialized")
    .slick({
        autoplay: true,
        dots: false,
        autoplaySpeed: 3000,
        slidesToShow: 5,
        slidestoScroll: 1,
        prevArrow: ".site-slider-two.prev",
        nextArrow: ".site-slider-two.next",
       
    });//command that allows user to slide through images
/**  Third  Slider */
$(".slider-three")
    .not(".slick-intialized")
    .slick({
        autoplay: true,
        dots: false,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidestoScroll: 1,
        prevArrow: ".site-slider-three.prev",
        nextArrow: ".site-slider-three.next",
    });
/**  Four  Slider */
$(".slider-four")
    .not(".slick-intialized")
    .slick({
        autoplay: true,
        dots: false,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidestoScroll: 1,
        prevArrow: ".site-slider-four.prev",
        nextArrow: ".site-slider-four.next",
    });
/**  Fifth  Slider */
$(".slider-five")
    .not(".slick-intialized")
    .slick({
        autoplay: true,
        dots: false,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidestoScroll: 1,
        prevArrow: ".slider-brand.prev",
        nextArrow: ".slider-brand.next",
    });
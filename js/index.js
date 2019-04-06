$(document).ready(function(){
    $(".ban_top span").click(function(){
        $(".wrap").animate({top:0});
    });
    $('.main_img').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false
    });
    $('.slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true
    });
});


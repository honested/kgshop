$(document).ready(function(){
    $(".ban_top span").click(function(){
        $(".wrap").animate({top:0});
    });
    $(".search_pop span").click(function(){
        $(".search_pop").hide();
    });
    $(".search_btn").click(function(){
        $(".search_pop").toggle();
    });
    $(".order_back").click(function(){
        $(".order_wrap").hide();
    });
    $(".order_chk_open").click(function(){
        $(".order_wrap").toggle();
    });
    $('.main_img').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots:true
    });
    $('.slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true
    });
});


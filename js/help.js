$(document).ready(function(){
    // $(".cont_help dl").click(function(){
    //     $(".cont_help p").slideToggle();
    // });
    $(".cont_help dl").click(function () {
        // 내(this)옆에 빼고 슬라이드 업 시켜
        $(".cont_help p").not($(this).next()).slideUp("fast");
        $(this).next().slideToggle("fast");
    });
});
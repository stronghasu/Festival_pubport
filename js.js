$ (function(){
   

    // 탭메뉴
    $(".lineup-btn li").on("click",function(event){
        event.preventDefault();
        let tablist = $(this).index();
        $(".lineup-btn li").removeClass("on");
        $(this).addClass("on");

        $(".starboxall").stop().fadeOut();
        $(".starboxall").eq(tablist).stop().fadeIn();

    });
    //캐러셀
    $(".arrow.left").on("click",function(event){
        event.preventDefault();
        $(".event-move").stop().animate({"margin-left":"-490px"},1000,function(){
            $(".e-box:first-child").appendTo(".event-move");
            $(".event-move").css({"margin-left":"-245px"});
         });
    });
    $(".arrow.right").on("click",function(event){
        event.preventDefault();
        $(".event-move").stop().animate({"margin-left":"0px"},1000,function(){
            $(".e-box:last-child").prependTo(".event-move");
            $(".event-move").css({"margin-left":"-245px"});
         });

    });
    // 스크롤
    let selmove;
    $(".selmenu li").on("click",function(event){
        event.preventDefault();

        let sellist = $(this).index();
         selmove = $(".sel").eq(sellist).offset().top;

        $("html,body").stop().animate({"scrollTop":selmove},700)
        $(".selmenu li").removeClass("on");
        $(this).addClass("on");
    });
});
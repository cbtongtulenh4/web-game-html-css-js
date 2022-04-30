
var interval;

$(document).ready(function(){
    $(".list-text a").hover(function(){
        let curIndex = $(".list-text .active").index();

        $(this).addClass('active').siblings().removeClass();

        let nextIndex = $(this).index();

        transformImg(curIndex, nextIndex);
        // clearInterval();
    });


    function transformImg(curIndex, nextIndex){
        const curEl = $(".list-img li").removeClass("test").eq(curIndex).addClass("temp");
        const nextEl = $(".list-img li").removeClass("active").eq(nextIndex).addClass("active");

        // $('.list-img li').filter(function(index) {
        //     return index < curIndex;
        // }).attr("style","transform: translateX(-100%);");

        // $('.list-img li').filter(function(index) {
        //      return index > curIndex;
        // }).attr("style","transform: translateX(100%);");

        nextEl.prevAll().attr("style","transform: translateX(-100%);visibility: hidden; ");
        nextEl.nextAll().attr("style","transform: translateX(100%);visibility: hidden; ");
        if(nextIndex > curIndex){
            curEl.attr("style","transform: translateX(-100%);");
            // curEl.siblings().attr("style","transform: translateX(100%);");
        }
        else{
            curEl.attr("style","transform: translateX(100%);");
            // curEl.siblings().attr("style","transform: translateX(-100%);");
        }
        nextEl.attr("style","transform: translateX(0%);");
    }


    let length = $('.list-text a').length - 1;
    function autoPlayImg(){
        let curIndex = $('.list-text .active').index();
        let nextIndex = curIndex + 1;
        if(curIndex == length) nextIndex = 0;

        $(".list-text a").eq(nextIndex).addClass('active').siblings().removeClass();
        transformImg(curIndex, nextIndex);
    }

    interval = setInterval(autoPlayImg, 3000);

    function startInterval(){
        interval = setInterval(autoPlayImg, 3000);
    }

    function stopInterval(){
        clearInterval(interval);
    }

    $(".info-2").hover(function(){
        stopInterval();
    });

    $(".info-2").mouseleave(function(){
        startInterval();
    });

});



$('.info-3 .list-title a').hover(function(){
    let index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");

    $('.info-3 .tab-item').eq(index)
        .addClass("active").siblings().removeClass("active");

});

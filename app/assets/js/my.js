$(function () {
    $("#tan1,.tan1").hover(function () {
        $(".tan1").stop().fadeIn(300);

    }, function () {
        $(".tan1").stop().fadeOut(300);

    })

    $("#tan2,.tan2").hover(function () {
        $(".tan2").stop().fadeIn(300);

    }, function () {
        $(".tan2").stop().fadeOut(300);
    })


  /*  var index=123123;
    $("#tan3,.tan3").hover(function () {

        if($(this).attr("data")=="yy"){

            $(".tan3").stop(true,true);
           index++;
        }else if($(this).attr("data")!="yy") {

            if(index==123123){
             $(".tan3").stop(true, true).fadeIn(6000);
            }
        }
    }, function () {
        if($(this).attr("data")=="yy"){
            $(".tan3").hide();
            index = 123123;
        }else if($(this).attr("data")!="yy") {
            return false;
        }
    })
*/
    var a = 0;
    $("#tan3").hover(function () {
        if (a == 0) {
            $(".tan3").stop(true, true).fadeIn(3000);
            a++;
        } else {
            $(".tan3").stop(true, true).show();
            a = 1;
        }
    }, function () {
        a++;
        $(".tan3").stop(true, true).hide(100);
    })

    $(".tan3").hover(function () {
        if (a == 2) {
            $(".tan3").stop(true, true).show();
        }
        a = 0;
    }, function () {
        $(".tan3").stop(true, true).hide(100);
        a++;
    })

    $(".firm").click(function () {
        $("#tan3,.tan3").off();
        if (a != 0) {
            $(".tan3").show();
            a = 0;
        } else if (a == 0) {
            $(".tan3").stop(true, true).toggle();
        }
    })

    var i = 2;
    $("#ct").click(function () {
        $(".f" + i).stop().fadeIn(600).siblings().stop().hide();
        i++;
        if (i == 5) {
            i = 1;
        }
    })

    var index=0;;
    $(".caselist div").click(function () {
         index = $(this).index() + 1;
        $(this).addClass("active").siblings().removeClass("active");
        $(".f" + index).stop().fadeIn(600).siblings().stop().hide();
    })

    $(".pre2").click(function(){
        index--;
        if(index<=0){
            $(".caselist div").eq(7).addClass("active").siblings().removeClass("active");

            $(".f" + 8).stop().fadeIn(600).siblings().stop().hide();
            $(".showcase-thumbnail-button-forward").click();
            index=8;
            return false;
        }

        $(".caselist div").eq(index-1).addClass("active").siblings().removeClass("active");
        $(".f" + index).stop().fadeIn(600).siblings().stop().hide();
        if(index<5){
            $(".showcase-thumbnail-button-backward").click();
        }
        return false;

    })

    $(".next2").click(function(){
        if(index>7){
            $(".caselist div").eq(0).addClass("active").siblings().removeClass("active");

            $(".f" + 1).stop().fadeIn(600).siblings().stop().hide();
            index=1;
            $(".showcase-thumbnail-button-backward").click();
            return ;
        }
        if(index==1){

            $(".caselist div").eq(index).addClass("active").siblings().removeClass("active");

            $(".f" + index).stop().fadeIn(600).siblings().stop().hide();


        }
        if (index==0){
            index=2;
            $(".caselist div").eq(index-1).addClass("active").siblings().removeClass("active");

            $(".f" + index).stop().fadeIn(600).siblings().stop().hide();
            return false;
        }
        if(index>3){
            $(".showcase-thumbnail-button-forward").click();
        }
        index++;
        $(".caselist div").eq(index-1).addClass("active").siblings().removeClass("active");

        $(".f" + index).stop().fadeIn(600).siblings().stop().hide();
        return false;
    })

    $(".showcase-thumbnail-button-forward").click(function () {

        var top = -261 + "px";
        $(".caselist").stop(true,true).animate({top: top}, 1500);
    })
    $(".showcase-thumbnail-button-backward").click(function () {

        var top = 0 + "px";
        $(".caselist").stop(true,true).animate({top: top}, 1500);
    })


    $(".xcp_text").click(function () {
        if ($(this).val() == "百度一下……") {
            $(this).val("").css("color", "black");
        }
    })
    $(".xcp_text").blur(function () {
        if ($(this).val() == "") {
            $(this).val("百度一下……").css("color", " rgb(153, 153, 153)");
        }
    })

    $(".reccont li").hover(function () {
        $(this).children(".button").show();
    }, function () {
        $(this).children(".button").hide();

    })

    $(".openside").hover(function () {

        $(this).stop().animate({right: "0px"}, 150);

    },function(){
        $(this).stop().animate({right: "-92px"}, 150);

    })
    //判断是否返回顶部
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $(".yincang").hide();
            $(".totop").stop().fadeIn(1500);
        }
        else {
            $(".totop").stop().hide();
            $(".yincang").stop().show();
        }
    })
    $(".gotop").click(function(){
        $('body,html').animate({scrollTop:0},1000);
        return false;
    });

    $(".addapp").hover(function(){
        $(this).children("img").show();
    },function(){
        $(this).children("img").hide();
    })
})



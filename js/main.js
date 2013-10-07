$(function() {
	$('.fleche-bas').transition({ rotate: '90deg', duration: 0});
    
    $(".logo-title>a").hover(function() {
        $(this).children("img.normal").stop().animate({"opacity": "0"}, 400);
        $(this).children("img.hover").stop().animate({"opacity": "1"}, 400);
    }, function() {
        $(this).children("img.hover").stop().animate({"opacity": "0"}, 400);
        $(this).children("img.normal").stop().animate({"opacity": "1"}, 400);
    });
	
	$('.title-h1-activable').next().children().hide();
    
    $('.title-h1-activable-first').hover(function() {
        $(this).children(".fleche-bas-first").attr("src","img/fleche-bas-hover.gif");
    }, function() {
        $(this).children(".fleche-bas-first").attr("src","img/fleche-bas.gif");
    });
    
    $('.title-h1-activable').hover(function() {
        $(this).children(".fleche-bas").attr("src","img/fleche-bas-hover.gif");
    }, function() {
        $(this).children(".fleche-bas").attr("src","img/fleche-bas.gif");
    });
    
    $('.title-h1-activable-first').click(function() {
		$(this).next().children().stop().fadeToggle();
		if($(this).children("input").attr("value")=="inactive") {
			$(this).children(".fleche-bas-first").stop().transition({ rotate: '0deg' });
			$(this).children("input").attr("value","active");
		} 
		else {
			$(this).children(".fleche-bas-first").stop().transition({ rotate: '90deg' });
			$(this).children("input").attr("value","inactive");
		}
	});
	
	$('.title-h1-activable').click(function() {
		$(this).next().children().stop().fadeToggle();
		if($(this).children("input").attr("value")=="inactive") {
			$(this).children(".fleche-bas").stop().transition({ rotate: '0deg' });
			$(this).children("input").attr("value","active");
		} 
		else {
			$(this).children(".fleche-bas").stop().transition({ rotate: '90deg' });
			$(this).children("input").attr("value","inactive");
		}
	});
    
    $(".social>span>a").hover(function() {
        $(this).children("img").stop().transition({scale : "1.5" });
        $(this).children("img.normal").stop().animate({"opacity": "0"}, 400);
        $(this).children("img.hover").stop().animate({"opacity": "1"}, 400);
    }, function() {
        $(this).children("img").stop().transition({scale : "1" });
        $(this).children("img.hover").stop().animate({"opacity": "0"}, 400);
        $(this).children("img.normal").stop().animate({"opacity": "1"}, 400);
  	});

    $(".footer>a").hover(function() {
        $(this).children("img").stop().transition({ scale : '1.5'});
        $(this).children("img.normal").stop().animate({"opacity": "0"}, 400);
        $(this).children("img.hover").stop().animate({"opacity": "1"}, 400);
    }, function() {
        $(this).children("img").stop().transition({ scale : '1'});
        $(this).children("img.hover").stop().animate({"opacity": "0"}, 400);
        $(this).children("img.normal").stop().animate({"opacity": "1"}, 400);
    });

    $(".projet").hover(function() {
		$(this).children(".well").children("img").css("background","#499ca4");
    }, function () {
		$(this).children(".well").children("img").css("background","none");
    });
    
    var is_showing_v = false;
    $(".projet").click(function() {
    	if(!is_showing_v) {
    		$($(this).children(".hidden").attr("href")).stop().modal("show");
    		is_showing_v = true;
		} 
		else {
			is_showing_v = false;
		}
    });
    
    $("#image_captcha").hover(function() {
        $(this).stop().popover("show");
    }, function () {
        $(this).stop().popover("hide");
    });
    
    $("#image_captcha").next().hover(function() {
        $("#image_captcha").stop().popover("show");
    }, function () {
        $("#image_captcha").stop().popover("hide");
    });
    
});

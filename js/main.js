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

    var is_showing_v = false;
    $(".projet>.well").hover(function() {
		$(this).children("img").css("background","#499ca4");
    }, function () {
		$(this).children("img").css("background","none");
    });
    
    $(".projet>.well,h2").click(function() {
    	if(!is_showing_v) {
    		$($(this).parent().children(".hidden").attr("href")).stop().modal("show");
    		is_showing_v = true;
		}
    });

    $(".projet").hover(function() {}, function() {is_showing_v = false});

    $("#div_captcha").hover(function() {
        $("#image_captcha").stop().popover("show");
        setTimeout(function() {$("#image_captcha").stop().popover("hide")},3000);
    }, function () {
        $("#image_captcha").stop().popover("hide");
    });
    
});

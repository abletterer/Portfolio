$(function() {
	$('.fleche-bas').transition({ rotate: '90deg', duration: 0});
	
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
    }, function() {
        $(this).children("img").stop().transition({ scale : "1" }); 
  	});

    $(".html5").hover(function() {
        $(this).stop().transition({ scale : '1.5'});
    }, function() {
        $(this).stop().transition({ scale: '1'});
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
        $(this).popover("show");
    }, function () {
        $(this).popover("hide");
    });
    
    $("#image_captcha").next().hover(function() {
        $("#image_captcha").popover("show");
    }, function () {
        $("#image_captcha").popover("hide");
    });
    
});

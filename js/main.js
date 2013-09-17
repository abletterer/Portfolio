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
    
    $(".projet").click(function() {
    });

    
});

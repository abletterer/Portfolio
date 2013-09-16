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
		$(this).next().children().fadeToggle();
		if($(this).children("input").attr("value")=="inactive") {
			$(this).children(".fleche-bas-first").transition({ rotate: '0deg' });
			$(this).children("input").attr("value","active");
		} 
		else {
			$(this).children(".fleche-bas-first").transition({ rotate: '90deg' });
			$(this).children("input").attr("value","inactive");
		}
	});
	
	$('.title-h1-activable').click(function() {
		$(this).next().children().fadeToggle();
		if($(this).children("input").attr("value")=="inactive") {
			$(this).children(".fleche-bas").transition({ rotate: '0deg' });
			$(this).children("input").attr("value","active");
		} 
		else {
			$(this).children(".fleche-bas").transition({ rotate: '90deg' });
			$(this).children("input").attr("value","inactive");
		}
	});
    
    $(".social>span>a").hover(function() {
        $(this).children("img").transition({scale : "1.5" });
    }, function() {
        $(this).children("img").transition({ scale : "1" }); 
  	});

    $(".html5").hover(function() {
        $(this).transition({ scale : '1.5'});
    }, function() {
        $(this).transition({ scale: '1'});
    });
    
});

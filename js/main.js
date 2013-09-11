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
    
    $(".social>a>img").hover(function() {
        $(this).transition({rotate: '360deg', duration: 800});
    }, function() {
  		$(this).transition({rotate: '0deg', duration: 0});
  	});
});

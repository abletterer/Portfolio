$(function() {
	$('.fleche-bas').transition({ rotate: '90deg', duration:0});
	
	$('.title-h1-activable').next().children().hide();
    
    $('.title-h1-activable-first').click(function() {
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
        $(this).transition({scale: 2});
    });
    
    $(".social>a>img").mouseout(function() {
        $(this).transition({scale: 1/2});
    });
});
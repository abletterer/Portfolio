$(function() {
	$('.fleche-bas').transition({ rotate: '90deg', duration:0});
	
	$('.title-h1-activable').next().children().hide();
	
	$('.fleche-bas').click(function() {
		$(this).parent().parent().next().children().fadeToggle();
		if($(this).next().attr("value")=="inactive") {
			$(this).transition({ rotate: '0deg' });
			$(this).next().attr("value","active");
		}
		else {
			$(this).transition({ rotate: '90deg' });
			$(this).next().attr("value","inactive");
		}
	});
});
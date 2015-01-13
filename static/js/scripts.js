$(document).ready(function() {
	
	//Set Image height
	$('.one').height($(window).height());
	$(window).resize(function(){
		$('.one').height($(window).height());
	});
	
	$(window).scroll(function(){
		//top background slide
		$('.one').css('backgroundPosition', 'center ' + $(window).scrollTop()/5 + 'px');
		//Bottom background slide
		$('.bottom').css('backgroundPosition', 'center ' + 180 + $(window).scrollTop()/5 + 'px');
	});
	
});
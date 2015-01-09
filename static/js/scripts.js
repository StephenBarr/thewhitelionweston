$(document).ready(function() {
  
	$(window).scroll(function(){
		//top background slide
		$('.home.one').css('backgroundPosition', 'center ' + $(window).scrollTop()/5 + 'px');
		//Bottom background slide
		$('.bottom').css('backgroundPosition', 'center ' + 180 + $(window).scrollTop()/5 + 'px');
	});
	
});
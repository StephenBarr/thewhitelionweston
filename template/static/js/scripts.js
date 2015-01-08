$(document).ready(function() {
  
	$(window).scroll(function(){
		//Social icon fit
		if($(window).scrollTop() > 384) {
			$('.social').css({'position': 'fixed', 'top': '92px', 'width': $('.container.one .col-lg-3').width()});
		} else {
			$('.social').css({'position': '', 'width': ''});
		}
	});
	
	//Slideshow
	$('.fade-slide').responsiveSlides({timeout: 2000, speed: 1000, random: true});
	
});
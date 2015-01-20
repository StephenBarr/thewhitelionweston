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
	//Map
	if($('.contact').length){
		$('.navbar').addClass('black');
		var myLatlng = new google.maps.LatLng(53.066118, -2.399868);
		var mapOptions = {
			zoom: 17,
			center: myLatlng,
			scrollwheel: false,
			navigationControl: false,
			mapTypeControl: false,
			scaleControl: false,
			panControl: false,
			draggable: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.LARGE,
				position: google.maps.ControlPosition.LEFT_BOTTOM
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		var marker = new google.maps.Marker({
		  	position: myLatlng,
		  	map: map
	  	});
		if($(window).width() < 768) map.set('draggable', false);
		var infowindow = new google.maps.InfoWindow({
			content: '<div style="width:180px;font-size:15px">The White Lion,<br />31 Main Road,<br />Weston, North Crewe,<br />Cheshire, <strong>CW2 5NA</strong></div>'
		});
		infowindow.open(map,marker);
	}
});
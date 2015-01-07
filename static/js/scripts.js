$(document).ready(function() {
	//Set Height
	$('.full-height').height($(window).height() + 'px');
	$('.full-line-height').css('line-height', $(window).height() + 'px');
	$('.centred').textfill({ maxFontSize: 36 });
    //Parallax top
	$(window).scroll(function(){
		$('.zone').css('margin-top', $(window).scrollTop()/5);
	});
});

//Text Size Adjust
; (function($) {
$.fn.textfill = function(options) {

    options = jQuery.extend({
        maxFontSize: null,
        minFontSize: 8,
        step: 1
    }, options);

    return this.each(function() {

        var innerElements = $(this).children(':visible'),
            fontSize = options.maxFontSize || innerElements.css("font-size"), // use current font-size by default
            maxHeight = $(this).height(),
            maxWidth = $(this).width(),
            innerHeight,
            innerWidth;

        do {

            innerElements.css('font-size', fontSize);

            // use the combined height of all children, eg. multiple <p> elements.
            innerHeight = $.map(innerElements, function(e) {
                return $(e).outerHeight();
            }).reduce(function(p, c) {
                return p + c;
            }, 0) + 270;

            innerWidth = innerElements.outerWidth(); // assumes that all inner elements have the same width
            fontSize = fontSize - options.step;

        } while ((innerHeight > maxHeight || innerWidth > maxWidth) && fontSize > options.minFontSize);

    });

};

})(jQuery);
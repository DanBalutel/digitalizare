;
var masonry_gallery = {
	init: function() {
		$('.grid').isotope({
			itemSelector: '.grid-item'
		});
	}
};
(function($) {
	;
    masonry_gallery.init();
})(jQuery);
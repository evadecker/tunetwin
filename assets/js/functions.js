$("#ham").on('click', function(){
	console.log('Clicked');
	$("#sidebar").toggleClass("isOpen");
	$("#content").toggleClass("isOpen");
});

(function ($) {
	'use strict';
	var $body	= $('html, body'),
	content = $('#main').smoothState({
			prefetch: true,
			pageCacheSize: 4,
			onStart : {
				duration: 250,
				render: function () {
					content.toggleAnimationClass('is-exiting');
					$body.animate({
						scrollTop: 0
        			});
				}
			}
		}).data('smoothState'); // makes public methods available
})(jQuery);
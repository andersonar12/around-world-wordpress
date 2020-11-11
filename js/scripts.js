(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$('.blocks-gallery-item a').each(function (index, element) {
			 $(this).attr({'data-lightbox':'galeria'});
		});

		if (document.querySelector(".single-tour")) {
			$("#menu-item-25").addClass('current_page_item');
		}

		if (document.querySelector(".single-post")) {
			$("#menu-item-21").addClass('current_page_item')
		}
		
		$('ul.slider').bxSlider();
	});
	
})(jQuery, this);
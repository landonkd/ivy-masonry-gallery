
jQuery(document).ready(function(){
	jQuery('.gallery-icon a').addClass('gallery-image');
	
	jQuery('.gallery-image').featherlightGallery({
		gallery: {
			fadeIn: 300,
			fadeOut: 300
		},
		openSpeed:    300,
		closeSpeed:   300
	});
});

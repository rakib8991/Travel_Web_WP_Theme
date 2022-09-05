(function( root, $, undefined ) {
	"use strict";

	// Magnific Popup Plugin 
	$(function () {
		$('.gallery').magnificPopup({
			type:'image',
			delegate: '.gallery-item .gallery-icon.landscape a',
			gallery: {
				enabled: true
			}
		});
		// Owl Carousel
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			dots: false,
			autoplay:true,
			autoplayTimeout:5000,
			autoplayHoverPause:false,
			navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});

		// var owllHeight = jQuery(".owl-carousel").height()/2;
		// var nextPrevHeight = jQuery(".owl-next").height();
		// var totalHeight = owllHeight-nextPrevHeight;
		// 	if(1 < 2){
		// 	jQuery(".owl-prev").css({"top" : totalHeight+'px'});
		// 	jQuery(".owl-next").css({"top" : totalHeight+'px'});
		// 	}
	
		jQuery(window).resize(function(){
			var owllHeight = jQuery(".owl-carousel").height()/2;
			var nextPrevHeight = jQuery(".owl-next").height();
			var totalHeight = owllHeight-nextPrevHeight;
			console.log(totalHeight);
				if(1 < 2){
				jQuery(".owl-prev").css({"top" : totalHeight+'px'});
				jQuery(".owl-next").css({"top" : totalHeight+'px'});
			}
		});

	});
	

} ( this, jQuery ));

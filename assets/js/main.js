// Header Fixed Class add/remove on scroll
jQuery(document).on('scroll',function(){
	var scrollTop = jQuery(this).scrollTop();
	var header = jQuery('.site-header');
	var header_height = header.outerHeight(true);

	if( scrollTop >= parseInt( header_height + 70 ) ){
		header.addClass('fixed');
	}else{
		header.removeClass('fixed');
	}
});
//Hero Slider Init
jQuery('.hero-slider').slick({
    arrows: true,
    dots: true,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
    autoplay: true,
    autoplaySpeed: 3000,
	responsive:[
		{
			breakpoint: 992,
			settings: {
				arrows: false,
				dots: false
			}
		},
		{
		  breakpoint: 480,
		  settings: {
			  arrows: false,
			  dots: false
		  }
		}
	]
});
//Testimonial Slider init
jQuery('section.testimonials .testimonials-wrapper').slick({
    arrows: true,
    dots: false,
    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
    autoplay: true,
    autoplaySpeed: 3000,
});
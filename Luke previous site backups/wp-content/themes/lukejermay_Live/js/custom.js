/**
 *
 * File custom.js.
 *
 */

jQuery(document).ready(function ($) {
		
/*	var homeTitle = new CircleType(document.getElementById('arc-title'))
		.dir(-1)
		.radius(180);
	$(homeTitle.element).fitText(1.2, { minFontSize: '25px', maxFontSize: '60px' });
	*/
	
	AOS.init();
	
	/*$("#ban_bg").paroller({ factor: 0.45, factorXs: 0.25, factorSm: 0.45, }); 	*/
	$("#ban_one").paroller({ factor: 0.5, factorXs: 0.2, factorSm: 0.3, type: 'foreground', direction: 'horizontal' }); 
	$("#ban_two").paroller({ factor: 0.5, factorXs: 0.2, factorSm: 0.3, type: 'foreground' }); 
	$("#ban_three").paroller({ factor: -0.5, factorXs: -0.2, factorSm: -0.3, type: 'foreground', direction: 'horizontal' }); 
	
	/*$("#trail_bg").paroller({ factor: 0.3, factorXs: 0.25, factorSm: 0.45, }); */		
	$("#trail_one").paroller({ factor: 0.5, factorXs: 0.2, factorSm: 0.3, type: 'foreground' }); 
	$("#trail_two").paroller({ factor: 0.5, factorXs: 0.2, factorSm: 0.3, type: 'foreground' }); 
	
	/*$("#show_bg_one").paroller({ factor: 0.3, factorXs: 0.25, factorSm: 0.45, }); 	
	$("#show_bg_two").paroller({ factor: 0.3, factorXs: 0.25, factorSm: 0.45, }); 	*/
	$("#show_one").paroller({ factor: 0.5, factorXs: 0.2, factorSm: 0.3, type: 'foreground' }); 
	
	$("#split_img_bg_one").paroller({ factor: 0.1, factorXs: 0.025, factorSm: 0.05, type: 'foreground' }); 
	$("#split_img_bg_two").paroller({ factor: 0.2, factorXs: 0.05, factorSm: 0.1, type: 'foreground' });
		
	
	$("#experience_bg_one").paroller({ factor: -0.5, factorXs: -0.2, factorSm: -0.3, type: 'foreground', direction: 'horizontal' }); 
	$("#experience_one").paroller({ factor: -0.5, factorXs: -0.2, factorSm: -0.3, type: 'foreground' }); 
	
	$("#venue_one").paroller({ factor: -0.5, factorXs: -0.2, factorSm: -0.3, type: 'foreground' }); 
	
	$("#testimonial_one").paroller({ factor: -0.5, factorXs: -0.2, factorSm: -0.3, type: 'foreground' }); 
	$("#testimonial_two").paroller({ factor: -0.5, factorXs: -0.2, factorSm: -0.3, type: 'foreground' }); 
	$("#testimonial_bg_one").paroller({ factor: 0.3, factorXs: 0.1, factorSm: 0.2, type: 'foreground' }); 
	$("#testimonial_bg_two").paroller({ factor: 0.2, factorXs: 0.66, factorSm: 0.13334, type: 'foreground' });
	
	
});
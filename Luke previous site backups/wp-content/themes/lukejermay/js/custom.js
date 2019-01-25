/**
 *
 * File custom.js.
 *
 */

function revealVideo(div, video_id) {
	var video = document.getElementById(video_id).src;
	document.getElementById(video_id).src = video+'?autoplay=1';
	document.getElementById(div).style.height = '100%';
	document.getElementById(div).style.opacity = '1';
	document.getElementById(div).style.visibility = 'visible';
}

function hideVideo(div, video_id) {
	var video = document.getElementById(video_id).src;
	var cleaned = video.replace('?autoplay=1','');;
	document.getElementById(video_id).src = cleaned;
	document.getElementById(div).style.height = '0';
	document.getElementById(div).style.opacity = '0';
	document.getElementById(div).style.visibility = 'hidden';
}

var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});
var pSpeed = "30%";

new ScrollMagic.Scene({triggerElement: "#masthead"})
	.setTween("#ban_bg", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#trailer"})
	.setTween("#trail_bg_one", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#trailer"})
	.setTween("#trail_bg_two", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#show"})
	.setTween("#show_bg_one", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#show"})
	.setTween("#show_bg_two", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#reviews"})
	.setTween("#reviews_bg", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#experience"})
	.setTween("#experience_bg", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#venue"})
	.setTween("#venue_bg", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#testimonial"})
	.setTween("#testimonial_bg", {y: pSpeed, ease: Linear.easeNone})
	.addTo(controller);

jQuery(document).ready(function ($) {
	
	AOS.init({
		offset: 40,
  		delay: 200,
		duration: 2000,
	});
	
	$("header.section, section#show, section#split-img, section#venue, section#testimonial").css({ height: $(window).innerHeight() + 'px' });
	$(window).resize(function() {
		$("header.section, section#show, section#split-img, section#venue, section#testimonial").css({ height: $(window).innerHeight() + 'px' });
	});
	
	$(window).scroll(function(){			
		$('#split_img_bg_one').css('transform', 'translateY('+ $(this).scrollTop() / 6  +'px)');
		$('#split_img_bg_two').css('transform', 'translateY(-'+ $(this).scrollTop() / 6  +'px)');
		/*$('#ban_bg').css('transform', 'translate(-50.15%,-'+ $(this).scrollTop() / 7  +'px)');
		$('#trail_bg_one').css('transform', 'translateY('+ $(this).scrollTop() / 10  +'px)');
		$('#trail_bg_two').css('transform', 'translateY(-'+ $(this).scrollTop() / 10  +'px)');
		$('#reviews_bg').css('transform', 'translateY(-'+ $(this).scrollTop() / 10  +'px)');
		$('#venue_bg').css('transform', 'translateY(-'+ $(this).scrollTop() / 10  +'px)');*/
    return false;     
    }).scroll();
		
	var rules_slider = $( '.ln_slidr' );
	var rev_slider = $('#rev_slider');
	
	rules_slider.slick({
		autoplay:			true,
		slidesToShow:		1,
		slidesToScroll:		1,
		dots:				false,
		vertical:			true,
		arrows:				false,
		speed:				450,
		autoplaySpeed:		5000,
		initialSlide:		0,
		infinte:			false,
	});
	
	
	rev_slider.slick({
		infinite:			true,
		autoplay:			true,
		slidesToShow:		1,
		slidesToScroll:		1,
		dots:				false,
		arrows: 			true,
        prevArrow:			"<button type='button' class='slick-prev pull-left'><svg width='59px' height='24px' viewBox='0 0 59 24' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'><g id='Home' transform='translate(-345.000000, -6363.000000)' stroke='#FFFFFF' stroke-width='2'><g id='Gallery-Arrow' transform='translate(373.500000, 6375.500000) rotate(-270.000000) translate(-373.500000, -6375.500000) translate(361.000000, 6346.000000)'><path d='M12.0028076,12 L12.0028076,46' id='Path-3'></path><circle id='Oval' cx='12' cy='6' r='6'></circle><path d='M19.5208153,39.9350288 L5.93502884,53.5208153 L19.5208153,53.5208153 L19.5208153,39.9350288 Z' id='Rectangle-8' transform='translate(12.020815, 46.020815) rotate(-315.000000) translate(-12.020815, -46.020815) '></path></g></g></g></svg></button>",
		nextArrow:			"<button type='button' class='slick-next pull-right'><svg width='59px' height='24px' viewBox='0 0 59 24' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'><g id='Home' transform='translate(-1060.000000, -6377.000000)' stroke='#FFFFFF' stroke-width='2'><g id='Gallery-Arrow' transform='translate(1090.500000, 6388.500000) rotate(-90.000000) translate(-1090.500000, -6388.500000) translate(1078.000000, 6359.000000)'><path d='M12.0028076,12 L12.0028076,46' id='Path-3'></path><circle id='Oval' cx='12' cy='6' r='6'></circle><path d='M19.5208153,39.9350288 L5.93502884,53.5208153 L19.5208153,53.5208153 L19.5208153,39.9350288 Z' id='Rectangle-8' transform='translate(12.020815, 46.020815) rotate(-315.000000) translate(-12.020815, -46.020815) '></path></g></g></g></svg></button>",
		speed:				450,
		autoplaySpeed:		5000,
	});
	
	$('.line_slider .line-slide').click( function() {
		var page = $(this).data('page');
		rules_slider.slick('slickGoTo', (page - 1));
	 });
	
	$('#r_one').addClass('current-ln');	
	rules_slider.on('afterChange', function(){
		
		if ( $('.rule.r_three').hasClass('slick-current') ) {
			$('#r_three').addClass('current-ln');			
		}
		
		if ( $('.rule.r_two').hasClass('slick-current') ) {
			$('#r_two').addClass('current-ln');		
		}
		
		if ( $('.rule.r_one').hasClass('slick-current') ) {
			$('#r_one').addClass('current-ln');		
		}
		
		
		setTimeout(function() {
			if ( $('#r_three').hasClass('current-ln') && $('#r_two').hasClass('current-ln') && $('#r_one').hasClass('current-ln') ) {
				$('#r_one').removeClass('current-ln');		
				$('#r_two').removeClass('current-ln');		
				$('#r_three').removeClass('current-ln');		
			}
		},5000);
		
	});
	
		
		
	$(document).on('click','.play-trailer',function(e){
		e.preventDefault();
	 	return false;
	});

	
    jQuery(".question a").on("click", function (e) {
        e.preventDefault();
        jQuery(this).toggleClass("open");
        jQuery(".question a").not(this).removeClass("open").addClass("closed");
        var href = jQuery(this).attr('href');
        jQuery(href).toggleClass("active");
        jQuery(".answer").not(href).removeClass("active"); 
        
        jQuery('html, body').stop().animate({
            scrollTop: jQuery( jQuery(this).attr('href') ).offset().top - 250
        }, 1000);
        
    });
	
	$('.disabled-button').click(function( event ) {
		event.preventDefault();
	});
	
});
	

	
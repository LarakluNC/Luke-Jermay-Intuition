/**
 *
 * File custom-page.js.
 *
 */


jQuery(document).ready(function ($) {
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
	
});
	

// new WOW().init();
// 

// var $ = jQuery;

// jQuery.noConflict();
 
$(document).ready(function() {

    jQuery('#topNav').localScroll({
        duration: 1000,
        margin: true
    });
});

jQuery(function($){

    //#main-slider
    var slideHeight = $(window).height();
    $('.cb-slideshow').css('height',slideHeight);
    // $('.cb-slideshow li span').css('height',slideHeight);

    $(window).resize(function(){'use strict',
        $('.cb-slideshow').css('height',slideHeight);
        // $('.cb-slideshow li span').css('height',slideHeight);
    });

    /*============================================
	Navigation Functions
	==============================================*/
	if ($(window).scrollTop() <= 160){
		$('#topNav').removeClass('navbar-fixed-top scrolled');
	}
	else{
		$('#topNav').addClass('navbar-fixed-top scrolled');    
	}

	// console.log($(window).scrollTop());

	$(window).scroll(function(){
		if ($(window).scrollTop() <= 160){
			$('#topNav').removeClass('navbar-fixed-top scrolled');
		}
		else{
			$('#topNav').addClass('navbar-fixed-top scrolled');    
		}

		// console.log($(window).scrollTop() + "sdfsdfsd");
	});

	// _wrotate();
    
});
/*
Template Name: SumonCV
Template URI: https://mdsumonmia.com/
Description: Md Sumon Mia Portfolio
Author: Md Sumon Mia
Author URL: https://mdsumonmia.com/
Version: 1.0.0
*/

/*================================================
 [  Table of contents  ]
 ================================================
 :: Preloader
 :: Site Header
 :: Page loader
 :: Typing Text
 :: Text rotation
 :: Counter - Fun Fact
 :: Testenomials
 :: Clients
 :: Portfolio Filter
 :: LightBox
 :: AJAX Contact Form
 :: Google Map
 :: WOW Animation
 ======================================
 [ End table content ]
 ======================================*/

jQuery(document).ready(function () {
    "use strict";

    /*======================================
     Site Header
     ======================================*/
     jQuery('#header-main-menu li a, .home-buttons a').on("click", function (e) {
        if (jQuery(e.target).is('.header-main-menu a, .home-buttons a')) {
            jQuery('.header-main-menu li a').removeClass('active');
            jQuery(this).addClass('active');
            jQuery(".sub-page").hide();
            if (location.pathname.replace(/^\//, '') == e.target.pathname.replace(/^\//, '') && location.hostname == e.target.hostname) {
                var target = jQuery(e.target.hash);
                target = target.length ? target : jQuery('[name=' + e.target.hash.slice(1) + ']');
                if (target.length) {
                    var gap = 0;
                    jQuery(e.target.hash, 'html', 'body').animate({
                        opacity: 'show',
                        duration: "slow",
                        scrollTop: target.offset().top - gap
                    });
                }
            }
            if (jQuery(e.target).is('.home-buttons a')) {
                jQuery("#header-main-menu li a[href='#contact']").addClass('active');
            }
        }
    });


    /*************************
     Responsive Menu
     *************************/
    jQuery('.responsive-icon').on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        if (!jQuery(this).hasClass('active')) {
            jQuery(this).addClass('active');
            jQuery('.header').animate({'margin-left': 285}, 300);
        } else {
            jQuery(this).removeClass('active');
            jQuery('.header').animate({'margin-left': 0}, 300);
        }
        return false;
    });

    jQuery('.header a').on("click", function (e) {
        jQuery('.responsive-icon').removeClass('active');
        jQuery('.header').animate({'margin-left': 0}, 300);

    });
    /*======================================
     Typing Text
     ======================================*/
    jQuery(".typed").typed({
        stringsElement: jQuery('.typed-strings'),
        typeSpeed: 20,
        backDelay: 500,
        loop: true,
        autoplay: true,
        autoplayTimeout: 500,
        contentType: 'html',
        loopCount: true,
        resetCallback: function () {
            newTyped();
        }
    });


    /*======================================
     Text rotation
     ======================================*/
    jQuery('.text-rotation').owlCarousel({
        dots: !1,
        nav: !1,
        margin: 0,
        items: 1,
        autoplay: true,
        autoplayHoverPause: !1,
        autoplayTimeout: 1000,
        loop: true,
        animateOut: 'zoomOut',
        animateIn: 'zoomIn'
    });

    /*======================================
     water ripples
     ======================================*/
	$('#ripple').ripples({
		imageUrl: null,
		resolution: 512,
		dropRadious: 10,
		perturbance: 0.02,
		interactive: true,
		crossOrigin: ''
    });


    /*======================================
     Counter - Fun Fact
     ======================================*/
    jQuery('.counter-block-value').each(function () {
        var $this = jQuery(this),
                countTo = $this.attr('data-count');
        jQuery({countNum: $this.text()}).animate({
            countNum: countTo
        },
        {
            duration: 8000,
            easing: 'linear',
            step: function () {
                $this.text(Math.floor(this.countNum));
            },
            complete: function () {
                $this.text(this.countNum);
            }
        });
    });


    /*======================================
     Testenomials
     ======================================*/
    jQuery('.testimonials').owlCarousel({
        navigation: false,
        pagination: false,
        autoPlay: true,
        items: 2,
        loop: !1,
        dots: true,
        margin: 25,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 2
            }
        }
    });


    /*======================================
     Clients
     ======================================*/
    jQuery('.clients').owlCarousel({
        navigation: false,
        pagination: false,
        dots: false,
        loop: true,
//        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        margin: 10,
        autoHeight: !1,
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    });


    /*======================================
     Portfolio Filter
     ======================================*/
    jQuery(function () {
        var selectedClass = "";
        jQuery(".filter-tabs").find('button:first-child').addClass('active-filter');
        jQuery(".fil-cat").click(function () {
            jQuery(".filter-tabs").find('button').removeClass('active-filter');
            jQuery(this).addClass('active-filter');
            selectedClass = jQuery(this).attr("data-rel");
            jQuery("#portfolio-page").fadeTo(100, 0.1);
            jQuery("#portfolio-page .portfolio-item").not("." + selectedClass).fadeOut().removeClass('portfolio-item');
            setTimeout(function () {
                jQuery("." + selectedClass).fadeIn().addClass('portfolio-item');
                jQuery("#portfolio-page").fadeTo(300, 1);
            }, 300);

        });
    });


    /*======================================
     LightBox
     ======================================*/
    jQuery('[data-rel^=lightcase]').lightcase({
        maxWidth: 1100,
        maxHeight: 800
    });


    /*======================================
     WOW Animation
     ======================================*/
    new WOW().init();
    /*======================================
     Preloader
     ======================================*/
    jQuery('#preloader').fadeOut('slow', function () {
        jQuery(this).remove();
    });
});

/*======================================
     AJAX Contact Form
     ======================================*/

function getname() {
    document.getElementById("get-name").innerHTML = document.getElementById("name").value;
  }
  
  (function (jQuery) {
    'use strict';
  
    var form = jQuery('.contact__form'),
        message = jQuery('.contact__msg'),
        form_data;
  
    // Success function
    function done_func(response) {
        message.fadeIn().removeClass('alert-danger').addClass('alert-success');
        message.text(response);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
        form.find('input:not([type="submit"]), textarea').val('');
    }
  
    // fail function
    function fail_func(data) {
        message.fadeIn().removeClass('alert-success').addClass('alert-success');
        message.text(data.responseText);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
    }
    
    form.submit(function (e) {
        e.preventDefault();
        form_data = jQuery(this).serialize();
        jQuery.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data
        })
        .done(done_func)
        .fail(fail_func);
    });
    
  })(jQuery);
/*-----------------------------------------------------------------------------------

    Theme Name: Amava - Startup Agency and SasS Business Template
    Description: Startup Agency and SasS Business Template
    Author: Chitrakoot Web
    Version: 2.1

    ---------------------------------- */

(function ($) {
    "use strict";
    var $window = $(window);
    /*$.scrollIt({
        upKey: 38,
        downKey: 40,
        easing: 'swing',
        scrollTime: 600,
        activeClass: 'active',
        onPageChange: null,
        topOffset: -70
    });*/
    $('#preloader').fadeOut('normall', function () {
        $(this).remove();
    });
    if ($window.width() <= 991) {
        $('.onepage-header .navbar-nav .nav-link').on("click", function () {
            $('.navbar-nav').css("display", "none");
            $('.navbar .navbar-toggler').removeClass('menu-opened');
        });
    }
    $window.on('scroll', function () {
        if ($(this).scrollTop() > 500) {
            $(".scroll-to-top").fadeIn(400);
        } else {
            $(".scroll-to-top").fadeOut(400);
        }
    });
    $(".scroll-to-top").on('click', function (event) {
        event.preventDefault();
        $("html, body").animate({scrollTop: 0}, 600);
    });
    var wow = new WOW({boxClass: 'wow', animateClass: 'animated', offset: 0, mobile: false, live: true});
    wow.init();
    var pageSection = $(".parallax,.bg-img");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
    $('.story-video').magnificPopup({delegate: '.video', type: 'iframe'});
    $("#tab1").click(function () {
        $("#second, #third").fadeOut();
        $("#first").fadeIn(1000);
    });
    $("#tab2").click(function () {
        $("#first, #third").fadeOut();
        $("#second").fadeIn(1000);
    });
    $("#tab3").click(function () {
        $("#second, #first").fadeOut();
        $("#third").fadeIn(1000);
    });
    $window.resize(function (event) {
        setTimeout(function () {
            SetResizeContent();
        }, 500);
        event.preventDefault();
    });

    function fullScreenHeight() {
        var element = $(".full-screen");
        var $minheight = $window.height();
        element.css('min-height', $minheight);
    }

    function ScreenFixedHeight() {
        var $headerHeight = $("header").height();
        var element = $(".screen-height");
        var $screenheight = $window.height() - $headerHeight;
        element.css('height', $screenheight);
    }

    function SetResizeContent() {
        fullScreenHeight();
        ScreenFixedHeight();
    }

    SetResizeContent();
    $(document).on("ready", function () {
        $('#values-carousel').owlCarousel({
            loop: true,
            responsiveClass: true,
            autoplay: true,
            smartSpeed: 1000,
            nav: false,
            dots: true,
            center: true,
            margin: 0,
            responsive: {0: {items: 1}, 768: {items: 1}, 992: {items: 1}}
        });
        $(".app_screenshots_slides").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            margin: 30,
            center: true,
            dots: true,
            responsive: {0: {items: 1}, 576: {items: 2}, 768: {items: 3}, 992: {items: 4}, 1200: {items: 5}}
        });
        $('.testmonial-carousel').owlCarousel({
            loop: true,
            responsiveClass: true,
            autoplay: true,
            smartSpeed: 800,
            nav: true,
            dots: false,
            center: true,
            margin: 0,
            navText: ["<span>&#10229;</span>", "<span>&#10230;</span>"],
            responsive: {0: {items: 1}, 768: {items: 1}, 992: {items: 1}}
        });
        $('.testmonial-style2').owlCarousel({
            loop: true,
            responsiveClass: true,
            autoplay: true,
            smartSpeed: 800,
            nav: true,
            dots: true,
            center: false,
            margin: 0,
            navText: ["<i class='ti-arrow-left'></i>", "<i class='ti-arrow-right'></i>"],
            responsive: {0: {items: 1, dots: false}, 768: {items: 1}, 992: {items: 1}}
        });
        $('.testmonial-style3').owlCarousel({
            loop: true,
            responsiveClass: true,
            autoplay: true,
            smartSpeed: 800,
            nav: false,
            dots: false,
            center: false,
            margin: 0,
            responsive: {0: {items: 1}, 768: {items: 2}, 992: {items: 3}}
        });
        $('#screenshort-carousel').owlCarousel({
            loop: true,
            responsiveClass: true,
            autoplay: true,
            smartSpeed: 800,
            nav: false,
            dots: true,
            center: true,
            margin: 20,
            responsive: {0: {items: 2}, 768: {items: 3}, 992: {items: 5}}
        });
        $('#clients').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            responsiveClass: true,
            autoplayHoverPause: false,
            responsive: {
                0: {items: 2, margin: 20},
                768: {items: 3, margin: 40,},
                992: {items: 4, margin: 60,},
                1200: {items: 5, margin: 80,}
            }
        });
        $('#carousel-style2').owlCarousel({
            loop: true,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            nav: false,
            dots: false,
            center: false,
            margin: 0,
            responsive: {0: {items: 1}, 768: {items: 2}, 992: {items: 2}, 1200: {items: 3}, 1600: {items: 4}}
        });
        $('.owl-carousel').owlCarousel({items: 1, loop: true, dots: false, margin: 0, autoplay: true, smartSpeed: 500});
        if ($(".horizontaltab").length !== 0) {
            $('.horizontaltab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                tabidentify: 'hor_1',
                activate: function (event) {
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        }
        if ($(".childverticaltab").length !== 0) {
            $('.childverticaltab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                tabidentify: 'ver_1',
                activetab_bg: '#fff',
                inactive_bg: '#F5F5F5',
                active_border_color: '#c1c1c1',
                active_content_border_color: '#c1c1c1'
            });
        }
        if ($(".verticaltab").length !== 0) {
            $('.verticaltab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                closed: 'accordion',
                tabidentify: 'hor_1',
                activate: function (event) {
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        }
        $('.countup').counterUp({delay: 25, time: 2000});
        $(".slow-redirect a[href^='#']").click(function (e) {
            e.preventDefault();
            var position = $($(this).attr("href")).offset().top - 85;
            $("body, html").animate({scrollTop: position}, 1000);
        });});
    $window.on("load", function () {
        $('#back').css({'background-image':"url('public/img/FAQ/sms.png')",
            'background-repeat':'no-repeat',
            'background-size':'cover'});

        $('.gallery').magnificPopup({delegate: '.popimg', type: 'image', gallery: {enabled: true}});
        var $gallery = $('.gallery').isotope({filter: ".design"});
        $('.filtering').on('click', 'span', function () {
            let random =Math.floor(Math.random()*16777215).toString(16);
            // $('#back').delay(20000).css("background-color","#"+random);
            var filterValue = $(this).delay(20000).attr('data-filter');

            if(filterValue === ".design")
            {
                $('#back').css({'background-image':"url('public/img/FAQ/sms.png')",
                    'background-repeat':'no-repeat',
                    'background-size':'cover'});
            }

            if(filterValue === ".develop")
            {
                $('#back').css({'background-image':"url('public/img/FAQ/pay.png')",
                    'background-repeat':'no-repeat',
                    'background-size':'cover'});
            }

            if(filterValue === ".ussd")
            {
                $('#back').css({'background-image':"url('public/img/FAQ/ussd.png')",
                    'background-repeat':'no-repeat',
                    'background-size':'cover'});
            }

            if(filterValue === ".short_number")
            {
                $('#back').css({'background-image':"url('public/img/FAQ/sc.png')",
                    'background-repeat':'no-repeat',
                    'background-size':'cover'});
            }

            if(filterValue === ".sva")
            {
                $('#back').css({'background-image':"url('http://nxh.cm/zSl')",
                    'background-repeat':'no-repeat',
                    'background-size':'cover'});
            }


            $gallery.isotope({filter: filterValue});
        });
        $('.filtering').on('click', 'span', function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
        $window.stellar();
        $(".tabs_div").toggleClass("tabs_div_visible");
    });
})(jQuery);

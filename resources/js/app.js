
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

$(document).ready(function () {
    var menuScrool = false;

    $('.navbar-toggler-right, .navbar-toggler-left, .nav-block .glp-close, .nav-link').on("click", function() {
        $(".nav-block").toggleClass("show_menu");

        if (!menuScrool) {
            $("body").css("-webkit-overflow-scrolling", "touch");
            $("body").addClass("overflow-scrolls");

            menuScrool = true;
        } else {
            $("body").css("-webkit-overflow-scrolling", "auto");
            $("body").removeClass("overflow-scrolls");

            menuScrool = false;
        }
    });

    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        let id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body, html').animate({
            scrollTop: top
        }, 3500);
    });

    $("body").on("click", ".nav-link", function (event) {
        event.preventDefault();

        let id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body, html').animate({
            scrollTop: top
        }, 3500);
    });

    $(document).on('click', '.btn-more, .btn-less', function(){
        if ( $(this).parent().find('.content').is( ":hidden" ) ) {
            $( ".content" ).slideDown( "1000" );
            $(this).parent().find( ".btn-more" ).css( "display", "none" );
        } else {
            $( ".content" ).slideUp( "1000" );
            $(this).parent().find( ".btn-less" ).css( "display", "block" );
        }
    });

    $('.all-slide').html($('.carousel .carousel-item').length);
    $('.carousel').carousel({
        ride: true,
        interval: 1200
    }).on('slide.bs.carousel', function (e) {
        $('.active-slide').html($(e.relatedTarget).index() + 1);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#upTop').fadeIn();
        } else {
            $('#upTop').fadeOut();
        }
    });

    $('#upTop').click(function() {
        $('html, body').animate({
            scrollTop : 0
        },800);

        return false;
    });
});

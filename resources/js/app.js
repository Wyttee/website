
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

$(document).ready(function() {
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

    $("body").on("click", ".nav-link", function (event) {
        event.preventDefault();
        let id  = $(this).attr('href'),
            top = $(id).offset().top;

        $('body,html').animate({
            scrollTop: top
        }, 3500);
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

    $(document).on('click', '.btn-more, .btn-less', function () {
        if ($(this).parent().find('.content').is(":hidden")) {
            $(".content").slideDown("1000");
            $(this).parent().find(".btn-more").css("display", "none");
        } else {
            $(".content").slideUp("1000");
            $(this).parent().find(".btn-less").css("display", "block");
        }
    });
});

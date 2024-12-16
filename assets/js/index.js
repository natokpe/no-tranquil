import $     from 'jquery';
import tippy from 'tippy.js';
import Swiper from 'swiper';
import { EffectFade, Navigation, Pagination, Autoplay } from 'swiper/modules';
// import detectScroll from '@egstad/detect-scroll';

$(document).ready(function() {
    "use strict";

    const mobileNavOpenClass    = 'mobile-nav-open';
    const splashscreenOpenClass = 'splashscreen';
    const pageScrollClass       = 'page-scroll';
    const pageScrollx100Class   = 'page-scroll-x100';
    const pageScrollDownClass   = 'page-scroll-down';

    // var postEncodeURIComponent = function (s) {
    //     s = encodeURIComponent(s);
    //     return s.replace(/%20/g,"+");
    // };

    tippy('[data-tippy-content]', {
        arrow: false,
        zIndex: 10000000
    });

    var swiper = new Swiper(".mySwiper", {
        spaceBetween : 0,
        effect       : "fade",
        loop         : true,
        autoplay     : {
            delay : 5000
        },
        // fadeEffect   : {},
        grabCursor   : true,
        loop         : true,
        modules      : [
            EffectFade,
            Navigation,
            Pagination,
            Autoplay
        ],

        navigation   : {
            nextEl : ".swiper-button-next",
            prevEl : ".swiper-button-prev",
        },

        pagination   : {
            el        : ".swiper-pagination",
            clickable : true,
        },
    });

    $(".back-to-top").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            window.scrollTop = 0;
        });
    });

    var transformNavbar = function () {
        let $scr = $(window).scrollTop();
        if ($scr > 100) {
            $('body').addClass(pageScrollClass);
        } else {
            $('body').removeClass(pageScrollClass);
        }

        if ($scr > 99) {
            $('body').addClass(pageScrollx100Class);
        } else {
            $('body').removeClass(pageScrollx100Class);
        }
    };

    transformNavbar();

    $(window).on('scroll', function(e) {
        transformNavbar();
    });

    $(".navbar .mobile-nav-toggle").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            $('body').toggleClass(mobileNavOpenClass);
        });
    });

    $(".mobile-nav-close").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            $('body').removeClass(mobileNavOpenClass);
        });
    });

    // $("body").on('click', function (e) {
    //     if ($('body').hasClass(searchBarOpenClass)) {
    //         var navSearch = $(".navbar-search .navbar-search-form, .navbar .nav-search-toggle");

    //         if (! navSearch.is(e.target)
    //             && navSearch.has(e.target).length === 0 ) {
    //             $('body').removeClass(searchBarOpenClass);
    //         }
    //     }
    // });

    $('body').removeClass(splashscreenOpenClass);
});

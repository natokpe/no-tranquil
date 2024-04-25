import $     from 'jquery';
import tippy from 'tippy.js';
import Swiper from 'swiper';
import { EffectFade, Navigation, Pagination, Autoplay } from 'swiper/modules';
// import detectScroll from '@egstad/detect-scroll';

$(document).ready(function() {
    "use strict";

    const searchBarOpenClass    = 'searchbar-open';
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

    $(".backtotop").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            e.preventDefault();
            $(window).scrollTop = 0;
        });
    });

    var transformNavbar = function () {
        let $scr = $(window).scrollTop();
        if ($scr > 0) {
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

    $(".searchbar-close").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            $('body').removeClass(searchBarOpenClass);
        });
    });

    $(".navbar .searchbar-toggle").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            $('body').toggleClass(searchBarOpenClass);
        });
    });

    // $(".navbar .nav-search-toggle").each(function (i, e)
    // {
    //     $(this).on('click', function (e)
    //     {
    //         $('body').toggleClass(searchBarOpenClass);
    //         console.log($(".navbar-search").children(".search-bar"));//.trigger("focus");
    //     });
    // });

    // $("body").on('click', function (e) {
    //     if ($('body').hasClass(searchBarOpenClass)) {
    //         var navSearch = $(".navbar-search .navbar-search-form, .navbar .nav-search-toggle");

    //         if (! navSearch.is(e.target)
    //             && navSearch.has(e.target).length === 0 ) {
    //             $('body').removeClass(searchBarOpenClass);
    //         }
    //     }
    // });

    // $(".navbar-search .navbar-search-form .search-bar").each(function (i, e)
    // {
    //     var fld = $(this);
    //     var srh = fld.siblings("button[type=submit]");
    //     var ico = srh.children(".fi");

    //     fld.on('change keypress keyup', function (e)
    //     {
    //         if (fld.val().toString().length > 0) {
    //             ico.removeClass("fi-rs-search").addClass("fi-rs-cross");
    //         } else {
    //             ico.removeClass("fi-rs-cross").addClass("fi-rs-search");
    //         }
    //     });

    //     srh.on("click", function (e) {
    //         e.preventDefault();

    //         if (ico.hasClass("fi-rs-cross")) {
    //             fld.val("");
    //             ico.removeClass("fi-rs-cross").addClass("fi-rs-search");
    //             fld.trigger("focus");

    //             return false;
    //         }

    //         return true;
    //     });
    // });

    $('body').removeClass(splashscreenOpenClass);
});

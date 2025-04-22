import $ from 'jquery';
// import detectScroll from '@egstad/detect-scroll';

$(document).ready(function() {
    "use strict";

    const mobileNavOpenClass    = 'mobile-nav-open';
    const pageScrollClass       = 'page-scroll';
    const pageScrollx100Class   = 'page-scroll-x100';
    const pageScrollDownClass   = 'page-scroll-down';

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

    $(".mobile-nav .menu-list > .menu-item.menu-item-has-children").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            $(this).siblings('.children-open')
            .removeClass('children-open');

            $(this).toggleClass('children-open');
        });

    });

    $(".navbar .menu-list > .menu-item.menu-item-has-children").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            $(this).siblings('.children-open')
            .removeClass('children-open');

            $(this).toggleClass('children-open');
        });

    });

    $("body").on('click', function (e) {
        if (! $(".navbar .menu-item.menu-item-has-children").is(e.target)
            && $(".navbar .menu-item.menu-item-has-children")
            .has(e.target).length === 0 )
        {
            $(".navbar .menu-list > .menu-item.menu-item-has-children")
            .removeClass('children-open');
        }
    });

    $("body").on('click', function (e) {
        if ((! $(".navbar .mobile-nav-toggle").is(e.target)
                    && $(".navbar .mobile-nav-toggle").has(e.target).length === 0)
            && (! $(".mobile-nav").is(e.target)
                && $(".mobile-nav").has(e.target).length === 0)
            )
        {
            $('body').removeClass(mobileNavOpenClass);
        }
    });
});

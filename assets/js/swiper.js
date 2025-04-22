import $                                                from 'jquery';
import Swiper                                           from 'swiper';
import { EffectFade, Navigation, Pagination, Autoplay } from 'swiper/modules';

$(document).ready(function() {
    "use strict";

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
});

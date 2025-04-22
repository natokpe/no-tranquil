import $     from 'jquery';
import tippy from 'tippy.js';

$(document).ready(function() {
    "use strict";

    tippy('[data-tippy-content]', {
        arrow: false,
        zIndex: 10000000
    });
});

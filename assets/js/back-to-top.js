import $ from 'jquery';

$(document).ready(function() {
    "use strict";

    $(".back-to-top").each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            $('html, body').animate(
                {scrollTop: 0},
                700 // miliseconds or string ('slow|') 
            );
        });
    });
});

import $ from 'jquery';

$(document).ready(function() {
    "use strict"

    $("a[href='#blocked'], a[href='#!blocked']")
    .each(function (i, e)
    {
        $(this).on('click', function (e)
        {
            e.preventDefault();
            // return false
        })
    })
})

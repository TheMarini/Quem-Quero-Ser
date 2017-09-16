var $colors = ['whitesmoke', '#e54347', '#621e56', '#f3b31b', '#61b1c4', '#2e2d2c'];

$(document).ready(function () {
    var txt = $("#email>input");
    var btn = $("#email>button");

    //Button send form only if txt contains a value (+ the input type email specification)
    $(btn).on('click', function () {
        if (!txt.val()) {
            return false;
        }
    });

    $(txt).on('focusin', function () {
        $(btn).css('background-color', 'cadetblue');
        $(btn).css('cursor', 'pointer');
        $(btn).attr('enabled');

        $(txt).on('focusout', function () {
            $(btn).css('background-color', '');
        });
    });
});

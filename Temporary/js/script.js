$(document).ready(function () {
    var txt = $("input[type=email]");
    var btn = $("input[type=submit]");

    //Button send form only if txt contains a value (+ the input type email specification)
    $(btn).on('click', function () {
        if (!txt.val()) {
            return false;
        }
    });

    //Button bg-color change on txt focus in & out
    $(txt).on('focusin', function () {
        $(btn).css('background-color', 'cadetblue');
        $(btn).css('cursor', 'pointer');
        $(btn).attr('enabled');

        $(txt).on('focusout', function () {
            $(btn).css('background-color', '');
        });
    });
});

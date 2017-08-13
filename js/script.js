var $colors = ['whitesmoke', ' #e54347', '#621e56', '#f3b31b', '#61b1c4', '#2e2d2c'];
var $secoes = [0, 1, 2, 3, 4, 5];
var $secaoAtual;

$(document).ready(function () {
    /* Nav */
    $("#menu li").each(function (index) {
        $(this).css('background-color', $colors[0]);
        $(this).css('color', $colors[index + 1]);
        $(this).css('border-color', $colors[index + 1]);
    });

    /* Video Controls */
    //$("#v_left_controls").css('height', $('#v_left').height())
    //$("#v_left_controls").css('width', $('#v_left').width())


    $(window).scroll(function () {
        /* Distância do scroll até o top da tela */
        var $scrollTop = $(this).scrollTop();
        var $mainTop = $('#Main').offset().top;
        var $menuTop = $('#menu').offset().top;


        var $metodosTop = $('#Metodos').offset().top;
        var $equipeTop = $('#Equipe').offset().top;
        var $recomendadosTop = $('#Recomendados').offset().top;
        var $contatoTop = $('#Contato').offset().top;


        if ($scrollTop > 0) {
            $secaoAtual = 0;
            navIndex();

            $('#Nav').css('background', $colors[$secaoAtual + 1]);

            if ($scrollTop >= $menuTop) {
                $('#menu').removeClass('menu-start');
                $('#menu').addClass('menu-fixed');

                if ($scrollTop > $mainTop) {
                    $('#Nav').css('background-color', $colors[0]);

                    $('#Nav').removeClass('nav-start');
                    $('#Nav').addClass('nav-fixed');

                    $('#Nav #home').removeClass('hide');
                    $('#Nav .redes').removeClass('hide');

                    if ($scrollTop >= $metodosTop - 100) {
                        if ($scrollTop >= $equipeTop - 100) {
                            if ($scrollTop >= $recomendadosTop - 100) {
                                if ($scrollTop >= $contatoTop - 300) {
                                    $secaoAtual = 4;
                                    navIndex();
                                } else {
                                    $secaoAtual = 3;
                                    navIndex();
                                }

                            } else {
                                $secaoAtual = 2;
                                navIndex();
                            }
                        } else {
                            $secaoAtual = 1;
                            navIndex();
                        }
                    }
                } else {
                    $('#Nav').removeClass('nav-fixed');
                    $('#Nav').addClass('nav-start');

                    $('#menu').removeClass('menu-fixed');
                    $('#menu').addClass('menu-start');

                    $('#Nav #home').addClass('hide');
                    $('#Nav .redes').addClass('hide');
                }
            }
        } else {
            $secaoAtual = null;

            $('#Nav').css('background-color', $colors[0]);

            $('#menu').find("li").eq(0).css('background-color', $colors[0]);
            $('#menu').find("li").eq(0).css('color', $colors[1]);
        }

    });


    $('#menu li').on('mouseenter', function () {
        var $itemIndex = $("li").index(this);

        $('#Nav').css('background-color', $colors[$itemIndex + 1]);

        if ($itemIndex != $secaoAtual) {
            $(this).css('background-color', $colors[$itemIndex + 1]);
            $(this).css('color', $colors[0]);


            $("li").eq($secaoAtual).css('background-color', $colors[0]);
            $("li").eq($secaoAtual).css('color', $colors[$secaoAtual + 1]);
        }

        $('#menu li').on('mouseleave', function () {
            $('#Nav').css('background-color', $colors[0]);
            navIndex();
        });
    });

    /* VÍDEO CONTROLS */
    $('#v_left_controls').on('click', function () {
        $(this).css('display', 'none')
        $('#v_left iframe').attr('src', "https://player.vimeo.com/video/217723625?autoplay=1&loop=1&title=0&byline=0&portrait=0&background=0");
    });

    /* PREVENT SUBMIT ON ENTER PRESS */
    $('#form').on('keyup keypress', function (e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });

    var first_time = false;
    $(this).on('mouseleave', function () {
        if (first_time) {
            $('#black-cover').css('display', 'flex');

            $('#close').on('click', function () {
                $('#black-cover').css('display', 'none')
            });
        }
        first_time = false;
    });

    /* SMOOTH SCROLL LINK*/
    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
});

function navIndex() {
    $("#menu li").each(function (index) {
        if (index != $secaoAtual) {
            $(this).css('background-color', $colors[0]);
            $(this).css('color', $colors[index + 1]);
        }
    });

    $('#menu').find("li").eq($secaoAtual).css('background-color', $colors[$secaoAtual + 1]);
    $('#menu').find("li").eq($secaoAtual).css('color', $colors[0]);
};

/*
       if ($scrollTop > 300) {
            $secaoAtual = 1;

            $('#Nav').css('background-color', $colors[$secaoAtual]);
            $('#menu').find("li").eq(0).css('background-color', $colors[$secaoAtual]);
            $('#menu').find("li").eq(0).css('color', $colors[0]);

        } else {
            $secaoAtual = 0;

            $('#Nav').css('background-color', $colors[$secaoAtual]);
            $('#menu').find("li").eq(0).css('background-color', $colors[$secaoAtual]);
            $('#menu').find("li").eq(0).css('color', $colors[1]);
        }
        */

/*
            if ($(this).prop('muted')) {

                $(this).prop('muted', false);
                $(this).prop('controls', true);
            } else {
                $(this).prop('muted', true);
                $(this).prop('controls', false);
            }*/

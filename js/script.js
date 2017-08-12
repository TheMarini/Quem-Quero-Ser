var $colors = ['whitesmoke', ' #e54347', '#621e56', '#f3b31b', '#61b1c4', '#2e2d2c'];
var $secoes = [0, 1, 2, 3, 4, 5];
var $secaoAtual;

$(document).ready(function () {
    $(window).scroll(function () {
        /* Distância do scroll até o top da tela */
        var $scrollTop = $(this).scrollTop();
        var $mainTop = $('#Main').offset().top;
        var $menuTop = $('#menu').offset().top;

        var $planosTop = $('#Planos').offset().top;
        var $artigosTop = $('#Artigos').offset().top;
        var $equipeTop = $('#Equipe').offset().top;
        var $contatoTop = $('#Contato').offset().top;


        if ($scrollTop >= 100) {
            $secaoAtual = 0;
            navIndex();

            $('#Nav').css('background-color', $colors[$secaoAtual + 1]);

            if ($scrollTop >= $menuTop) {
                $('#menu').removeClass('menu-start');
                $('#menu').addClass('menu-fixed');

                if ($scrollTop > $mainTop) {
                    $('#Nav').css('background-color', $colors[0]);

                    $('#Nav').removeClass('nav-start');
                    $('#Nav').addClass('nav-fixed');

                    $('#Nav #home').removeClass('hide');
                    $('#Nav .redes').removeClass('hide');

                    if ($scrollTop >= $artigosTop - 100) {
                        if ($scrollTop >= $planosTop - 100) {
                            if ($scrollTop >= $equipeTop - 100) {
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
                }
            }
        } else {
            $secaoAtual = null;

            $('#Nav').css('background-color', $colors[0]);

            $('#menu').find("li").eq(0).css('background-color', $colors[0]);
            $('#menu').find("li").eq(0).css('color', $colors[1]);
        }


        if ($scrollTop < $mainTop) {
            $('#Nav').removeClass('nav-fixed');
            $('#Nav').addClass('nav-start');

            $('#menu').removeClass('menu-fixed');
            $('#menu').addClass('menu-start');

            $('#Nav #home').addClass('hide');
            $('#Nav .redes').addClass('hide');
        }

    });


    $('#menu li').on('mouseenter', function () {
        $('#Nav').css('background-color', $(this).css('border-top-color'));

        if ($("li").index(this) != $secaoAtual - 1) {
            $(this).css('background-color', $(this).css('border-top-color'));
            $(this).css('color', $colors[0]);
        }

    });
    $('#menu li').on('mouseleave', function () {

        $('#Nav').css('background-color', $colors[0]);

        if ($("li").index(this) != $secaoAtual - 1) {
            $(this).css('background-color', $colors[0]);
            $(this).css('color', $(this).css('border-top-color'));
        }
    });

    $('#Video video').on('click', function () {

        if ($(this).prop('muted')) {

            $(this).prop('muted', false);
            $(this).prop('controls', true);
            /*this.currentTime = 0;*/
        } else {
            $(this).prop('muted', true);
            $(this).prop('controls', false);
        }
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

var $colors = ['whitesmoke', '#e54347', '#621e56', '#f3b31b', '#61b1c4', '#2e2d2c'];
var $banners = [];
var $currentBanner = 0;
var $secaoAtual = null;
var $menu_mobile = true; //menu_mobile first click

var reA = /[^a-zA-Z]/g; // |search|global match -> NOT alphabetic
var reN = /[^0-9]/g; // |search|global match -> NOT digit

var $img_folder;

if ($(location).attr('host') == "") {
    $img_folder = $(location).attr('href').replace("index.html","img/banner/");
}
else{
    $img_folder = "http://" + $(location).attr('host') + "/img/banner/";
};

$(document).ready(function () {
    /* VARIABLES */
    //Distâncias do topo
    var $scrollTop = $(window).scrollTop();
    var $mainTop = $('#Main').offset().top;
    var $metodosTop = $('#Metodos').offset().top;
    var $equipeTop = $('#Equipe').offset().top;
    var $recomendadosTop = $('#Recomendados').offset().top;
    var $contatoTop = $('#Contato').offset().top;

    /* FUNCTIONS */
    //Nav na posição certa
    function navPos() {
        if ($scrollTop > $mainTop) {
            $("#Nav").removeClass("nav-start");
            $("#Nav").addClass("nav-fixed");

        } else {
            $("#Nav").removeClass("nav-fixed");
            $("#Nav").addClass("nav-start");

            $("#home").addClass("hide");
            $("#redes").addClass("hide");
        }
    };

    //Menu configs
    function navIndex(mobile = false) {
        if (!mobile) {
            //Volta item para padrão se o mesmo não for o atual
            $("#menu li").each(function (index) {
                if (index != $secaoAtual) {
                    $(this).css('background-color', $colors[0]);
                    $(this).css('color', $colors[index + 1]);
                }
            });

            //Coloca item atual em destaque
            if ($secaoAtual != null) {
                $('#menu').find("li").eq($secaoAtual).css('background-color', $colors[$secaoAtual + 1]);
                $('#menu').find("li").eq($secaoAtual).css('color', $colors[0]);
                $('#menu').find("li").eq($secaoAtual).css('border-color', $colors[$secaoAtual + 1]);
            }
        } else {
            //Todos em focus
            $("#menu li").each(function (index) {
                $(this).css('background-color', $colors[index + 1]);
                $(this).css('color', $colors[0]);
            });
        }
    };

    //Ordernar Alfanumérico
    //LEGENDA: 0 = mesma posição | 1 = acima do comparado | -1 = abaixo do comparado
    function sortAlphaNum(a, b) {
        //remover todos os carac. que se encontram dentro do espectro "reA"
        var aA = a.replace(reA, ""); //letras do comparado a
        var bA = b.replace(reA, ""); //letras do comparado b
        if (aA === bA) { //letras de ambos na mesma ordenação
            var aN = parseInt(a.replace(reN, ""), 10); //números do comparado a | passar para base 10
            var bN = parseInt(b.replace(reN, ""), 10); //números do comparado b | passar para base 10
            return aN === bN ? 0 : aN > bN ? 1 : -1; //números iguais | numeros A > numeros B
        } else {
            return aA > bA ? 1 : -1; //letras A > letras B
        }
    }

    //Banner Background Images
    function nextBackground() {
        $('#banner_bg').fadeTo('slow', 0, function () {
            $currentBanner++;
            $currentBanner = $currentBanner % $banners.length; //Ao chegar o nº total zera novamente (módulo de 21 é 0)
            $("#banner_bg").css('background-image', "url(../img/banner/" + $banners[$currentBanner] + ")");
        }).fadeTo('slow', 1);
    }
    setInterval(nextBackground, 5000);

    /* EVENTS & CODING */
    //Preparar imagens
    $.ajax({
        async: false,
        url: $img_folder,
        success: function (data) {
            console.log(data);

            $(data).find("ul>li>a").attr("title", function (i, val) {
                if (val.match(/.(jpe?g|png|gif)$/g)) {
                    $banners.push(val);
                }
            });
        }
    });
    $banners.sort(sortAlphaNum);

    $("#banner_bg").css('background-image', "url(../img/banner/" + $banners[$currentBanner] + ")"); //Começar com a 1ª img

    //Configurações de acordo com o dispositivo
    if ($(window).width() < 900) { //Mobile
        $("#Nav").addClass("nav-fixed");
        navIndex(true); //Mobile Nav colors config

        $("#menu li").on('click', function () { // Recuar menu automaticamente no click
            $("#mobile-menu").click();
        });
    } else { //Desktop
        navIndex(); //Desktop Nav colors config
        navPos(); //Posição da Nav em relação a posição da tela observada
    }

    //Responsividade on resize
    $(window).resize(function () {
        if ($(window).outerWidth() < 900) { //Mobile
            $("#Nav").removeClass("nav-start");
            $("#Nav").addClass("nav-fixed");

            navIndex(true); //Mobile Nav colors config
            $menu_mobile = false; //Voltar menu-mobile padrão
            $("#mobile-menu").click();
        } else { //Desktop
            navIndex(); //Desktop Nav colors config
            $("#mobile-menu").css('transform', 'none'); //Voltar menu-mobile padrão
            $("#Nav").css('margin-left', '0'); //Voltar nav para desktop

            $("#Nav").css('transition', 'background 1s'); //Transition só no bg-hover, sem transition margin de volta ao desktop

            navPos(); //Voltar nav como estava
        }
    });

    $("#mobile-menu").on('click', function () { //Mobile menu click-transitions + show menu
        if ($menu_mobile) {
            $("#Nav").css('transition', 'margin 0.7s');
            $(this).css('transform', 'rotate(-90deg)')
            $("#Nav").css('margin-left', '0');
            $menu_mobile = false
        } else {
            $(this).css('transform', 'none');
            $("#Nav").css('margin-left', '-135px');
            $menu_mobile = true
        }
    });

    $(window).scroll(function () {
        if ($(window).innerWidth() > 900) { //Fora da quebra mobile

            $scrollTop = $(this).scrollTop(); //Distância atual do scroll até o topo da tela

            if ($scrollTop > 0) {
                $secaoAtual = 0;
                navIndex();

                $('#Nav').css('background', $colors[$secaoAtual + 1]); //Nav (combinar com a 1ª section)


                if ($scrollTop > $mainTop) {
                    $('#Nav').css('background-color', $colors[0]); //Nav (padrão)

                    //Nav Fixed
                    $('#Nav').removeClass('nav-start');
                    $('#Nav').addClass('nav-fixed');

                    //Home & Redes Sociais
                    $('#Nav #home').removeClass('hide');
                    $('#Nav #redes').removeClass('hide');

                    if ($scrollTop >= $metodosTop - 100) {
                        if ($scrollTop >= $equipeTop - 100) {
                            if ($scrollTop >= $recomendadosTop - 100) {
                                if ($scrollTop + $(this).height() > $(document).height() - 200) {
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

                    $('#Nav #home').addClass('hide');
                    $('#Nav #redes').addClass('hide');
                }

            } else {
                $secaoAtual = null;

                $('#Nav').css('background-color', $colors[0]);

                $('#menu').find("li").eq(0).css('background-color', $colors[0]);
                $('#menu').find("li").eq(0).css('color', $colors[1]);
            }
        }
    });

    $('#menu li').on('mouseenter', function () {
        if ($(window).width() > 900) {
            var $itemIndex = $("li").index(this);

            if ($itemIndex != $secaoAtual) {
                //Destaque item -> hover
                $(this).css('background-color', $colors[$itemIndex + 1]);
                $(this).css('color', $colors[0]);

                //Window all top não tem destaque
                if ($secaoAtual != null) {
                    //Remover destaque item -> atual
                    $("#menu li").eq($secaoAtual).css('background-color', $colors[0]);
                    $("#menu li").eq($secaoAtual).css('color', $colors[$secaoAtual + 1]);
                }

                //Nav change bg-color somente qndo estiver fixo
                if ($('#Nav').hasClass('nav-start')) {
                    $('#Nav').css('background-color', $colors[$itemIndex + 1]);
                }
            }

            $('#menu li').on('mouseleave', function () {

                if ($('#Nav').hasClass('nav-start') && $secaoAtual != null) {
                    $('#Nav').css('background-color', $colors[$secaoAtual + 1])
                } else {
                    $('#Nav').css('background-color', $colors[0]);
                }

                navIndex();
            });
        }
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

    /* ALERT-OUT */
    var first_time = false;
    $(this).on('mouseleave', function () {
        if (first_time) {
            $('#black-cover').css('display', 'flex');

            $('#alert_close').on('click', function () {
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

/* --- SUPER GLOBAL VARIABLES --- */
var $colors = ['whitesmoke', '#e54347', '#621e56', '#f3b31b', '#61b1c4', '#2e2d2c'];
var $banners = [];
var $currentBanner = -1;
var $secaoAtual = null;
var $menu_mobile = true; //menu_mobile first click

var reA = /[^a-zA-Z]/g; // |search|global match -> NOT alphabetic
var reN = /[^0-9]/g; // |search|global match -> NOT digit


/* --- DOCUMENT INDEPENDENT FUNCTIONS --- */
var $YT_Player;
function onYouTubeIframeAPIReady() {
    $YT_Player = new YT.Player('YT_player', {
        events: {
            'onReady': onPlayerReady
        }
    });
}
function onPlayerReady(event) {
    event.target.mute();
}

var $mainTop;
var $metodosTop;
var $equipeTop;
var $recomendadosTop;
var $contatoTop;

function refreshOffsets() {
    $mainTop = $('#Main').offset().top;
    $metodosTop = $('#Metodos').offset().top;
    $equipeTop = $('#Equipe').offset().top;
    $recomendadosTop = $('#Recomendados').offset().top;
    $contatoTop = $('#Contato').offset().top;
}

$(document).ready(function () {
    var $banner_folder = $templateDir + "/assets/img/Index/banner/"; //Banner Images folder
    var $scrollTop = $(window).scrollTop();
    refreshOffsets();

    /* FIRST CALLS */
    //Stretch the featured texts on 'Manifesto'
    $('.p_destaque').each(function () {
        $(this).stretch_text();
    });

    //Carousels configuration
    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        center: true,
        nav: true,
        navText: "<>",
        navElement: "div",
        dots: false
    });

    //Center '<' or '>' content
    $('.owl-nav').each(function () {
        $(this).addClass("_center-child");
    });

    /* FUNCTIONS */
    //Correct position of nav
    function navPos() {
        if ($scrollTop > $mainTop) {
            $("#_Nav").removeClass("_nav-start");
            $("#_Nav").addClass("_nav-fixed");

            $("#_home").removeClass("_hide");

        } else {
            $("#_Nav").removeClass("_nav-fixed");
            $("#_Nav").addClass("_nav-start");

            $("#_home").addClass("_hide");
        }
    };

    //Menu configs
    function navIndex(mobile = false) {
        if (!mobile) {
            $("#_menu li").each(function (index) {
                //Set back each 'li' to default if it isn't the current item
                if (index != $secaoAtual) {
                    $(this).css('background-color', $colors[0]); //whitesmoke
                    $(this).css('color', $colors[index + 1]); //index starts at 0 and colors[0] == whitesmoke
                } else {
                    //If it is, set as highlighted
                    $(this).css('background-color', $colors[index + 1]);
                    $(this).css('color', $colors[0]);
                    $(this).css('border-color', $colors[index + 1]);
                }
            });

        } else {
            //Set all to default
            $("#_menu li").each(function (index) {
                $(this).css('border-color', $colors[index + 1]);
                $(this).css('color', $colors[index + 1]);
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
//    function nextBackground() {
//        $('#banner_bg').fadeTo('slow', 0, function () {
//            $currentBanner++;
//            $currentBanner = $currentBanner % $banners.length; //Ao chegar o nº total zera novamente (módulo de 21 é 0)
//            $("#banner_bg").css('background-image', "url(" + $banner_folder + $banners[$currentBanner] + ")");
//        }).fadeTo('slow', 1);
//    }

    //TODO: catch files with PHP
    /* EVENTS & CODING */
    //Preparar imagens
    $.ajax({
        url: $banner_folder,
        type: "POST",
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $(data).find('li>a').attr('href', function (i, val){
                if (val.match(/.(jpe?g|png|gif)$/g)) {
                    $banners.push(val);
                }
            });
         }
    });
    $banners.sort(sortAlphaNum);
//    nextBackground();
//    setInterval(nextBackground, 9000);


    //Configurações de acordo com o dispositivo
    if ($(window).width() >= 920) { //Desktop
        navPos(); //Posição da Nav em relação a posição da tela observada
        navIndex(); //Desktop Nav colors config

    } else { //Mobile
        $("#_Nav").addClass("_nav-fixed");
        navIndex(true); //Mobile Nav colors config

        $("#_menu").on('click', 'li', function () { // Recuar menu automaticamente no click
            $("#_mobile-menu").click();
        });
    }

    //Responsividade on resize
    $(window).resize(function () {
        refreshOffsets();

        $('.p_destaque').each(function () {
            $(this).stretch_text();
        });

        if ($(window).width() >= 904) { //Desktop
            navIndex(); //Desktop Nav colors config
            $("#_mobile-menu").css('transform', 'none'); //Voltar menu-mobile padrão
            $("#_Nav").css('margin-left', '0'); //Voltar nav para desktop

            $("#_Nav").css('transition', 'background 1s'); //Transition só no bg-hover, sem transition margin na transição entre mobile/desktop

            navPos(); //Voltar nav como estava

        } else { //Desktop

            $("#_Nav").removeClass("_nav-start");
            $("#_Nav").addClass("_nav-fixed");

            navIndex(true); //Mobile Nav colors config
            $menu_mobile = false; //Voltar menu-mobile padrão
            $("#_mobile-menu").click();
        }
    });

    $("#_mobile-menu").on('click', function () { //Mobile menu click-transitions + show menu
        if ($menu_mobile) {
            $("#_Nav").css('transition', 'margin 0.7s'); //Margin transition only after 'mobile-menu' is clicked
            $(this).css('transform', 'rotate(-90deg)')
            $("#_Nav").css('margin-left', '0');
            $menu_mobile = false
        } else {
            $(this).css('transform', 'none');
            $("#_Nav").css('margin-left', '-180px');
            $menu_mobile = true
        }
    });

    $(window).scroll(function () {
        if ($(window).width() >= 910) { //Fora da quebra mobile

            $scrollTop = $(this).scrollTop(); //Distância atual do scroll até o topo da tela

            if ($scrollTop > 0) {
                $secaoAtual = 0;
                navIndex();

                $('#_Nav').css('background', $colors[$secaoAtual + 1]); //Nav (combinar com a 1ª section)

                if ($scrollTop > $mainTop) {
                    $('#_Nav').css('background-color', $colors[0]); //Nav (padrão)

                    //Nav Fixed
                    $('#_Nav').removeClass('_nav-start');
                    $('#_Nav').addClass('_nav-fixed');

                    //Home & Redes Sociais
                    $('#_Nav #_home').removeClass('_hide');

                    if ($scrollTop >= $metodosTop - 130) {
                        if ($scrollTop >= $equipeTop - 130) {
                            if ($scrollTop >= $recomendadosTop - 130) {
                                if ($scrollTop >= $contatoTop - 130) {
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
                    $('#_Nav').removeClass('_nav-fixed');
                    $('#_Nav').addClass('_nav-start');

                    $('#_Nav #_home').addClass('_hide');
                }

            } else {
                $secaoAtual = null;
                navIndex();

                $('#_Nav').css('background-color', $colors[0]);
            }
        }
    });

    $('#_menu li').on('mouseenter', function () {
        if ($(window).width() >= 910) {
            var $itemIndex = $("li").index(this);

            if ($itemIndex != $secaoAtual) {
                //Destaque item -> hover
                $(this).css('background-color', $colors[$itemIndex + 1]);
                $(this).css('color', $colors[0]);
                $(this).css('border-color', $colors[$itemIndex + 1]);

                //Window all top não tem destaque
                if ($secaoAtual != null) {
                    //Remover destaque item -> atual
                    $("#_menu li").eq($secaoAtual).css('background-color', $colors[0]);
                    $("#_menu li").eq($secaoAtual).css('color', $colors[$secaoAtual + 1]);
                }

                //Nav change bg-color somente qndo não estiver fixo
                if ($('#_Nav').hasClass('_nav-start')) {
                    $('#_Nav').css('background-color', $colors[$itemIndex + 1]);
                }
            }

            $('#_menu li').on('mouseleave', function () {
                //Nav change bg-color somente qndo não estiver fixo && Window all top não tem destaque
                if ($('#_Nav').hasClass('_nav-start') && $secaoAtual != null) {
                    $('#_Nav').css('background-color', $colors[$secaoAtual + 1])
                } else {
                    $('#_Nav').css('background-color', $colors[0]);
                }

                navIndex();
            });
        }
    });

    /* VÍDEO CONTROLS */
    $('#v_left_controls').on('click', function () {
        $(this).css('display', 'none');

        switch ($("#v_left").attr('_vt')) {
            case '0':
                $('#v_left video').prop('muted', false);
                break;

            case '1':
                $YT_Player.unMute();
                break;

            case '2':
                $('#v_left iframe').attr('src', ($('#v_left iframe').attr('src').replace('background=1', 'autoplay=1&loop=1&title=0&byline=0&portrait=0')));
                break;
        }
        //$('#v_left iframe').attr('src', "https://www.youtube.com/embed/y35DsSh6Tyk?autoplay=1&loop=1&modestbranding=1&color=white");
        //$('#v_left iframe').attr('src', "https://player.vimeo.com/video/217723625?autoplay=1&loop=1&title=0&byline=0&portrait=0&background=0");
    });

    /* RECOMENDAÇÕES */
    $('#outros_videos > .container').on('click', '.v_other', function () {
        $this = $(this);
        $.ajax({
            url: $templateDir + '/update_gallery.php',
            type: "POST",
            dataType: 'json',
            data: ({
                id: $(this).attr('_vid'),
                muted: ($('#v_left_controls').css('display') != 'none') ? true : false,
                featured: $("#v_left").attr('_vid')
            }),
            success: function (data) {
                switch ($("#v_left").attr('_vt')) {
                    case '0':
                        $('#v_left video').replaceWith(data.featured[1]);
                        break;

                    case '1':
                    case '2':
                        $('#v_left iframe').replaceWith(data.featured[1]);
                        break;
                }
                $("#v_left").attr('_vid', $this.attr('_vid'));
                $("#v_left").attr('_vt', data.featured[0]);
                $('#video_infos>h1').text(data.featured[2]);
                $('#video_infos>p').text(data.featured[3]);

                if (data.featured[0] == 1 && $('#v_left_controls').css('display') != 'none') {
                    onYouTubeIframeAPIReady();
                }
                $this.replaceWith(null);
                $("#outros_videos > .container").append(data.v_other);
            }
        });
    });

    /* PREVENT SUBMIT ON ENTER PRESS */
    $('#form input').on('keyup keypress', function (e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });
});

/* STRETCH TEXT */
$.fn.stretch_text = function () {
    var elmt = $(this),
        cont_width = elmt.width();

    if ($(this).find('._stretch').length > 0) {
        var txt = $(this).find('._stretch').html();
        $(this).html(txt);
    } else {
        var txt = elmt.html();
    }

    var one_line = $('<span class="_stretch">' + txt + '</span>'),
        nb_char = elmt.text().length,
        spacing = cont_width / nb_char,
        txt_width;

    elmt.html(one_line);
    txt_width = one_line.width();

    if (txt_width < cont_width) {
        var char_width = txt_width / nb_char,
            ltr_spacing = spacing - char_width + (spacing - char_width) / nb_char;

        one_line.css({
            'letter-spacing': ltr_spacing
        });
    } else {
        one_line.contents().unwrap();
        elmt.addClass('_justify');
    }
};

<?php get_header(); ?>
<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.min.css">
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>

<!-- QQS -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/index.css">
<script src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>

</head>

<body>
    <div class="_black-cover">
        <div class="_alert">
            <div class="_alert-top">
                <div class="_alert-close _center-child">X</div>
            </div>
            <div class="_alert-infos">
                <h1>A vida está corrida, não é?</h1>
                <p>Mas gente ajuda você ficar informado. <br> Escreva seu e-mail e... aproveite o dia!</p>
            </div>
            <?php get_template_part('newsletter'); ?>
        </div>
    </div>

    <header id="Banner" class="_center-child">
        <div id="banner_bg"></div>
        <div id="banner_fade"></div>
        <div class="_wrapper">
            <img id="logo" src="<?php bloginfo('template_url'); ?>/assets/img/_all/logos/vermelho.png" alt="New Program" />
            <p id="banner_txt">AJUDAMOS A ESCOLHER BEM SUA PROFISSÃO E CARREIRA</p>
            <a href="#Sobre" class="_btn _center-child">DESCUBRA</a>
        </div>
    </header>

    <div id="_mobile-menu" class="_center-child">
        <img src="img/_others/icons/menu.svg" alt="">
    </div>

    <nav id="_Nav">
        <a href="#Banner"><img id="_home" src="<?php bloginfo('template_url'); ?>/assets/img/_all/logos/vermelho.png" alt="Quem Quero Ser" /></a>
        <ul id="_menu">
            <a href="#Sobre">
                <li id="_sobre" class="_center-child">No que acreditamos</li>
            </a>
            <a href="#Metodos">
                <li id="_metodos" class="_center-child">Como fazemos</li>
            </a>
            <a href="#Equipe">
                <li id="_artigos" class="_center-child">Quem somos</li>
            </a>
            <a href="#Recomendados">
                <li id="_equipe" class="_center-child">Indicamos pra você</li>
            </a>
            <a href="#Contato">
                <li id="_contato" class="_center-child">Fale com a gente</li>
            </a>
        </ul>

        <div></div>
    </nav>

    <main id="Main">
        <section id="Sobre">
            <div class="_wrapper">
                <h1 class="_titulo">Manifesto</h1>
                <article class="container">
                    <p class="p_destaque">A escolha de uma profissão implica</p>
                    <p class="p_destaque">esboçar o projeto de sua vida:</p>

                    <p>
                        envolve <b>interesses, sonhos e olhar para o futuro</b>. Por isso, convidamos o jovem a ampliar seus interesses, desenvolver sua vocação e se conectar com o universo das profissões, porque escolher uma profissão vai além de um curso técnico ou superior. Portanto, qualificar a busca é essencial.
                    </p>
                    <p class="p_destaque">ACREDITAMOS QUE A ESCOLHA PROFISSIONAL</p>

                    <p class="p_destaque">NÃO SIGNIFICA ABRIR MÃO</p>
                    <p class="p_destaque">DOS NOSSOS SONHOS.</p>

                    <p>

                        Pelo contrário! Eles podem existir juntos. O importante é dar conta dos determinantes de uma boa escolha e a partir deles construir projetos de vida pessoal e profissional.

                    </p>
                    <p class="p_destaque">Assim, de uma maneira nova e instigante</p>
                    <p class="p_destaque">ajudamos o jovem a se comprometer</p>
                    <p class="p_destaque">com sua decisão e a compreender</p>

                    <p>QUEM QUERO SER?</p>
                </article>
            </div>
        </section>

        <svg class="_onda _t-r" style="fill:#e54347" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet">
                <path d="M0,25 C60,70 200,0 500,1 L10000,00 L0,0 Z"/>
        </svg>

        <section id="Nuvem">
            <div class="_wrapper _center-child">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/nuvem/nuvem.png" alt="">
            </div>
        </section>

        <section id="Metodos">
            <svg class="_onda _b-l" style="fill: #621e56" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet">
                <path d="M0,25 C60,70 200,0 500,1 L10000,00 L0,0 Z"/>
            </svg>

            <section id="Caminhos">
                <div class="aba">
                    <div class="_wrapper">
                        <h1 class="_titulo">Como fazemos</h1>
                        <p class="_desc"><b>Nossa metodologia conta com 6 encontros</b>, proporcionando um caminho de descobertas divertido e prazeroso.</p>
                    </div>
                </div>
                <div class="owl-carousel">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/metodos/01.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/metodos/02.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/metodos/03.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/metodos/04.png" alt="">
                </div>

            </section>

            <svg class="_onda _b-r" style="fill:whitesmoke; background-color: #621e56" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet">
                <path d="M0,25 C60,70 200,0 500,1 L10000,00 L0,0 Z"/>
            </svg>

            <section id="Modulos">
                <div class="_wrapper">
                    <h1 class="_titulo">TÉCNICAS E SOLUÇÕES</h1>
                    <div class="single_modulo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/lego.png" alt="">
                        <p>
                            Durante os encontros utilizamos as técnicas de <b>Facilitação Gráfica</b>, <b>Lego Serious Play</b> e <b>Storytelling</b> com o objetivo de facilitar a identificação dos determinantes de escolha e a construção dos projetos de carreira. <br> Também é possível <b>personalizar o programa</b> de acordo com a necessidade de cada um, em grupo ou individualmente.
                        </p>
                    </div>
                    <p>Além de auxiliar os jovens no momento de escolha de sua profissão e carreira, também temos soluções para:</p>
                    <div class="multiple_modulos">
                        <div class="modulo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/universitarios.svg" alt="">
                            <h1>Universitários</h1>
                            <p>Programa voltada para Universitários em busca de orientação sobre Carreira e o Mercado de Trabalho.</p>
                        </div>
                        <div class="modulo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/profs.svg" alt="">
                            <h1>Professores</h1>
                            <p>Programa orientado para professores que darão suporte aos jovens do Ensino Médio na escolha profissional.</p>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section id="Equipe">
            <svg class="_onda _b-l" style="fill: #f3b31b; background-color: whitesmoke" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet">
                <path d="M0,25 C60,70 200,0 500,1 L10000,00 L0,0 Z"/>
            </svg>

            <div class="_wrapper">
                <div class="aba">
                    <h1 class="_titulo">Quem Somos</h1>
                    <p class="_desc">Contamos com um time de especialistas nas áreas de orientação profissional e de carreira, psicologia, comunicação, design e jogos de aprendizagem.</p>
                </div>

                <div class="owl-carousel">
                    <div class="membro _center-child">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/equipe/Joana%20Queiroz.jpg" alt="">
                        <h1>Joana Queiroz</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, molestias iste, laborum porro dolor suscipit. Omnis itaque soluta obcaecati explicabo ea iste, at eum facere culpa, consequuntur odit voluptates! Totam.</p>
                    </div>
                    <div class="membro _center-child">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/equipe/Joana%20Queiroz.jpg" alt="">
                        <h1>Joana Queiroz</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ex, eaque nostrum, perspiciatis veritatis sit atque asperiores expedita omnis nisi iusto repudiandae totam dolorum similique nihil debitis dolores delectus, sunt!</p>
                    </div>
                    <div class="membro _center-child">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/equipe/Joana%20Queiroz.jpg" alt="">
                        <h1>Joana Queiroz</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis accusamus quod molestias odio aspernatur veniam voluptatum itaque temporibus, minima! Iusto earum aut nisi dolore odio reprehenderit labore at vitae laudantium!</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="Recomendados">
            <svg class="_onda _b-r" style="fill:whitesmoke; background-color: #f3b31b" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet">
                <path d="M0,25 C60,70 200,0 500,1 L10000,00 L0,0 Z"/>
            </svg>

            <section id="Videos">
                <div class="_wrapper">
                    <h1 class="_titulo">INDICAMOS PRA VOCÊ ASSISTIR</h1>
                    <div class="container">
                        <div id="v_left">
                            <div id="v_left_controls" class="_center-child">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/speaker.svg" alt="">
                            </div>
                            <iframe src="https://player.vimeo.com/video/217723625?autoplay=1&loop=1&title=0&byline=0&portrait=0&background=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            <!-- <video src="https://youtu.be/KB-GVV68U5s" autoplay muted loop></video> -->
                        </div>
                        <div id="v_right">
                            <div id="video_infos">
                                <div id="video_titulo">
                                    <h1>Nunca me sonharam</h1>
                                </div>
                                <div id="video_descricao">
                                    <p>Nunca Me Sonharam nos convida ao diálogo sobre a realidade do ensino médio nas escolas públicas do Brasil. Na voz de estudantes, gestores, professores e especialistas, o filme questiona: como nós, enquanto sociedade, estamos cuidando e valorizando a qualidade da educação oferecida aos jovens na fase mais sensível e transformadora de suas vidas?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="outros_videos">
                        <p>você também pode gostar de:</p>

                        <div class="container">
                            <div class="v_other">
                                <div class="v_other_play _center-child"><img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/play.svg" alt=""></div>
                                <img src="https://i.ytimg.com/vi/G0wGs3useV8/mqdefault.jpg" alt="">
                            </div>
                            <div class="v_other">
                                <div class="v_other_play _center-child"><img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/play.svg" alt=""></div>
                                <img src="https://i.ytimg.com/vi/G0wGs3useV8/mqdefault.jpg" alt="">
                            </div>
                            <div class="v_other">
                                <div class="v_other_play _center-child"><img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/play.svg" alt=""></div>
                                <img src="https://i.ytimg.com/vi/G0wGs3useV8/mqdefault.jpg" alt="">
                            </div>
                            <!-- 5 no total -->
                        </div>
                    </div>
                </div>
            </section>

            <section id="Artigos">
                <svg class="_onda _t-r" style="fill:whitesmoke" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet">
                    <path d="M0,25 C60,70 200,0 500,1 L10000,00 L0,0 Z"/>
                </svg>
                <div class="_wrapper">
                    <h1 class="_titulo">INDICAMOS PRA VOCÊ LER</h1>
                    <div class="container">
                        <div class="left">
                            <div class="artigo">
                                <img class="artigo_thumb" src="<?php bloginfo('template_url'); ?>/assets/img/Index/artigos/thumb_1.jpg" alt="">
                                <h1 class="artigo_titulo">Mostra das Profissões</h1>
                                <p class="artigo_desc">As inscrições para a Mostra das Profissões da UFMG seguem até dia 25 de agosto, que acontecerá dia 16/9, no Campus Pampulha. Os candidatos poderão participar das salas interativas e palestras de cada curso de graduação oferecido pela UFMG.</p>
                                <a href="single.html" class="artigo_mais _center_X">Saiba mais</a>
                            </div>
                            <div class="artigo">
                                <img class="artigo_thumb" src="<?php bloginfo('template_url'); ?>/assets/img/Index/artigos/thumb_2.jpg" alt="">
                                <h1 class="artigo_titulo">Meu Primeiro Negócio</h1>
                                <p class="artigo_desc">Jovens estudantes vão poder experimentar práticas em negócios, economia, gestão e operacionalização de empresas. Serão 12 semanas na companhia de monitores e voluntários, que vão ajudar a ensinar conceitos como livre iniciativa, mercado, produção e comercialização. </p>
                                <a href="single.html" class="artigo_mais _center_X">Saiba mais</a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="artigo">
                                <img class="artigo_thumb" src="<?php bloginfo('template_url'); ?>/assets/img/Index/artigos/thumb_3.jpg" alt="">
                                <h1 class="artigo_titulo">Mercado de Trabalho</h1>
                                <p class="artigo_desc">Não bastassem as mudanças cada vez mais constantes e abruptas no mercado de trabalho, quem estiver estreando deverá lidar com um ambiente de crise financeira e total instabilidade na situação econômica do país.</p>
                                <a href="single.html" class="artigo_mais _center_X">Saiba mais</a>
                            </div>
                            <div class="artigo">
                                <img class="artigo_thumb" src="<?php bloginfo('template_url'); ?>/assets/img/Index/artigos/thumb_4.jpg" alt="">
                                <h1 class="artigo_titulo">Planejamento de Estudo</h1>
                                <p class="artigo_desc">Não bastassem as mudanças cada vez mais constantes e abruptas no mercado de trabalho, quem estiver estreando deverá lidar com um ambiente de crise financeira e total instabilidade na situação econômica do país.</p>
                                <a href="single.html" class="artigo_mais _center_X">Saiba mais</a>
                            </div>
                        </div>
                    </div>

                    <a href="artigos" class="_btn _center-child _center-X">ver todos</a>
                </div>
            </section>
        </section>

        <section id="Contato">
            <svg class="_onda _b-l" style="fill: #2e2d2c; background-color: #61b1c4" viewBox="0 0 50 50" preserveAspectRatio="xMinYMin meet">
                <path d="M0,25 C60,70 200,0 500,1 L10000,00 L0,0 Z"/>
        </svg>

            <div class="_wrapper">
                <h1 class="_titulo">Fale com a gente</h1>
                <div class="container">
                    <div id="c_left">
                        <!--  <div id="email_icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/email.svg" alt="">
                    </div> -->
                        <form id="form">
                            <input id="txtNome" class="txt" placeholder="nome" required></input>
                            <input id="txtEmail" class="txt" placeholder="email" type="email" required></input>
                            <br />
                            <input id="txtAssunto" class="txt" placeholder="assunto (opcional)"></input>
                            <br />
                            <div id="enviar">
                                <textarea id="txtMensagem" class="txt" required></textarea>
                                <button id="btnEnviar" onclick="btnEnviar_Click" type="submit">Enviar</button>
                            </div>
                            <div id="newsletter">
                                <input type="checkbox" checked>
                                <p>Desejo receber informações de Quem Quero Ser e seus parceiros</p>
                            </div>

                            <p id="msgErro">*mensagem de erro</p>
                        </form>
                    </div>

                    <div id="c_right">
                        <p>Ficou interessado e quer saber mais? Deixe sua mensagem ao lado que a gente entra em contato. Se prefirir pode ligar ou nos fazer uma visita. Estamos à disposição ;)</p>

                        <div id="endereco">
                            <div class="redes">
                                <a href="https://fb.com" target="_blank"><img id="fb" src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/fb.png" alt="facebook" /></a>
                            </div>
                            <p>(31) 2516-6281 <br> contato@quemqueroser.com.br <br> Av. Prudente de Morais - 135 - sala 203<br> Santo Antônio - BH 30350-093
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Parceiros">
            <div class="_wrapper">
                <h1 class="_titulo">PARCEIROS</h1>
                <div class="container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/parceiros/ufmg.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/parceiros/ufmg.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/parceiros/ufmg.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/parceiros/ufmg.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/Index/parceiros/ufmg.png" alt="">
                </div>
            </div>
        </section>
        <?php get_footer(); ?>

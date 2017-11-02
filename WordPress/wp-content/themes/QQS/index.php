<?php get_header(); ?>
<!-- Youtube -->
<script src="https://www.youtube.com/iframe_api"></script>

<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.min.css">
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>

<!-- QQS -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/index.css">
<script src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>

</head>

<body>
    <div style="background-color: red">
    </div>
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
        <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/menu.svg" alt="">
    </div>

    <nav id="_Nav">
        <a href="#Banner"><img id="_home" src="<?php bloginfo('template_url'); ?>/assets/img/_all/logos/vermelho.png" alt="Quem Quero Ser" /></a>
        <ul id="_menu">
            <a href="#Sobre">
                <li id="_sobre" class="_center-child">Em que acreditamos</li>
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
                    <div class="step s_1"></div>
                    <div class="step s_2"></div>
                    <div class="step s_3"></div>
                    <div class="step s_4"></div>
                </div>
                <div class="container">
                    <div class="_wrapper">
                        <div class="passo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/canvas.svg" alt="">
                            <div class="passo_infos">
                                <h1>1º ENCONTRO</h1>
                                <h2>CARREIRA ESTELAR (ESCOLHA, DESAFIO)</h2>
                                <p>No ponto de partida dos nossos encontros você é convidado a refletir sobre os desafios da vida profissional. O momento é de amplas possibilidades, mas acredite, escolher é possível.</p>
                            </div>
                        </div>
                        <div class="passo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/canvas.svg" alt="">
                            <div class="passo_infos">
                                <h1>2º E 3º ENCONTRO</h1>
                                <h2>CARREIRA ESTELAR (ESCOLHA, DESAFIO)</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo porro explicabo velit harum fugit corporis et totam maxime ex molestiae possimus sequi fuga sapiente, beatae cumque id officia deleniti illo!</p>
                            </div>
                        </div>
                        <div class="passo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/canvas.svg" alt="">
                            <div class="passo_infos">
                                <h1>4º E 5º ENCONTRO</h1>
                                <h2>TERRAS DAS PROFISSÕES E MATCHING (INFORMAÇÕES, ENEM, SISU, IES, DECISÃO)</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo porro explicabo velit harum fugit corporis et totam maxime ex molestiae possimus sequi fuga sapiente, beatae cumque id officia deleniti illo!</p>
                            </div>
                        </div>
                        <div class="passo">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/canvas.svg" alt="">
                            <div class="passo_infos">
                                <h1>6º ENCONTRO</h1>
                                <h2>QUEM QUERO SER </h2>
                                <p>Chegou o momento de concretizar sua escolha e projetar-se para o futuro em busca da realização do seu projeto de vida.</p>
                            </div>
                        </div>
                    </div>
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
                        <?php
                            include('video_gallery.php'); //VIDEO_GALLERY FUNCTIONS

                            //allocated for multiple use
                            $r = getVideo();
                            $video = videoInfos($r->sl_url);
                        ?>
                        <div id="v_left" _vt="<?php echo $video[0]; ?>" _vid="<?php echo $r->id; ?>">
                            <div id="v_left_controls" class="_center-child">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/speaker.svg" alt="">
                            </div>

                            <?php echo htmlThis::featured($video[0], $video[1]); ?>

                        </div>
                        <div id="v_right">
                            <div id="video_infos">
                                <h1><?php echo $r->name; ?></h1>
                                <p><?php echo $r->description; ?></p>
                            </div>
                        </div>
                    </div>
                    <div id="outros_videos">
                        <p>você também pode gostar de:</p>
                            <div class="container">
                                <?php echo htmlThis::recommendations(); ?>
                            </div>
                            <!-- 5 no total -->
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
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php $k++ ?>
                        <?php if ( $k == 1 ) : ?>
                        <div class="left">
                        <?php else: ?>
                        <?php if ( $k == 3 ) : ?>
                        <div class="right">
                        <?php endif; ?>
                        <?php endif; ?>
                            <div class="artigo">
                                <img class="artigo_thumb" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <h1 class="artigo_titulo"><?php the_title(); ?></h1>
                                <div class="artigo_desc"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>" class="artigo_mais _center_X">Saiba mais</a>
                            </div>
                        <?php echo ($k == 2 || $k == 4) ? "</div>" : ""; ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
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
    </main>
</body>

</html>

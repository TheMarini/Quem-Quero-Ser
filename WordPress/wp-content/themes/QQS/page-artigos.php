<?php
/*
    template name: Artigos
*/
?>


<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/artigos.css">
</html>
   <body>
    <main>
       <?php get_template_part('Back-Home'); ?>
        <div class="_wrapper">
            <div class="container">
                <div class="artigo">
                    <img class="artigo_thumb" src="<?php bloginfo('template_url'); ?>/assets/img/Index/artigos/thumb_1.jpg" alt="">
                    <div class="artigo_infos">
                        <h1 class="artigo_titulo">Mostra das Profissões</h1>
                        <p class="artigo_desc">As inscrições para a Mostra das Profissões da UFMG seguem até dia 25 de agosto, que acontecerá dia 16/9, no Campus Pampulha. Os candidatos poderão participar das salas interativas e palestras de cada curso de graduação oferecido pela UFMG.</p>
                        <a href="single.html" class="artigo_mais">Saiba mais</a>
                    </div>
                </div>
                <div class="artigo">
                    <img class="artigo_thumb" src="<?php bloginfo('template_url'); ?>/assets/img/Index/artigos/thumb_2.jpg" alt="">
                    <div class="artigo_infos">
                        <h1 class="artigo_titulo">Meu Primeiro Negócio</h1>
                        <p class="artigo_desc">Jovens estudantes vão poder experimentar práticas em negócios, economia, gestão e operacionalização de empresas. Serão 12 semanas na companhia de monitores e voluntários, que vão ajudar a ensinar conceitos como livre iniciativa, mercado, produção e comercialização. </p>
                        <a href="single.html" class="artigo_mais">Saiba mais</a>
                    </div>
                </div>

                <div class="artigo">
                    <img class="artigo_thumb" src="<?php bloginfo('template_url'); ?>/assets/img/Index/artigos/thumb_3.jpg" alt="">
                    <div class="artigo_infos">
                        <h1 class="artigo_titulo">Mercado de Trabalho</h1>
                        <p class="artigo_desc">Não bastassem as mudanças cada vez mais constantes e abruptas no mercado de trabalho, quem estiver estreando deverá lidar com um ambiente de crise financeira e total instabilidade na situação econômica do país.</p>
                        <a href="single.html" class="artigo_mais">Saiba mais</a>
                    </div>
                </div>
                <div class="artigo">
                    <img class="artigo_thumb" src="<?php bloginfo('template_url'); ?>/assets/img/Index/artigos/thumb_4.jpg" alt="">
                    <div class="artigo_infos">
                        <h1 class="artigo_titulo">Planejamento de Estudo</h1>
                        <p class="artigo_desc">Não bastassem as mudanças cada vez mais constantes e abruptas no mercado de trabalho, quem estiver estreando deverá lidar com um ambiente de crise financeira e total instabilidade na situação econômica do país.</p>
                        <a href="single.html" class="artigo_mais">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

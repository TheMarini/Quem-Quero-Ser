<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/artigos.css">

</html>

<body>
    <main>
        <div class="_back">
            <?php include('back-home.php'); ?>
        </div>
        <div class="_wrapper">
            <header class="_center-child">
                <a href="<?php echo home_url(); ?>" class="_center-child">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/_all/logos/vermelho.png" alt="Quem Quero Ser">
                </a>
            </header>
            <form id="Search" class="_center-child" role="search" method="get" action="<?php echo home_url(); ?>" _lpchecked="1">
                <input type="text" placeholder="Pesquisar um artigo" name="s" id="s">
                <input type="submit" value="">
            </form>
            <section id="Artigos" class="container">

                <?php
                // search query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

                <?php if ( $wpb_all_query->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="artigo">
                   <a href="<?php the_permalink(); ?>">
                    <div class="artigo_thumb">
                       <div class="show _center-child">
                           <img  src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/article.svg" alt="">
                       </div>
                        <?php if (has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                        <?php endif ?>
                    </div>
                    </a>
                    <div class="artigo_infos">
                        <h1 class="artigo_titulo">
                            <?php the_title(); ?>
                        </h1>
                        <div class="artigo_desc">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <div class="artigo_mais"><a href="<?php the_permalink(); ?>" >Saiba mais</a></div>
                </div>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; else: ?>
                <p>achou nada não</p>
                <?php endif; ?>
            </section>
        </div>
    </main>
</body>
<script>
    $("form").on('focusin', function() {
        $(this).css('box-shadow', "0px 0px 20px rgba(0,0,0,0.1)");
        $(this).css('opacity', "1");

        $(".artigo").css('box-shadow', "none");
        $(".artigo").css('opacity', "0.5");
    });
    $("form").on('focusout', function() {
        $(this).css('box-shadow', "none");
        $(this).css('opacity', "0.7");

        $(".artigo").css('box-shadow', "0px 0px 10px rgba(0,0,0,0.1)");
        $(".artigo").css('opacity', "1")
    });

</script>

</html>

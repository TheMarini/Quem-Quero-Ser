<?php get_header(); ?>
<?php get_template_part('Back-Home'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/single.css">
</head>

<body>
    <header id="Banner" class="_center-child <?php if (!has_post_thumbnail()){ echo 'no-thumb'; } ?>">
        <div class="_blur-cover"></div>
        <div class="_center-child">
            <div class="_wrapper">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>

        <?php if (has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <?php endif ?>
    </header>

    <main id="Main">
        <div class="_wrapper">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <header id="stats">
                <p id="author">Autor: <a href="/?s=<?php the_author(); ?>"><?php the_author(); ?></a></p>
                <p id="date"><?php the_time('d/M/Y') ?></p>
            </header>
            <article id="text"><?php the_content(); ?></article>
            <?php endwhile; else: ?>
            <p>achou nada não</p>
            <?php endif; ?>

            <section id="Share" class="_center-child">
                <p>Compartilhar:</p>
                <div class="redes">
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/fb.svg" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/fb.svg" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_url'); ?>/assets/img/_all/icons/fb.svg" alt=""></a>
                </div>
            </section>
        </div>
    </main>

    <?php get_footer(); ?>

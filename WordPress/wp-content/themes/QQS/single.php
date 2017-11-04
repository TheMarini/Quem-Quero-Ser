<?php get_header(); ?>
<?php include('back-home.php'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/single.css">
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59fd1a20924b1fe2"></script>
</head>

<body>
    <header id="Banner" class="_center-child <?php if (!has_post_thumbnail()){ echo 'no-thumb'; } ?>">
        <div class="_blur-cover"></div> <!-- TODO: funcionalidade -->
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
                <div class="addthis_inline_share_toolbox"></div>
            </section>
            <div class="addthis_relatedposts_inline"></div>
        </div>
    </main>

    <?php get_footer(); ?>
</body>
</html>

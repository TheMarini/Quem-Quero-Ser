<?php get_header(); ?>
<?php get_template_part('Back-Home'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/single.css">
</head>
<body>
<header id="Banner" class="_center-child">
    <div class="_center-child">
        <div class="_wrapper">

            <h1><?php the_title(); ?></h1>
            <h2></h2>
        </div>
    </div>
    
    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
</header>

<main id="Main">
    <div class="_wrapper">
        <header id="stats">
            <p id="author">Autor: <a href=""><?php the_author(); ?></a></p>
            <p id="date"><?php the_date(); ?></p>
        </header>
        <article id="text">
           <?php the_content(); ?>
        </article>

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

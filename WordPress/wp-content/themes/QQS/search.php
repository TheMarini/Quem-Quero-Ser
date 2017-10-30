<?php get_template_part('archive'); ?>


<!-- <?php
    if ( isset( $_REQUEST[ 'search' ] ) ) {
          // run search query
          query_posts( array(
             's' => $_REQUEST[ 'search' ],
             'post_type' => $_REQUEST[ 'post_type' ]
             )
          );
    }

function custom_search_filter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }

    return $query;
}

add_filter('pre_get_posts','custom_search_filter');
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="artigo">
        <img class="artigo_thumb" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="artigo_infos">
            <h1 class="artigo_titulo">
                <?php the_title(); ?>
            </h1>
            <p class="artigo_desc">
                <?php the_excerpt(); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="artigo_mais">Saiba mais</a>
        </div>
    </div>
    <?php endwhile; else: ?>
    <p>achou nada não</p>
    <?php endif; ?>


    <?php  wp_reset_query(); ?>
 -->

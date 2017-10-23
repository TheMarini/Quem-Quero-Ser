<?php
/*
    Template Name: Newsletter
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/newsletter.css">
</head>
<body>
   <main class="_wrapper">
       <div>
          <h1>Inscreva-se para saber mais sobre a <span>Quem Quero Ser</span></h1>
          <?php get_template_part('newsletter'); ?>
       </div>
   </main>
</body>
</html>

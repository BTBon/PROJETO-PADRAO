<?php 
/*
 * Template Name: Página Inicial
 */
get_header();
if(have_posts()):
    the_post();
?>
<article <?php post_class();?>>
    <h2><?php the_title();?></h2>
    <?php the_content();?>
</article>
<?php
endif;
get_footer();
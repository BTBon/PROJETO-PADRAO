<?php 
/*
** Template Name: Página Padrão
*/
get_header();?>

<?php if(have_posts()) : while (have_posts()) : the_post();?>

<h2><?php the_title();?></h2>

<?php the_content();?>

<?php endwhile;?>
<?php else : ?>

<p>Não há conteúdo nesta página.</p>

<?php endif;?>

<?php get_footer();?>
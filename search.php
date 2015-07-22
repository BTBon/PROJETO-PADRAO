<?php get_header();
if(have_posts()):
    while(have_posts()):
    the_post();
?>
<article <?php post_class();?>>
    <a href="<?php the_permalink();?>">
        <?php the_title('<h2>','</h2>');?>
    </a>
    <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('large',array('class'=>'img-responsive'));?>
    </a>
    
    <?php the_content('Leia mais');?>
</article>

<?php
    endwhile;
endif;
get_footer();
?>
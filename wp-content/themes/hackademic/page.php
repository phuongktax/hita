<?php get_header(); ?>
 
<div class="content">
 
        <section id="main-content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php get_template_part( 'author-bio' ); ?>
                    <?php //comments_template(); ?>
                <?php endwhile; ?>
                <?php else : ?>
                    <?php get_template_part( 'content-tuyen-dung-viec-lam', 'category' ); ?>
                <?php endif; ?>
        </section>
 
</div>
 
<section id="sidebar">
   <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>
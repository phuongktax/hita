<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
đây là phần content
<div class="img_list_course">
	<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive" alt="">
	<div class="img_date">
    	<i>20</i>
        <p>Tháng 2</p>
    </div>
    <a href="<?php the_permalink();?>" ><h3><?php echo $post->post_title; ?></h3></a>
    <p><?php echo get_field( 'description');	
    	?></p>
</div>
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


<div id="post-1351" class=" status-publish format-standard has-post-thumbnail  blog-item">
    <div class="post-standard post-meta-type">
      <figure>
        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
      </figure>
    </div>
    <div class="date-post">
    <?php $myText = explode("/",(string)get_the_date()) ;  
      
    ?>
      <span class="date"><?php echo $myText['0']; ?></span>
      <span class="month">Tháng <?php echo $myText['1']; ?></span>
    </div>
    <article>
          <h3><a title="" href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></h3>
          <ul class="blog-meta">
	          <li><i class="fa fa-user"></i><a href="#">admin</a> </li>
	          <li><i class="fa fa-folder-open"></i> <?php the_category(' ', ', '); ?></li>
	          <li><i class="fa fa-tag"></i> <?php the_tags(' ', ', '); ?></li>
          </ul>
          <div class="except-post">
          <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 600, '...');?> <a href="<?php the_permalink() ?>">Read more </a>
          </div>
    </article>
</div>


<div id="post-1351" class="post-1351  status-publish format-standard has-post-thumbnail  blog-item">
   <?php $image = get_field('logo'); ?>
   <div class="date-post">
      <img src="<?php echo $image['url']; ?>" alt="<?php get_field( 'company_name'); ?>"/>
   </div>
   <article>
      <h4><a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
      <ul class="blog-meta">
         <li><i class="fa fa-user"></i><?php echo get_field( 'company_name');?></li><br>
         <li><i class="fa fa-map-marker"></i><?php echo get_field( 'address');?></li><br>        
         <li><i class="fa fa-phone"></i> <?php echo get_field('phone');?></li><br>

      </ul>
   </article>
</div>
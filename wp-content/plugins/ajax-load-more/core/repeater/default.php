<?php if (get_post_type()=='khoa-hoc-lap-trinh') { ?>
<?php 
get_template_part( 'content-khoa-hoc', 'category' );
?>
<?php }else if (get_post_type()=='tuyen-dung-viec-lam'){ ?>

<div id="post-1351" class="post-1351 status-publish format-standard has-post-thumbnail  blog-item">
   <?php $image = get_field('logo'); ?>
   <div class="date-post">
      <img src="<?php echo $image['url']; ?>" alt="<?php get_field( 'companyname'); ?>"/>
   </div>
   <article>
      <h4><a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
      <ul class="blog-meta">
         <li><i class="fa fa-user"></i> <?php echo get_field( 'companyname');?></li>
         <li><i class="fa fa-map-marker"></i> <?php echo get_field( 'note');?></li> 
         <li><i class="fa fa-calendar"></i> Hạn hồ sơ: <?php echo get_field( 'deadline');?></li>
      </ul>
   </article>
</div>
<?php } ?>
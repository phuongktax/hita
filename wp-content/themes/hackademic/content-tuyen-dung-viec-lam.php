<?php

$post_object = get_field('cong-ty');

if( $post_object ): 
    // override $post
    $post = $post_object;
    setup_postdata( $post ); 
    ?>
     <?php $company = get_field('company_name'); ?>
     <?php $website = get_permalink();  ?>
     <?php $image = get_field('logo'); ?>
     <?php $logo = $image['url']; ?>
    
<?php endif; ?>

<div id="post-1351" class="post-1351  status-publish format-standard has-post-thumbnail  blog-item">
   <?php $image = get_field('logo'); ?>
   <div class="date-post"><a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
    <img src="<?php echo $logo; ?>" alt="<?php echo $company; ?>" title="Tên Công Ty: <?php echo strip_tags(the_title()); ?> &#013;Địa chỉ: <?php echo strip_tags(get_field( 'address')); ?> &#013;Số điện thoại <?php echo strip_tags(get_field( 'phone')); ?> &#013;Website: <?php echo strip_tags(get_field( 'website')); ?> &#013;Giới thiệu: <?php echo strip_tags(get_field( 'introduction')); ?> &#013;"/></a>
   </div>
   <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
   <article>
      <h4><a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
      <ul class="blog-meta">
         <li><i class="fa fa-user"></i> <a href="<?php echo $website; ?>" title="<?php echo $company; ?>"><?php echo $company ?></a></li>
         <li><i class="fa fa-map"></i> Địa điểm làm việc:  <?php echo get_field( 'place');?></li>
         <li><i class="fa fa-calendar"></i> Hạn hồ sơ: <?php echo get_field('deadline');?></li>
         <li><i class="fa fa-comment-o"></i> <a href="<?php echo get_bloginfo('url') ?>/lien-he" title="Liên hệ">Liên hệ</a></li>
      </ul>
      <i class="fa fa-tag" style="color: grey;"></i><?php the_tags(' ', ', '); ?>
      <div class="except-post">
            <?php //echo substr(get_field( 'jobdescription'), 0, 250);?>
            <?php $str = cut_string(get_field( 'jobdescription'), 250); ?>
            <p>
              <?php echo $str.' . . .'; ?>
            </p>
            <a title="xem chi tiết" href="<?php the_permalink(); ?>"> xem chi tiết</a>
      </div>
   </article>
</div>
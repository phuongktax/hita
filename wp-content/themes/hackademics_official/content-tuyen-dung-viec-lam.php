<?php
$post_object = get_field('cong-ty');
// var_dump($post_object);
if( $post_object ):
  $post = $post_object;
  setup_postdata( $post );
  $company = get_field('company_name');
  $website = get_permalink();
  $image = get_field('logo');
  $logo = $image['url'];
endif;
?>
  <div class="box_news_content">
      <div class="media">
          <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                  <div class="media-left">
                      <a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
                          <img src="<?php echo $logo; ?>" alt="<?php echo $company; ?>" title="Tên Công Ty: <?php echo strip_tags(the_title()); ?> &#013;Địa chỉ: <?php echo strip_tags(get_field( 'address')); ?> &#013;Số điện thoại <?php echo strip_tags(get_field( 'phone')); ?> &#013;Website: <?php echo strip_tags(get_field( 'website')); ?> &#013;Giới thiệu: <?php echo strip_tags(get_field( 'introduction')); ?> &#013;" class="media-object tuyen-dung-viec-lam"/>
                      </a>
                  </div>
                  <?php wp_reset_postdata(); ?>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                  <div class="media-body">
                      <div class="hr_right">
                          <h4 class="media-heading tit_hr">
                            <a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                          </h4>
                          <span class="name_hr"><a href="<?php echo $website; ?>" title="<?php echo $company; ?>"><?php echo $company ?> </a></span>
                          <span class="place_hr">Địa điểm làm việc: <?php echo get_field( 'place');?></span>
                          <?php 
                          $deadline = get_field('deadline');
                          if ($deadline != ""):
                           ?>
                          <span class="time_hr">Hạn nộp hồ sơ: <?php echo get_field('deadline');?></span>
                        <?php endif; ?>
                          <p class="mt10">Từ khóa:<?php the_tags(' ', ', '); ?> </p>
                          <p class="mt10"><?php echo $str = trim(cut_string(get_field( 'jobdescription'), 250)); ?></p>
                          <p class="mt10"><a href="<?php the_permalink(); ?>" class="more_news"><i class="fa fa-caret-down"></i> Xem chi tiết </a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
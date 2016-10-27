<?php get_header(); ?>
<div id="content">
    <div id="container_full">
        <div class="ts-promotional-banner2 parallax-section">
            <div class="container">
                <div class="container">
                    <h3>Đội ngũ giảng viên</h3>
                    <a href="<?php echo get_bloginfo('url') ?>/" alt="trang chủ" title="Quay về trang chủ"><span> <i class="fa fa-home"></i> </span>Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span><a href="<?php echo get_bloginfo('url') ?>/giang-vien" title="Đội ngũ nhân sự" alt="giảng viên"> Đội ngũ giảng viên</a>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ts-wrapper">
                            <div class="ts-promotional-banner2-main parallax-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="inner-row clearfix">
                                        <div class="inner-row clearfix">
                                              <?php
                                                  $type = 'giang-vien';
                                                  $args=array(
                                                  'post_type' => $type,
                                                  'post_status' => 'publish',
                                                  'posts_per_page' => -1,
                                                  'caller_get_posts'=> 1
                                                  );
                                                  $temp = $wp_query;  // assign original query to temp variable for later use
                                                  $wp_query = null;
                                                  $wp_query = new WP_Query();
                                                  $wp_query->query($args);
                                                  if ( have_posts() ):
                                                      while ( have_posts() ) : the_post();
                                              ?>
                                              <?php $image = get_field('photo'); ?>
                                                    <div class="col-sm-12 col-md-6  col-lg-3">
                                                        <div class="ts-wrapper">
                                                            <div class="team-item team-item-style1 text-xs-center  ">
                                                                <figure>
                                                                  <a href="<?php echo the_permalink(); ?>" title="<?php echo get_field('name'); ?>">
                                                                    <img  src="<?php echo $image['url']; ?>" alt="<?php echo get_field('name'); ?>"/>
                                                                  </a>
                                                                </figure>
                                                                <a href="<?php echo the_permalink(); ?>" title=""><h4><ELEMENT><?php echo get_field('name'); ?></ELEMENT></h4></a>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                              <?php 
                                                      endwhile;
                                                  else :
                                                      echo 'Không tìm thấy bài viết nào trong chuyên mục này.';

                                                  endif;
                                              ?>
                                                  
                                          </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
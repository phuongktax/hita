<?php get_header(); ?>
  <div id="content">
      <div id="container_full">
          <div class="ts-promotional-banner2 parallax-section">
              <div class="container">
                  <div class="container">
                      <h3>Đội ngũ quản lý và nhân sự</h3>
                      <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><span> <i class="fa fa-home"></i> </span> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span>  Đội ngũ quản lý và nhân sự 
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="ts-wrapper">
                              <div class="ts-promotional-banner2-main parallax-section">
                                  <div class="container-fluid">
                                      <div class="row">
                                          <div class="inner-row clearfix">
                                              <?php
                                                  $type = 'nhan-su';
                                                  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                                  $args=array(
                                                  'post_type' => $type,
                                                  'post_status' => 'publish',
                                                  // 'paged' => $paged,
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
                                                                <a href="<?php echo the_permalink(); ?>" title="<?php echo get_field('name'); ?>"><h4><ELEMENT><?php echo get_field('name'); ?></ELEMENT></h4></a>
                                                                <span><?php echo get_field('role'); ?></span>
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
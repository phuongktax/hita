<?php get_header(); ?>
  <div id="content">
      <div class="ts-promotional-banner2 parallax-section">
          <div class="container">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xs-12">
              <h3>Tuyển dụng và việc làm</h3>
              <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span> Tuyển dụng và việc làm
              <hr>
                <div class="row">
                    <div class="col-sm-12 ">
                        <?php
                            $type = 'tuyen-dung-viec-lam';
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args=array(
                                'post_type' => $type,
                                'post_status' => 'publish',
                                'paged' => $paged,
                                'posts_per_page' => 10,
                                'caller_get_posts'=> 1
                            );
                            $temp = $wp_query;  // assign original query to temp variable for later use
                            $wp_query = null;
                            $wp_query = new WP_Query();
                            $wp_query->query($args);
                            
                            if ( have_posts() ):
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'content-tuyen-dung-viec-lam', 'category' );
                                endwhile;
                            else :
                                echo 'Không tìm thấy bài viết nào trong chuyên mục này.';
                            endif;
                        ?>
                    </div>   
                    <?php custom_pagination(); ?>
                             <!-- END PAGINATION -->

                </div>
                <div class=" hidden-md-up" style="margin-top: 1rem;">
                   <!-- <button type="button" class="btn btn-default">xem thêm</button> -->
                   <?php echo do_shortcode('[ajax_load_more post_type="tuyen-dung-viec-lam" offset="2" pause="true" scroll="false" button_label=" Xem Thêm" button_loading_label=" Đang tải" container_type="div" posts_per_page="2"]' ); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
                  <?php get_sidebar(); ?>
            </div>
          </div>
      </div>
  </div>
</div>
<?php get_footer(); ?>

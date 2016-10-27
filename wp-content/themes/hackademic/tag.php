<?php get_header(); ?>
  <div id="content">
      <div class="ts-promotional-banner2 parallax-section">
          <div class="container">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xs-12">
              <h3>Tin Tuyển Dụng Liên Quan</h3>
              <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span><a href="<?php echo get_bloginfo('url') ?>/tuyen-dung-viec-lam" title="Danh sách việc làm"> Việc làm </a><i class="fa fa-angle-right"></i> <?php echo get_query_var('tag'); ?>
          		<hr>
              	<div class="row">
                  	<div class="col-sm-12 ">
					<?php 
						$term_id = get_query_var('tag_id');
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 
							'post_type' => 'tuyen-dung-viec-lam' ,
							'tag_id'=> $term_id,
							'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 10,
                            'caller_get_posts'=> 1

						);
						$wp_query = new WP_Query( $args );
						if ( $wp_query->have_posts() ):
						    while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post;
						        get_template_part( 'content-tuyen-dung-viec-lam', 'category' );
						    endwhile;
						else :
						    echo 'Không tìm thấy bài viết nào trong chuyên mục này.';
						endif;
					 ?>
					</div>
				</div>                 
	        	<?php custom_pagination(); ?>
	                 <!-- END PAGINATION -->
			    <div class=" hidden-md-up" style="margin-top: 1rem;">
			       <!-- <button type="button" class="btn btn-default">xem thêm</button> -->
			       <?php echo do_shortcode('[ajax_load_more post_type="tuyen-dung-viec-lam" offset="10" pause="true" scroll="false" button_label=" Xem Thêm" button_loading_label=" Đang tải" container_type="div" posts_per_page="10"]' ); ?>
			    </div>
		</div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
                  <?php get_sidebar(); ?>
            </div>
            </div>
          </div>
      </div>
  </div>
</div>
<?php get_footer(); ?>
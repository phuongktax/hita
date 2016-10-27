<?php get_header(); ?>

<div class="content">
	<div class="container">
    	<ol class="breadcrumb">
          <li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
          <li class="active">Blog</li>
        </ol>
		<h2 class="title_detail">Blog</h2>
		<div class="list_course">
			<div class="row">
				<!-- khu vực list các bài viết -->
				<div class="col-md-8 col-sm-6 col-md-xs-12">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
                        	<div class="box_list_course">
	                        	<?php
			                        $type = 'post';
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
			                            $i = 0;
			                            while ( have_posts() ) : the_post();
			                                if ($i%2==0) {
			                                    echo '<div class="row">';
			                                }
			                                get_template_part( 'content', 'category' );
			                                if ($i%2==1) {
			                                    echo '</div>';
			                                }
			                                $i++;
			                            endwhile;
			                            unset($i);
			                        else :
			                            echo 'Không tìm thấy bài viết nào trong chuyên mục này.';
			                        endif;
								?>
							</div>
						</div>
					</div>
				</div>
				<!-- khu vực list bài viết mới nhất -->
				<div class="col-md-4 col-sm-6 col-md-xs-12">
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

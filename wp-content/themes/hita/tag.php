<?php get_header(); ?>
<section id="banner">
    <div class="banner ts-about-banner parallax-section">
        <div class="overlay"></div>
        <div class="banner-content text-xs-center">
            <h1>Kết quả kìm kiếm</h1>
            <div class="breadcrumbs">
                <a href="<?php echo get_bloginfo('url'); ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a> <i>/</i> <i><a href="resource.html">Từ khóa: </a>  </i><i> <?php echo single_tag_title(); ?></i>
            </div>
        </div>
    </div>
</section>

<div class="container">
<?php 	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );  ?>





    <!-- <ol class="breadcrumb">
        <li><a href="<?php echo get_bloginfo('url'); ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
        <li class="active"> Từ khóa: <?php echo single_tag_title(); ?></li>
    </ol> -->



<div class="parallax-section">
    <h1 class="title_detail">Từ khóa: <?php echo single_tag_title(); ?></h1>
</div>
    <div class="list_course">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9 col-xs-12">
            	

				<h3 class="title_detail">Khóa học liên quan</h3>
					<div class="row">
					<?php 
						$term_id = get_query_var('tag_id');
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 
							'post_type' => 'chuong-trinh-dao-tao',
							'tag_id'=> $term_id,
							'post_status' => 'publish',
	                        'paged' => $paged,
	                        'posts_per_page' => 10,
	                        'caller_get_posts'=> 1

						);
						$wp_query = new WP_Query( $args );
						if ( $wp_query->have_posts() ):
						    while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post;
							echo "<div class='col-sm-12 col-md-6 col-lg-6 col-sx-6'>";
						        get_template_part( 'content-khoa-hoc-hp', 'category' );
						    echo "</div>";
						    endwhile;
						else :
						    echo 'Không tìm thấy khóa học cho từ khóa đã chọn.';
						endif;
					 ?>
					 <?php custom_pagination(); ?>
					 </div>


				<h3 class="title_detail">Tài liệu liên quan </h3>
				<div class="row">
				<?php 
					$term_id = get_query_var('tag_id');
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 
						'post_type' => 'tai-lieu',
						'tag_id'=> $term_id,
						'post_status' => 'publish',
                        'paged' => $paged,
                        'posts_per_page' => 10,
                        'caller_get_posts'=> 1

					);
					$wp_query = new WP_Query( $args );
					if ( $wp_query->have_posts() ):
					    while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post;
					        // get_template_part( 'content-tai-lieu', 'category' );
						 		echo "<div class='col-sm-12 col-md-4 col-lg-4 col-sx-4'>";
                               	get_template_part( 'content-tai-lieu', 'category' );
                                echo "</div>";
					    endwhile;
					else :
					    echo 'Không tìm thấy tài liệu nào cho từ khóa này.';
					endif;
				 ?>
				 <?php custom_pagination(); ?>
				 </div>

			</div>
	        <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 ">
	           <aside id="sidebar-right" class="sidebar-right ">
                        <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3>TỪ KHÓA NỔI BẬT</h3>
                                <?php
                                wp_tag_cloud( array(  'smallest' => '0.9' ,'largest' => '1.7', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
                                ?>                            
                        </div>
                    </aside>
                    <aside id="sidebar-right" class="sidebar-right ">
                         <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3 class="sidebar_title">Thông tin học viện</h3>
                            <div class="ts-contact-infomation left ts-contact-sidebar1">
                                <h4>Trụ sở chính</h4>
                                <p>407C - Đại học Hà Nội - Nguyễn Trãi - Thanh Xuân</p>
                                <span>Email</span>: <a href="#"><span class="__cf_email__" data-cfemail="#"></span>
                                support.hita@hanu.vn</a><br>
                                <span>Phone</span>: (+84) 987 654 321<br>
                                <span>Fax</span>: (+84) 43- 456-789<br>
                            </div>
                            
                        </div>
                    </aside>
	        </div>
    	</div>
    </div>
</div>
<?php get_footer(); ?>
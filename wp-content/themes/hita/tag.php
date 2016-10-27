<?php get_header(); ?>
<div class="container">
<?php 	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );  ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo get_bloginfo('url'); ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
        <li class="active"> Từ khóa: <?php echo single_tag_title(); ?></li>
    </ol>
    <h2 class="title_detail">Từ khóa: <?php echo single_tag_title(); ?></h2>
    <div class="list_course">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-md-xs-12">
            	<h2 class="title_detail">Tin tuyển dụng liên quan </h2>
				<?php 
					$term_id = get_query_var('tag_id');
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 
						'post_type' => 'tuyen-dung-viec-lam',
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
					    echo 'Không tìm thấy tin tuyển dụng nào cho từ khóa này.';
					endif;
				 ?>
				 <?php custom_pagination(); ?>

					 <h2 class="title_detail">Khóa học liên quan</h2>
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
						        get_template_part( 'content-khoa-hoc', 'category' );
						    endwhile;
						else :
						    echo 'Không tìm thấy khóa học cho từ khóa đã chọn.';
						endif;
					 ?>
					 <?php custom_pagination(); ?>
			</div>
	        <div class="col-lg-4 col-md-12 col-sm-12 col-md-xs-12 ">
	            <div class="box_list_promotion">
	                <h2>DANH MỤC VIỆC LÀM</h2>
	                <div class="list_promotion">
	                    <ul class=" media box_promotion">
	                    <?php 
	                        $args = array(
	                      'show_option_all'    => '',
	                      'orderby'            => 'name',
	                      'order'              => 'ASC',
	                      'style'              => 'list',
	                      'show_count'         => 0,
	                      'hide_empty'         => 1,
	                      'use_desc_for_title' => 1,
	                      'child_of'           => 0,
	                      'feed'               => '',
	                      'feed_type'          => '',
	                      'feed_image'         => '',
	                      'exclude'            => '40, 41, 42',
	                      'exclude_tree'       => '',
	                      'include'            => '',
	                      'hierarchical'       => 1,
	                      'title_li'           => __( '' ),
	                      'show_option_none'   => __( '' ),
	                      'number'             => null,
	                      'echo'               => 1,
	                      'depth'              => 0,
	                      'current_category'   => 0,
	                      'pad_counts'         => 0,
	                      'taxonomy'           => 'category',
	                      'walker'             => null
	                        );
	                        wp_list_categories( $args );
	                    ?>
	                     </ul>
	                </div>
	            </div>
	            <!-- TẠM THỜI ẨN THÔNG TIN KHUYẾN MẠI -->
	            <!-- <div class="box_list_promotion">
	                <h2>TIN TỨC KHUYẾN MẠI</h2>
	                <div class="list_promotion">
	                    <?php
	                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	                        $args = array(
	                            'post_status' => 'publish',
	                            'category_name' => "khuyen-mai",
	                            'showposts' => 5,
	                            'caller_get_posts'=> 1
	                        );
	                       $temp = $wp_query;
	                       $wp_query= null;
	                        $wp_query = new WP_Query( $args );
	                        if ( $wp_query->have_posts() ) :
	                            while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post;
	                          ?>
	                                <div class="media box_promotion">
	                                    <div class="media-left">
	                                        <?php the_post_thumbnail( array(80, 40), array( 'class' => 'media-object' ) ); ?>
	                                    </div>
	                                    <div class="media-body">
	                                        <a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
	                                            <?php the_title();?>
	                                        </a>
	                                    </div>
	                                </div>
	                                <?php
	                            endwhile;
	                        endif;
	                    ?>
	                </div>
	            </div> -->
	            <!-- End thông tin khuyến mại -->
                <div class="list_menu_other">
                    <ul>
                        <?php
        	                $wp_query = new WP_Query( 'post_type=chuong-trinh-dao-tao&order=desc&posts_per_page=5' );
        	                if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
        	                    <li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
        	                <?php endwhile; endif;?>
                    </ul>
                </div>
	            <div class="tag_noibat">
	                <h3>TỪ KHÓA NỔI BẬT</h3>
	                <?php
	                wp_tag_cloud( array(  'smallest' => '1.5' ,'largest' => '1.5', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
	                ?>
	            </div>
	        </div>
    	</div>
    </div>
</div>
<?php get_footer(); ?>
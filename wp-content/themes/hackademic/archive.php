<?php get_header(); ?>
<div id="content">
    <div class="ts-promotional-banner2 parallax-section">
        <div class="container">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xs-12">
                <?php $cat = get_category( get_query_var( 'cat' ) ); ?>
                <h3><?php echo $cat->name; ?></h3>
                <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span><a href="<?php echo get_bloginfo('url') ?>/tuyen-dung-viec-lam" title="Danh sách việc làm"> Tuyển Dụng và Việc Làm</a> <span> <i class="fa fa-angle-right"></i> </span> <?php echo $cat->name; ?>
                <hr>
                <div class="row">
                    <div class="col-sm-12 ">
                    <?php 
                        $cat = get_category( get_query_var( 'cat' ) );
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'tuyen-dung-viec-lam',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'cat' => $cat->term_id,
                            'posts_per_page' => 2,
                            'caller_get_posts'=> 1
                        ); 
                       
                        $wp_query = new WP_Query( $args );
                        if ( $wp_query->have_posts() ) :
                            while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post;
                                get_template_part( 'content-tuyen-dung-viec-lam', 'category' );
                            endwhile;
                        endif;
                    ?>
                    </div>

                    <?php //ustom_pagination(); ?>
                    <?php // next_posts_link() usage with max_num_pages
                        next_posts_link( 'Older Entries', $wp_query->max_num_pages );
                        previous_posts_link( 'Newer Entries' ); ?>
                     <!-- END PAGINATION -->
                    <div class=" hidden-md-up" style="margin-top: 1rem;">
                       <!-- <button type="button" class="btn btn-default">xem thêm</button> -->
                       <?php echo do_shortcode('[ajax_load_more post_type="tuyen-dung-viec-lam" offset="10" pause="true" scroll="false" button_label=" Xem Thêm" button_loading_label=" Đang tải" container_type="div" posts_per_page="10"]' ); ?>
                    </div>

                    <?php wp_reset_query(); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xs-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>

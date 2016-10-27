<?php get_header(); ?>
 

<div id="content">
    <div id="container_full">
        <div class="ts-promotional-banner2 parallax-section">
            <div class="container">
                <div class="container">
                    <h3>Chương trình đào tạo</h3>
                    <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span> Chương trình đào tạo
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ts-wrapper">
                            <div class="ts-promotional-banner2-main parallax-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="inner-row clearfix">
                                        <div class="card-columns">
                                        <?php
                                              $type = 'chuong-trinh-dao-tao';
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
                                                    get_template_part( 'content-khoa-hoc', 'category' );
                                                endwhile;
                                            else :
                                                echo 'Không tìm thấy bài viết nào trong chuyên mục này.';

                                            endif;
                                        ?>
                                        </div>    
                                        </div>
                                        
                                        <!-- PAGINATION -->
                                        <center>
                                            <div class=" hidden-md-up" style="margin-top: 1rem;">
                                               <!-- <button type="button" class="btn btn-default">xem thêm</button> -->
                                               <?php echo do_shortcode('[ajax_load_more post_type="chuong-trinh-dao-tao" offset="10" pause="true" scroll="false" button_label=" Xem Thêm" button_loading_label=" Đang tải" container_type="div"]' ); ?>

                                            </div>
                                            <?php custom_pagination(); ?>
                                        </center>
                                         <!-- END PAGINATION -->
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
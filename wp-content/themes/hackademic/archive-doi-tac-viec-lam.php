<?php get_header(); ?>
 

<div id="content">
    <div id="container_full">
        <!-- <div class="ts-promotional-banner2 parallax-section"> -->
            <div class="container">
                <div class="container"><br>
                    <!-- <h4>Danh sách đối tác</h4> -->
                    <a href="<?php echo get_bloginfo('url') ?>/" alt="trang chủ" title="Quay về trang chủ">Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span><a href="<?php echo get_bloginfo('url') ?>/doi-tac-viec-lam" alt="đối tác việc làm" title="Danh sách đối tác"> Đối Tác Việc Làm</a>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ts-wrapper">
                            <div class="ts-promotional-banner2-main parallax-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="inner-row clearfix">
                                        
                                        <?php
                                              $type = 'doi-tac-viec-lam';
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
                                                    ?>
                                                    <div id="post-1351" class="post-1351  status-publish format-standard has-post-thumbnail  blog-item">
                                                       <?php $image = get_field('logo'); ?>
                                                       <div class="date-post">
                                                          <img src="<?php echo $image['url']; ?>" alt="<?php get_field( 'company_name'); ?>"/>
                                                       </div>
                                                       <article>
                                                          <h4><a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                                                          <ul class="blog-meta">
                                                             <li><i class="fa fa-user"></i><?php echo get_field( 'company_name');?></li><br>
                                                             <li><i class="fa fa-map-marker"></i><?php echo get_field( 'address');?></li><br>        
                                                             <li><i class="fa fa-phone"></i> <?php echo get_field('phone');?></li><br>

                                                          </ul>
                                                       </article>
                                                    </div>
                                                    <?php
                                                endwhile;
                                            else :
                                                echo 'Không tìm thấy bài viết nào trong chuyên mục này.';

                                            endif;
                                        ?>
                                            
                                        </div>
                                        
                                        <!-- PAGINATION -->
                                        <center>
                                            <!-- <div class=" hidden-md-up" style="margin-top: 1rem;"> -->
                                               <!-- <button type="button" class="btn btn-default">xem thêm</button> -->
                                               <?php //echo do_shortcode('[ajax_load_more post_type="khoa-hoc-lap-trinh" offset="2" pause="true" scroll="false" button_label=" Xem Thêm" button_loading_label=" Đang tải" container_type="div"]' ); ?>
                                            <!-- </div> -->
                                            <?php  custom_pagination(); ?>
                                        </center>
                                         <!-- END PAGINATION -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
<?php get_footer(); ?>
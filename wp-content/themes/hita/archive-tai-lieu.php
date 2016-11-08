<?php
/**
 * 
 */
get_header(); ?>

<section id="banner">
    <div class="banner ts-contact-banner parallax-section">
        <div class="overlay"></div>
        <div class="banner-content text-xs-center">
            <h1>Tài nguyên học tập</h1>
            <div class="breadcrumbs"><a href="<?php echo get_home_url(); ?>">Trang chủ</a> <i>/</i> <i>Tài nguyên học tập</i></div>
        </div>
    </div>
</section>

<div id="container_full">
    <div class="ts-promotional-banner2 parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ts-wrapper">

                        <div class="ts-promotional-banner2-main parallax-section">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="inner-row clearfix">
                                    <?php
                                        $type = 'tai-lieu';
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args=array(
                                        'post_type' => $type,
                                        'post_status' => 'publish',
                                        'paged' => $paged,
                                        'posts_per_page' => 12,
                                        'caller_get_posts'=> 1
                                        );
                                        $temp = $wp_query;  // assign original query to temp variable for later use
                                        $wp_query = null;
                                        $wp_query = new WP_Query();
                                        $wp_query->query($args);
                                        if ( have_posts() ):
                                            while ( have_posts() ) : the_post();
                                                echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-3'>";
                                               get_template_part( 'content-tai-lieu', 'category' );
                                                echo "</div>";
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
                    </div>
                </div>

            </div>

            <!-- PAGINATION -->
             <center>
               <?php custom_pagination(); ?>
             </center>
             <!-- END PAGINATION -->
        </div>
    </div>           
</div>





<?php get_footer(); ?>
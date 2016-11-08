<?php
/**
 * Template Name: Trang Tin Tức Hoạt Động
 *
 * @package hackademic
 * @subpackage templates
 * @since hackademic 1.0
 */
?>
<?php get_header(); ?>

<section id="banner">
    <div class="banner ts-about-banner parallax-section">
        <div class="overlay"></div>
        <div class="banner-content text-xs-center">
            <h1>Tin tức hoạt động</h1>
            <div class="breadcrumbs"><a href="<?php echo get_home_url(); ?>">Trang chủ</a> <i>/</i> <i>Tin tức hoạt động</i></div>
        </div>
    </div>
</section>

<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                <!-- List all post here -->
                <?php
                    $type = 'post';
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args=array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 7,
                    'caller_get_posts'=> 1
                    );
                    $temp = $wp_query;  // assign original query to temp variable for later use
                    $wp_query = null;
                    $wp_query = new WP_Query();
                    $wp_query->query($args);
                    if ( have_posts() ):
                        // $i = 0;
                        while ( have_posts() ) : the_post();
                        //     if ($i%2==0) {
                        //         echo '<div class="row">';
                        //     }
                            get_template_part( 'content', 'category' );
                        //     if ($i%2==1) {
                        //         echo '</div>';
                        //     }
                        //     $i++;
                        endwhile;
                        // unset($i);
                    else :
                        echo 'Không tìm thấy bài viết nào trong chuyên mục này.';
                    endif;
                ?>

                <!-- PAGINATION -->
                 <center>
                   <?php custom_pagination(); ?>
                 </center>
                 <!-- END PAGINATION -->
            </div>

            <!-- right navbar -->
            <aside id="sidebar-right" class="sidebar-right col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <div id="recent-posts-2" class="module widget_recent_entries">
                        <h3 class="sidebar_title">TIN MỚI NHẤT</h3>
                        <ul>
                            <?php
                                $wp_query = new WP_Query( 'post_type=post&order=desc&posts_per_page=5' );
                                if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
                                    <li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; endif;?>
                        </ul> 
                      
                    </div>
                    <div id="recent-posts-2" class="module widget_recent_entries">
                        <h3 class="sidebar_title">KHÓA HỌC MỚI NHẤT</h3>
                        <ul>
                            <?php
                                $wp_query = new WP_Query( 'post_type=chuong-trinh-dao-tao&order=desc&posts_per_page=5' );
                                if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
                                    <li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; endif;?>
                        </ul> 
                    </div>
                    <div id="recent-posts-2" class="module widget_recent_entries">
                        <h3>TỪ KHÓA NỔI BẬT</h3>
                                <?php
                                wp_tag_cloud( array(  'smallest' => '0.9' ,'largest' => '1.7', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
                                ?> 
                    </div>

            </aside>

        </div>
    </div>
</div>








<?php get_footer(); ?>
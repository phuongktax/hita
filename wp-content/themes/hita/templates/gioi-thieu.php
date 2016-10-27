<?php
/**
 * Template Name: Trang giới thiệu
 *
 * @package hackademic
 * @subpackage templates
 * @since hackademic 1.0
 */
?>
<?php get_header(); ?>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i>  Trang chủ</a></li>
            <li class="active">Đội ngũ</li>
        </ol>
        <h2 class="title_detail">Đội ngũ giảng viên</h2>
        <div class="list_expert">
            <div class="row">
            <?php
                $type = 'giang-vien';
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args=array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => -1,
                    'caller_get_posts'=> 1
                );
                $temp = $wp_query;  // assign original query to temp variable for later use
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query($args);
            if ( have_posts() ):
                while ( have_posts() ) : the_post();
                ?>
                <?php $image = get_field('photo'); ?>
                    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="box_expert">
                        <img src="<?php echo $image['url']; ?>" class="oval_img" alt="ảnh giảng viên">
                        <div class="box-giang-vien">
                            <h3> <a href="<?php the_permalink(); ?>"><?php echo get_field('name'); ?></a></h3>
                        <p><?php echo get_field('role'); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="more_expert">Xem thêm</a>
                        <div class="drop_expert_info">
                            <div class="txt_expert">
                                <p><?php echo get_field('role'); ?></p>
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/book_expert.png" alt="">
                                     Học vấn: <?php echo get_field('knowledge'); ?>
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                else :
                    echo 'Không tìm thấy bài viết nào trong mục này.';
                endif;
            ?>
            </div>
        </div>
        <h2 class="title_detail">Đội ngũ quản lý</h2>
        <div class="list_expert">
            <div class="row">
                <?php
                    $type = 'nhan-su';
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args=array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => -1,
                    'caller_get_posts'=> 1
                    );
                    $temp = $wp_query;  // assign original query to temp variable for later use
                    $wp_query = null;
                    $wp_query = new WP_Query();
                    $wp_query->query($args);
                    if ( have_posts() ):
                        while ( have_posts() ) : the_post();
                ?>
                <?php $image = get_field('photo'); ?>
                    <div class="col-xm-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="box_expert">
                        <img src="<?php echo $image['url']; ?>" class="oval_img" alt="">
                        <h3><a href="<?php the_permalink(); ?>" ><?php echo get_field('name'); ?></a></h3>
                        <p><?php echo get_field('role'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="more_expert">Xem thêm</a>
                            <div class="drop_expert_info">
                                <div class="txt_expert">
                                    <p><img src="<?php echo get_template_directory_uri(); ?>/img/work_expert.png" alt=""> Chức vụ: <?php echo get_field('role'); ?></p>
                                    <p><img src="<?php echo get_template_directory_uri(); ?>/img/book_expert.png" alt=""> Học vấn: <?php echo get_field('knowledge'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                        endwhile;
                    else :
                        echo 'Không tìm thấy bài viết nào trong chuyên mục này.';

                    endif;
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
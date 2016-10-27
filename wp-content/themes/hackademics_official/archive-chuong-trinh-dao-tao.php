<?php get_header(); ?>

<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
            <li class="active">Chương trình đào tạo</li>
        </ol>
        <h2 class="title_detail">Chương trình đào tạo</h2>
        <div class="list_course">
            <div class="row">
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
                    unset($i);
                else :
                    echo 'Không tìm thấy bài viết nào trong chuyên mục này.';
                endif;
            ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="list_course">
                <!-- PAGINATION -->
                <center>
                    <?php custom_pagination(); ?>
                </center>
                <!-- END PAGINATION -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
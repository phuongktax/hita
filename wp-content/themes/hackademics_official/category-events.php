<?php get_header(); ?>
 <div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
            <li class="active"> Events</li>
        </ol>
        <h2 class="title_detail">Events</h2>
        <div class="list_course">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="list_news_content">
                    <?php
                        $cat = get_category( get_query_var( 'cat' ) );
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'cat' => $cat->term_id,
                            'posts_per_page' => 10,
                            'caller_get_posts'=> 1
                        );
                       $temp = $wp_query;
                       $wp_query= null;
                        $wp_query = new WP_Query( $args );
                        if ( $wp_query->have_posts() ) :
                            while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post;
                                get_template_part( 'content-news', 'category' );
                            endwhile;
                        endif;
                    ?>
                    </div>
                    <?php custom_pagination(); ?>
                    <?php wp_reset_query(); ?>
                    <?php $wp_query = null; $wp_query = $temp; ?>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                    <!-- tạm thời ẩn -->
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
                    <div class="banner_right">
                        <a href="<?php echo get_post_type_archive_link( 'doi-tac-viec-lam' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/banner_right.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
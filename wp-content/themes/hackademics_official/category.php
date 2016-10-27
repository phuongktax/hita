<?php get_header(); ?>
<div class="container">
<?php $cat = get_category( get_query_var( 'cat' ) ); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
        <li><a href="<?php echo get_bloginfo('url') ?>/tuyen-dung-viec-lam" title="Danh sách việc làm"> Tuyển Dụng và Việc Làm</a> </li>
        <li class="active"><?php echo $cat->name; ?></li>
    </ol>
    <h2 class="title_detail"><?php echo $cat->name; ?></h2>
    <div class="list_course">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="list_news_content">
                <?php
                    $cat = get_category( get_query_var( 'cat' ) );
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'tuyen-dung-viec-lam',
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
                            get_template_part( 'content-tuyen-dung-viec-lam', 'category' );
                        endwhile;
                    endif;
                ?>
                </div>
                <?php custom_pagination(); ?>
                <?php wp_reset_query(); ?>
                <?php $wp_query = null; $wp_query = $temp; ?>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
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
                          'show_count'         => 1,
                          'hide_empty'         => 1,
                          'use_desc_for_title' => 1,
                          'child_of'           => 0,
                          'exclude'            => '40, 41, 42',
                          'title_li'           => __( '' ),
                          'hierarchical'       => 1,
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
                <div class="tag_noibat">
                    <h3>TỪ KHÓA NỔI BẬT</h3>
                    <?php
                    wp_tag_cloud( array(  'smallest' => '1.5' ,'largest' => '1.5', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>

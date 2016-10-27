<?php get_header(); ?>
 <div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
            <li class="active"> Tin Tuyển Sinh</li>
        </ol>
        <h2 class="title_detail">Tin Tuyển Sinh</h2>
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
                    <div class="banner_right">
                        <div class="box_list_promotion">
                            <h2>BÀI VIẾT MỚI NHẤT</h2>
                            <div class="list_promotion">
                                <?php
                                 $args = array( 'post_status' => 'publish', 'category_name' => "tin-tuyen-sinh", 'showposts' => 5, 'caller_get_posts'=> 1 );
                                $temp = $wp_query;
                                $wp_query= null;
                                $wp_query = new WP_Query( $args );
                                if ( $wp_query->have_posts() ) :
                                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ;
                                  ?>
                                        <div class="media box_promotion">
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                    <div class="media-left">
                                                        <?php $post_object = get_field('khoa-hoc-lien-ket');
                                                        if( $post_object ):
                                                            $post = $post_object;
                                                            setup_postdata( $post );
                                                        ?>
                                                            <img src="<?php echo get_field('pic') ?> " class="img-responsive" alt="Hình đại diện khóa học">
                                                            
                                                        <?php endif; ?>
                                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                                    </div>
                                                </div>
                                                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                    <div class="media-body">
                                                        <a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
                                                            <?php the_title();?>
                                                        </a>
                                                        <div class="icon_time"><i class="fa fa-clock-o"></i>
                                                            <?php echo get_the_date(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;
                            ?>
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
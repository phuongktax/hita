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
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i>  Trang chủ</a></li>
            <li class="active">Tin Tức Hoạt Động</li>
        </ol>
        <h2 class="title_detail">Tin Tức Hoạt Động</h2>
        <div class="list_course">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="list_news_content">
                    <?php
                        echo do_shortcode( "[custom-facebook-feed  num=10 id=Hackademicshanoi showsharelink=true sharelinktext='Chia sẻ bài viết này']"); ?>
                    </div>
                    <div class="test"></div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
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
                            <div class="list_menu_other">
                                <ul>
                                    <?php
                                        $wp_query = new WP_Query( 'post_type=chuong-trinh-dao-tao&order=desc&posts_per_page=5' );
                                        if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
                                            <li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                        <?php endwhile; endif;?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                            <div class="tag_noibat">
                                <h3>TỪ KHÓA NỔI BẬT</h3>
                                <?php
                                wp_tag_cloud( array(  'smallest' => '1.5' ,'largest' => '1.5', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

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
    <div class="container">
        <div class="ts-teams-choose-options parallax-section">
            <h3>Đội ngũ</h3>
            <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span> Đội ngũ
            <hr>
            <div class="row">
                <div class="col-sm-12  ">
                    <div class="ts-wrapper">
                        <div class="ts-section-title  text-xs-center">
                            <a href="<?php echo get_bloginfo('url') ?>/giang-vien/" title="Đội Ngũ Giảng Viên"><h3>Đội Ngũ Giảng Viên</h3></a>
                        </div>
                        
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
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <div class="ts-wrapper">
                                            <div class="team-item team-item-style1 text-xs-center  ">
                                                <figure>
                                                  <a href="<?php echo the_permalink(); ?>" title="<?php echo get_field('name'); ?>">
                                                    <img  src="<?php echo $image['url']; ?>" alt="<?php echo get_field('name'); ?>"/>
                                                  </a>
                                                </figure>
                                                <a href="<?php echo the_permalink(); ?>" title=""><h4><ELEMENT><?php echo get_field('name'); ?></ELEMENT></h4></a>
                                                <span><?php echo get_field('knowledge'); ?></span>
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
            </div>
            <div class="divider ts-divider-text ">
                <div class="divider-content">
                    <span class="text"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12  ">
                    <div class="ts-wrapper">
                        <div class="ts-section-title  text-xs-center">
                            <a href="<?php echo get_bloginfo('url') ?>/nhan-su/" title="Đội Ngũ Quản Lý và Nhân Sự"><h3>Đội Ngũ Quản Lý và Nhân Sự Công Ty</h3></a>
                        </div>
                        
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
                                        <div class="col-sm-12 col-md-6  col-lg-3">
                                            <div class="ts-wrapper">
                                                <div class="team-item team-item-style1 text-xs-center  ">
                                                    <figure>
                                                      <a href="<?php echo the_permalink(); ?>" title="<?php echo get_field('name'); ?>">
                                                        <img  src="<?php echo $image['url']; ?>" alt="<?php echo get_field('name'); ?>"/>
                                                      </a>
                                                    </figure>
                                                    <a href="<?php echo the_permalink(); ?>" title=""><h4><ELEMENT><?php echo get_field('name'); ?></ELEMENT></h4></a>
                                                    <span><?php echo get_field('role'); ?></span>
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
        </div>
    </div>
</div>
<hr>

<?php get_footer(); ?>
<?php
/**
 * Template Name: Hackademic Front Page
 *
 */
get_header(); ?>
<?php echo do_shortcode('[mpsl slider_home_page]'); ?>
<?php echo do_shortcode('[page-content-sc id=""]'); ?>
<!-- <div id="co-so-vat-chat" class="csvc"> -->
    <!-- <h2 class="title_body">CƠ SỞ VẬT CHẤT</h2> -->
    <?php //echo do_shortcode('[mpsl slider_co_so_vat_chat]'); ?>
<!-- </div> -->
<div class="method">
    <div class="container">
        <h2 class="title_body">PHƯƠNG PHÁP ỨNG TUYỂN / THAM GIA KHÓA HỌC</h2>
        <div class="row">
                <div class="box_medthod col-md-4 col-sm-4 col-xs-12">
                    <div class="title_mothod"><span class="icon_method">1</span>
                        <span class="txt_title_modthod">Tìm hiểu</span>
                    </div>
                    <div class="list_method">
                    <h5>Để nhận được tư vấn về khoá học quan tâm:</h5>
                        <ul>
                            <li>Duyệt tìm trên trang của Hackademicshanoi.</li>
                            <li>Liên hệ <a href="/lien-he" title="Liên hệ Hackademics Hanoi">ở đây</a> hoặc điện thoại tới <a href="tel:<?php echo get_option('so_may_ban'); ?>" title="Tạo cuộc gọi"><?php echo get_option('so_may_ban');?></a>.</li>
                        </ul>
                    </div>
                    <p><a href="http://hackademicshanoi.vn/huong-dan-dang-ky#buoc-1" class="method-detail-link">Xem chi tiết</a><p>
                </div>
                <div class="box_medthod col-md-4 col-sm-4 col-xs-12">
                    <div class="title_mothod"><span class="icon_method">2</span>
                        <span class="txt_title_modthod">Đăng ký</span>
                    </div>
                    
                    <div class="list_method">
                    <h5>Đăng ký khoá học hết sức đơn giản theo một trong các cách sau:</h5>
                        <ul>
                            <li>Nhấn nút đăng ký ở khoá học tương ứng.</li>
                            <li>Gọi điện đến văn phòng tuyển sinh và truyền đạt mã / tên khoá học.</li>
                            <li>Trực tiếp tại văn phòng tuyển sinh: <?php echo get_option('van_phong_tuyen_sinh'); ?>.</li>
                        </ul>
                    </div>
                    <p><a href="http://hackademicshanoi.vn/huong-dan-dang-ky#buoc-2" class="method-detail-link">Xem chi tiết</a><p>
                </div>
                <div class="box_medthod col-md-4 col-sm-4 col-xs-12">
                    <div class="title_mothod"><span class="icon_method">3</span>
                        <span class="txt_title_modthod">Nhập học</span>
                    </div>
                    <div class="list_method">
                    <h5>Văn phòng tuyển sinh sẽ hướng dẫn bạn nhanh gọn thủ tục:</h5>
                        <ul>
                            <li>Nộp hồ sơ theo hướng dẫn.</li>
                            <li>Đóng học phí. (Bạn có coupon hoặc học bổng sẽ được giảm trừ).</li>
                            <li>Tham gia học tập.</li>
                        </ul>
                    </div>
                    <p><a href="http://hackademicshanoi.vn/huong-dan-dang-ky#buoc-3" class="method-detail-link">Xem chi tiết</a><p>
                </div>
        </div>
    </div>
</div>

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h2 class="title_body">TIN TỨC HOẠT ĐỘNG</h2>
                <?php echo do_shortcode("[custom-facebook-feed showfacebooklink=false showsharelink=false]"); ?>
                <h4 class="title_body"><a href="<?php echo get_bloginfo('url') ?>/tin-tuc-hoat-dong">Xem Thêm</a></h4>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h2 class="title_body">TIN TUYỂN SINH</h2>
                <!-- <div class="img-news">
                    <img src="http://hackademicshanoi.vn/wp-content/uploads/2016/03/img_event.png" alt="" class="img-responsive">
                </div> -->
                <div class="list_news">
                    <ul>
                        <?php
                            $args = array( 'post_status' => 'publish', 'category_name' => "tin-tuyen-sinh", 'showposts' => 5, 'caller_get_posts'=> 1 );
                            $temp = $wp_query;
                            $wp_query= null;
                            $wp_query = new WP_Query( $args );
                            if ( $wp_query->have_posts() ) :
                                while ( $wp_query->have_posts() ) : $wp_query->the_post(); global $post;
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
                                                    <h5><a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
                                                        <?php the_title();?>
                                                    </a></h5>
                                                    <?php 
                                                    $post_object = get_field('khoa-hoc-lien-ket');
                                                    if( $post_object ):
                                                        $post = $post_object;
                                                        setup_postdata( $post );
                                                    ?>
                                                       <p>Khoá học: 
                                                            <a href="<?php the_permalink(); ?>" title="<?php echo get_field('short_description'); ?>">
                                                                <?php the_title(); ?>
                                                            </a>
                                                        </p>
                                                                
                                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                                    <?php endif; ?>
                                                    <div class="icon_time">
                                                        <sub><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></sub>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                              <?php
                                endwhile;
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="partner">
    <div class="container">
        <div class="row">
            <div id="doi-tac-viec-lam" class="col-md-12 col-sm-12">
                <h2 class="title_body">ĐỐI TÁC VIỆC LÀM</h2>
                <!-- <div class="list_partner"> -->
                    <div class="row">
                        <?php
                            $wp_query = new WP_Query( 'post_type=doi-tac-viec-lam&order=desc&posts_per_page=10' );
                            if( $wp_query->have_posts() ) :
                                while( $wp_query->have_posts() ):$wp_query->the_post();
                            ?>
                                <?php $image = get_field('logo'); ?>
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                        <div class="img_partner">
                                        <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
                                        <img
                                        src="<?php echo $image['url']; ?>"
                                        alt="<?php echo the_title(); ?>"
                                        title="<?php echo strip_tags(the_title()); ?> &#013;Địa chỉ: <?php echo strip_tags(get_field( 'address')); ?> &#013;Số điện thoại <?php echo strip_tags(get_field( 'phone')); ?> &#013;Website: <?php echo strip_tags(get_field( 'website')); ?> &#013;Giới thiệu: <?php echo strip_tags(get_field( 'introduction')); ?> &#013;
                                        "/></a>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


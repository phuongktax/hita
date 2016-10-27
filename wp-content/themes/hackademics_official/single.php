<?php get_header(); ?>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li><a href="<?php echo get_bloginfo('url') ?>/tin-tuyen-sinh" title="Tin tuyển sinh"> Tin Tuyển Sinh</a></li>
            <li class="active"><?php the_title(); ?></li>
        </ol>
        <h2 class="title_detail"><?php the_title(); ?></h2>
        <div class="list_course">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-md-xs-12">
                        <?php if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                $post_object = get_field('khoa-hoc-lien-ket');
                                if( $post_object ):
                                    $post = $post_object;
                                    setup_postdata( $post );
                                ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="<?php echo get_field('pic') ?> " class="img-responsive" alt="Hình đại diện khóa học">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="right_detail_course_txt">
                                        <div class="tt_course">
                                        <p>
                                            Khoá học: <a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                        </p>
                                            <?php echo get_field("status"); ?>

                                            </div>
                                            <?php
                                            $status = get_field("status");
                                            if ($status != '(Chuẩn bị tuyển sinh)'):
                                                    $title_subject ="Đăng ký khóa học: ";
                                                    $button_label= '<i class="fa fa-graduation-cap"></i> ĐĂNG KÝ HỌC';
                                                else:
                                                    $title_subject = "Câu hỏi về khóa học: ";
                                                    $button_label ='<i class="fa fa-comments"></i> LIÊN HỆ';
                                                endif;
                                            ?>
                                            <div class="price_other_detail">
                                                <p class="price_course">Học phí: <span><?php echo get_field('fee'); ?></span></p>
                                                <p class="more_other"><?php echo get_field('discount'); ?></p>
                                                <p class="price_course">Hot line <span><?php echo get_field('hot_line'); ?></span></p>
                                                <div class="register-form">
                                                    <form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
                                                        <input type="hidden" name="foo"  value="<?php echo $title_subject; ?> <?php the_title();?>">
                                                        <button type="submit" class="btn_price_detail"  data-toggle="modal" data-target="#myModal1">
                                                            <?php echo $button_label; ?>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                <?php endif; ?>
                                <div>
                                    <?php the_content(); ?>
                                </div>
                                <?php
                                
                            endwhile;
                        else: ?>
                        <?php _e('Không tìm thấy bài viết!');
                        endif;
                        ?>
                </div>
                <div class="col-md-4 col-sm-6 col-md-xs-12">
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
<?php get_footer(); ?>

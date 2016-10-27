<?php get_header(); ?>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="active">Tuyển dụng việc làm</li>
        </ol>
        <h2 class="title_detail">Tuyển dụng việc làm</h2>
        <div class="list_course">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="list_news_content">
                    <?php if (isset($_GET['partner_id'])): 
                        $partner = get_post($_GET['partner_id']);
                        // echo $partner->post_title

                        $arg = array(
                           'post_type' => 'doi-tac-viec-lam',
                            'post_id' => $_GET['partner_id']
                         ); 
                        // global $post;
                        $pn = new WP_Query( $arg);
                            if ($pn->have_posts()):
                             $pn->post_title();
                                 $args=array(
                                      'post_type' => 'tuyen-dung-viec-lam',
                                      'post_status' => 'publish',
                                      'meta_key' => 'cong-ty', 'meta_value' => $_GET['partner_id'],
                                      'paged' => $paged,
                                      'posts_per_page' => 7,
                                      'caller_get_posts'=> 1
                                    );
                                 $temp = $wp_query;  // assign original query to temp variable for later use
                                 $wp_query = null;
                                 $wp_query = new WP_Query();
                                 $wp_query->query($args);
                                 if ( have_posts() ):
                                     while ( have_posts() ) : the_post();
                                        get_template_part( 'content-tuyen-dung-viec-lam', 'category' );
                                     endwhile;
                                     custom_pagination();
                                 else :
                                    echo '<h4> Hãy liên hệ với chúng tôi để hỏi về việc làm của đối tác '.$partner->post_title.'</h4>';
                                     echo do_shortcode('[contact-form-7 id="887" title="Liên hệ việc làm của đối tác"]');
                                 endif;
                            else:
                              echo 'Không tìm thấy kết quả cho yêu cầu đã gửi.';
                            endif;
                          wp_reset_postdata();
                    else:
                      $type = 'tuyen-dung-viec-lam';
                      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                      $args=array(
                          'post_type' => $type,
                          'post_status' => 'publish',
                          'paged' => $paged,
                          'posts_per_page' => 7,
                          'caller_get_posts'=> 1
                      );
                    ?>
                        <?php
                            $temp = $wp_query;  // assign original query to temp variable for later use
                            $wp_query = null;
                            $wp_query = new WP_Query();
                            $wp_query->query($args);
                            if ( have_posts() ):
                                while ( have_posts() ) : the_post();
                                   get_template_part( 'content-tuyen-dung-viec-lam', 'category' );
                                endwhile;
                            else :
                                echo 'Không tìm thấy bài viết nào trong chuyên mục này.';
                            endif;
                        ?>
                        <?php custom_pagination(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="box_list_promotion">
                        <h2>DANH MỤC VIỆC LÀM</h2>
                        <div class="list_hr_link">
                            <ul>
                            <?php 
                                $args = array(
                              'show_option_all'    => '',
                              'orderby'            => 'name',
                              'order'              => 'ASC',
                              'style'              => 'list',
                              'show_count'         => 0,
                              'hide_empty'         => 1,
                              'use_desc_for_title' => 1,
                              'child_of'           => 0,
                              'feed'               => '',
                              'feed_type'          => '',
                              'feed_image'         => '',
                              'exclude'            => '40, 41, 42',
                              'exclude_tree'       => '',
                              'include'            => '',
                              'hierarchical'       => 1,
                              'title_li'           => __( '' ),
                              'show_option_none'   => __( '' ),
                              'number'             => null,
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
                    <div class="box_list_promotion">
                        <h2>TIN TỨC TUYỂN DỤNG MỚI NHẤT</h2>
                        <div class="list_hr_link">
                            <?php
                                $type = 'tuyen-dung-viec-lam';
                                $args=array(
                                    'post_type' => $type,
                                    'post_status' => 'publish',
                                    'showposts' => 5,
                                    'caller_get_posts'=> 1
                                );
                                $temp = $wp_query;  // assign original query to temp variable for later use
                                $wp_query = null;
                                $wp_query = new WP_Query();
                                $wp_query->query($args);
                                if ( have_posts() ):
                                    while ( have_posts() ) : the_post();
                                        ?>
                                        <?php
                                        $post_object = get_field('cong-ty');

                                        if( $post_object ):
                                            $post = $post_object;
                                            setup_postdata( $post );
                                            ?>
                                             <?php $company = get_field('company_name'); ?>
                                             <?php $website = get_permalink();  ?>
                                             <?php $image = get_field('logo'); ?>
                                             <?php $logo = $image['url']; ?>
                                        <?php endif; ?>
                                        <div class="media box_promotion">
                                            <div class="media-left">
                                               <img src="<?php echo $logo; ?>" alt="<?php echo $company; ?>" title="Tên Công Ty: <?php echo strip_tags($company); ?> &#013;Địa chỉ: <?php echo strip_tags(get_field( 'address')); ?> &#013;Số điện thoại <?php echo strip_tags(get_field( 'phone')); ?> &#013;Website: <?php echo strip_tags(get_field( 'website')); ?> &#013;" class="media-object doi-tac-viec-lam"/>
                                            </div>
                                            <?php wp_reset_postdata(); ?>
                                            <div class="media-body">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title();?> | Làm việc tại: <?php echo get_field( 'place');?> | Hạn nộp hồ sơ: <?php echo get_field('deadline');?> ( Click để xem chi tiết. )">
                                                    <?php the_title();?>
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                endif;
                            ?>
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
                    </div -->
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

<?php get_footer(); ?>

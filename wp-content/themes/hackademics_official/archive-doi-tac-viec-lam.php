<?php get_header(); ?>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="active">Đối tác việc làm</li>
        </ol>
        <h2 class="title_detail">Đối tác việc làm</h2>
        <div class="list_course">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="all_partner">
                        <div class="row">
                            <?php
                              $type = 'doi-tac-viec-lam';
                              $args=array(
                                'post_type' => $type,
                                'order' => 'ASC',
                                'post_status' => 'publish',
                                'caller_get_posts'=> 1
                              );
                              $temp = $wp_query;  // assign original query to temp variable for later use
                              $wp_query = null;
                              $wp_query = new WP_Query();
                              $wp_query->query($args);
                              if ( have_posts() ):
                                  while ( have_posts() ) : the_post();
                                      ?>
                                     <?php $image = get_field('logo'); ?>
                                      <div class="col-md-4 col-sm-6 col-xm-12 col-lg-3">
                                          <div class="box_partner">
                                              <div class="img-partner">
                                              <a href="<?php the_permalink() ;?>" >
                                                  <img src="<?php echo $image['url']; ?>" alt="Logo <?php get_field( 'company_name'); ?>">
                                                </a>
                                              </div>
                                              <div class="txt-partner">
                                              <div class="partner-description">
                                                <h4><a href="<?php the_permalink() ;?>" ><?php the_title();?></a></h4>
                                                  <p>Địa chỉ: <?php echo get_field( 'address');?></p>
                                                  <p>Điện thoại: <?php echo get_field('phone');?></p>
                                                  <p> Website: <a href="<?php echo get_field('website');?>"><?php echo get_field('website');?></a></p>
                                                  <p></p>
                                                  <?php if(get_post_meta($post->ID, 'so-luong-nhan-su', true)): ?>
                                                      <p>Số lượng nhân sự:  <?php echo get_field( 'so-luong-nhan-su');?></p>
                                                  <?php endif; ?>
                                                  </div>
                                                  <div id="partner-btn" class="partner-btn row">
                                                      <div class="col-md-6 col-sm-6 col-xs-5">
                                                          <a class="btn_more_detail center" href="<?php the_permalink() ;?>" ><i class="fa fa-info-circle"></i> CHI TIẾT</a>
                                                      </div>
                                                      <?php 
                                                          $arg=array(
                                                           'post_type' => 'tuyen-dung-viec-lam',
                                                           'post_status' => 'publish',
                                                           'meta_key' => 'cong-ty', 'meta_value' => $post->ID ,
                                                           'showposts' => 1
                                                            );
                                                            $temp = $wp_query;  // assign original query to temp variable for later use
                                                            $wp_query = null;
                                                            $wp_query = new WP_Query();
                                                            $wp_query->query($arg);
                                                            if ( $wp_query->have_posts() ):
                                                        ?>
                                                              <div class="col-md-6 col-sm-6 col-xs-7">
                                                                <a class="btn_price_detail center" href='<?php echo get_bloginfo('url');?>/tuyen-dung-viec-lam?partner_id=<?php echo get_the_ID() ?>' ><i class="fa fa-info-circle"></i> VIỆC LÀM</a>
                                                              </div>
                                                              <?php
                                                            else:
                                                            ?>
                                                              <div class="col-md-6 col-sm-6 col-xs-7">
                                                              <form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
                                                                  <?php $title_subject = "Liên hệ với đối tác của chúng tôi: ";?>
                                                                  <input type="hidden" name="foo"  value="<?php echo $title_subject; ?><?php the_title();?>">
                                                                  <button type="submit" class="btn_price_detail">
                                                                      <i class="fa fa-info-circle"></i> LIÊN HỆ</a> 
                                                                  </button>

                                                              </form>
                                                              </div>
                                                            <?php
                                                            endif;
                                                            $wp_query = $temp;
                                                             ?>
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
                <div class="ol-md-12 col-sm-12 col-xs-12 ">
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
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
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
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
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
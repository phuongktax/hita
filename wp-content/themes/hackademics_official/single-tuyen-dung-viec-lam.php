<?php get_header(); ?>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url'); ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li> <a href="<?php echo get_post_type_archive_link('tuyen-dung-viec-lam'); ?> "> Tuyển dụng việc làm </a></li>
            <li class="active">
                <?php the_title(); ?>
            </li>
        </ol>
        <h2 class="title_detail"><?php the_title(); ?></h2>
        <div class="list_course">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <?php
                        $post_object = get_field('cong-ty');
                        if( $post_object ):
                            $post = $post_object;
                            setup_postdata( $post );
                        ?>
                            <?php $image = get_field('logo'); ?>
                            <?php $logo = $image['url']; ?>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 right">
                                <img src="<?php echo $logo; ?>" alt="<?php echo $company; ?>" />
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> Website:
                                <a href="<?php echo get_field('website'); ?>" title="<?php the_title(); ?>">
                                    <?php echo get_field('website'); ?>
                                </a>
                            </div>
                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                            <p><i class="fa fa-map"> </i>
                                Địa điểm làm việc: <?php echo get_field( 'place');?>
                            </p>
                            <?php 
                          $deadline = get_field('deadline');
                          if ($deadline != ""):
                           ?>
                            <p><i class="fa fa-calendar"></i> 
                                Hạn hồ sơ: <?php echo get_field('deadline');?>
                            </p>
                        <?php endif; ?>
                            <p><i class="fa fa-tag"></i>
                                <?php the_tags('Từ khóa: ', ', '); ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                          <?php $title_subject = "Liên hệ việc làm: ";
                          $button_label= '<i class="fa fa-comment-o"></i> Liên Hệ';?>
                          <form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
                              <input type="hidden" name="foo"  value="<?php echo $title_subject; ?><?php the_title();?>">
                              <button type="submit" class="btn_price_detail">
                                  <?php echo $button_label; ?>
                              </button>
                          </form>
                      </div>
                    </div>
                    <span class="text"><h3>Chi tiết công việc</h3></span>
                    <h4><strong>Mô tả</strong></h4>
                    <?php echo get_field( 'jobdescription');?>
                    <h4><strong>Yêu cầu</strong></h4>
                    <?php echo get_field( 'requirement');?>
                    <h4><strong>Quyền lợi</strong></h4>
                    <?php echo get_field( 'quyenloi');?>
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

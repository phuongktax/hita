<?php get_header(); ?>

<section id="banner">
    <div class="banner ts-about-banner parallax-section">
        <div class="overlay"></div>
        <div class="banner-content text-xs-center">
            <h1><?php echo $post->post_title; ?></h1>
            <div class="breadcrumbs">
                <a href="index.html">Trang chủ</a> <i>/</i> <i><a href="resource.html">Tài nguyên học tập</a> / </i><i><?php echo $post->post_title; ?></i>
            </div>
        </div>
    </div>
</section>
<div class="ts-devider-top parallax-section">
    <div class="container">
        <div class="row">
            

            <div class="col-sm-12 col-md-9 col-lg-9 col-xs-12">
                <div class="ts-section-title">
                    <h2><?php echo $post->post_title; ?></h2>
                    <p>by: <strong><?php echo get_field('author'); ?></strong>
                    </p><i class="fa fa-tags fa-1x"></i> <?php the_tags(' ', ', '); ?> 
                    
                    <!-- <a href="<?php echo get_field('link')['url']; ?>" >View File</a>
                    <a download="<?php echo get_field('link')['title']; ?>" href="<?php echo get_field('link')['url']; ?>" >Download File</a> -->
                            
                </div>
                <div class="divider ts-divider-text divider-lg">
                    <div class="divider-content">
                        <span class="text"><h3><strong>Thông tin chi tiết</strong></h3></span>
                    </div>
                </div>



                <div class="ts-wrapper">
                   <!--  <h4><strong>Mô tả</strong></h4><br>
                   <p>Cuốn sách này rất phù hợp với người mới bắt đầu làm quen với java.</p>

                    <hr class="divider-hr">

                    <h4><strong>Link tải</strong></h4><br>
                      <a href="google.com">Sách học java - Ebook </a>
                      -->
                    <div class="ts-wrapper"> 
                        <?php echo get_field('doc_desc'); ?>
                    </div>
                </div>


                <hr class="divider-hr">
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12">
                <!-- <div class="doc-box"> -->
                    <div class="text-xs-center document">
                        <div class="box-doc-img">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"  class=" img-responsive">
                        </div>                             
                        <h3><?php echo $post->post_title; ?></h3>
                        <!-- <a href="" class="doc-box-link"><i class="fa fa-download"></i> Download</a>  -->
                        <a download="<?php echo get_field('link')['title']; ?>" href="<?php echo get_field('link')['url']; ?>" class="doc-box-link"><i class="fa fa-download"></i> Download</a> 
                        <!-- <a download="<?php echo get_field('link')['title']; ?>" href="<?php echo get_field('link')['url']; ?>" class="doc-box-link"><i class="fa fa-download"></i> VIew</a>  -->
                    </div>
                <!-- </div> -->
                <aside id="sidebar-left" class="sidebar-right" style="margin-top: 23px;">
                        <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3 class="sidebar_title">Các tài liệu khác</h3>
                            <ul>
                                <?php
                                    $wp_query = new WP_Query( 'post_type=tai-lieu&order=desc&posts_per_page=5' );
                                    if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
                                        <li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                    <?php endwhile; endif;?>
                            </ul> 
                        </div>
                    </aside>
                <!-- <aside id="sidebar-right" class="sidebar-right ">
                        <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3 class="sidebar_title">KHÓA HỌC MỚI NHẤT</h3>
                            <ul>
                                <?php
                                    $wp_query = new WP_Query( 'post_type=chuong-trinh-dao-tao&order=desc&posts_per_page=5' );
                                    if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
                                        <li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                    <?php endwhile; endif;?>
                            </ul>                          
                        </div>
                    </aside> -->
                <aside id="sidebar-right" class="sidebar-right ">
                        <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3>TỪ KHÓA NỔI BẬT</h3>
                                <?php
                                wp_tag_cloud( array(  'smallest' => '0.9' ,'largest' => '1.7', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
                                ?>                            
                        </div>
                    </aside>
                    <!-- <aside id="sidebar-right" class="sidebar-right ">
                         <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3 class="sidebar_title">Thông tin học viện</h3>
                            <div class="ts-contact-infomation left ts-contact-sidebar1">
                                <h4>Trụ sở chính</h4>
                                <p>407C - Đại học Hà Nội - Nguyễn Trãi - Thanh Xuân</p>
                                <span>Email</span>: <a href="#"><span class="__cf_email__" data-cfemail="#"></span>
                                support.hita@hanu.vn</a><br>
                                <span>Phone</span>: (+84) 987 654 321<br>
                                <span>Fax</span>: (+84) 43- 456-789<br>
                            </div>
                            
                        </div>
                    </aside> -->

            </div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>
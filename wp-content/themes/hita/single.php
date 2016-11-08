<?php get_header(); ?>


<section id="banner">
    <div class="banner ts-about-banner parallax-section">
        <div class="overlay"></div>
        <div class="banner-content text-xs-center">
            <h1>Tin tức hoạt động</h1>
            <div class="breadcrumbs"><a href="index.html">Trang chủ</a> <i>/</i> <i><a href="news.html">Tin tức hoạt động</a></i></div>
        </div>
    </div>
</section>

            <div class="ts-devider-top parallax-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-9 col-xs-12">
                            <h1><?php the_title(); ?></h1>
                            <ul class="blog-meta">
                              <li><i class="fa fa-user"></i><a href="#">admin</a> </li>
                              <li><i class="fa fa-folder-open"></i> <?php the_category(' ', ', '); ?></li>
                              <li><i class="fa fa-tag"></i> <?php the_tags(' ', ', '); ?></li>
                            </ul>
                                <div class="td-post-content">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="" style="margin-bottom: 30px;">
                                    <p><?php echo get_the_content(); ?></p>   
                                </div>
                        </div>
                        <!-- right navbar -->
                        <aside id="sidebar-right" class="sidebar-right col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <div id="recent-posts-2" class="module widget_recent_entries">
                                    <h3 class="sidebar_title">TIN MỚI NHẤT</h3>
                                    <ul>
                                        <?php
                                            $wp_query = new WP_Query( 'post_type=post&order=desc&posts_per_page=5' );
                                            if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
                                                <li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                            <?php endwhile; endif;?>
                                    </ul> 
                                  
                                </div>
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
                                <div id="recent-posts-2" class="module widget_recent_entries">
                                    <h3>TỪ KHÓA NỔI BẬT</h3>
                                            <?php
                                            wp_tag_cloud( array(  'smallest' => '0.9' ,'largest' => '1.7', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
                                            ?> 
                                </div>

                        </aside>
                    </div>
                </div>
            </div>

<?php get_footer(); ?>
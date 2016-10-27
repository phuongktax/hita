<aside id="sidebar-right" class="sidebar-right ">
     <div id="recent-posts-2" class="module widget_recent_entries  ts-service-style">
        <h3>Danh Mục Việc Làm</h3>
        <ul>
        <?php 
            $args = array(
          'show_option_all'    => '',
          'orderby'            => 'name',
          'order'              => 'ASC',
          'style'              => 'list',
          'show_count'         => 1,
          'hide_empty'         => 1,
          'use_desc_for_title' => 1,
          'child_of'           => 0,
          'feed'               => '',
          'feed_type'          => '',
          'feed_image'         => '',
          'exclude'            => '',
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
</aside>

<aside id="sidebar-right" class="sidebar-right">
     <div id="recent-posts-2" class="module widget_recent_entries  ts-service-style">
        <h3 class="">Tin Tuyển Dụng Mới Nhất</h3>
            
        <ul>
        <?php 

            $wp_query = new WP_Query( 'post_type=tuyen-dung-viec-lam&order=desc&posts_per_page=5' ); 
            if( $wp_query->have_posts() ) : 
                while( $wp_query->have_posts() ):$wp_query->the_post(); 
        ?>
                <li class="cat-item cat-item-2"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></li>
        <?php 
            endwhile;
        endif;
        ?>
        </ul>
    </div>
</aside>
<!-- <aside id="sidebar-right" class="sidebar-right ">
     <div id="recent-posts-2" class="module widget_recent_entries  ts-service-style">
        <h3 class="sidebar_title">Khóa học mới nhất</h3>
        <ul>
            <?php 
                //$wp_query = new WP_Query( 'post_type=khoa-hoc-lap-trinh&order=desc&posts_per_page=3' ); 
                //if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); 
            ?>

                <li class="cat-item cat-item-2"><a href="<?php the_permalink() ;?>"><?php //the_title(); ?></a></li>

            <?php //endwhile; endif;?>
        </ul>
    </div>
</aside> -->
<aside class="sidebar-right ">
     <div class="module widget_recent_entries ">
     <h3>Từ Khóa Nổi Bật</h3>
        
    </div>

</aside>
<div id="widgettagcloud">
    <?php
    wp_tag_cloud( array(  'smallest' => '1' ,'largest' => '1.5', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
    ?>
    </div>
<aside id="sidebar-right" class="sidebar-right ">

<?php echo do_shortcode('[simple-social-share]'); ?>
</aside>
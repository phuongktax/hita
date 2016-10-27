<?php get_header(); ?>
<div class="content">
   <div class="container">
        <ol class="breadcrumb">
           <li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
           <li><a href="<?php echo get_bloginfo('url') ?>/doi-ngu" title="giảng viên"> Đội ngũ</a></li>
           <li class="active"> <?php the_title();?></li>
        </ol>
        <h2 class="title_detail"><?php the_title(); ?></h2>
        <div class="row">
        <div class="col-sm-12 col-md-8">
        	<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <?php $image = get_field('photo'); ?>
                    <img style="max-width: 100%;" src="<?php echo $image['url']; ?>" alt="<?php get_field( 'name'); ?>"/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                    <p><i class="fa fa-briefcase"></i> Chức vụ: <?php echo get_field( 'role');?></p>
                    <p><i class="fa fa-graduation-cap"></i> Học vấn <?php echo get_field('knowledge');?></p>
                    <p><?php echo get_field( 'background');?></p><br> 
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="box_list_promotion">
                <h2>ĐỘI NGŨ NHÂN SỰ</h2>
                <div class="list_hr_link">
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
                                <?php
                                $image = get_field('photo'); ?>
                                <div class="media box_promotion">
                                    <div class="media-left">
                                       <img src="<?php echo $image['url']; ?>" alt="ảnh giảng viên" class="media-object box-nhan-su"/>
                                    </div>
                                    <div class="media-body">
                                        <a href="<?php the_permalink(); ?>" title="<?php echo the_title();?>">
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
    </div>
</div>
<?php get_footer(); ?>

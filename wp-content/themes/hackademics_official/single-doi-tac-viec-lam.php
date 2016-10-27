<?php get_header(); ?>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li> <a href="<?php echo get_post_type_archive_link( 'doi-tac-viec-lam' ); ?>" title="Trang đối tác việc làm"> Đối Tác Việc Làm</a></li>
            <li class="active"><?php the_title(); ?></li>
        </ol>
        <h2 class="title_detail"><?php the_title(); ?></h2>
        <div class="list_course">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
		            	<?php $image = get_field('logo'); ?>
                        <?php $logo = $image['url']; ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 right">
                            <img src="<?php echo $logo; ?>" alt="<?php echo $company; ?>" width="170px" />
                            <?php 
                            	$phone = get_field('phone');
                            	$website = get_field('website');
                            	$address = get_field( 'address');
                            	$director = get_field('director');
                            ?>
                            
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9">
                        	<?php if (isset($address)) : ?>
                        		<p><i class="fa fa-map-marker"></i> Địa chỉ: <?php echo get_field( 'address');?> </p>
                        	<?php endif; ?>
                                <?php if (isset($website)) : ?>
                                    <p><i class="fa fa-external-link"> </i> Website:<a href="<?php echo get_field('website'); ?>" title="<?php the_title(); ?>"> <?php echo get_field('website'); ?> </a></p>
                                <?php endif; ?>
                                <?php if (isset($phone)) : ?>
                                    <p><i class="fa fa-phone"></i> Điện thoại: <a href="tel:<?php echo get_field('phone');?>"><?php echo get_field('phone');?></a>  </p>
                                <?php endif; ?>
                        	<?php if (isset($director)) : ?>
                        		<p><i class="fa fa-user"></i> Giám đốc: <?php echo get_field('director');?></p>
                        	<?php endif; ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        	<h3>Giới thiệu công ty</h3>
                        	<?php echo get_field('introduction');?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                    <!-- TẠM THỜI ẨN THÔNG TIN KHUYẾN MẠI -->
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

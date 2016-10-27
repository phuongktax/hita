<?php get_header(); ?>

<div class="ts-devider-top parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-9 col-xs-12">
                <h3><?php echo get_field( 'jobname');?></h3>
                <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span> <a href="<?php echo get_bloginfo('url') ?>/tuyen-dung-viec-lam/" title="Trang tuyển dụng và việc làm">Tuyển Dụng và Việc Làm <span></a> <i class="fa fa-angle-right"></i> </span> <?php echo get_field( 'jobname');?>
                <hr>
                <div class="ts-section-title">
                <div class="row">
                    <?php
                        $post_object = get_field('cong-ty');
                        if( $post_object ): 
                            $post = $post_object;
                            setup_postdata( $post ); 
                    ?>
                        <?php $image = get_field('logo'); ?>
                        <?php $logo = $image['url']; ?>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 right">
                            <img src="<?php echo $logo; ?>" alt="<?php echo $company; ?>"/>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            Website: <a href="<?php echo get_field('website'); ?>" title="<?php the_title(); ?>"><?php echo get_field('website'); ?></a>
                        </div>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                        <?php endif; ?>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <p><i class="fa fa-map"> </i></span> Địa điểm làm việc:  <?php echo get_field( 'place');?></p> 
                            <p><i class="fa fa-calendar"></i> Hạn hồ sơ: <?php echo get_field('deadline');?></p>
                            <p><i class="fa fa-comment-o"></i> <a href="<?php echo get_bloginfo('url') ?>/lien-he" title="Liên hệ">Liên hệ</a></p>
                            <p><i class="fa fa-tag"></i> <?php the_tags('Từ khóa: ', ', '); ?></p>
                        </div>
                    
                    </div>
                </div>
                <div class="divider ts-divider-text divider-lg">
                    <div class="divider-content">
                        <span class="text"><h4>Chi tiết công việc</h4></span>
                    </div>
                </div>
                <div class="ts-wrapper">
                    <h4><strong>Mô tả</strong></h4><br>
                    <?php echo get_field( 'jobdescription');?>

                    <hr class="divider-hr">

                    <h4><strong>Yêu cầu</strong></h4><br>
                    <?php echo get_field( 'requirement');?>

                    <hr class="divider-hr">

                    <h4><strong>Quyền lợi</strong></h4><br>
                    <?php echo get_field( 'quyenloi');?>

                </div>
                <hr class="divider-hr">
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 col-xs-12">                      
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
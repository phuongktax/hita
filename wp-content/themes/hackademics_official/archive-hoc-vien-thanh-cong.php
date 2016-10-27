<?php get_header(); ?>
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>
            <li class="active">Học viên thành công</li>
        </ol>
        <h2 class="title_detail">Học viên thành công</h2>
        <div class="list_course">
            <div class="row">
            <?php
                  $type = 'hoc-vien-thanh-cong';
                  $args=array(
                    'post_type' => $type,
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
                    <div class="col-md-4 col-md-6">
                        <div class="box_student_sucessful">
                        <?php $image = get_field('ava_pic'); ?>
                            <img src="<?php echo $image['url']; ?>" class="oval_img" alt="Ảnh học viên">
                            <h3><?php echo get_field('student_name'); ?></h3>
                            <p><?php echo get_field('position'); ?></p>
                            <p>Tốt nghiệp khóa học: <?php echo get_field('joint_course'); ?></p>
                            <div class="drop_student_info">
                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/icon_name.png" alt=""><?php echo get_field('student_name'); ?></li>
                                    <li><i class="fa fa-calendar"> </i> Ngày sinh: <?php echo get_field('DOB'); ?></li>

                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/icon_totnghiep.png" alt=""> Tốt nghiệp khóa: <?php echo get_field('joint_course'); ?></li>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/img/icon_work.png" alt=""> Vị trí: <?php echo get_field('position'); ?></li>
                                    <?php
                                        $post_object = get_field('cong-ty');
                                        if( $post_object ):
                                            $post = $post_object;
                                            setup_postdata( $post );
                                            ?>
                                            <li><img src="<?php echo get_template_directory_uri(); ?>/img/icon_building.png" alt=""> Công ty tuyển dụng: <?php the_title(); ?></li>
                                            <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </ul>
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
    </div>
    </div>
<?php get_footer(); ?>
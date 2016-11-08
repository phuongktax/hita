    <article class="ts-item-post">
        <a href="<?php the_permalink(); ?>"><figure><img src="<?php echo get_field( 'pic');?>" class="img-responsive" alt="Hình đại diện khóa học" style=""></figure></a>
        <div class="ts-main-recent-post">
        <h4><a href="#"><?php echo $post->post_title; ?></a></h4>
        <p><?php echo get_field( 'short_description');?><p>
        </div>
        <div class="ts-item-post-footer">
        <div class="lasted-blog-time">
        <a href="<?php the_permalink(); ?>"><i class="fa fa-clock-o"></i>XEM CHI TIẾT</a>
        </div>
        <a href="#"><!-- <i class="fa fa-comments-o"></i> --><span class="ts-comment-count">ĐĂNG KÝ HỌC</span></a>
        </div>
    </article>
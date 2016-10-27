<div class="ts-home1-companies-cloud parallax-section">
    <div class="container-fluid">
        <div class="col-sm-12  ">
            <div class="ts-section-title   companies-cloud-top text-xs-center">
                <h3>ĐỐI TÁC VIỆC LÀM</h3>
            </div>
            <div class="ts-client-list">
                <ul>
                    <?php 
                        $wp_query = new WP_Query( 'post_type=doi-tac-viec-lam&order=desc&posts_per_page=10' ); 
                        if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); 
                    ?>
                    <?php $image = get_field('logo'); ?>
                    <li class="client-item">
                    <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" target="_blank">
                        <img height="40" src="<?php echo $image['url']; ?>" class="attachment-client-work" alt="client-1"
                            title="Tên Công Ty: <?php echo strip_tags(the_title()); ?> &#013;Địa chỉ: <?php echo strip_tags(get_field( 'address')); ?> &#013;Số điện thoại <?php echo strip_tags(get_field( 'phone')); ?> &#013;Website: <?php echo strip_tags(get_field( 'website')); ?> &#013;Giới thiệu: <?php echo strip_tags(get_field( 'introduction')); ?> &#013;
                            "
                        /></a>
                    </li>
                    <?php endwhile; endif;?>
                </ul>
            </div>
        </div>
    </div>
</div>
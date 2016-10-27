
<div id="doi-tac-viec-lam" class="container-fluid">
	<div  class="col-sm-12 col-md-3">
		<!-- <div class="ts-section-title1 companies-cloud-top text-xs-center">
		    <h3>HỌC VIÊN THÀNH CÔNG</h3>
		</div> -->
		<div class="ts-home1-acordion parallax-section">
		    <div class="container">
		        <div class="row">
		                <div class="ts-section-title">
		                    <h3>HỌC VIÊN THÀNH CÔNG</h3>
		                </div>
		                <div class="ts-testimonial-style1 ts-list-testimonial ">
		                    <div class="ts-item-testimonial-1">
		                        
		                    </div>
		                    <div class="ts-item-testimonial-1">
		                        
		                    </div>
		                    <div class="ts-item-testimonial-1">
		                    	
		                    </div>
		                </div>
		        </div>
		    </div>
		</div>
	</div>
    <div class="col-sm-12 col-md-9">
        <div class="ts-section-title1 companies-cloud-top text-xs-center">
            <h3>ĐỐI TÁC VIỆC LÀM</h3>
        </div>
        <div class="row">
            <?php 
            $wp_query = new WP_Query( 'post_type=doi-tac-viec-lam&order=desc&posts_per_page=10' ); 
            if( $wp_query->have_posts() ) : 
                while( $wp_query->have_posts() ):$wp_query->the_post(); 
            ?>
                <?php $image = get_field('logo'); ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
                        <img class="partners"  
                        src="<?php echo $image['url']; ?>" 
                        alt="<?php echo the_title(); ?>" 
                        title="Tên Công Ty: <?php echo strip_tags(the_title()); ?> &#013;Địa chỉ: <?php echo strip_tags(get_field( 'address')); ?> &#013;Số điện thoại <?php echo strip_tags(get_field( 'phone')); ?> &#013;Website: <?php echo strip_tags(get_field( 'website')); ?> &#013;Giới thiệu: <?php echo strip_tags(get_field( 'introduction')); ?> &#013;
                        "/>
                    </a>
                </div>
        <?php 
                endwhile; 
            endif;
        ?>
        </div>
    </div>
</div>





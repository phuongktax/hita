

<div class="col-sm-12 col-md-12 col-lg-6">
    <div class="ts-wrapper">
        <div class="ts-special-offer">
            <!-- <a href="course-view_php.html" > -->
            <a href="<?php the_permalink(); ?>">
                <div class="ts-section-title text-xs-center">
                <div class="tag_img">
                    <span class="trendding-tag"><?php echo mark(get_field( 'mark')); ?></span>            
                </div>
                <h3><?php echo $post->post_title; ?></h3>
                <p><?php echo get_field( 'short_description');?></p>
                </div>
            </a>
            <div class="ts-special-offer-content">
                <div class="col-sm-12 col-sx-12  col-md-12 col-lg-5">
                    <!-- <img src="2016/03/featuredimage6.jpg" style="height: 120px;">  -->
                    <img src="<?php echo get_field( 'pic');?>" class="img-responsive" alt="Hình đại diện khóa học" style="height: 120px;">                                             
                </div>
                <div class="col-sm-12 col-sx-12  col-md-7 col-lg-7">
                    <ul>
                        <!-- <li>Tên lớp học: PHP-K1</li> -->
                        <!-- <li>Giảng viên: Nguyễn Văn Công</li>    -->
                        <?php 
                        	$a = get_field('lecture');
							// print_r($a);
							// echo "<b>".$a->post_title."</b>";
						?>
                        <li>Giảng viên: <?php echo $a->post_title; ?></li>
                        <li>Khai giảng: 11/11/2016</li>
                        <!-- <li>Lịch học: Học tối, 3 buổi /tuần</li> -->
                        <!-- <li>Giờ học: 6h/tuần</li>       -->
                        <i class="fa fa-tags fa-1x"></i> <?php the_tags(' ', ', '); ?>
                    
                    <div class="ts-offer-right">
                       
                        <a  href="<?php the_permalink() ;?>" >Xem chi tiết</a>
                    </div>  </ul>                                                                  
                </div>  

            </div>
        </div>
    </div>
</div>
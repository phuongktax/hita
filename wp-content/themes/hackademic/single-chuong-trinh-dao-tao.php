<?php get_header();
session_set_cookie_params(0);
session_start();
$_SESSION["postid"] = get_the_ID();
$_SESSION["title"] = the_title();
 ?>
<br>
<div id="container_full">
    <div class="container">
        <h3><?php the_title(); ?></h3>
        <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a>
        <span> <i class="fa fa-angle-right"></i> </span>
        <a href="<?php echo get_bloginfo('url') ?>/chuong-trinh-dao-tao" title="Danh sách khóa học"> Chương trình đào tạo</a>
        <span> <i class="fa fa-angle-right"></i> </span>
        <?php the_title(); ?>
        <br>
        <hr>
        <div class="parallax-section">
	        <div class="row">
	            <div class="col-sm-12 col-md-8">
	            	<div class="col-lg-4 hidden-md-down">
	            		<div class="ts-wrapper">
	            			<?php echo mark(get_field( 'mark')); ?>
	            		    <img class="card-img"  src="<?php echo get_field( 'pic');?>" alt="Logo khóa học">
	            		</div>
	            	</div>
	            	<div class="col-sm-12 col-md-12 col-lg-8">
	            		<div class="ts-wrapper">
	            		    <h2><?php echo $post->post_title; ?></h2>
	            		    <p><?php echo get_field( 'short_description');?></p>
	            		    <p> - Thời lượng: <?php echo get_field( 'duration');?><br>
	            		        - Học phí: <?php echo get_field( 'fee');?><br>
	            		    </p>
	            		</div>
	            	</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php echo get_field( 'discount');?>
	                	<br>
	                	<?php
	                	    $yt=get_field('clip');
	                	    if( '' != $yt){
	                	        echo 'Video giới thiệu khóa học: <br>';
	                	        // echo $GLOBALS['wp_embed']->autoembed( $yt );//youtube video iframe
	                	        echo wp_oembed_get($yt);
	                	    }
	                	?>
	                	<h3>Nội Dung khóa học</h3>
	                	<h5>Mô tả khóa học</h5>
	                	<?php echo get_field('description') ?>
	                	<h5>Nội dung chương trình học</h5>
	                	<?php echo get_field( 'outline');?>
					    <?php
					    $course =  get_the_ID();
					    $args = array (
					        'post_type'     => 'lop-hoc',
					        'showposts'     => -1,
					        'meta_query'    => array (
					            array ('key'   => 'course', 'value' => $course ),
					            array ('key'   => 'status', 'value' => 'close')
					        )
					    );
					    $the_query = new WP_Query( $args );
					    if( $the_query->have_posts() ): ?>
					    <h3>Các lớp đang học</h3>
					        <table>
					          <tr>
					            <th>Tên lớp</th>
					            <th>Thông tin lớp học</th>
					          </tr>
					        <?php while( $the_query->have_posts() ) :
					            $the_query->the_post();
					                $class = get_field('class_name');
					                $start_date = get_field('start');
					                $end_date = get_field('finish');
					                $studyhour = get_field('giohoc');
					                $timetable = get_field('lichhoc');
					             ?>

					               <tr>
					                 <th rowspan="5"><?php echo $class; ?></th>
					                 <td>Ngày khai giảng: <?php echo $start_date; ?></td>
					               </tr>
					               <tr><td>Ngày kết thúc: <?php echo $end_date; ?></td></tr>
					               <tr><td>Thời gian học: <?php echo $studyhour; ?></td></tr>
					               <tr><td>Lịch học: <?php echo $timetable; ?></td></tr>
					               <tr>
					                    <td>Giảng Viên: 
					                    <?php
					                    $post_object = get_field('teacher');
					                    if( $post_object ): 
					                        // override $post
					                        $post = $post_object;
					                        setup_postdata( $post ); 

					                        ?>
					                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					                    <?php endif; ?>
					                     </td>
					               </tr>
					        <?php endwhile; ?>
					        </table>
					    <?php endif; ?>
					    <?php wp_reset_postdata();?>
				    </div>
	            </div>

	            <div class="col-xm-12 col-sm-12 col-md-4">
	        		<?php
	        		$course =  get_the_ID();
	        		$args = array (
	        		    'post_type'     => 'lop-hoc',
	        		    'showposts'     => -1,
	        		    'meta_query'    => array (
	        		        array ('key'   => 'course', 'value' => $course ),
	        		        array ('key'   => 'status', 'value' => 'open')
	        		    )
	        		);
	        		$the_query = new WP_Query( $args );
	        		?>
	        		<?php if( $the_query->have_posts() ): ?>
	        			<aside id="sidebar-right" class="sidebar-right ">
	        			     <div class="module widget_recent_entries">
	        			        <h3 class="sidebar_title">Lớp Đang Chiêu Sinh</h3>
	        			    </div>
	        			</aside>
	    			<?php while( $the_query->have_posts() ) :
	    			  $the_query->the_post();
	    			  $class = get_field('class_name');
	    			  $start_date = get_field('start');
	    			  $end_date = get_field('finish');
	    			  $studyhour = get_post_meta($post->ID, 'giohoc', true);
	    			  $timetable = get_post_meta($post->ID, 'lichhoc', true);
	    			?>
	        		<div class="card">
	        		  <h4 class="card-header">Lớp: <?php echo $class; ?></h4>
	        		  <div class="card-block">
	            		    <ul class="list-group list-group-flush">
	            		        <li class="list-group-item">
	            		        <ul>
	            		        	<li>Khai giảng ngày: <?php echo $start_date; ?><br></li>
	            		        	<li>Kết thúc ngày: <?php echo $end_date; ?><br></li>
	            		        	<li>
	        		        		    <?php if(isset($studyhour)): ?>
	        		        		    Thời gian học: <?php echo get_field('giohoc') ?><br>
	        		        			<?php endif ?>
	            		        	</li>
	            		        	<li>
	        		        			<?php if(isset($timetable)): ?>
	        		        		    Lịch học: <?php echo get_field('lichhoc'); ?><br>
	        		        		    <?php endif ?>
	            		        	</li>
	            		        	<li>
	            		        		Giảng Viên: 
	            		        		    <?php
	            		        		    $post_object = get_field('teacher');
	            		        		    if( $post_object ):
	            		        		        // override $post
	            		        		        $post = $post_object;
	            		        		        setup_postdata( $post );

	            		        		        ?>
	            		        		        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

	            		        		    		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	            		        		    <?php endif; ?>
	            		        	</li>
	            		        </ul>
	            		    </li>
	            		    <li class="list-group-item">
	            		            <div class="text-xs-center">
		                		    <form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
					        	        <input type="hidden" name="foo"  value="Đăng ký lớp học: <?php echo $class; ?> - Khóa học: <?php the_title();?>">
					        	        <input type="hidden" name="course"  value="<?php the_title();?>">
						                <input name="submit" type="submit" id="comment_submit" class="btn btn-danger" value="Đăng ký học"/>
					        	    </form>
			        	    	</div>
	            		        </li>

			        	    </ul>
	            		</div>
            		</div>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
					<br>
				
            	    <div id="qna">
            	        <div class="qna-title"><p>BẠN HỎI - GIẢNG VIÊN TRẢ LỜI</p></div>
            	        <!-- <div class="qna-body"> -->
            	            <?php //echo do_shortcode('[contact-form-7 id="683" title="BẠN HỎI - GIẢNG VIÊN TRẢ LỜI"]'); ?>
                            <?php  //get_template_part( 'comments' );   ?>
                            <?php echo do_shortcode('[qa]');?>
                            <?php  get_template_part( 'archive-qa' );   ?>

                            <?php // echo do_shortcode('[wpdevart_facebook_comment curent_url="https://www.facebook.com/Jht-987077041379597/?skip_nax_wizard=true" order_type="social" title_text="Facebook Comment" title_text_color="#000000" title_text_font_size="22" title_text_font_famely="monospace" title_text_position="left" width="100%" bg_color="#CCCCCC" animation_effect="random" count_of_comments="2" ]'); ?>
            	        <!-- </div> -->
            	        
            	    </div>
            	    <aside id="sidebar-right" class="sidebar-right ">
            	         <div id="recent-posts-2" class="module widget_recent_entries">
            	            <h3 class="sidebar_title">Các Khóa học khác</h3>
            	            <ul>
            	                <?php 
            	                $wp_query = new WP_Query( 'post_type=chuong-trinh-dao-tao&order=desc&posts_per_page=5' ); 
            	                if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
            	                    <li class="cat-item cat-item-2"><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></li>
            	                <?php endwhile; endif;?>
            	            </ul>
            	        </div>
            	    </aside>

            	    <aside id="sidebar-right" class="sidebar-right ">
            	    <?php echo do_shortcode('[simple-social-share]'); ?>
            	    </aside> 
	    		</div>
	    	</div>
    	</div>
	</div>
</div>
<?php get_footer(); ?>
<div class="col-md-4 col-lg-4 col-sm-6 col-xm-12">
	<div class="box_list_course">
	<a href="<?php the_permalink() ;?>" >
		<div class="img_list_course">
			<img src="<?php echo get_field( 'pic');?>" class="img-responsive" alt="Hình đại diện khóa học">
			<div class="shadow_txt">
				<h4><?php echo $post->post_title; ?></h4>
			</div>
			<div class="tag_img">
				<?php echo mark(get_field( 'mark')); ?>
			</div>
		</div></a>
		<div class="txt_list_course">
			<div class="course-list-description">
				<div class="tt_course description">
					<p><?php echo get_field( 'short_description');?></p>
				</div>
				<div class="price_other_detail">
					<p class="price_course">Học phí: <span><?php echo get_field( 'fee');?></span></p>
					<p class="more_other"><?php echo get_field('discount') ?></p>
						<?php echo get_field( 'status');?>
					<p class="mt10">Từ khóa:<?php the_tags(' ', ', '); ?> </p>
				</div>
			</div>
			<div id="partner-btn" class="partner-btn row">
				<div class="col-md-6 col-sm-6 col-xs-5">
					<a class="btn_more_detail" href="<?php the_permalink() ;?>" ><i class="fa fa-info-circle"></i> CHI TIẾT</a>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-7">
				<?php 
					$status = get_field("status");
					if ($status != '(Chuẩn bị tuyển sinh)' && strlen($status) != 0):
						$title_subject ="Đăng ký khóa học: ";
						$button_label= '<i class="fa fa-graduation-cap"></i> ĐĂNG KÝ HỌC';
					else:
						$title_subject = "Câu hỏi về khóa học: ";
						$button_label ='<i class="fa fa-comments"></i> LIÊN HỆ';
					endif; ?>
					<form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
						<input type="hidden" name="foo"  value="<?php echo $title_subject; ?>: <?php the_title();?>">
						<button type="submit" class="btn_price_detail">
							<?php echo $button_label; ?>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
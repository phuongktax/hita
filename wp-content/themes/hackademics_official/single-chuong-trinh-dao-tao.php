<?php get_header(); ?>
<div class="content">
	<div class="container">
		<ol class="breadcrumb">

			<li><a href="<?php echo get_bloginfo('url') ?>/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ </a></li>

			<li><a href="<?php echo get_post_type_archive_link( 'chuong-trinh-dao-tao' ); ?>" title="Chương trình đào tạo"> Chương trình đào tạo </a></li>

			<li class="active"><?php the_title(); ?></li>
		</ol>
		<h2 class="title_detail"><?php the_title(); ?></h2>
		<?php
		$images = get_field('gallery');
		if ($images):
		?>
		<div class="banner_detail">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<div class="slider_banner_detail">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<?php $i=0; ?>
								<?php foreach( $images as $image ): ?>
									<div class="item <?php if ($i == 0) {echo 'active';} $i++;?>">
										<img src="<?php echo $image['url']; ?>" class="img-responsive" alt="ảnh khóa học">
									</div>
								<?php endforeach; ?>
							</div>
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<i class="fa fa-arrow-left glyphicon glyphicon-chevron-left"></i>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<i class="fa fa-arrow-right glyphicon glyphicon-chevron-right"></i>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="right_detail_course_txt">
						<div class="tt_course">
							<?php echo get_field("status"); ?>
						</div>
						<?php
							$status = get_field("status");
							if ($status != '(Chuẩn bị tuyển sinh)'):
								$title_subject ="Đăng ký khóa học: ";
								$button_label= '<i class="fa fa-graduation-cap"></i> ĐĂNG KÝ HỌC';
							else:
								$title_subject = "Câu hỏi về khóa học: ";
								$button_label ='<i class="fa fa-comments"></i> LIÊN HỆ';
							endif;
						?>

						<div class="price_other_detail">
							<p class="price_course">Học phí: <span><?php echo get_field('fee'); ?></span></p>
							<p class="more_other"><?php echo get_field('discount'); ?></p>
								<p class="price_course">Hot line: <span><?php echo get_field('hot_line'); ?></span></p>
							
							<div class="register-form">
								<form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
									<input type="hidden" name="foo"  value="<?php echo $title_subject; ?> <?php the_title();?>">
									<button type="submit" class="btn_price_detail"  data-toggle="modal" data-target="#myModal1">
										<?php echo $button_label; ?>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="list_course">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="row">
							<?php
							if (!$images):
							?>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<img src="<?php echo get_field('pic') ?> " class="img-responsive" alt="Hình đại diện khóa học">
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="right_detail_course_txt">
									<div class="tt_course">
										<?php echo get_field("status"); ?>
										</div>
										<?php
										$status = get_field("status");
										if ($status != '(Chuẩn bị tuyển sinh)'):
												$title_subject ="Đăng ký khóa học: ";
												$button_label= '<i class="fa fa-graduation-cap"></i> ĐĂNG KÝ HỌC';
											else:
												$title_subject = "Câu hỏi về khóa học: ";
												$button_label ='<i class="fa fa-comments"></i> LIÊN HỆ';
											endif;
										?>
										<div class="price_other_detail">
											<p class="price_course">Học phí: <span><?php echo get_field('fee'); ?></span></p>
											<p class="more_other"><?php echo get_field('discount'); ?></p>
												<p class="price_course">Hot line: <span><?php echo get_field('hot_line'); ?></span></p>
											<div class="register-form">
												<form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
													<input type="hidden" name="foo"  value="<?php echo $title_subject; ?> <?php the_title();?>">
													<button type="submit" class="btn_price_detail"  data-toggle="modal" data-target="#myModal1">
														<?php echo $button_label; ?>
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							<?php endif ?>
							<div class="col-xs-12">
								<h3 class="tit_detail">Thông tin chung</h3>
								<div class="course-description">
									<?php 
										$description =get_field('description');
										if(strlen($description) != 0) echo get_field( 'description');
									?>
									<ul>
									<?php $km = get_field( 'discount'); ?>
									<?php $time =  get_field( 'duration');?>
									<?php $hour =  get_field( 'study_hour');?>
									<?php if (strlen($km) != 0): ?>
										<!-- <li><p><?php echo get_field( 'discount');?></p></li> -->
									<?php endif; ?>
									<?php if (isset($time)): ?>
										<li><p>Thời lượng: <?php echo get_field( 'duration');?></p></li>
									<?php endif; ?>
									<?php if (strlen($hour) != 0): ?>
										<li><p>Thời gian học: <?php echo get_field( 'study_hour');?></p></li>
									<?php endif; ?>
									<?php if (has_tag( )): ?>
										<li>
											<p class="mt10">Từ khóa:<?php the_tags(' ', ', '); ?> </p>
										</li>
									<?php endif; ?>
									</ul>
								</div>
							</div>
					</div>
					<h3 class="tit_detail">Đối tượng học viên</h3>
					<div class="course-description">
						<?php echo get_field('prerequisite') ?>
					</div>
					<h3 class="tit_detail">Nội dung giảng dạy</h3>
					  <ul class="nav nav-tabs">
						<li class="active"><a href="#it" data-toggle="tab">IT Knowlege & skill</a></li>
							<li><a href="#doc" data-toggle="tab">Documentation skill</a></li>
							<li><a href="#team" data-toggle="tab">Teamworking skill</a></li>
							<li><a href="#manage" data-toggle="tab">Management skill</a></li>
							<li><a href="#attitude" data-toggle="tab">Attitude & Mental</a></li>
					  </ul>
						<div class="tab-content hidden-xs">
							<div class="tab-pane fade in active" id="it">
								<div class="course-description">
									<p><?php echo get_field( 'it_knowlege_&_skill');?></p>
								</div>
							</div>
							<div class="tab-pane fade in active" id="doc">
								<div class="course-description">
									<p><?php echo get_field( 'documentation_skill');?></p>
								</div>
							</div>
							<div class="tab-pane fade in active" id="team">
								<div class="course-description">
									<p><?php echo get_field( 'teamworking_skill');?></p>
								</div>
							</div>
							<div class="tab-pane fade in active" id="manage">
								<div class="course-description">
									<p><?php echo get_field( 'management_skill');?></p>
								</div>
							</div>
							<div class="tab-pane fade in active" id="attitude">
								<div class="course-description">
									<p><?php echo get_field( 'attitude_&_mental');?></p>
								</div>
							</div>
						</div>
					<div class="row ">
						<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2">
							<div class="price_other_detail">
								<div class="register-form">
									<form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
										<input type="hidden" name="foo"  value="<?php echo $title_subject; ?> <?php the_title();?>">
										<button type="submit" class="btn_price_detail"  data-toggle="modal" data-target="#myModal1">
											<?php echo $button_label; ?>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<p> </p>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
							<div class="box_list_promotion">
								<h2>THÔNG TIN LIÊN HỆ</h2>
								<div class="list_promotion">
									<div class="media box_promotion">
										<p>Cơ sở đào tạo: <?php echo get_option('co_so_dao_tao'); ?></p>
										<p>Văn phòng tuyển sinh: <?php echo get_option('van_phong_tuyen_sinh'); ?></p>
											<p>Điện thoại: <a href="tel:<?php echo get_option('so_may_ban'); ?>" title="Tạo cuộc gọi"><?php echo get_option('so_may_ban');?></a></a></p>
										<p>Hỗ trợ:  <a href="mailto:<?php echo get_option('email_ho_tro'); ?>"><?php echo get_option('email_ho_tro'); ?></a></p>
										<p>Email: <a href="mailto:<?php echo get_option('email_lien_he'); ?>"><?php echo get_option('email_lien_he'); ?></a></p>
									</div>
								</div>
							</div>
							<div class="list_menu_other">
								<ul>
									<?php
										$wp_query = new WP_Query( 'post_type=chuong-trinh-dao-tao&order=desc&posts_per_page=5' );
										if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
											<li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
										<?php endwhile; endif;?>
								</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
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
	</div>
</div>
<?php get_footer(); ?>
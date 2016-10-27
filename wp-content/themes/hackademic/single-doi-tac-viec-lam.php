<?php get_header(); ?>


<div class="container">
        
<!-- <a href="http://hackademicshanoi.codelovers.vn/contact/?foo=<?php the_title();?>"><button type="submit">Contact us</button></a> -->
    <br>
    <div class="col-sm-12 col-md-8 col-lg-9 col-xs-12">

		<h2><?php echo get_field( 'company_name');?></h2>
		<?php $cat = get_category( get_query_var( 'cat' ) ); ?>
		<h3><?php echo $cat->name; ?></h3>
		<a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span><a href="<?php echo get_bloginfo('url') ?>/doi-tac-viec-lam" title="Danh sách việc làm"> Đối Tác Việc Làm</a> <span> <i class="fa fa-angle-right"></i> </span> <?php echo get_field( 'company_name');?>
		<hr>

        <div id="post-1351" class="post-1351  status-publish format-standard has-post-thumbnail  blog-item">
		   <?php $image = get_field('logo'); ?>
		   <div class="date-post">
		      <img src="<?php echo $image['url']; ?>" alt="<?php get_field( 'company_name'); ?>"/>
		   </div>
		   <article>
		      <h4><a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php echo get_field( 'company_name');?></a></h4>
		      <ul class="blog-meta">
		         <!-- <li><i class="fa fa-user"></i>Tên công ty: <?php echo get_field( 'company_name');?></li><br> -->
		         <li><i class="fa fa-map-marker"></i> Địa chỉ: <p> <?php echo get_field( 'address');?> </p></li><br>        
		         <li><i class="fa fa-phone"></i> Điện thoại: <p><?php echo get_field('phone');?></p></li><br>
		         <li><i class="fa fa-external-link"></i> Website: <a href="<?php echo get_field('website');?>"><?php echo get_field('website');?></a></li><br><br>
		         <li><i class="fa fa-user"></i> Giám đốc: <?php echo get_field('director');?></li><br><br>
		         <li><i class="fa fa-file"></i> Giới thiệu công ty: <p><?php echo get_field('introduction');?></p></li><br>
					
		      </ul>
		   </article>
		</div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-3 col-xs-12">                      
        <?php get_sidebar(); ?>
    </div>
        
</div>


<?php get_footer(); ?>

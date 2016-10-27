<?php
/**
 * Template Name: Trang Hướng Dẫn
 *
 */
get_header(); ?>
<div class="content">
  <div class="container">
    <ol class="breadcrumb">
       <li><a href="#">Trang chủ</a></li>
       <li class="active">Hướng dẫn đăng ký học</li>
     </ol>
     <h2 class="title_detail">Hướng dẫn tìm kiếm và đăng ký khóa học phù hợp</h2>
  </div>

	<?php echo do_shortcode('[page-content-sc id=""]'); ?>
	
</div>
<?php get_footer(); ?>
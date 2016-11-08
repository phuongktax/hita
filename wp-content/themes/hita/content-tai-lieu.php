<!-- <div class="col-sm-12 col-md-3 col-lg-3"> -->
  <div class="doc-box">
	<div class="text-xs-center document">
	    <div class="box-doc-img">
	    	<a href="<?php the_permalink(); ?>">
	    		<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
	    	</a>
	    </div> 
	    <div style="
                
                     ">
	      <h3><?php echo $post->post_title; ?></h3>
	       <a download="<?php echo get_field('link')['title']; ?>" href="<?php echo get_field('link')['url']; ?>" class="doc-box-link"><i class="fa fa-download"></i> Download</a> 
	    </div>
	</div>
  </div>
<!-- </div> -->
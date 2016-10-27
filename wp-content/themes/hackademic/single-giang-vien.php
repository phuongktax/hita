
<?php get_header(); ?>
<div id="content">
    <div id="container_full">
        <div class="ts-promotional-banner2 parallax-section">
            <div class="container">
                <h3><?php the_title();?></h3>
                <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><span> <i class="fa fa-home"></i> </span> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span><a href="<?php echo get_bloginfo('url') ?>/doi-ngu" title="giảng viên"> Đội ngũ</a> <i class="fa fa-angle-right"></i> <?php the_title();?>
                <hr>
                  <div class="row">
                      <div class="col-sm-12"> 
                          <div class="ts-promotional-banner2-main parallax-section">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                  <?php $image = get_field('photo'); ?>
                                  <img style="max-width: 13rem" src="<?php echo $image['url']; ?>" alt="<?php get_field( 'name'); ?>"/>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                                 <div class="divider ts-divider-text divider-lg">
                                     <div class="divider-content">
                                         <span class="text"><h3><?php echo get_field( 'name');?></h3></span>
                                     </div>
                                 </div>
                                   <div class="col-sm-12 col-md-6 col-lg-6">
                                           <span><i class="fa fa-calendar"> </i></span> Ngày sinh: <?php echo get_field( 'dob');?><br>
                                            </div>
                                      <div class="col-sm-12 col-md-6 col-lg-6">                                              
                                        <span><i class="fa fa-graduation-cap"></i> Học vấn </span><?php echo get_field('knowledge');?><br>
                                         </div>
                                    <div class="col-sm-12">
                                       <p><?php echo get_field( 'background');?></p><br> 
                                    </div>
                                    
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
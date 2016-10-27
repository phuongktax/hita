  <div class="box_news_content">
      <div class="media">
          <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                  <div class="media-left">
                      <a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail( array(170, 80), array( 'class' => 'media-object news' ) ); ?>
                      </a>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
                  <div class="media-body">
                      <h4 class="media-heading">
                          <a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a>
                      </h4>
                      <p class="mt10"><?php echo $str = trim(cut_string(get_the_content(), 250)); ?></p>
                      <p class="mt10"><a href="<?php the_permalink(); ?>" class="more_news"><i class="fa fa-caret-down"></i> Xem chi tiết </a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
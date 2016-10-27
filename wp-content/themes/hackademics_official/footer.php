 <?php wp_reset_query(); ?>
    <?php 
    if (!is_front_page()) :?>
        <div class="container-fluid">
            <div class="slick-carousel">
              <?php 
                $wp_query = new WP_Query( 'post_type=doi-tac-viec-lam' ); 
                if( $wp_query->have_posts() ) : 
                    while( $wp_query->have_posts() ):$wp_query->the_post(); 
                ?>
                        <div>
                            <?php $image = get_field('logo'); ?>
                            <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" target="_blank">
                            <img height="50" src="<?php echo $image['url']; ?>" class="partner-slider" alt=""
                                title="Tên Công Ty: <?php echo strip_tags(the_title()); ?> &#013;Địa chỉ: <?php echo strip_tags(get_field( 'address')); ?> &#013;Số điện thoại <?php echo strip_tags(get_field( 'phone')); ?> &#013;Website: <?php echo strip_tags(get_field( 'website')); ?> &#013;Giới thiệu: <?php echo strip_tags(get_field( 'introduction')); ?> &#013;
                                "
                            /></a>
                        </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    <?php endif; ?>
    <div class="footer">
        <div class="map_footer">
            <div class="co_so_dao_tao">
                Cơ sở đào tạo 1:  Tầng 4, toà nhà ACCI, 210 Lê Trọng Tấn, Thanh Xuân, Hà Nội
            </div>
            <div class="iframe_map">
            	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.0992792417373!2d105.79607045084667!3d20.988657113570685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x30cf5a97471f1064!2sHanoi+University!5e0!3m2!1sen!2s!4v1457559798564" width="100%" height="100%"  frameborder="0" style="border:0" allowfullscreen></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.987592938497!2d105.83121223314585!3d20.993134453657074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac63cc90604f%3A0x74f0498a5a36a251!2zMjEwIEzDqiBUcuG7jW5nIFThuqVuLCDEkOG7i25oIEPDtG5nLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1463859285647" width="100%" height="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-7">
                <div itemscope class="address">
                <?php
                    $layout = get_option('theme_layout');
                    ?>
                    <h4>Công ty Cổ Phần Công nghệ và Đào Tạo Hackademics Hà Nội</h4>
                    <p>
                    <i class="fa fa-map-marker"></i> Cơ sở đào tạo: <?php echo get_option('co_so_dao_tao'); ?><br>
                    <i class="fa fa-building"></i> Văn phòng tuyển sinh: <?php echo get_option('van_phong_tuyen_sinh'); ?><br>
                    <i class="fa fa-phone"></i> Điện thoại: <a itemprop="phone" href="tel:<?php echo get_option('so_may_ban'); ?>" title="Tạo cuộc gọi"><?php echo get_option('so_may_ban');?></a><br>
                    <i class="fa fa-comments"></i> Hỗ trợ: <a itemprop="mail" href="mailto:<?php echo get_option('email_ho_tro'); ?>">Liên hệ qua email</a><br>
                    <i class="fa fa-envelope"></i> Email: <a href="mailto:<?php echo get_option('email_lien_he'); ?>"><?php echo get_option('email_lien_he'); ?></a><br>
                    <i class="fa fa-facebook-official"> Fanpage: <a itemprop="fanpage" href="https://www.facebook.com/Hackademicshanoi/" title="Hackademicshanoi Fanpage"> Hackademics Hanoi</i></a>
                    </p>
                    <?php echo do_shortcode('[simple-social-share]'); ?>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="container">
                <span>© 2016 Bản quyền thuộc về Hackademics Hà Nội</span>
            </div>
        </div>
    </div>
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-73295013-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script type='text/javascript'>
        $(document).ready(function(){  $('.slick-carousel').slick({ dots: false, infinite: true, variableWidth: true, arrows: false, mobileFirst: true, autoplay: true, autoplaySpeed: 1000, speed: 1000, slidesToScroll: 1 });
        });
        // same column height
        $( document ).ready(function() { var heights = $(".txt_list_course").map(function() { return $(this).height(); }).get(), maxHeight = Math.max.apply(null, heights); $(".txt_list_course").height(maxHeight);  });

        $( document ).ready(function() { var purposeboxheights = $(".box_purpose").map(function() { return $(this).height(); }).get(), maxHeight = Math.max.apply(null, purposeboxheights); $(".box_purpose").height(maxHeight); });
        $( document ).ready(function() { var patnerboxheights = $(".txt-partner").map(function() { return $(this).height(); }).get(), maxHeight = Math.max.apply(null, patnerboxheights); $(".txt-partner").height(maxHeight); });
        $(document).ready(function() {
            $('.iframe_map').click(function () {
                $('.iframe_map iframe').css("pointer-events", "auto");
            });
            $( ".iframe_map" ).mouseleave(function() {
              $('.iframe_map iframe').css("pointer-events", "none");
            });
         });
        $( document ).ready(function() { var purposeboxheights = $(".box-giang-vien").map(function() { return $(this).height(); }).get(), maxHeight = Math.max.apply(null, purposeboxheights); $(".box-giang-vien").height(maxHeight); });
         $( document ).ready(function() { var purposeboxheights = $(".list_method").map(function() { return $(this).height(); }).get(), maxHeight = Math.max.apply(null, purposeboxheights); $(".list_method").height(maxHeight); });
       
    </script>
    <script type='text/javascript'>
        $(document).ready(function() {
            var stickyNavTop = $('.main-nav').offset().top;
            var stickyNav = function(){
            var scrollTop = $(window).scrollTop();
            if (scrollTop > stickyNavTop) {
                // $('#adminbar').hide();
                $('.main-nav').addClass('sticky-logged ');
                if($(window).width() > 1023){
                    $('#logo').addClass(' sticky-logo');
                    $('#logo').height(30);
                }
            } else {
                $('.main-nav').removeClass('sticky-logged');
                 if($(window).width() > 1023){
                    $('#logo').removeClass(' sticky-logo');
                    $('#logo').height(50);
                }
            }
            };
            stickyNav();
            $(window).scroll(function() {
                stickyNav();
            });
        });
    </script>
    <?php wp_footer(); ?>
    <script type='text/javascript' >
    
        $(document).ready(function(){
            // $('.motoslider_wrapper > div').removeAttr("style");
        });
    </script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/tooltipster.js"></script>
</body>
</html>

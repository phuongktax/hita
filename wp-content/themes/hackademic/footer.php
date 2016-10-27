
    <?php if (is_front_page()) {
        get_template_part( 'content-doi-tac-noslide', 'category' );
    } else {
        get_template_part( 'content-doi-tac-slide', 'category' );
    }?>
		<div id= "footer" class="ts-section-top-footer">
            <div class="ts-top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-12 ts-contact-email-info contact-info">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <a href="mailto:info@hackademicshanoi.vn">Email</a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 ts-contact-phone-info contact-info">
                            <a href="tel:+84466897555" title="quay số"><span><i class="fa fa-phone"></i></span>
                            <p>(+84) 466 897 555</p></a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-12 ts-contact-livechat-info contact-info">
                            <span><i class="fa fa-comment-o"></i></span>
                            <a href="<?php echo get_bloginfo('url')?>/lien-he">Liên Hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="ts-company-info ">
                            <h3 class="title">Hackademics Hanoi</h3>
                            <p>Công ty Cổ Phần Công nghệ và Đào Tạo Hackademics Hanoi</p>
                            <p><span>Cơ sở đào tạo: Số 22, Nguyễn Viết Xuân, quận Thanh Xuân, Hà Nội</span></p>
                            <p><span>Văn phòng tuyển sinh: Phòng 2805, Tầng 28, Tòa nhà 29T2, Chung cư N05, Hoàng Đạo Thúy - Cầu Giấy - Hà Nội</span></p>
                            <p><span>Điện thoại: <a href="tel:+84466897555" title="tạo cuộc gọi">(+84) 466 897 555</a></span></p>
                            <p><span>Email: </span><a href="mailto:info@hackademicshanoi.vn">info@hackademicshanoi.vn</a></p>
                            <p><span>Email: </span><a href="mailto:hackademicshanoi@gmail.com">hackademicshanoi@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 last">
                        <div class="ts_sokap_follow_us-1  TS_SOKAP_Follow_us">
                            <div class="ts-social-footer ">
                                <h3 class="title">Theo Dõi</h3>
                                <a href="https://www.facebook.com/Hackademicshanoi/" target="_blank" title="Hackademics Hanoi trên Facebook"><span><i class="fa fa-facebook"></i></span></a><br>
                                <h3 class="title">Chia Sẻ</h3>
                                <?php echo do_shortcode('[simple-social-share]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="ts-copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <p>© <?php echo date("Y") ?> Bản quyền thuộc về Hackademics Hanoi</p>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="ts-menu-footer">
                            <nav>
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary-menu'
                                    ) );
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cronytoggle01a -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-73295013-1', 'auto');
      ga('send', 'pageview');

    </script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js'></script>
    
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.appear.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.owl.carousel.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/easyResponsiveTabsd41d.js?'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.circliful.min.js'></script>
    
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/chosen.jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/custom.js'></script>
    <?php wp_footer(); ?>
</body>
</html>

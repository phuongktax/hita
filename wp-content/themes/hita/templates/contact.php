<?php
/**
 * Template Name: Contact Page
 *
 */
 get_header();?>
<!-- <div class="content"> -->
<section id="banner">
    <div class="banner ts-contact-banner parallax-section">
        <div class="overlay"></div>
        <div class="banner-content text-xs-center">
            <h1>Liên hệ với HITA</h1>
            <p>Nếu bạn có vấn đề gì cần liên hệ trực tiếp với chúng tôi, vui lòng xem thông tin bên dưới</p>
        </div>
    </div>
</section>

    <div class="container">
        <!-- <ol class="breadcrumb">
          <li><a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i>  Trang chủ</a></li>
          <li class="active">Liên hệ</li>
        </ol> -->
        <div id="container_full">
                <hr>
                <div class="ts-contact-form parallax-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-9">
                                <div class="ts-wrapper">
                                <?php //if(!isset($_POST['foo'])):?>
                                    <div class="ts-wrapper">
                                        <p>+ Chúng tôi luôn đón nhận mọi sự góp ý về website, về phương pháp giảng dạy,....<br>

                                            + Đội ngũ trợ giúp thông tin có thể mất một khoảng thời gian để trả lời và giải đáp thắc mắc..<br>

                                            + Để thực hiện việc liên hệ các bạn vui lòng điền vào theo mẫu bên dưới. </p>
                                    </div>
                                    <div class="screen-reader-response"></div>
                                    <?php echo do_shortcode('[contact-form-7 id="887" title="Liên hệ_copy"]'); ?>
                                    <?php //else:
                                       // echo '<h2>'.$_POST['foo'].'</h2>';
                                       // echo do_shortcode('[contact-form-7 id="893" title="Đăng ký khóa học_copy"]');
                                    ?>
                                <?php// endif;?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 col-xs-12">
                                <aside id="sidebar-right" class="sidebar-right ">
                                     <div id="recent-posts-2" class="module widget_recent_entries">
                                        <h3 class="sidebar_title">Thông tin học viện</h3>
                                        <div class="ts-contact-infomation left ts-contact-sidebar1">
                                            <h4>Trụ sở chính</h4>
                                            <p>407C - Đại học Hà Nội - Nguyễn Trãi - Thanh Xuân</p>
                                            <span>Email</span>: <a href="#"><span class="__cf_email__" data-cfemail="#"></span>
                                            support.hita@hanu.vn</a><br/>
                                            <span>Phone</span>: (+84) 987 654 321<br/>
                                            <span>Fax</span>: (+84) 43- 456-789<br/>
                                        </div>
                                        
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="ts-contact-padding parallax-section"></div> -->
            </div>



    </div>
<!-- </div> -->
<?php get_footer();?>

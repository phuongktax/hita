<?php
/**
 * Template Name: Contact Page
 *
 * @package hackademic
 * @subpackage templates
 * @since hackademic 1.0
 */
?>

<?php get_header();?>
    <br>
	<div id="container_full">
            <div class="container">
                <h3>Liên hệ Hackademics Hanoi</h3>
                <a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i> Trang chủ </a><span> <i class="fa fa-angle-right"></i> </span> Liên hệ Hackademics Hanoi
                <hr>
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="ts-wrapper">
                            <div class="ts-wrapper">
                                <?php if(!isset($_POST['foo'])):?>
                                <p>
                                    Cám ơn bạn liên lạc. Chúng tôi sẽ trả lời chậm nhất trong vòng 3 ngày. Nếu trong vòng 3 ngày không nhận được trả lời, xin vui lòng kiểm tra lại hòm thư nặc danh (spam, bulk mail v.v.) hoặc vui lòng liên lạc trực tiếp với chúng tôi qua số điện thoại:  (+84) 466 897 555.
                                    <br>
                                    Ở mẫu liên lạc dưới đây, bạn có thể đăng ký học hoặc gửi góp ý tới cho chúng tôi.
                                 </p>
                                <?php echo do_shortcode('[contact-form-7 id="23" title="Liên hệ"]'); ?>
                                <?php else:
                                    echo '<h2>'.$_POST['foo'].'</h2>';
                                    echo do_shortcode('[contact-form-7 id="101" title="Đăng ký khóa học"]');
                                ?>
                                <?php endif;?>
                            </div>
                            <div class="screen-reader-response contact-form"></div>
                            <?php //echo do_shortcode('[page-content-sc id=""]'); ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ts-wrapper">
                            <div class="ts-section-title text-left">
                                <h3><center><strong>Thông tin học viện</strong></center></h3>
                            </div>
                            <hr>
                            <div class="ts-contact-infomation left ts-contact-sidebar1">
                                <h4>Cơ sở đào tạo</h4>
                                <h6>Địa chỉ: Số 22, Nguyễn Viết Xuân, quận Thanh Xuân, Hà Nội</h6>
                                <h6>Email: <a href="mailto:info@hackademicshanoi.vn" title="gửi email"> info@hackademicshanoi.vn</a></h6>
                                <h6>Điện Thoại: <a href="tel:+84466897555" title="quay số">
                            (+84) 466 897 555</a></h6>
                                
                            </div>
                            <hr>
                            <div class="ts-contact-infomation left ts-contact-sidebar1">
                                <h4>Văn phòng tuyển sinh</h4>
                                <h6>Địa chỉ: Phòng 2805, Tầng 28, Tòa nhà 29T2, Chung cư N05, Hoàng Đạo Thúy - Cầu Giấy - Hà Nội</h6>
                                <h6>Email: <a href="mailto:hackademicshanoi@gmail.com" title="gửi email">hackademicshanoi@gmail.com</a></h6>
                                <h6>Điện thoại:  <a href="tel:+84466897555" title="quay số">
                            (+84) 466 897 555</a></h6><br/>
                            </div>
                            <hr>
                            <div class="ts-contact-infomation left ts-contact-sidebar1">
                                <?php echo do_shortcode('[simple-social-share]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="ts-teams-choose-options parallax-section"> -->
            </div>
        </div>
    </div>
<?php get_footer();?>

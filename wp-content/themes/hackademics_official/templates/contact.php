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
<div class="content">
    <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo get_bloginfo('url') ?>/" title="Quay về trang chủ"><i class="fa fa-home"></i>  Trang chủ</a></li>
          <li class="active">Liên hệ</li>
        </ol>
        <h2 class="title_detail">Liên hệ</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="contact">
                    <?php if(!isset($_POST['foo'])):?>
                    <p>
                        Cám ơn bạn liên lạc. Chúng tôi sẽ trả lời chậm nhất trong vòng 3 ngày. Nếu trong vòng 3 ngày không nhận được trả lời, xin vui lòng kiểm tra lại hòm thư nặc danh (spam, bulk mail v.v.) hoặc vui lòng liên lạc trực tiếp với chúng tôi qua số điện thoại:  (+84) 466 897 555.
                        <br>
                        Ở mẫu liên lạc dưới đây, bạn có thể đăng ký học hoặc gửi góp ý tới cho chúng tôi.
                     </p>
                    <?php echo do_shortcode('[contact-form-7 id="887" title="Liên hệ_copy"]'); ?>
                    <?php else:
                        echo '<h2>'.$_POST['foo'].'</h2>';
                        echo do_shortcode('[contact-form-7 id="893" title="Đăng ký khóa học_copy"]');
                    ?>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="box_list_promotion">
                    <h2>THÔNG TIN LIÊN HỆ</h2>
                    <div class="list_promotion">
                        <div class="media box_promotion">
                            <!-- <h4>Công ty Cổ Phần Công nghệ và Đào Tạo Hackademics Hanoi</h4> -->

                            <p>Cơ sở đào tạo: <?php echo get_option('co_so_dao_tao'); ?></p>
                            <p>Văn phòng tuyển sinh:<?php echo get_option('van_phong_tuyen_sinh'); ?></p>
                                <p>Điện thoại: <a href="tel:<?php echo get_option('so_may_ban'); ?>" title="Tạo cuộc gọi"><?php echo get_option('so_may_ban');?></a></p>
                            <p>Hỗ trợ: <a href="mailto:<?php echo get_option('email_ho_tro'); ?>"><?php echo get_option('email_ho_tro'); ?></a></p>
                            <p>Email: <a href="mailto:<?php echo get_option('email_lien_he'); ?>"><?php echo get_option('email_lien_he'); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>

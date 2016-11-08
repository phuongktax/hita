<?php
/**
 * Template Name: Hita Front Page
 *
 */
get_header(); ?>
<div id="container_full">
    <div class="ts-slideshow parallax-section" >
        <?php echo do_shortcode('[mpsl slider_home_page]'); ?>
    </div>
    
    
<div class="ts-managed-dedicated">
<div class="container">
<div class="row">
<div class="col-sm-12  ">
<div class="ts-CTA">
<div class="row">
<div class="col-md-7 col-sm-9 col-xs-12">
<div class="ts-left-CTA">
<h3>HITA đang tuyển sinh nhiều khóa học </h3>
<p>với rất nhiều ưu đãi và cơ hội nhận được những học bổng có giá trị</p>
</div>
</div>
<div class="col-md-5 col-sm-3 col-xs-12">
<div class="ts-right-CTA">
<a class="ts-style-button-cta" href="http://localhost/hita/chuong-trinh-dao-tao/">Tìm hiểu ngay!</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="ts-home1-lasted-blog">
<div class="container">
<div class="row">
<div class="col-sm-12 ">
<div class="ts-section-title  text-xs-center">
<h3>NHỮNG KHÓA HỌC MỚI NHẤT TẠI HITA</h3>
<p>Luôn luôn phát triển, luôn cập nhật những công nghệ mới nhất</p>
</div>
<div class="ts-blog-slide">
    <!-- <article class="ts-item-post">
        <a href="#"><figure><img src="images/imgbl2-1024x683.jpg" alt=""></figure></a>
        <div class="ts-main-recent-post">
        <h4><a href="#">Lorem ipsum dolor sit amet consectetuer adipiscing</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="ts-item-post-footer">
        <div class="lasted-blog-time">
        <a href="#"><i class="fa fa-clock-o"></i>January 15, 2015</a>
        </div>
        <a href="#"><i class="fa fa-comments-o"></i><span class="ts-comment-count">3 Comments</span></a>
        </div>
    </article>
    <article class="ts-item-post">
        <a href="#"><figure><img src="images/imgbl7-1024x683.jpg" alt=""></figure></a>
        <div class="ts-main-recent-post">
        <h4><a href="#">Lorem ipsum dolor sit amet consectetuer</a></h4>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut<p>
        </div>
        <div class="ts-item-post-footer">
        <div class="lasted-blog-time">
        <a href="#"><i class="fa fa-clock-o"></i>January 13, 2015</a>
        </div>
        <a href="#"><i class="fa fa-comments-o"></i><span class="ts-comment-count">0 Comments</span></a>
        </div>
    </article>
    <article class="ts-item-post ">
        <a href="#"><figure><img src="images/14408938623_7a857155f3_b-1024x683.jpg" alt=""></figure></a>
        <div class="ts-main-recent-post">
        <h4><a href="#">Lorem ipsum dolor sit amet hipm</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="ts-item-post-footer">
        <div class="lasted-blog-time"><a href="#"><i class="fa fa-clock-o"></i>January 7, 2015</a></div>
        <a href="#"><i class="fa fa-comments-o"></i><span class="ts-comment-count">0 Comments</span></a>
        </div>
    </article>
    <article class="ts-item-post">
        <a href="#"><figure><img src="images/imgbl2-1024x683.jpg" alt=""></figure></a>
        <div class="ts-main-recent-post">
        <h4><a href="#">Lorem ipsum dolor sit amet cronys</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
        <div class="ts-item-post-footer">
        <div class="lasted-blog-time"><a href="#"><i class="fa fa-clock-o"></i>January 7, 2015</a></div>
        <a href="#"><i class="fa fa-comments-o"></i><span class="ts-comment-count">2 Comments</span></a>
        </div>
    </article>
    <article class="ts-item-post">
        <a href="#"><figure><img src="images/imgbl3-1024x683.jpg" alt=""></figure></a>
        <div class="ts-main-recent-post">
        <h4><a href="#">Lorem ipsum dolor sit amet cronys</a></h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<p> </div>
        <div class="ts-item-post-footer">
        <div class="lasted-blog-time">
        <a href="#"><i class="fa fa-clock-o"></i>January 7, 2015</a>
        </div>
        <a href="#"><i class="fa fa-comments-o"></i><span class="ts-comment-count">0 Comments</span></a>
        </div>
    </article> -->
    <?php
        $type = 'chuong-trinh-dao-tao';
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 10,
        'caller_get_posts'=> 1
        );
        $temp = $wp_query;  // assign original query to temp variable for later use
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query($args);
        if ( have_posts() ):
            while ( have_posts() ) : the_post();
                get_template_part( 'content-khoa-hoc-hp', 'category' );
            endwhile;
            unset($i);
        else :
            echo 'Không tìm thấy bài viết nào trong chuyên mục này.';
        endif;
    ?>
</div>
</div>
</div>
</div>
</div>



<!-- <div class="ts-home5-threebox parallax-section">
<div class="container">
<div class="row">
<div class="col-sm-4">
<div class="ts-wrapper">
<div class="ts-service-style-3 text-xs-center">
<span class="icon-service">
<i class="fa fa-bug"></i>
</span>
<h3><a href="#">Responsive Design</a></h3>
<div class="description-service">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet sources vis-a-vis standards compliant partnerships.</p>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="ts-wrapper">
<div class="ts-service-style-3 text-xs-center">
<span class="icon-service">
<i class="fa fa-university"></i>
</span>
<h3><a href="#"> Drag And Drop Page Builder</a></h3>
<div class="description-service">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet sources vis-a-vis standards compliant partnerships.</p>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="ts-wrapper">
<div class="ts-service-style-3 text-xs-center">
<span class="icon-service">
<i class="fa fa-bicycle"></i>
</span>
<h3><a href="#">Unlimited Portfolios</a></h3>
<div class="description-service">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet sources vis-a-vis standards compliant partnerships.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->














    
    <div class="ts-about-our-values parallax-section">
        <div class="ts-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12  ">
                    <div class="ts-wrapper">
                        <div class="ts-section-title  text-xs-center">
                            <h3>VÌ SAO BẠN NÊN CHỌN HITA?</h3>
                        </div>
                        <div class="row">
                            <div class="inner-row clearfix">
                                <div class="col-sm-4">
                                    <div class="ts-wrapper">
                                        <div class="ts-service-style-5 text-xs-center">
                                            <span class="icon-service">
                                            <i class="fa fa-graduation-cap"></i>
                                            </span>
                                            <h3><a href="#">1. Tri thức và Kỹ Năng</a></h3>
                                            <div class="description-service">
                                                <p>- Tổ chức đào tạo cho thị trường Nhật<br>
                                                    => Tổ chức đào tạo nguồn lực cho thị trường IT<br>
                                                    - Đội ngũ đến từ trường DH và cty Nhật<br>
                                                    - Những con người mơ ước thay đổi chất lượng và cuộc sống của lập trình viên.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ts-wrapper">
                                        <div class="ts-service-style-5 text-xs-center">
                                            <span class="icon-service">
                                            <i class="fa fa-coffee"></i>
                                            </span>
                                            <h3><a href="#">2. Cảm hứng nghề nghiệp</a></h3>
                                            <div class="description-service">
                                                <p>
                                                - Cơ sở vật chất, phương tiện, thiết bị cùng với phương pháp giảng dạy mới, thực tiễn gắn liền với công việc outsourcing.<br>
                                                - Mạng lưới các công ty IT liên kết đào tạo và cam kết tuyển dụng<br>
                                                - Định hướng nghề nghiệp phù hợp với năng lực và trình độ. <br>
                                                - Nhiệt huyết tạo ra một lực lượng mới cho ngành CNTT<br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="ts-wrapper">
                                        <div class="ts-service-style-5 text-xs-center">
                                            <span class="icon-service">
                                            <i class="fa fa-briefcase "></i>
                                            </span>
                                            <h3><a href="#">3. Một công việc</a></h3>
                                            <div class="description-service">
                                                <p>
                                                    - Hướng tới các bạn có ước mơ trở thành các lập trình viên ưu tú <br>
                                                    - Hướng nước Nhật về nguồn lực trẻ và dồi dào của Vietnam<br>
                                                    - Hướng tới một cuộc sống tốt hơn cho nghề lập trình.<br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="parallax-section">
        <img src="http://localhost/hita/wp-content/uploads/2016/11/imgpsh_fullsize.jpg" width="100%">
    </div>















<div class="ts-home4-people-say parallax-section">
<div class="container">
<div class="row">
<div class="col-sm-12  ">
<div class="st-wrapper">
<div class="ts-section-title text-xs-center">
<h3>CẢM NHẬN CỦA HỌC VIÊN</h3>
</div>
<div class="ts-testimonial-style2 ts-list-testimonial dark">
<div class="ts-item-testimonial text-xs-center">
<div class="icon-quote-left"></div>
<div class="client-quote">
<p>Khóa học PHP không chỉ mang lại cho em những kiến thức cần biết mà còn cho em cơ hội được thực tập tại SMARTOSC</p>
</div>
<div class="icon-quote-right"></div>
<div class="info-testimonial">
<div class="client-avatar">
<figure><img src="http://localhost/hita/wp-content/uploads/2016/11/thao.jpg" alt="" height="70px" ></figure>
</div>
<div class="client-info">
<span class="client-name">Phạm Thị Minh Phượng</span>
<span class="client-position">Học viên khóa học PHP</span>
<!-- <span class="client-website"><a href="#">www.weburl.com</a></span> -->
</div>
</div>
</div>
<div class="ts-item-testimonial text-xs-center">
<div class="icon-quote-left"></div>
<div class="client-quote">
<p>Chưa kết thúc khóa lập trình Java nhưng tôi đã quyết định đăng ký luôn khóa lập trình hướng đối tượng của khóa kế tiếp. Cảm ơn “Sơn Đẹp Trai” đã cho tôi niềm đam mê với lĩnh vực này. Biết đâu tương lai không xa tôi cũng sẽ là một lập trình viên như các bạn.</p>
</div>
<div class="icon-quote-right"></div>
<div class="info-testimonial">
<div class="client-avatar">
<figure><img src="http://localhost/hita/wp-content/uploads/2016/11/mr-Dung.jpg" alt="" height="70px" ></figure>
</div>
<div class="client-info">
<span class="client-name">Văn Thế Dũng</span>
<span class="client-position">Học viên khóa học lập trình Java</span>
<!-- <span class="client-website"><a href="#">www.weburl.com</a></span> -->
</div>
</div>
</div>
<div class="ts-item-testimonial text-xs-center">
<div class="icon-quote-left"></div>
<div class="client-quote">
<p>Quản trị mạng thật sự không khó. Cái khó nhất chính là bản thân chúng ta phải đam mê, phải dùng hết khả năng của mình để tìm tòi và nghiên cứu nó. Ở HITA các giảng viên hỗ trợ rất nhiều cho các bạn do vậy các bạn nên chú tâm vào các bài giảng của các thầy, chỗ nào không hiểu phải hỏi ngay, ngoài ra các bạn phải thường xuyên google để tham khảo thêm các tài liệu khác nữa.</p>
</div>
<div class="icon-quote-right"></div>
<div class="info-testimonial">
<div class="client-avatar">
<figure><img src="http://localhost/hita/wp-content/uploads/2016/11/mr-Hai.jpg" alt="" height="70px" ></figure>
</div>
<div class="client-info">
<span class="client-name">Đinh Văn Hải</span>
<span class="client-position">Học viên khóa học quản trị mạng</span>
<!-- <span class="client-website"><a href="#">www.weburl.com</a></span> -->
</div>
</div>
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


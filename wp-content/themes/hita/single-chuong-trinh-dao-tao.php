<?php get_header(); ?>

<section id="banner">
    <div class="banner ts-about-banner parallax-section">
        <div class="overlay"></div>
        <div class="banner-content text-xs-center">
            <h1><?php the_title(); ?></h1>
            <p><?php echo get_field( 'short_description');?></p>
            <div class="breadcrumbs"><a href="<?php echo get_home_url(); ?>">Trang chủ</a> <i>/</i> <i>Danh sách khóa học</i></div>
        </div>
    </div>
</section>


<div class="container">
    <div class=" ts-devider-top parallax-section">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-9">
                    <div class="ts-wrapper">
                        <div class="row">                                        
                            <div class="col-sm-12 col-lg-6 col-md-12 ">
                                <div class="ts-wrapper">
                                    <div class="team-item team-item-style1 text-xs-center  ">                                        
                                        <img alt="<?php echo get_field('pic'); ?>" src="<?php echo get_field('pic'); ?>" style="
    height: 272px;
">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-md-12">
                                <div class="bg_parallax ts-home10-function-right">
                                    <div class="row">
                                        <div class="inner-row clearfix">
                                            <div class="col-sm-12">
                                                <div class="ts-wrapper">
                                                <div class="ts-box-border">
                                                    <!-- <p>Học bổng đến 50% khi đăng ký sớm<br> Giảm 1.000.000 khi hoàn thành học phí trước ngày khai giảng</p> -->

                                                    <marquee direction="up" height= 100px SCROLLAMOUNT=4  onmouseover="this.stop();" onmouseout="this.start();" ><strong><?php echo get_field('discount'); ?></strong></marquee>
                                                    <p class="top-border price_course">Học phí: <span><?php echo get_field('fee'); ?></span>
                                                    </p>
                                                    <div class="ts-button-text ts-style-button42">
                                                    <a href="#dang-ki" class="ts-style-button ">ĐĂNG KÝ KHÓA HỌC</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                        
                        </div>

                        <div class="ts-faq-questions parallax-section">
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="ts-wrapper">
                            <!-- <div class="ts-section-title   text-xs-center">
                            <h3>Got questions? We have answers.</h3><p>Monotonectally reinvent economically sound e-markets whereas distributed collaboration</p>
                            </div> -->
                            <div class="ts-horizontalTab ts-tab" style="display: block; width: 100%; margin: 0px;">
                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab" style="width: 33%;">THÔNG TIN CHUNG</li>
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab" style="width: 33%;">ĐỐI TƯỢNG HỌC VIÊN</li>
                                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab" style="width: 34%;">NỘI DUNG GIẢNG DẠY</li>
                                <!-- <li class="resp-tab-item" aria-controls="tab_item-3" role="tab" style="width: 25%;">PRESS</li> -->
                            </ul>
                            <div class="resp-tabs-container">
                                <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>THÔNG TIN CHUNG</h2>
                                <div class="ts-wrapper resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                    <div class="course-description">
                                        <?php 
                                        $description =get_field('description');
                                        if(strlen($description) != 0) echo get_field( 'description');
                                        ?>
                                        <ul>
                                        <?php $km = get_field( 'discount'); ?>
                                        <?php $time =  get_field( 'duration');?>
                                        <?php $hour =  get_field( 'study_hour');?>
                                        <?php if (strlen($km) != 0): ?>
                                            <!-- <li><p><?php echo get_field( 'discount');?></p></li> -->
                                        <?php endif; ?>
                                        <?php if (isset($time)): ?>
                                            <li><p>Thời lượng: <?php echo get_field( 'duration');?></p></li>
                                        <?php endif; ?>
                                        <?php if (strlen($hour) != 0): ?>
                                            <li><p>Thời gian học: <?php echo get_field( 'study_hour');?></p></li>
                                        <?php endif; ?>
                                        <?php if (has_tag( )): ?>
                                            <li>
                                                <p class="mt10">Từ khóa:<?php the_tags(' ', ', '); ?> </p>
                                            </li>
                                        <?php endif; ?>
                                        </ul>
                                    </div>
                            
                                </div>
                                <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>ĐỐI TƯỢNG HỌC VIÊN</h2>
                                <div class="ts-wrapper resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="course-description">
                                    <?php echo get_field('prerequisite'); ?>
                                </div>
                                </div>
                                <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>NỘI DUNG GIẢNG DẠY</h2>
                                <div class="ts-wrapper resp-tab-content" aria-labelledby="tab_item-2">
                                    <div class="course-description">
                                        <p></p><p>Khóa học kéo dài trong 3 tháng, bao gồm 20 module nội dung từ cơ bản đến nâng cao</p>

                                        <p><strong>Module 0: Giới thiệu, phần mở đầu</strong></p>
                                        <ul>
                                        <li>Giới thiệu về khóa học, làm thế nào để học tốt nhất</li>
                                        <li>Giới thiệu về smartphone, sự phát triển của smartphone</li>
                                        <li>Giới thiệu về lập trình Android</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 1: Nhắc lại kiến thức JAVA căn bản</strong></p>
                                        <ul>
                                        <li>Khái niệm lập trình hướng đối tượng (OOPs)</li>
                                        <li>Tính kế thừa – Java Inheritance</li>
                                        <li>Xử lý ngoại lệ – Java Exception handling</li>
                                        <li>Đóng gói và giao diện lập trình – Java Package &amp; Interfaces</li>
                                        <li>JVM và .jar file</li>
                                        <li>Lập trình đa luồng – Java Multi-threading</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 2: Căn bản về Database và SQL</strong></p>
                                        <ul>
                                        <li>DB and DBMS (Dữ liệu và hệ quản trị cơ sở dữ liệu)</li>
                                        <li>DML, DDL</li>
                                        <li>SQL trong R-DMBS</li>
                                        <li>NoSQL và hệ quản trị cơ sở dữ liệu lớn</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 3: Giới thiệu về Android</strong></p>
                                        <ul>
                                        <li>Android là gì ?, lịch sử phát triển, các version đến hiện tại</li>
                                        <li>Công cụ và cài đặt môi trường phát triển</li>
                                        <li>.apk file</li>
                                        <li>Giới thiệu các thành phần cơ bản của một ứng dụng Android:</li>
                                        <li>Vòng đời 1 ứng dụng Android</li>
                                        <li>Các thành phần cơ bản – Activities,Services,Broadcast Receivers &amp; Content providers</li>
                                        <li>Các thành phần UI – Views &amp; notifications</li>
                                        <li>Các thành phần cho communication -Intents &amp; Intent Filters</li>
                                        <li>Android API levels</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 4: Cấu trúc ứng dụng Android</strong></p>
                                        <ul>
                                        <li>File AndroidManifest.xml</li>
                                        <li>Uses-permission &amp; uses-sdk</li>
                                        <li>Resources &amp; R.java</li>
                                        <li>Assets o Layouts &amp; Drawable Resources</li>
                                        <li>Activities and Activity lifecycle o</li>
                                        <li>Xây dựng ứng dụng mẫu đầu tiên</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 5: Các bộ mô phỏng – thiết bị Android ảo (Emulators – Android Virtual Device)</strong></p>
                                        <ul>
                                        <li>Khởi động một bộ mô phỏng</li>
                                        <li>Cài đặt và cấu hình bộ mô phỏng</li>
                                        <li>Sử dụng Logcat</li>
                                        <li>Giới thiệu DDMS</li>
                                        <li>Xây dựng ứng dụng mẫu thứ 2</li>
                                        <li>(xây dựng app mô phỏng giao tiếp giữa các Intents)</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 6: Thiết kế UI cơ bản (Basic UI)</strong></p>
                                        <ul>
                                        <li>Layout cơ bản trong Android: LinearLayout,&nbsp;&nbsp; RelativeLayout,</li>
                                        <li>FrameLayout, TableLayout</li>
                                        <li>TextView, EditText, CheckBox, ImageView, WebView,</li>
                                        <li>Button, RadioButton, ToggleButton, ImageButton.</li>
                                        <li>Tìm hiểu về độ phân giải dip, dp, px, sip, sp của Android</li>
                                        <li>Xây dựng ứng dụng mẫu.</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 7: Preferences trong Android</strong></p>
                                        <ul>
                                        <li>SharedPreferences</li>
                                        <li>Preferences với XML</li>
                                        <li>Xây dựng ứng dụng mẫu</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 8: Xây dựng Menu</strong></p>
                                        <ul>
                                        <li>Option menu</li>
                                        <li>Context menu</li>
                                        <li>Sub menu</li>
                                        <li>Menu from xml</li>
                                        <li>Menu via code</li>
                                        <li>Xây dựng ứng dụng mẫu</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 9: Làm việc với Intents</strong></p>
                                        <ul>
                                        <li>Explicit Intents</li>
                                        <li>Implicit intents</li>
                                        <li>Xây dựng ứng dụng mẫu</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 10: Thiết kế và làm việc với UI nâng cao</strong></p>
                                        <ul>
                                        <li>Time and Date</li>
                                        <li>Images and media</li>
                                        <li>Composite</li>
                                        <li>AlertDialogs &amp; Toast</li>
                                        <li>Popup</li>
                                        <li>Xây dựng ứng dụng mẫu</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 11: Activities</strong></p>
                                        <ul>
                                        <li>Activity là gì?</li>
                                        <li>Khai báo và đặt thuộc tính của một Activity trong file AndroidManifest</li>
                                        <li>Các hàm mặc định của một Activity</li>
                                        <li>Vòng đời của một Activity (chi tiết)</li>
                                        <li>Kết nối giữa hai Activity.</li>
                                        <li>Truyền và nhận dữ liệu giữa các Activity.</li>
                                        <li>Bảo mật với Activity</li>
                                        <li>Hướng dẫn xây dựng Intent gọi đến các ứng dụng của hệ điều hành : gọi điện thoại, lượt web…</li>
                                        <li>Xây dựng ứng dụng mẫu</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 12: Styles &amp; Themes</strong></p>
                                        <ul>
                                        <li>xml</li>
                                        <li>Drawable resources for shapes, gradients (selectors)</li>
                                        <li>Style attribute in layout file</li>
                                        <li>Applying themes via code and manifest file</li>
                                        <li>Xây dựng ứng dụng mẫu</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 13: Làm việc với Content Providers</strong></p>
                                        <ul>
                                        <li>SQLite Programming</li>
                                        <li>SQLiteOpenHelper</li>
                                        <li>SQLiteDatabase</li>
                                        <li>Cursor</li>
                                        <li>Reading and updating Contacts</li>
                                        <li>Reading bookmarks</li>
                                        <li>Xây dựng ứng dụng mẫu làm việc với DB.</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 14: Debug ứng dụng Android – Android Debug Bridge (ADB tools)</strong></p>
                                        <p><strong>Module 15: Linkify</strong></p>
                                        <ul>
                                        <li>Web URLs, Email address, text, map address, phone numbers</li>
                                        <li>Match Filter &amp; Transform Filter</li>
                                        <li>Ví dụ minh họa</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 16: Adapters and Widgets</strong></p>
                                        <ul>
                                        <li>Adapters:</li>
                                        <li>Array Adapters</li>
                                        <li>Base Adapter</li>
                                        <li>ListView and ListActivity</li>
                                        <li>Custom listview</li>
                                        <li>GridView using adapters</li>
                                        <li>Gallery using adapters</li>
                                        <li>Xây dựng ứng dụng mẫu</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 17: Làm việc với Notifications</strong></p>
                                        <ul>
                                        <li>Broadcast Receivers</li>
                                        <li>Services and notifications</li>
                                        <li>Toast</li>
                                        <li>Alarms</li>
                                        <li>Ví dụ minh họa</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 18: Làm việc với các thành phần khác</strong></p>
                                        <ul>
                                        <li>Custom Tabs</li>
                                        <li>Custom animated popup panels</li>
                                        <li>Other components</li>
                                        <li>Ví dụ minh họa</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 19: Threads</strong></p>
                                        <ul>
                                        <li>Threads running on UI thread (runOnUiThread) o</li>
                                        <li>Worker thread</li>
                                        <li>Handlers &amp; Runnable</li>
                                        <li>AsyncTask&nbsp;(in detail)</li>
                                        <li>Examples</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Module 20: Lập trình Android nâng cao</strong></p>
                                        <ul>
                                        <li>Live Folders</li>
                                        <li>Using&nbsp;sd cards</li>
                                        <li>XML Parsing</li>
                                        <li>JSON Parsing</li>
                                        <li>Maps, GPS, Location based Services</li>
                                        <li>Accessing Phone services (Call, SMS, MMS)</li>
                                        <li>Network connectivity services</li>
                                        <li>Sensors</li>
                                        </ul>
                                        <p><strong>&nbsp;</strong></p>

                                        <p><strong>Project 1: Xây dựng ứng dụng Android hoàn chỉnh cá nhân</strong></p>
                                        <p><strong>Project 2: Xây dựng ứng dụng Android hoàn chỉnh nhóm</strong></p>
                                        <p><strong>Các chủ đề phòng Lab</strong></p>
                                        <ul>
                                        <li>10 bài tập thực hành lập trình bao gồm cả thiết kế , UT test và code</li>
                                        <li>Sử dụng các công cụ phát triển Android</li>
                                        <li>Activities and Intents</li>
                                        <li>User Interface</li>
                                        <li>Pictures and Menus</li>
                                        <li>Data Persistence</li>
                                        <li>Messaging and Networking</li>
                                        <li>Location Based Services</li>
                                        </ul>
                                        <p></p>
                                    </div>

                                </div>
                                
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="divider ts-divider-text ">
                            <div class="divider-content">
                                <span class="text"><h2>Giảng viên</h2></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-lg-4 col-md-12 ">
                                <div class="ts-wrapper">
                                    <div class="team-item team-item-style1 text-xs-center  ">
                                        <figure>
                                            <?php echo wp_get_attachment_image(get_field('lecture')->photo,'full',true) ?>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-8 col-md-12">
                                <h4><?php echo get_field('lecture')->post_title; ?></h4>
                                <span><i class="fa fa-graduation-cap"></i></span><strong> Trình độ học vấn</strong>: <p><?php echo get_field('lecture')->knowledge; ?></p>
                                <span><i class="fa fa-graduation-cap"></i></span><strong> Kinh nghiệm</strong>: <p><?php echo get_field('lecture')->background; ?></p>

                            </div>
                        </div>

                        <div id="dang-ki">
                            <div class="divider ts-divider-text ">
                                <div class="divider-content">
                                    <span class="text" ><h2>Đăng kí khóa học</h2></span>
                                </div>
                            </div>
                           
                            <div class="screen-reader-response"></div>
                            <form class="wpcf7-form" method="post" action="#" onsubmit="sendmailchimp2(this); return false;">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <span class="name"><input type="text" name="name" required="" value="" size="40" placeholder="Tên"></span><br>
                                        <span class=" subject"><input type="text" name="subject" value="" size="40" placeholder="Nội dung"></span>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <span class=" email"><input type="email" name="email" value="" size="40" required="" placeholder="Email"></span><br>
                                        <span class=" telephone"><input type="text" name="telephone" value="" size="40" placeholder="Số Điện Thoại"></span>
                                    </div>
                                </div>
                                <p>
                                    <span class=" comment"><textarea name="comment" cols="40" rows="10" required="" placeholder="Lời nhắn"></textarea></span><br>
                                    <input type="submit" value="Gửi">
                                </p>
                                <div id="ts-message"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12">
                    

                    <aside id="sidebar-right" class="sidebar-right ">
                        <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3 class="sidebar_title">CÁC KHÓA HỌC KHÁC</h3>
                            <ul>
                                <?php
                                    $wp_query = new WP_Query( 'post_type=chuong-trinh-dao-tao&order=desc&posts_per_page=5' );
                                    if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ):$wp_query->the_post(); ?>
                                        <li><a href="<?php the_permalink() ;?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                    <?php endwhile; endif;?>
                            </ul>                          
                        </div>
                    </aside>

                    <aside id="sidebar-right" class="sidebar-right ">
                        <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3>TỪ KHÓA NỔI BẬT</h3>
                                <?php
                                wp_tag_cloud( array(  'smallest' => '0.9' ,'largest' => '1.7', 'unit' => 'rem', 'number' => '45', 'separator' => '  ', 'orderby' => 'count', 'order' => 'RAND') );
                                ?>                            
                        </div>
                    </aside>
                    <aside id="sidebar-right" class="sidebar-right ">
                         <div id="recent-posts-2" class="module widget_recent_entries">
                            <h3 class="sidebar_title">Thông tin học viện</h3>
                            <div class="ts-contact-infomation left ts-contact-sidebar1">
                                <h4>Trụ sở chính</h4>
                                <p>407C - Đại học Hà Nội - Nguyễn Trãi - Thanh Xuân</p>
                                <span>Email</span>: <a href="#"><span class="__cf_email__" data-cfemail="#"></span>
                                support.hita@hanu.vn</a><br>
                                <span>Phone</span>: (+84) 987 654 321<br>
                                <span>Fax</span>: (+84) 43- 456-789<br>
                            </div>
                            
                        </div>
                    </aside>
                </div>
            </div>
    </div>
</div>

<?php get_footer(); ?>
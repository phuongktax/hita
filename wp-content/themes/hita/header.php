<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8"/>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
        <!-- <title>Hackademy - Index</title> -->
        <!-- <meta name="viewport" content="width=device-width"> -->
        <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
        <!-- <meta name="Author" content="HITA"> -->
        <meta name="Keywords" content="programming, php, android, tester, lập trình">
        <!-- <meta name="Description" content="Hack your passion, Code your life!"> -->
        <!-- <link rel="canonical" href="http://hitashanoi.codelovers.vn/"> -->

        <link rel='stylesheet' id='config-css' href='<?php echo get_template_directory_uri(); ?>/css/ts-config.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='mailchimp-checkbox-css' href='<?php echo get_template_directory_uri(); ?>/css/checkbox.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='font-awesome.min-css' href='<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css' type='text/css' media='all'/>
        
        <link rel='stylesheet' id='jquery-ui-css' href='<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='bootstrap.min-css' href='<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='owl.carousel-css' href='<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='easy-responsive-tabs-css' href='<?php echo get_template_directory_uri(); ?>/css/easy-responsive-tabs.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='jquery.circliful-css' href='<?php echo get_template_directory_uri(); ?>/css/jquery.circliful.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='cubeportfolio.min-css' href='<?php echo get_template_directory_uri(); ?>/css/cubeportfolio.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='megamenu-css' href='<?php echo get_template_directory_uri(); ?>/css/megamenu.css' type='text/css' media='all'/>
        <link rel='stylesheet' id='styles-css' href='<?php echo get_template_directory_uri(); ?>/css/styles.css' type='text/css' media='all'/>
        <link rel="stylesheet" id="custom-css" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" type="text/css" media="all"/>
        <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/vc-ie8.css" media="screen">
        <![endif]-->
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/layout.css' type='text/css' media='all'/>
        <!-- <title><?php bloginfo('name'); ?></title> -->
        
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
    
        <!-- <div id="wrapper"> -->
            <header>
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="top-social col-sm-4">
                                <div class="social-top">
                                    <ul class="social">
                                        <li class="bounceIn animated"><a target="_blank" href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="bounceIn animated"><a target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="top-info col-sm-8 pull-right">
                                <div id="flags_language_selector"></div>
                                <ul>
                                    <li><a href="<?php echo get_post_type_archive_link( 'contact' ); ?>"><i class="fa fa-exclamation-circle"></i>Hỗ trợ</a></li>
                                    <li><a href="mailto:joe@example.com?"><i class="fa fa-envelope"></i>Email</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>(+84)987 654 321</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cronytoggle01 -->
                <div class="main-header">
                    <div class="container">
                    <a href="#" class="mobile-navigation"><i class="fa fa-bars"></i></a>
                        <div class="logo">
                            <h1>
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/hitalog.png" class=""> -->
                             <a href="<?php echo get_bloginfo('url') ?>/" class="ariva_logo">Học viện CNTT HITA</a></h1>
                        </div>
                        
                        <div class="pull-right ts-mainmenu">
                            <nav class="main-menu nav-menu">
                                <!-- <ul id="menu-main-menu" class="menu-nav list-inline ts-response-simple ts-response-stack ts-effect-slide-bottom ts-menu-destop"> -->
                                    <!-- <li class="menu-item  current-menu-parent">
                                        <a title="Home" href="index.html">Trang chủ</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children dropdown">
                                        <a title="Khóa học" href="courses.html" class="dropdown-toggle">Khóa Học</a>                                       
                                    </li>
                                    <li class="menu-item"><a title="Tài nguyên học tập" href="resource.html">Tài nguyên học tập</a></li>
                                    <li class="menu-item"><a title="Tin tức" href="news.html">Tin tức</a></li>
                                    <li class="menu-item"><a title="Liên hệ" href="contact.html">Liên Hệ</a></li> -->

                                    <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'primary-menu',
                                            'menu_class'     => 'menu-item menu-nav list-inline ts-response-simple ts-response-stack ts-effect-slide-bottom ts-menu-destop',
                                            'menu_id'        => 'menu-main-menu',
                                            'container'      => '',
                                            // 'walker' => new description_walker()
                                        ));
                                    ?>
                                <!-- </ul> -->
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </header>
            
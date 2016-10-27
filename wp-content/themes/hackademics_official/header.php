<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="Author" content="HACKADEMICS HANOI">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <!-- <link rel="shortcut icon" id="_favicon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png" type="image/vnd.microsoft.icon" /> -->
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css'>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css'>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/style.css'>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/menu_responsive.css'>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/slick.css'>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/tooltipster.css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom CSS file to add style -->
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/custom.css'>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
</head>
<body <?php body_class(); ?>>

    <div class="header">
        <div class="top_header">
            <div class="container">
                <div class="menu_support">
                    <div class="left_hd"></div>
                    <div class="center_hd">
                        <ul>
                            <li><a href="<?php echo get_bloginfo('url') ?>/huong-dan-dang-ky">Hướng dẫn</a></li>
                            <!-- <li>|</li> -->
                            <?php
                            $layout = get_option('theme_layout');
                            $skype_url = get_option('skype_url');
                            ?>
                            <!-- <li><a href="skype:<?php echo $skype_url; ?>?chat"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_skype.png" alt="Start skype chat"></a></li> -->
                            <!-- <li>|</li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag.jpg"></a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/flag2.jpg"></a></li> -->

                        </ul>
                    </div>
                    <div class="right_hd"></div>
                </div>
                <div class="hotline_mobile">
                    <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
                    <div id="SkypeButton_Call_meobongzz_1">
                     <script type="text/javascript">
                     Skype.ui({
                     "name": "chat",
                     "element": "SkypeButton_Call_meobongzz_1",
                     "participants": ["meobongzz"]
                     });
                     </script>
                    </div>
                </div>
                 <div class="hotline_mobile">
                     <span></span><?php echo get_option('so_di_dong'); ?>
                 </div>
                <div class="logo">
                     <a href="<?php echo get_bloginfo('url') ?>/"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Hackademicshanoi Logo"></a>
                 </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="container">
            <div class="white-background"></div>
                <a id="touch-menu" class="mobile-menu" href="#"><i class="fa  fa-list "></i> <span class="site-title">Hackademics Hanoi</span></a>
                <nav>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class'     => 'menu',
                            // 'walker' => new description_walker()
                        ));
                    ?>
                </nav>
            </div>
        </div>
    </div>

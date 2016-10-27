<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="Author" content="HACKADEMICS HANOI">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/ts-config.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/easy-responsive-tabs.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/jquery.circliful.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/cubeportfolio.min.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/megamenu.css' type='text/css' media='all'/>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/styles.css' type='text/css' media='all'/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" type="text/css" media="all"/>
        <!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/vc-ie8.css" media="screen"><![endif]-->
        
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/css/layout.css' type='text/css' media='all'/>
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js'></script>
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        <div id="wrapper">
            <header>
                <div class="main-header">
                    <div class="container">
                    <a href="#" class="mobile-navigation"><i class="fa fa-bars"></i></a>
                        <div class="logo">
                            <h1>
                                <a href="<?php echo get_bloginfo('url') ?>/" title="Hackademics Hanoi"><img class="ariva_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="Hackademic Logo"></a>
                            </h1>
                        </div>
                        <div class="pull-right ts-mainmenu">
                            <nav class="main-menu nav-menu">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary-menu',
                                        'container'      => '',
                                        'menu_class'     => 'menu-nav list-inline ts-response-simple ts-response-stack ts-effect-slide-top',
                                        'menu_id' => 'menu-main-menu'
                                    ) );
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            
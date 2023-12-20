<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!--[if lt IE 10]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1">
    <title><?php
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) {
            echo " | $site_description";
        }
        if ($paged >= 2 || $page >= 2) {
            echo ' | ' . sprintf(__('Page %s', 'cTpl'), max($paged, $page));
        }
        ?></title>



<!--    <script>-->
<!--        (function(d) {-->
<!--            var config = {-->
<!--                    kitId: 'awg6uyv',-->
<!--                    scriptTimeout: 3000,-->
<!--                    async: true-->
<!--                },-->
<!--                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)-->
<!--        })(document);-->
<!--    </script>-->

    <!--DNPShueiMinPr6-->
    <!--font-family: "dnp-shuei-mincho-pr6", sans-serif;-->

<!--    <script>-->
<!--        (function(d) {-->
<!--            var config = {-->
<!--                    kitId: 'amr2fjo',-->
<!--                    scriptTimeout: 3000,-->
<!--                    async: true-->
<!--                },-->
<!--                h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)-->
<!--        })(document);-->
<!--    </script>-->


    <!--font-family: 'Cormorant Garamond', serif;-->
    <!--font-family: 'League Spartan', sans-serif;-->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=League+Spartan:wght@300;400;500;600;700;800;900&family=Noto+Sans+JP:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!--    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=League+Spartan:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">-->

    <!--Garamond Premier Pro-->
    <!--font-family: "garamond-premier-pro", serif;-->
    <link rel="stylesheet" href="https://use.typekit.net/vep1vdd.css">

    <!--Eurostile Extended-->
    <!--font-family: eurostile-extended, sans-serif;-->
    <link rel="stylesheet" href="https://use.typekit.net/yoj8hdx.css">

    <!-- css file-->
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/all.min.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/slick.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo rand(); ?>">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/custom.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/homepage.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/tour-page.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/hotel.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/overseas.css">
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/custom-page.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/pro.js" crossorigin="anonymous"></script>
    <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4');
    wp_head();
    ?>

    <!--file js-->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/aos.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/slick.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>


    <?php if (is_admin_bar_showing()): ?>
        <style type="text/css" media="screen">
            #header-menu .header-nav.scroll-header{
                top: 32px !important;
            }
            @media screen and (max-width: 782px) {
                #header-menu .header-nav.scroll-header{
                    top: 46px !important;
                }
            }
        </style>
    <?php endif; ?>

</head>

<body <?php body_class(); ?>>
<div class="outer">
    <div class="bg-headerOpen"></div>
    <header id="header-menu" class="header-menu">
        <div class="header-nav">
            <div class="header-logo">
                <a class="link-logo" href="<?php echo home_url(); ?>">
                    <picture class="logo-scroll">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo_header_sp.svg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo_header.svg">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/logo_header.svg" alt="<?php bloginfo('name'); ?>">
                    </picture>
                    <picture class="logo">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo_sp.svg">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.svg" alt="<?php bloginfo('name'); ?>">
                    </picture>
                </a>
            </div><!-- .header-logo -->
            <div class="right-header header-megamenu">
                <?php wp_nav_menu(
                    array(
                        'menu_class'      => 'navMenu',
                        'menu_id'         => 'navList-menu',
                        'container'       => 'div',
                        'container_id'    => 'nav-container'
                    )
                ); ?>
                <div class="contact-action">
                    <a class="contact-btn btn-green c-g" href="/contact/">Contact</a>
                </div>
                <div class="exchange-rate">
                    <a href="javascript:void(0)" class="menu-item-exchange-rate dnp-s-m"><i class="fa-solid fa-dollar-sign"></i><span>弊社換算レート</span></a>
                    <div class="exchangeRate-content">
                        <div class="exchangeRate-time dnp-s-m">
                            <p class="ttlTime">弊社換算レート</p>
                            <?php
                            $days = array('日', '月', '火', '水', '木', '金', '土');
                            ?>
                            <p class="date"><?php echo date("Y/m/d"); ?> <span class="day-week">(<?php echo $days[date('w')]; ?>)</span></p>
                        </div>
                        <?php $front_page_id = get_option('page_on_front'); ?>
                        <div class="exchangeRate-List">
                            <div class="exchangeRate-Item">
                                <p class="exchangeRate-text"><span class="number">1&nbsp;&nbsp;</span>USD&nbsp;&nbsp;=&nbsp;&nbsp;<span class="number"><?php echo get_field('exchange_rate_jpy', $front_page_id); ?></span>&nbsp;&nbsp;JPY</p>
                            </div>
                            <div class="exchangeRate-Item">
                                <p class="exchangeRate-text"><span class="number">1&nbsp;&nbsp;</span>USD&nbsp;&nbsp;=&nbsp;&nbsp;<span class="number"><?php echo get_field('exchange_rate_vnd', $front_page_id); ?></span>&nbsp;&nbsp;VND</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-openMenu">
                <p class="c-g"><small class="open">Menu</small><small class="close">Close</small></p>
                <div class="toggle-btn">
                    <span></span>
                </div>
            </div>

        </div><!-- .header-nav -->
    </header><!-- #header-menu -->

    <main role="main">
        <div class="bg-popup"></div>
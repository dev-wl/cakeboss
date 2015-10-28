<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html  class="no-js" lang="en-US" data-themeurl="<?php echo get_template_directory_uri(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body <?php body_class(); echo 'style="'; if(ale_get_meta('custombg')){echo 'background-image:url('.ale_get_meta('custombg').');';} if(ale_get_meta('custompagecss')){ echo ale_get_meta('custompagecss');}echo ' background-position:center;"'; ?> >

    <?php if(is_page_template('page-home.php')){
        if(ale_get_option('preloaderstatus')!=='1'){ ?>
        <div id="load-logo"><div class="logo-box" <?php if(ale_get_option('animationsitelogo')){echo'style="background: url('.ale_get_option('animationsitelogo').') no-repeat center;"';} ?>></div></div>
        <div id="load-hide"> <!-- hide while loading -->
    <?php }
    } ?>

    <?php if(ale_get_option('langswitcher')=='1'){ echo ale_part('lang'); } ?>
    <!-- Main Menu-->
    <header class="cf">
        <div class="logo">
            <?php if(ale_get_option('sitelogo')){ ?>
                <a href="<?php echo home_url(); ?>/" class="customlogo"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                <a href="<?php echo home_url(); ?>/" class="mobcustomlogo cf"><img src="<?php echo ale_get_option('mobsitelogo'); ?>" /></a>
            <?php } else { ?>
                <a href="<?php echo home_url(); ?>/" class="alelogo"><?php echo bloginfo('name'); ?></a>
                <a href="<?php echo home_url(); ?>/" class="mobalelogo"><?php echo bloginfo('name'); ?></a>
            <?php } ?>
        </div>
        <div class="menu-drop">
            <a>Menu</a>
            <?php
            if ( has_nav_menu( 'mobile_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'mobile_menu',
                    'menu'			=> 'Mobile Menu',
                    'menu_class'	=> 'ul-drop',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            } ?>
        </div>

        <div class="center-align">
                <?php if ( has_nav_menu( 'header_left_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'header_left_menu',
                        'menu'			=> 'Header Left Menu',
                        'menu_class'	=> 'col-6 left',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                }

                if ( has_nav_menu( 'header_right_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'header_right_menu',
                        'menu'			=> 'Header Right Menu',
                        'menu_class'	=> 'col-6 right',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                } ?>
        </div>
    </header>
    <?php if(is_404()){ ?>
        <div class="header-back" style="background-image: url('<?php echo ale_get_option('mainheader'); ?>');">
            <div class="triang top"></div>
            <div class="triang bot"></div>
        </div>
    <?php } elseif(!is_page_template('page-home.php')){
        global $post;
        ale_part('innerheaders');
    } ?>

<script>
    $(document).ready(function() {
        $(window).on('scroll', function(e) {
            // if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            //     return;
            // }

            h = $('header.cf').height();
            if($(window).height() < 990) {
                h += 60;
            }
            if($('#wpadminbar').css('display') == 'block') {
                h += $('#wpadminbar').height();
            }
            if($(window).scrollTop() > h) {
                $('header.cf').addClass('fx');
                $('div.logo').css('display', 'none');
            } else {
                $('header.cf').removeClass('fx');
                $('div.logo').css('display', 'block');
            }
        });

        //prevent dropdown clicks on mobile devices
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('#menu-mobile-menu li:eq(0), #menu-mobile-menu li:eq(4), #menu-mobile-menu li:eq(12)').click(function(e) {
                var target = $( e.target );
                if ( !target.is( "ul.sub-menu li a" ) ) {
                    e.preventDefault();
                }

                $('#menu-mobile-menu li:eq(0)').toggle("slow");
            });
        }

        // if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        //     $('div.center-align #menu-right-general-menu .shop').on('touchstart', function(e) {
                // e.preventDefault();
            // });
        //}
    });
</script>
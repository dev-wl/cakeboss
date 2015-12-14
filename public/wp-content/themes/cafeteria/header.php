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
    <script src="<?php echo get_template_directory_uri() . '/js/libs/'?>jquery.tap.js"></script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70811698-1', 'auto');
  ga('send', 'pageview');

</script>
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
        <!-- <div class="menu-drop">
            <a>Menu</a> -->
            <?php
            // if ( has_nav_menu( 'mobile_menu' ) ) {
            //     wp_nav_menu(array(
            //         'theme_location'=> 'mobile_menu',
            //         'menu'			=> 'Mobile Menu',
            //         'menu_class'	=> 'ul-drop',
            //         'walker'		=> new Aletheme_Nav_Walker(),
            //         'container'		=> '',
            //     ));
            // }
             ?>
        <!-- </div> -->
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
                        'menu_class'	=> 'col-6 left',
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
    <?php } elseif(true/*!is_page_template('page-home.php')*/){
        global $post;
        ale_part('innerheaders');
    } ?>
    <!--page title-->
    <div class="single-title">
        <div class="sr-wrapper">
            <div class="sr-menu">   
            </div>
        </div>
        <p>New Single Serve Coffee Cups</p>
    </div>

    <div class="mobile-menu">
        <?php 
            wp_nav_menu(array(
                'theme_location'=> 'mobile_menu',
                'menu'          => 'Mobile Menu',
                'menu_class'    => 'ul-drop',
                'walker'        => new Aletheme_Nav_Walker(),
                'container'     => '',
            ));
        ?>
    </div>

<script>
    $('.sr-wrapper').click(function(e){
        e.stopPropagation();
        if($('.sr-menu').hasClass('active') == true) {
            $('.sr-menu').removeClass('active');
            $('.mobile-menu').removeClass('active');
        }
        else {
            $('.sr-menu').addClass('active');
            $('.mobile-menu').addClass('active');
        }
    });

    mobile = false;
    $(document).ready(function() {
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            mobile = true;
        }

        $(window).on('scroll', function(e) {
            if(mobile) {
                if($(window).width() < 700 && $(document).height() < 960)
                    return;
                if($(window).width() <= 768 /* && $(document).height() < 2800*/) {
                    $('header.cf').removeClass('fx');
                    $('div.logo').css('display', 'block');
                    $('body').css('margin-top', 0 + 'px');
                    return;
                }
                if($(document).height() < 930)
                    return;
            }

            if(!mobile && $(document).height() < 1260) {
                // h += 100;
                // return;
            } 

            h = $('header.cf').height();
            if($('#wpadminbar').css('display') == 'block') {
                h += $('#wpadminbar').height();
            }
            if($(window).scrollTop() > h) {
                $('header.cf').addClass('fx');
                $('div.logo').css('display', 'none');
                $('body').css('margin-top', h + 'px');
            } else {
                $('header.cf').removeClass('fx');
                $('div.logo').css('display', 'block');
                $('body').css('margin-top', 0 + 'px');
            }

        });

        //prevent dropdown clicks on mobile devices
        if(mobile) {
            // $('#menu-mobile-menu li:eq(0), #menu-mobile-menu li:eq(3), #menu-mobile-menu li:eq(7), #menu-mobile-menu li:eq(13), #menu-mobile-menu li:eq(16)').click(function(e) {
            //     var target = $( e.target );
            //     if ( !target.is( "ul.sub-menu li a" ) ) {
            //         e.preventDefault();
            //     }
            // });

            $('#menu-general-menu li:eq(0), #menu-general-menu li:eq(3), #menu-right-general-menu li:eq(0), #menu-right-general-menu li:eq(5)').click(function(e) {
                var target = $( e.target );
                if ( target.is( "ul.sub-menu li a" ) ) {}
                if ( !target.is( "ul.sub-menu li a" ) ) {
                    e.preventDefault();
                }
            });
        }

        // if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        //     $('div.center-align #menu-right-general-menu .shop').on('touchstart', function(e) {
                // e.preventDefault();
            // });
        //}

         if (/iPad/i.test(navigator.userAgent) && $(document).height() <= 1024) {
            $('.footer.footer-small').css('position', 'static');
         }

         if(!mobile && $(document).height() < 1250) {
            $('.footer.footer-small').css('position', 'static');
         }

         if(!mobile && $(document).height() < 960) {
            // $('article').css('padding', '114px 0px 100px');  
            $('.footer').css('position', 'absolute');
         }
    });
    
    // $('#menu-mobile-menu li:eq(1), #menu-general-menu li:eq(1)').click(function() {
    $('a[href="/#about"]').click(function(e) {
        if(mobile) {
            if (/iPad/i.test(navigator.userAgent) && $(window).width() > 768)
                correction = 160;
            else
                correction = 0;
        }
        else
            correction = 160;
        $('body, html').animate({
            'scrollTop':   $('a[name="about"]').offset().top - correction
        }, 2000);
    });

    $(window).on('tap', function(e) {
        var box = $('.mobile-menu');
        var box2 = $('.mobile-menu.active ul');
        var box3 = $('li.menu-item');
        var box4 = $('.mobile-menu a');
        var menu = $('.sr-menu');
        var menu2 = $('.sr-wrapper');

        if($(e.target).is($(menu)) || $(e.target).is($(box)) || $(e.target).is($(box2)) || $(e.target).is($(box3)) || $(e.target).is($(menu2))
            || $(e.target).is($(box4))) {
            e.stopPropagation();
            return;
        }
        if($(box).hasClass('active')) {
                $(box).removeClass('active');
                $(menu).removeClass('active');
            }
    });
</script>
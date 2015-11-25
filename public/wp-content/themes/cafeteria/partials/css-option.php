<?php
$ale_background = ale_get_option('background');
$ale_headerfont = ale_get_option('headerfont');
$ale_mainfont = ale_get_option('mainfont');
$ale_thirdfont = ale_get_option('thirdfont');
$ale_font = ale_get_option('bodystyle');
$ale_h1 = ale_get_option('h1sty');
$ale_h2 = ale_get_option('h2sty');
$ale_h3 = ale_get_option('h3sty');
$ale_h4 = ale_get_option('h4sty');
$ale_h5 = ale_get_option('h5sty');
$ale_h6 = ale_get_option('h6sty');
?>
<?php

    //Load the Header font. In our case is Damion
    if(ale_get_option('headerfontex')){ $headerfontex = ":".ale_get_option('headerfontex'); } else {$headerfontex =""; }
    if(ale_get_option('headerfont')){ echo "<link href='http://fonts.googleapis.com/css?family=".ale_get_option('headerfont').$headerfontex."' rel='stylesheet' type='text/css'>"; }

    //Load the Main font. In our case is Viga
    if(ale_get_option('mainfontex')){ $mainfontex = ":".ale_get_option('mainfontex'); } else {$mainfontex =""; }
    if(ale_get_option('mainfont')){ echo "<link href='http://fonts.googleapis.com/css?family=".ale_get_option('mainfont').$mainfontex."' rel='stylesheet' type='text/css'>"; }

    //Load the Third  font. In our case is Georgia
    if(ale_get_option('thirdfontex')){ $mainfontex = ":".ale_get_option('thirdfontex'); } else {$thirdfontex =""; }
    if(ale_get_option('thirdfont')){ echo "<link href='http://fonts.googleapis.com/css?family=".ale_get_option('thirdfont').$thirdfontex."' rel='stylesheet' type='text/css'>"; }

?>
<style type='text/css'>
    body {
        <?php
        if($ale_background['color']){ echo "background-color:".$ale_background['color'].";"; }
        if($ale_background['image']){ echo "background-image: url(".$ale_background['image'].");"; }
        if($ale_background['repeat']){ echo "background-repeat:".$ale_background['repeat'].";"; }
        if($ale_background['position']){ echo "background-position:".$ale_background['position'].";"; }
        if($ale_background['attachment']){ echo "background-attachment:".$ale_background['attachment'].";"; }
        if($ale_font['size']){ echo "font-size:".$ale_font['size'].";"; };
        if($ale_font['style']){ echo "font-style:".$ale_font['style'].";"; };
        if($ale_font['color']){ echo "color:".$ale_font['color'].";"; };
        if($ale_font['face']){ $fontfamily =  str_replace ('+',' ',$ale_font['face']); echo "font-family:".$fontfamily.";"; };
        ?>
    }
    h1 {
        <?php
        if($ale_h1['size']){ echo "font-size:".$ale_h1['size'].";"; };
        if($ale_h1['style']){ echo "font-style:".$ale_h1['style'].";"; };
        if($ale_h1['color']){ echo "color:".$ale_h1['color'].";"; };
        if($ale_h1['face']){ $h1family =  str_replace ('+',' ',$ale_h1['face']); echo "font-family:".$h1family.";"; };
        ?>
    }
    h2 {
        <?php
        if($ale_h2['size']){ echo "font-size:".$ale_h2['size'].";"; };
        if($ale_h2['style']){ echo "font-style:".$ale_h2['style'].";"; };
        if($ale_h2['color']){ echo "color:".$ale_h2['color'].";"; };
        if($ale_h2['face']){ $h2family =  str_replace ('+',' ',$ale_h2['face']); echo "font-family:".$h2family.";"; };
        ?>
    }
    h3 {
        <?php
        if($ale_h3['size']){ echo "font-size:".$ale_h3['size'].";"; };
        if($ale_h3['style']){ echo "font-style:".$ale_h3['style'].";"; };
        if($ale_h3['color']){ echo "color:".$ale_h3['color'].";"; };
        if($ale_h3['face']){ $h3family =  str_replace ('+',' ',$ale_h3['face']); echo "font-family:".$h3family.";"; };
        ?>
    }
    h4 {
        <?php
        if($ale_h4['size']){ echo "font-size:".$ale_h4['size'].";"; };
        if($ale_h4['style']){ echo "font-style:".$ale_h4['style'].";"; };
        if($ale_h4['color']){ echo "color:".$ale_h4['color'].";"; };
        if($ale_h4['face']){ $h4family =  str_replace ('+',' ',$ale_h4['face']); echo "font-family:".$h4family.";"; };
        ?>
    }
    h5 {
        <?php
        if($ale_h5['size']){ echo "font-size:".$ale_h5['size'].";"; };
        if($ale_h5['style']){ echo "font-style:".$ale_h5['style'].";"; };
        if($ale_h5['color']){ echo "color:".$ale_h5['color'].";"; };
        if($ale_h5['face']){ $h5family =  str_replace ('+',' ',$ale_h5['face']); echo "font-family:".$h5family.";"; };
        ?>
    }
    h6 {
        <?php
        if($ale_h6['size']){ echo "font-size:".$ale_h6['size'].";"; };
        if($ale_h6['style']){ echo "font-style:".$ale_h6['style'].";"; };
        if($ale_h6['color']){ echo "color:".$ale_h6['color'].";"; };
        if($ale_h6['face']){ $h6family =  str_replace ('+',' ',$ale_h6['face']); echo "font-family:".$h6family.";"; };
        ?>
    }

    /* First Font */
    .firstfont,header .center-align > ul > li,.slider .box > a,.our-menu .background .info a,
    .story-open .main form .col-7 input[type='submit'],blockquote span,.footer form .col-8 input[type='submit'],
    .menu-drop > a,blockquote p:before,blockquote div:before,#searchsubmit,.ale-team .prof,.ale-team .socialbut {
        <?php if($ale_headerfont){ $headerfontname =  str_replace ('+',' ',$ale_headerfont); echo "font-family:".$headerfontname.";"; } ?>
    }

    /* Second Font */
    .secondfont,.home-price .prices .col-3 .item-top span,.ale-team .testititle,.ale-tabs .ale-nav,.ale-service .servicetitle,.ale-testimonial .lefttestimonialpart,
    .flexslider .descr h3 {
        <?php if($ale_mainfont){ $mainfontname =  str_replace ('+',' ',$ale_mainfont); echo "font-family:".$mainfontname.";"; } ?>
    }

    /* Third Font */
    .thirdfont,p,header .center-align > ul > li ul li,.home-gallery .filter-line p, .home-gallery .filter-line a .ref, .home-gallery .background .look,
    .our-gallery .filter-line p, .our-gallery .filter-line a .ref, .our-gallery .background .look, .our-menu .filter-line p, .our-menu .filter-line a .ref,
    .our-events .content .events .slides li .date, .story-open .main form .col-5 input,
    .story-open .main form .col-5 textarea, .story-open .main form .col-7 textarea, .story-open .right .content .archives ul li,
    .story-open .right .content .tags a .ref, .footer form .col-4 input,
    .footer form .col-4 textarea, .footer form .col-8 textarea, .menu-drop {
    <?php if($ale_thirdfont){ $thirdfontname =  str_replace ('+',' ',$ale_thirdfont); echo "font-family:".$thirdfontname.";"; } ?>
    }


    <?php if(ale_get_option('mainfooter')){ ?>
        .footer { background-image:url(<?php echo ale_get_option('mainfooter') ?>);}
    <?php } ?>

    <?php
        //If the Custom Cake icon is uploaded
        if(ale_get_option('customcake1')){ ?>
            article .line-cake .cake {
                background: url("<?php echo ale_get_option('customcake1'); ?>") no-repeat center;
            }

    <?php } if(ale_get_option('customcake2')){ ?>
            .story-open .right .content .line-cake .cake {
                background: url("<?php echo ale_get_option('customcake2'); ?>") no-repeat center;
            }
    <?php } ?>

    <?php
    //If WooCommerce is installed/active, get custom styles

    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>

        .woocommerce ul.products li.product a img, .woocommerce-page ul.products li.product a img {
            box-shadow:0 0 0!important;
            -webkit-border-top-right-radius: 5px;
            -webkit-border-top-left-radius: 5px;
            -moz-border-radius-topright: 5px;
            -moz-border-radius-topleft: 5px;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }
        .woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.35);
            -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.35);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.35);
            -webkit-border-top-right-radius: 5px;
            -webkit-border-bottom-right-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            -webkit-border-top-left-radius: 5px;
            -moz-border-radius-topright: 5px;
            -moz-border-radius-bottomright: 5px;
            -moz-border-radius-bottomleft: 5px;
            -moz-border-radius-topleft: 5px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            text-align: center;
            padding-bottom: 15px;
        }
        .woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price {
            <?php if($ale_headerfont){ $headerfontname =  str_replace ('+',' ',$ale_headerfont); echo "font-family:".$headerfontname.";"; } ?>
            font-size:26px;
        }
        .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button {
            <?php if($ale_headerfont){ $headerfontname =  str_replace ('+',' ',$ale_headerfont); echo "font-family:".$headerfontname.";"; } ?>
            font-size:20px;
            font-weight: normal;
            text-transform: none;
            height: 30px;
            line-height: 30px;
            padding-top: 0;
            padding-bottom: 0;
        }
        .woocommerce a.button.added:before, .woocommerce-page a.button.added:before, .woocommerce button.button.added:before, .woocommerce-page button.button.added:before, .woocommerce input.button.added:before, .woocommerce-page input.button.added:before, .woocommerce #respond input#submit.added:before, .woocommerce-page #respond input#submit.added:before, .woocommerce #content input.button.added:before, .woocommerce-page #content input.button.added:before {
            display: none;
        }
        .woocommerce div.product .product_title, .woocommerce-page div.product .product_title, .woocommerce #content div.product .product_title, .woocommerce-page #content div.product .product_title {
            <?php if($ale_headerfont){ $headerfontname =  str_replace ('+',' ',$ale_headerfont); echo "font-family:".$headerfontname.";"; } ?>
            font-size:26px;
        }
        .woocommerce div.product span.price, .woocommerce-page div.product span.price, .woocommerce #content div.product span.price, .woocommerce-page #content div.product span.price, .woocommerce div.product p.price, .woocommerce-page div.product p.price, .woocommerce #content div.product p.price, .woocommerce-page #content div.product p.price,.woocommerce-tabs h2,.related h2,
        .shop_table thead, .woocommerce-page .cart-collaterals .cart_totals h2, .woocommerce-page .cart-collaterals .shipping_calculator h2,
        .checkout h3 {
            <?php if($ale_headerfont){ $headerfontname =  str_replace ('+',' ',$ale_headerfont); echo "font-family:".$headerfontname.";"; } ?>
            font-size:24px;
        }
        .shop_table thead th {
            font-weight: normal!important;
        }
        .related h2 {
            margin-bottom: 20px;
        }
        .woocommerce table.cart a.remove, .woocommerce-page table.cart a.remove, .woocommerce #content table.cart a.remove, .woocommerce-page #content table.cart a.remove {
            font-size: 14px;
            margin: 0 auto;
        }
        .woocommerce table.shop_table, .woocommerce-page table.shop_table,
        .woocommerce .cart-collaterals .cart_totals table, .woocommerce-page .cart-collaterals .cart_totals table{
            border-collapse: collapse;
        }
        .woocommerce table.cart img, .woocommerce-page table.cart img, .woocommerce #content table.cart img, .woocommerce-page #content table.cart img {
            width: 90px;
        }
        .woocommerce .quantity input.qty, .woocommerce-page .quantity input.qty, .woocommerce #content .quantity input.qty, .woocommerce-page #content .quantity input.qty {
            margin-top: 0;
        }
        .woocommerce .cart-collaterals .cart_totals table, .woocommerce-page .cart-collaterals .cart_totals table {
            border-top: 1px solid #cccccc;
            float: right;
        }
        .woocommerce table.cart td.actions, .woocommerce-page table.cart td.actions, .woocommerce #content table.cart td.actions, .woocommerce-page #content table.cart td.actions {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        ul.payment_methods li {
            list-style: none;
        }
        ul.woocommerce-error {
            margin-left: 0px;
        }
        ul.woocommerce-error li {
            margin-left: 30px;
        }
        .woocommerce .cart-collaterals .shipping_calculator .shipping-calculator-button:after, .woocommerce-page .cart-collaterals .shipping_calculator .shipping-calculator-button:after {
            font-size:14px;
        }
        .woocommerce table.cart td.actions .coupon .input-text, .woocommerce-page table.cart td.actions .coupon .input-text, .woocommerce #content table.cart td.actions .coupon .input-text, .woocommerce-page #content table.cart td.actions .coupon .input-text {
            height: 30px;
            line-height: 30px;
        }
    .woocommerce .quantity input.qty, .woocommerce-page .quantity input.qty, .woocommerce #content .quantity input.qty, .woocommerce-page #content .quantity input.qty {
        min-height: 25px!important;
    }
    .woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
        min-height: 366px!important;
    }
    <?php } ?>
</style>
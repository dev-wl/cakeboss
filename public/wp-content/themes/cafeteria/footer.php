        <section class="footer footer-small">
            <div class="footerinfo-wrapper">
                <div class="footer-left">FOLLOW US ON <a href="https://twitter.com/cakebosscoffee" target="_blank"><img src="/wp-content/themes/cafeteria/css/images/twitter-circle-white.png" class="tw-icon"/></a> <a href="https://www.facebook.com/cakebosscoffee/" target="_blank"><img src="/wp-content/themes/cafeteria/css/images/facebook.png" class="fb-icon"/></a> <a href="/privacy-policy"><p class="privacy">Privacy Policy</p></a></div>
                <div class="footer-right"><img src="/wp-content/themes/cafeteria/css/images/TLC_Logo.png"/> <p>&copy;2015 Discovery Communications, LLC. TLC, CakeBoss and related logos are trademarks of Discovery Communications, LLC, used under license. All rights reserved. tlc.com/cake-boss </p> <div class="clearfix"></div> </div>

                <div class="clearfix"></div>
            </div>
        </section>

    <?php if(ale_get_option('skinselector') == "1") { ale_part('colorselector'); } ?>

    <!-- Scripts -->
    <script type="text/javascript">
    if($('body').height() < ($(window).height())) {
        $('.footer.footer-small').css({position:'absolute', bottom: 0});
    }
        // $('html, body').css('height', '100%');
        // $('.menu-open').css({height: '56%', minHeight: '350px'});
        // $('.story-time-line').css({height: '56%', minHeight: '350px'});
        // $('.story-open').css({height: '56%', minHeight: '350px'});

        // if(navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
        //     if($('body').find('article.menu-open').length > 0)
        //         $('.footer.footer-small').css('margin-top',  $('body').height() - $('header').height()- $('.single-title').height() - $('.header-back').height() -  $('.footer.footer-small').height() + 120);
        //     else
        //         $('.footer.footer-small').css('margin-top',  $('body').height() - $('header').height()- $('.story-time-line').height() - $('.header-back').height() -  $('.footer.footer-small').height() + 70);
        // }
        // else
        //     $('.footer.footer-small').css('margin-top',  $('body').height() - $('header').height()- $('.story-time-line').height() - $('.header-back').height() -  $('.footer.footer-small').height() + 48);
    </script>
    <?php wp_footer(); ?>
</body>
</html>

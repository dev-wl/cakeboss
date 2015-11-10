        <section class="footer footer-small">
            <div class="footerinfo-wrapper">
                <div class="footer-left">FOLLOW US ON <a href="http://twitter.com"><img src="/wp-content/themes/cafeteria/css/images/twitter-circle-white.png" class="tw-icon"/></a> <a href="http://facebook.com"><img src="/wp-content/themes/cafeteria/css/images/facebook.png" class="fb-icon"/></a> <a href="/privacy-policy"><p class="privacy">Privacy Policy</p></a></div>
                <div class="footer-right"><span class='tlc-logo'>T</span><span class='tlc-logo'>L</span><span class='tlc-logo'>C</span> &copy;2015 and other stuff that goes here and other stuff that goes here and other stuff that goes here</div>

                <div class="clearfix"></div>
            </div>
        </section>

    <?php if(ale_get_option('skinselector') == "1") { ale_part('colorselector'); } ?>

    <!-- Scripts -->
    <script type="text/javascript">
    if($('body').height() < $(window).height())
        $('.footer.footer-small').css('margin-top',  $('body').height() - $('header').height()- $('.story-time-line').height() - $('.header-back').height() -  $('.footer.footer-small').height())
    </script>
    <?php wp_footer(); ?>
</body>
</html>
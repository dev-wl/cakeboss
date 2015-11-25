    <?php if(/*is_page_template('page-home.php') or*/ is_page_template('template-contact.php')){ ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://www.dm-mailinglist.com/subscribe_forms/localized.js" charset="UTF-8"></script>
<script src="https://www.dm-mailinglist.com/subscribe_forms/subscribe_embed.js" charset="UTF-8"></script>
        <section class="footer nokeyframebug" style="<?php if(ale_get_meta('contactbg')){ echo 'background-image:url('.ale_get_meta('contactbg').');'; } ?> <?php if(ale_get_option('formcontact') == '1'){echo 'height:540px;';} ?>" >
            <a name="success" href="#success"></a>
            <div class="maskkeyframebug">
                <div class="center-align">
                    <a href="#top" class="top"></a>
                    
                    <?php if (ale_get_option('copyrights')) : ?>
                        <p class="copy"><?php echo ale_option('copyrights'); ?></p>
                    <?php else: ?>
                        <p class="copy"><?php _e('Copyright, All Right Reserved','aletheme'); ?></p>
                    <?php endif; ?>

                    <div class="social_icons">
                        <?php if(ale_get_option('fb')){ ?><a href="<?php echo ale_get_option('fb'); ?>" class="sicon fbic" target="_blank">Facebook</a><?php } ?>
                        <?php if(ale_get_option('twi')){ ?><a href="<?php echo ale_get_option('twi'); ?>" class="sicon twiic" target="_blank">Twitter</a><?php } ?>
                        <?php if(ale_get_option('pin')){ ?><a href="<?php echo ale_get_option('pin'); ?>" class="sicon pinic" target="_blank">Pinterest</a><?php } ?>
                        <?php if(ale_get_option('flickr')){ ?><a href="<?php echo ale_get_option('flickr'); ?>" class="sicon flickric" target="_blank">Flickr</a><?php } ?>
                        <?php if(ale_get_option('vim')){ ?><a href="<?php echo ale_get_option('vim'); ?>" class="sicon vimic" target="_blank">Vimeo</a><?php } ?>
                        <?php if(ale_get_option('lin')){ ?><a href="<?php echo ale_get_option('lin'); ?>" class="sicon linic" target="_blank">LinkedIn</a><?php } ?>
                        <?php if(ale_get_option('gog')){ ?><a href="<?php echo ale_get_option('gog'); ?>" class="sicon gogic" target="_blank">Google+</a><?php } ?>
                        <?php if(ale_get_option('ytb')){ ?><a href="<?php echo ale_get_option('ytb'); ?>" class="sicon ytbic" target="_blank">Youtube</a><?php } ?>
                        <?php if(ale_get_option('insta')){ ?><a href="<?php echo ale_get_option('insta'); ?>" class="sicon instaic" target="_blank">Instagram</a><?php } ?>
                    </div>
                </div>

                <div class="inner-border" style="<?php if(ale_get_option('formcontact') == '1'){echo 'height:529px;';} ?>"></div>
                <div class="background-opacity"></div>
            </div>
        </section>
        <?php if(ale_get_option('preloaderstatus')!=='1'){ ?></div> <!-- /hide --><?php } ?>
    <?php } else { ?>
        <section class="footer footer-small">
            <div class="center-align">

                <?php if (ale_get_option('copyrights')) : ?>
                    <p class="copy"><?php echo ale_option('copyrights'); ?></p>
                <?php else: ?>
                    <p class="copy"><?php _e('Copyright, All Right Reserved','aletheme'); ?></p>
                <?php endif; ?>

                <div class="social_icons">
                    <?php if(ale_get_option('fb')){ ?><a href="<?php echo ale_get_option('fb'); ?>" class="sicon fbic" target="_blank">Facebook</a><?php } ?>
                    <?php if(ale_get_option('twi')){ ?><a href="<?php echo ale_get_option('twi'); ?>" class="sicon twiic" target="_blank">Twitter</a><?php } ?>
                    <?php if(ale_get_option('pin')){ ?><a href="<?php echo ale_get_option('pin'); ?>" class="sicon pinic" target="_blank">Pinterest</a><?php } ?>
                    <?php if(ale_get_option('flickr')){ ?><a href="<?php echo ale_get_option('flickr'); ?>" class="sicon flickric" target="_blank">Flickr</a><?php } ?>
                    <?php if(ale_get_option('vim')){ ?><a href="<?php echo ale_get_option('vim'); ?>" class="sicon vimic" target="_blank">Vimeo</a><?php } ?>
                    <?php if(ale_get_option('lin')){ ?><a href="<?php echo ale_get_option('lin'); ?>" class="sicon linic" target="_blank">LinkedIn</a><?php } ?>
                    <?php if(ale_get_option('gog')){ ?><a href="<?php echo ale_get_option('gog'); ?>" class="sicon gogic" target="_blank">Google+</a><?php } ?>
                    <?php if(ale_get_option('ytb')){ ?><a href="<?php echo ale_get_option('ytb'); ?>" class="sicon ytbic" target="_blank">Youtube</a><?php } ?>
                    <?php if(ale_get_option('insta')){ ?><a href="<?php echo ale_get_option('insta'); ?>" class="sicon instaic" target="_blank">Instagram</a><?php } ?>
                </div>
            </div>

            <!-- ## ## ## ## ## ## ## ## ## ## -->
            <div class="inner-border"></div>
            <div class="background-opacity"></div>
        </section>
    <?php } ?>

    <?php if(ale_get_option('skinselector') == "1") { ale_part('colorselector'); } ?>

    <!-- Scripts -->
    <script type="text/javascript">
    if($('body').height() < $(window).height())
        $('.footer.footer-small').css('margin-top',  $('body').height() - $('header').height()- $('.story-time-line').height() - $('.header-back').height() -  $('.footer.footer-small').height())
    </script>
    <?php wp_footer(); ?>
</body>
</html>
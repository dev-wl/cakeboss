    <?php if(is_page_template('page-home.php') or is_page_template('template-contact.php')){ ?>
        <section class="footer nokeyframebug" style="<?php if(ale_get_meta('contactbg')){ echo 'background-image:url('.ale_get_meta('contactbg').');'; } ?> <?php if(ale_get_option('formcontact') == '1'){echo 'height:540px;';} ?>" >
            <a name="success" href="#success"></a>
            <div class="maskkeyframebug">
                <div class="center-align">
                    <a href="#top" class="top"></a>

                    <h2 class="firstfont caption"> <?php echo ale_get_meta('contacttit'); ?></h2>
                    <?php if(ale_get_option('formcontact') !== '1'){ ?>
                    <form method="post" id="contact-form" action="<?php the_permalink();?>" class="cf">
                        <div class="col-12">
                            
                            <!-- BEGIN DIRECT MAIL SUBSCRIBE FORM -->
                            <link rel="stylesheet" type="text/css" href="https://www.dm-mailinglist.com/subscribe_forms/embed.css?v=2&f=a7bd8bd5&sbg=1" media="all">
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
                            <script src="https://www.dm-mailinglist.com/subscribe_forms/localized.js" charset="UTF-8"></script>
                            <script src="https://www.dm-mailinglist.com/subscribe_forms/subscribe_embed.js" charset="UTF-8"></script>
                            <div>
                                <form method="post" action="https://www.dm-mailinglist.com/subscribe" data-directmail-use-ajax="1" data-form-id="a7bd8bd5" class="directmail-subscribe-form" accept-charset="UTF-8">
                                    <input type="hidden" name="email"></input>
                                    <input type="hidden" name="form_id" value="a7bd8bd5"></input>
                                        <div style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8px; line-height: normal;">
                                            <table>
                                                <tr>
                                                    <td colspan=1>Cake Boss Coffee Newsletter</td>
                                                </tr>
                                                <tr>
                                                    <td style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8px; line-height: normal;" colspan=1> For updates on Cake Boss Coffees please sign up for our newsletter. You may unsubscibe at anytime.</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="directmail-a7bd8bd5-first_name">First Name:</label>
                                                        <input type="text" id="directmail-a7bd8bd5-first_name" name="first_name" value="" placeholder="First Name" ></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="directmail-a7bd8bd5-last_name">Last Name:</label>
                                                        <input type="text" id="directmail-a7bd8bd5-last_name" name="last_name" value="" placeholder="Last Name" ></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="directmail-a7bd8bd5-custom_1">Country:</label>
                                                        <input type="text" id="directmail-a7bd8bd5-custom_1" name="custom_1" value="" placeholder="Country" ></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="directmail-a7bd8bd5-subscriber_email">Email*:</label>
                                                        <input type="email" id="directmail-a7bd8bd5-subscriber_email" name="subscriber_email" value="" placeholder="Email*" class="directmail-required-field" required="required"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="submit" value="Subscribe"></input>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                </form>
                            </div>

                        <!-- END DIRECT MAIL SUBSCRIBE FORM -->  

                        </div>
                    </form>
                    <?php } ?>
                    
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
    <?php wp_footer(); ?>
</body>
</html>
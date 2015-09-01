    <?php if(is_page_template('page-home.php') or is_page_template('template-contact.php')){ ?>
        <section class="footer nokeyframebug" style="<?php if(ale_get_meta('contactbg')){ echo 'background-image:url('.ale_get_meta('contactbg').');'; } ?> <?php if(ale_get_option('formcontact') == '1'){echo 'height:540px;';} ?>" >
            <a name="success" href="#success"></a>
            <div class="maskkeyframebug">
                <div class="center-align">
                    <a href="#top" class="top"></a>

                    <h2 class="firstfont caption"> <?php echo ale_get_meta('contacttit'); ?></h2>
                    <?php if(ale_get_option('formcontact') !== '1'){ ?>
                    <form method="post" id="contact-form" action="<?php the_permalink();?>" class="cf">
                        <div class="col-4">
                            <input name="contact[name]" type="text" placeholder="<?php _e('Your Name*','aletheme'); ?>"  value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" />
                            <input name="contact[email]" type="email" placeholder="<?php _e('Your e-mail address*','aletheme'); ?>" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" />
                            <input name="contact[location]" type="text" class="location_field" placeholder="<?php _e('Where are you from*','aletheme'); ?>" value="<?php echo isset($_POST['contact']['location']) ? $_POST['contact']['location'] : ''?>" />
                            <textarea name="contact[how]" class="subject" placeholder="<?php _e('Subject','aletheme'); ?>"></textarea>
                            <?php if (isset($_GET['success'])) : ?>
                                <p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
                            <?php endif; ?>
                            <?php if (isset($error) && isset($error['msg'])) : ?>
                                <p class="error"><?php echo $error['msg']?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-8">
                            <textarea name="contact[message]"  placeholder="<?php _e('Type here your message*','aletheme'); ?>" required="required"></textarea>
                            <input type="submit" value="<?php _e('Send','aletheme'); ?>"/>
                            <?php wp_nonce_field() ?>
                        </div>
                    </form>
                    <?php } ?>
                    <div class="contacts cf">
                        <div class="col-4">
                            <ul>
                                <li>
                                    <div class="icon-adress"></div>
                                    <p><?php _e('Address','aletheme'); ?> // <?php echo ale_get_meta('contactaddress'); ?></p>
                                </li>
                                <li>
                                    <div class="icon-phone"></div>
                                    <p><?php _e('Telephone nr.','aletheme'); ?> //  <?php echo ale_get_meta('contactphone'); ?></p>
                                </li>
                                <li>
                                    <div class="icon-mail"></div>
                                    <p><?php _e('E-Mail','aletheme'); ?> //  <?php echo ale_get_meta('contactemail'); ?></p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-8"><?php echo str_replace('&','&amp;',ale_get_meta('contactmap')); ?></div>
                    </div>

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
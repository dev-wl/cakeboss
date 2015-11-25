<?php
/**
 * Template Name: Template About
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Our Team -->
    <article class="our-team">
        <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamtit'); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>
        <!-- ## ## ## ## ## ## ## ## ## ## ## -->
        <div class="center-align content cf">
            <div class="col-3">
                <div class="circle">
                    <img src="<?php echo ale_get_meta('teamphoto1'); ?>" alt="<?php echo ale_get_meta('teamname1'); ?>"/>
                </div>
                <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamname1'); ?></h2>
                <p class="text">
                    <?php echo ale_get_meta('teamdesc1'); ?>
                </p>
            </div>
            <div class="col-3">
                <div class="circle">
                    <img src="<?php echo ale_get_meta('teamphoto2'); ?>" alt="<?php echo ale_get_meta('teamname2'); ?>"/>
                </div>
                <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamname2'); ?></h2>
                <p class="text">
                    <?php echo ale_get_meta('teamdesc2'); ?>
                </p>
            </div>
            <div class="col-3">
                <div class="circle">
                    <img src="<?php echo ale_get_meta('teamphoto3'); ?>" alt="<?php echo ale_get_meta('teamname3'); ?>"/>
                </div>
                <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamname3'); ?></h2>
                <p class="text">
                    <?php echo ale_get_meta('teamdesc3'); ?>
                </p>
            </div>
            <div class="col-3">
                <div class="circle">
                    <img src="<?php echo ale_get_meta('teamphoto4'); ?>" alt="<?php echo ale_get_meta('teamname4'); ?>"/>
                </div>
                <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamname4'); ?></h2>
                <p class="text">
                    <?php echo ale_get_meta('teamdesc4'); ?>
                </p>
            </div>
        </div>
    </article>

    <!-- ## Home Price -->
    <section class="home-price nokeyframebug" <?php if(ale_get_meta('menubg')){ echo 'style="background-image: url('.ale_get_meta('menubg').');"'; } ?>>
        <div class="maskkeyframebug">
            <div class="center-align">
                <a href="#top" class="top"></a>

                <div class="prices cf">
                    <!-- Item -->
                    <div class="col-3">
                        <div class="item-top">
                            <div class="item-logo"></div>
                            <span><?php echo ale_get_meta('menutitic1'); ?></span>
                        </div>
                        <img src="<?php echo ale_get_meta('menuphoto1'); ?>" alt="<?php echo ale_get_meta('menutitic1'); ?>"/>
                        <div class="item-info">
                            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('menutit1'); ?></h2>
                            <p class="text">
                                <?php echo ale_get_meta('menudesc1'); ?>
                            </p>
                        </div>
                        <div class="item-price">
                            <h3 class="firstfont"><?php echo ale_get_meta('menuprice1'); ?></h3>
                        </div>
                        <div class="item-rombs"></div>
                    </div>
                    <!-- Item -->
                    <div class="col-3">
                        <div class="item-top">
                            <div class="item-logo"></div>
                            <span><?php echo ale_get_meta('menutitic2'); ?></span>
                        </div>
                        <img src="<?php echo ale_get_meta('menuphoto2'); ?>" alt="<?php echo ale_get_meta('menutitic2'); ?>"/>
                        <div class="item-info">
                            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('menutit2'); ?></h2>
                            <p class="text">
                                <?php echo ale_get_meta('menudesc2'); ?>
                            </p>
                        </div>
                        <div class="item-price">
                            <h3 class="firstfont"><?php echo ale_get_meta('menuprice2'); ?></h3>
                        </div>
                        <div class="item-rombs"></div>
                    </div>
                    <!-- Item -->
                    <div class="col-3">
                        <div class="item-top">
                            <div class="item-logo"></div>
                            <span><?php echo ale_get_meta('menutitic3'); ?></span>
                        </div>
                        <img src="<?php echo ale_get_meta('menuphoto3'); ?>" alt="<?php echo ale_get_meta('menutitic3'); ?>"/>
                        <div class="item-info">
                            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('menutit3'); ?></h2>
                            <p class="text">
                                <?php echo ale_get_meta('menudesc3'); ?>
                            </p>
                        </div>
                        <div class="item-price">
                            <h3 class="firstfont"><?php echo ale_get_meta('menuprice3'); ?></h3>
                        </div>
                        <div class="item-rombs"></div>
                    </div>
                    <!-- Item -->
                    <div class="col-3">
                        <div class="item-top">
                            <div class="item-logo"></div>
                            <span><?php echo ale_get_meta('menutitic4'); ?></span>
                        </div>
                        <img src="<?php echo ale_get_meta('menuphoto4'); ?>" alt="<?php echo ale_get_meta('menutitic4'); ?>"/>
                        <div class="item-info">
                            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('menutit4'); ?></h2>
                            <p class="text">
                                <?php echo ale_get_meta('menudesc4'); ?>
                            </p>
                        </div>
                        <div class="item-price">
                            <h3 class="firstfont"><?php echo ale_get_meta('menuprice4'); ?></h3>
                        </div>
                        <div class="item-rombs"></div>
                    </div>
                </div>

            </div>

            <!-- ## ## ## ## ## ## ## ## ## ## -->
            <div class="inner-border"></div>
            <div class="background-opacity"></div>
        </div>
    </section>

    <!-- Details -->
    <article class="details">
        <div class="center-align">
            <h2 class="caption colormain firstfont"><?php the_title(); ?></h2>
        </div>
        <!-- ## ## ## ## ## ## ## ## ## ## ## -->
        <div class="center-align content">
            <div class="text story">
                <?php the_content(); ?>
            </div>
        </div>
    </article>

<?php endwhile; else: ?>
    <?php ale_part('notfound')?>
<?php endif; ?>

<?php get_footer(); ?>
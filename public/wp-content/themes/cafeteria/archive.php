<?php get_header(); ?>
    <article class="story-time-line">
        <h2 class="caption firstfont colormain"><?php if ( is_day() ) : ?>
                <?php printf( __( 'Daily Archives: <span>%s</span>', 'aletheme' ), get_the_date() ); ?>
            <?php elseif ( is_month() ) : ?>
                <?php printf( __( 'Monthly Archives: <span>%s</span>', 'aletheme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'aletheme' ) ) ); ?>
            <?php elseif ( is_year() ) : ?>
                <?php printf( __( 'Yearly Archives: <span>%s</span>', 'aletheme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'aletheme' ) ) ); ?>
            <?php else : ?>
                <?php _e( 'Blog Archives', 'aletheme' ); ?>
            <?php endif; ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>

        <div class="center-align content">
            <?php if (have_posts()){ ?>
                <div class="back-line"></div>
                <div class="cub-top"></div>
                <div class="cub-bot"></div>
            <?php } ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="item cf">
                    <div class="text">
                        <h2 class="caption firstfont colormain"><?php the_title(); ?></h2>
                        <p><?php echo strip_tags(ale_trim_excerpt(23)); ?></p>
                        <div class="info">
                            <h3 class="firstfont colormain"><?php echo get_the_date(); ?> / <a href="<?php the_permalink(); ?>"><?php _e('Take a look','aletheme'); ?></a></h3>
                        </div>
                    </div>
                    <div class="circle">
                        <div class="circ"></div>
                        <div class="line"></div>
                    </div>
                    <?php if(ale_get_meta('blogtypeimage')=='banner'){
                        if(ale_get_meta('storybanner')){ ?>
                            <div class="imgfull">
                                <img src="<?php echo ale_get_meta('storybanner'); ?>" width="452" height="130" alt="<?php the_title(); ?>"/>
                                <div class="shadow"></div>
                            </div>
                        <?php }
                    } else {
                        if(ale_get_meta('storyphoto')){ ?>
                            <div class="img">
                                <a href="<?php the_permalink(); ?>">
                                    <div style="background-image: url('<?php echo ale_get_meta('storyphoto'); ?>');" class="circle-img"></div>
                                </a>
                            </div>
                        <?php }
                    } ?>
                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>

        </div>

        <div class="center-align">
            <div class="pagination cf">
                <h3 class="left firstfont"><?php echo get_previous_posts_link(__('Newest Stories','aletheme')); ?></h3>
                <h3 class="right firstfont"><?php echo get_next_posts_link(__('Oldest Stories','aletheme')); ?></h3>
            </div>
        </div>
    </article>
<?php get_footer(); ?>
<?php get_header(); ?>
    <article class="events-time-line">
        <h2 class="caption firstfont colormain"><?php _e('Our events','aletheme'); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>

        <div class="center-align content">
            <div class="back-line"></div>
            <div class="cub-top"></div>
            <div class="cub-bot"></div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="item cf">
                    <div class="text">
                        <h2 class="caption firstfont colormain"><?php the_title(); ?></h2>
                        <?php echo ale_trim_excerpt(23); ?>
                        <div class="info">
                            <h3 class="firstfont"><?php if(ale_get_meta('event_date')){ echo date('F j, Y', ale_get_meta('event_date'));} else { echo get_the_date(); } ?> / <a href="<?php the_permalink(); ?>"><?php _e('Open the Event','aletheme'); ?></a></h3>
                        </div>
                    </div>
                    <div class="circle">
                        <div class="circ"></div>
                        <div class="line"></div>
                    </div>
                    <div class="img">
                        <?php echo get_the_post_thumbnail($post->ID,'events-thumba'); ?>
                        <div class="shadow"></div>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>

        <div class="center-align">
            <div class="pagination cf">
                <h3 class="left firstfont"><?php echo get_previous_posts_link(__('Previous','aletheme')); ?></h3>
                <h3 class="right firstfont"><?php echo get_next_posts_link(__('Next','aletheme')); ?></h3>
                <h3 class="center firstfont"><?php if($wp_query->max_num_pages) { echo $paged; ?> <?php  _e('of','aletheme'); ?> <?php echo $wp_query->max_num_pages; } ?></h3>
            </div>
        </div>
    </article>
<?php get_footer(); ?>
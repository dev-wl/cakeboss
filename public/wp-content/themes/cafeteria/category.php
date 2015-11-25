<?php get_header(); ?>

    <article class="story-time-line">
        <h2 class="caption firstfont colormain"><?php echo single_cat_title("", false); ?></h2>
        <div class="center-align">
            <!-- <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div> -->
        </div>

        <div class="center-align content">
            <?php if (have_posts()){ ?>
            <?php } ?>
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blogpost">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class='shortened'><p><?php the_excerpt(); ?></p></div>
                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>

            <div class="clearfix"></div>

        </div>

        <div class="center-align">
            <div class="pagination cf">
                <h3 class="left firstfont"><?php echo get_previous_posts_link(__('Newest Stories','aletheme')); ?></h3>
                <h3 class="right firstfont"><?php echo get_next_posts_link(__('Oldest Stories','aletheme')); ?></h3>
            </div>
        </div>
    </article>
<?php get_footer(); ?>
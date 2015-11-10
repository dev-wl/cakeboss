<?php get_header(); ?>
    <article class="story-time-line">
        <!-- <h2 class="caption firstfont colormain"><?php _e('Our story','aletheme'); ?></h2> -->
        <div class="center-align">
            <p class="inner-header">Blog</p>
            <img src="/wp-content/themes/cafeteria/css/images/cup-blog.png" />
            <!-- <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div> -->

            <div class="filterwrapper">
                <div class="filter-line cf">
                    <p><?php _e('SORT BY','aletheme');?>:</p>
                    <a href="<?php echo home_url(); ?>/blog">
                        <span class="triangle"></span>
                        <span class="ref"><?php _e('All', 'aletheme')?></span>
                    </a>
                    <?php $args = array(
                        'type'                     => 'post',
                        'taxonomy'                 => 'category',
                    );

                    $categories = get_categories( $args );
                    foreach($categories as $cat){ ?>
                        <?php
                            if(in_array($cat->name, array('Main page bottom menu', 'Retailers', 'Uncategorized')))
                                continue;
                        ?>
                        <a href="<?php echo home_url(); ?>/category/<?php echo $cat->slug; ?>">
                            <span class="triangle"></span>
                            <span class="ref"><?php echo $cat->name; ?></span>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="center-align content">
            <?php if (have_posts()){ ?>
                <!-- <div class="back-line"></div>
                <div class="cub-top"></div>
                <div class="cub-bot"></div> -->
            <?php } 
            $i = 0;
            ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if($i == 0): ?>
                    <div class="product-row">
                <?php endif; ?>
                <?php $i++; ?>
                <div class="blogpost">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class='shortened'><p><?php the_excerpt(); ?></p></div>
                </div>


                <?php if($i == 2):
                    $i = 0; ?>
                </div><div class="clearfix"></div>
                <?php endif; ?>

            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
            <?php if($i != 0) : ?>
                </div><div class="clearfix"></div>
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
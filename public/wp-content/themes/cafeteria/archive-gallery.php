<?php get_header(); ?>
<article class="our-gallery">
    <h2 class="firstfont caption colormain"><?php _e('Our gallery','aletheme'); ?></h2>
    <div class="center-align">
        <div class="line-cake">
            <div class="cake"></div>
            <div class="line left"></div>
            <div class="line right"></div>
        </div>
    </div>

    <div class="center-align content cf">
        <div class="filterwrapper">
            <div class="filter-line cf">
                <p><?php _e('FILTER BY','aletheme'); ?>:</p>

                <a href="<?php echo home_url(); ?>/gallery">
                    <span class="triangle"></span>
                    <span class="ref"><?php _e('All', 'aletheme')?></span>
                </a>
                <?php $args = array(
                    'type'                     => 'gallery',
                    'taxonomy'                 => 'gallery-category',
                );

                $categories = get_categories( $args );
                foreach($categories as $cat){ ?>
                    <a href="<?php echo home_url(); ?>/gallery-category/<?php echo $cat->slug; ?>">
                        <span class="triangle"></span>
                        <span class="ref"><?php echo $cat->name; ?></span>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="gallery cf">
            <?php
            $paged = 1;
            if ( get_query_var('paged') ) $paged = get_query_var('paged');
            if ( get_query_var('page') ) $paged = get_query_var('page');
            add_filter( 'pre_get_posts', 'custom_posts_per_page' );
            query_posts( '&post_type=gallery&paged=' . $paged );


            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-3">
                    <div class="background">
                        <a href="<?php the_permalink(); ?>">
                            <div class="hover"></div>
                            <?php echo get_the_post_thumbnail($post->ID,'gallery-thumba'); ?>
                        </a>
                        <div class="shadow"></div>
                        <div class="pic"></div>
                        <a class="look" href="<?php the_permalink(); ?>"><?php _e('Take a look','aletheme'); ?></a>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>

        <div class="pagination cf">
            <h3 class="left firstfont"><?php echo get_previous_posts_link(__('Previous','aletheme')); ?></h3>
            <h3 class="right firstfont"><?php echo get_next_posts_link(__('Next','aletheme')); ?></h3>
            <h3 class="center firstfont"><?php if($wp_query->max_num_pages) { echo $paged; ?> <?php  _e('of','aletheme'); ?> <?php echo $wp_query->max_num_pages; } ?></h3>
        </div>

    </div>
</article>
<?php get_footer(); ?>
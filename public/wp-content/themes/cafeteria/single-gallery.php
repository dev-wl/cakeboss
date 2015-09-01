<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="gallery-open">
        <h2 class="firstfont caption colormain"><?php the_title(); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>
        <div class="center-align">

            <div class="gallery-slider">
                <div class="outlines"></div>
                <ul class="slides">
                    <?php
                    $args = array(
                        'post_type' => 'attachment',
                        'numberposts' => -1,
                        'post_status' => null,
                        'order'				=> 'ASC',
                        'orderby'			=> 'menu_order ID',
                        'meta_query'		=> array(
                            array(
                                'key'		=> '_ale_hide_from_gallery',
                                'value'		=> 0,
                                'type'		=> 'DECIMAL',
                            ),
                        ),
                        'post_parent' => $post->ID
                    );
                    $attachments = get_posts( $args );
                    if ( $attachments ) {
                        foreach ( $attachments as $attachment ) {
                            echo "<li>".wp_get_attachment_image( $attachment->ID, 'gallery-slider' )."</li>";
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class="text story">
                <?php the_content(); ?>
            </div>
        </div>
    </article>
<?php endwhile; else: ?>
    <?php ale_part('notfound')?>
<?php endif; ?>

    <!-- Recent Galleries -->
    <article class="our-gallery">
        <h2 class="caption firstfont colormain"><?php _e('Recent galleries','aletheme'); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>

        <div class="center-align">
            <div class="gallery open cf">

                <?php
                query_posts('&post_type=gallery&posts_per_page=4&ignore_sticky_posts=1');
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
                <?php endif; wp_reset_query(); ?>
            </div>
        </div>
    </article>

<?php get_footer(); ?>
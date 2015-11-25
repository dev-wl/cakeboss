<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="menu-open">
            <h2 class="firstfont caption colormain"><?php the_title(); ?></h2>
            <h3 class="menu-category firstfont caption colormain">
                <?php
                    $cats = get_the_terms( $post->ID, 'menu-category' );
                    echo $cats[0]->name;
                ?>
            </h3>
            <div class="center-align">
<!--                 <div class="line-cake">
                    <div class="cake"></div>
                    <div class="line left"></div>
                    <div class="line right"></div>
                </div>
 -->            </div>
            <div class="center-align">

                <!-- <div class="menu-slider">
                    <div class="outlines"></div>
                    <div class="shadow"></div>
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
                                echo "<li>".wp_get_attachment_image( $attachment->ID, 'menu-slider' )."</li>";
                            }
                        }
                        ?>
                    </ul>
                </div> -->

                <div class="text story">
                    <div class="clearfix"></div>
                    <?php the_content(); ?>
                </div>

            </div>
        </article>
    <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
    <?php endif; ?>
    <!-- Recomended menu -->
    <!-- <article class="our-menu">
        <h2 class="caption firstfont colormain"><?php _e('Recommended menu','aletheme'); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>

        <div class="center-align">
            <div class="gallery open cf">
                <?php query_posts('post_type=menu&posts_per_page=4'); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-3">
                        <div class="background">
                            <a href="<?php the_permalink(); ?>">
                                <div class="hover"></div>
                                <?php echo get_the_post_thumbnail($post->ID,'menu-thumba'); ?>
                            </a>
                            <?php if(ale_get_meta('itemicon')){ ?><div style="background-image: url('<?php echo ale_get_meta('itemicon'); ?>');" class="circle"></div><?php } ?>
                            <h2 class="firstfont colormain"><?php the_title(); ?></h2>
                            <div class="text">
                                <?php echo ale_trim_excerpt(11); ?>
                            </div>
                            <div class="line"></div>
                            <div class="info">
                                <h3 class="firstfont"><?php echo ale_get_meta('itemprice'); ?></h3>
                                <a href="<?php the_permalink(); ?>"><?php _e('Description','aletheme'); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                    <?php ale_part('notfound')?>
                <?php endif; wp_reset_query(); ?>
            </div>
        </div>
    </article> -->
<div class="clearfix"></div>

<script>
if($('.text.story').find('p:nth-child(2) a img').length == 1) {
    $('.firstfont.caption.colormain').insertAfter($('.text.story p:nth-child(2)')[0]);
    $('.text.story p:nth-child(2) a img').addClass('headerImage');
}
</script>

<?php get_footer(); ?>
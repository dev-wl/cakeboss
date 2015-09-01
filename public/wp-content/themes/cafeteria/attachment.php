<?php get_header(); ?>
<article class="our-team">
    <h2 class="firstfont caption colormain"><?php the_title(); ?></h2>
    <div class="center-align">
        <div class="line-cake">
            <div class="cake"></div>
            <div class="line left"></div>
            <div class="line right"></div>
        </div>
    </div>
    <div class="center-align content">
        <div class="text story">
            <div class="entry-content">
                <div class="entry-attachment">
                    <?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "medium"); ?>
                        <p class="attachment"><a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
                        </p>
                    <?php else : ?>
                        <a href="<?php echo wp_get_attachment_url($post->ID) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
                    <?php endif; ?>
                </div>
                <div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></div>

                <?php the_content( __( 'Continue reading <span class="meta-nav">&amp;raquo;</span>', 'your-theme' )  ); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&amp;after=</div>') ?>

            </div><!-- .entry-content -->
        </div>
    </div>
</article>
<?php get_footer(); ?>
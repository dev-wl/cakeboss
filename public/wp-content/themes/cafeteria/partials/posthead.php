<div <?php post_class(); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
    <!-- <h3 class="firstfont info"><?php _e('Posted on','aletheme'); ?> - <?php echo get_the_date(); ?> / <?php _e('Author','aletheme'); ?> - <?php echo get_the_author(); ?> / <?php if(get_the_category()){ _e('Category','aletheme');?> - <?php echo the_category(', '); } ?></h3> -->

    <?php
    if(get_post_type() == 'post'){
        $thumbsize = 'post-slider';
    } else if(get_post_type() == 'events') {
        $thumbsize = 'events-slider';
    } else {
        $thumbsize = 'large';
    }

    if(has_post_format( 'gallery' )){ ?>
        <div class="story-slider cf">
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
                        echo "<li>".wp_get_attachment_image( $attachment->ID, $thumbsize )."</li>";
                    }
                }
                ?>
            </ul>
        </div>
    <?php } elseif(get_the_post_thumbnail($post->ID,'post-slider')) { ?>
        <!-- <div class="story-slider thumba cf"> -->
            <!-- <div class="outlines"></div> -->
            <!-- <div class="shadow"></div> -->
            <?php echo get_the_post_thumbnail($post->ID); ?>
        <!-- </div> -->
    <?php } ?>

    <h2 class="firstfont colormain"><?php the_title(); ?></h2>
<?php get_header(); ?>

    <article class="our-menu">
       <!--  <h2 class="firstfont caption colormain"><?php _e('Our menu','aletheme'); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div> -->
        </div>

        <div class="center-align content cf">
            <div class="filterwrapper">
                <div class="filter-line cf">
                    <p><?php _e('FILTER BY','aletheme');?>:</p>
                    <a href="<?php echo home_url(); ?>/menu">
                        <span class="triangle"></span>
                        <span class="ref"><?php _e('All', 'aletheme')?></span>
                    </a>
                    <?php $args = array(
                        'type'                     => 'menu',
                        'taxonomy'                 => 'menu-category',
                    );

                    $categories = get_categories( $args );
                    foreach($categories as $cat){ ?>
                        <a href="<?php echo home_url(); ?>/menu-category/<?php echo $cat->slug; ?>">
                            <span class="triangle"></span>
                            <span class="ref"><?php echo $cat->name; ?></span>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="gallery cf">

                <?php

                global $query_string;
                query_posts( $query_string.'&post_type=menu&posts_per_page=-1');
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-4">
                        <?php
                            $cats = get_the_terms( $post->ID, 'menu-category' );
                        ?>
                        <div class="background">
                            <a href="<?php echo the_permalink(); ?>">
                                <!-- <div class="hover"></div> -->
                                <?php //echo get_the_post_thumbnail($post->ID,'menu-thumba'); ?>
                                <?php echo get_the_post_thumbnail($post->ID,'large'); ?>
                            </a>
                            <?php if(false /*ale_get_meta('itemicon')*/){ ?><div style="background-image: url('<?php echo ale_get_meta('itemicon'); ?>');" class="circle"></div><?php } ?>
                            <h2 class="firstfont colormain"><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h2>
                            <div class="text">
                                <?php echo $cats[0]->name; //ale_trim_excerpt(10); ?>
                            </div>
                            <!-- <div class="line"></div>
                            <div class="info">
                                <h3 class="firstfont"><?php echo ale_get_meta('itemprice'); ?></h3>
                                <a href="<?php echo the_permalink(); ?>"><?php _e('Description','aletheme'); ?></a>
                            </div> -->
                        </div>
                    </div>
                <?php endwhile; else: ?>
                    <?php ale_part('notfound')?>
                <?php endif; ?>

            </div>

            <div class="pagination cf">
                <h3 class="center firstfont"><?php  _e('All Items in Category','aletheme'); ?> </h3>
            </div>

        </div>
    </article>

<?php get_footer(); ?>
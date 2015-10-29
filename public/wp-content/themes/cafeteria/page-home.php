<?php
/*
* Template name: Home
* */

if (isset($_POST['contact'])) {
    $error = ale_send_contact($_POST['contact']);
}

get_header(); ?>

<!-- Gallery -->
    <div class="slider cf">
        <div class="triang top"></div>
        <div class="triang bot"></div>
        <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_option('homeslugfull')); ?>
            <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                    <li style="background-image: url('<?php echo $slide['image'] ?>'); ">
                        <!-- <div class="box">
                            <?php if($slide['title']){ ?><h2 class="firstfont caption colormain"><?php echo $slide['title']; ?></h2><?php } ?>
                            <?php if($slide['description']){ ?><p class="text"><?php echo $slide['description']; ?></p><?php } ?>
                            <?php if($slide['url']){ ?><a href="<?php echo $slide['url']; ?>"><?php _e('Read More','aletheme'); ?></a><?php } ?>
                        </div>
                        <div class="shadow"></div> -->
                    </li>
                <?php endforeach; ?>
            <?php endif;?>
        </ul>
    </div>
                <a name="products"></a>

<!-- Services -->
<?php if(ale_get_meta('serviceonhome')=='on') { ?>
    <div>
        <!-- Our Services -->
        <article class="our-services cf">
            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('servtit'); ?></h2>
            <div class="center-align">
                <div class="line-cake">
                    <div class="cake"></div>
                    <div class="line left"></div>
                    <div class="line right"></div>
                </div>
            </div>
                <?php
                global $post;
                $args = array('category' => 4, 'numberposts' => -1 );
                $myposts = get_posts( $args );
                $i = 0;
                foreach ( $myposts as $post ) : {
                    setup_postdata( $post );
                    if($i == 0): ?>
                        <div class="center-align content cf">
                    <?php endif; ?>
                    <?php $i++; ?>
                        <div class="col-3">
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <a href="<?php echo post_permalink($post->ID);?>"><div class="circle" style="background-image: url('<?php echo $url; ?>'); background-position: 50% 52%; background-repeat: no-repeat; background-size: 100% auto;">
                                <div class="img"></div>
                            </div></a>
                            <a href="<?php echo post_permalink($post->ID);?>"><h2 class="firstfont caption colormain" style="top: 148px;"><?php the_title(); ?></h2></a>
                            <p class="text text-center"><?php echo $post->post_content; ?></p>
                        </div>
                    <?php } if($i == 4): {
                            $i = 0; ?>
                        </div>
                        <?php } endif; ?>
                <?php endforeach;
                wp_reset_postdata(); ?>

            <!-- <div class="center-align content cf">
                <div class="col-3">
                    <div class="circle">
                        <div class="img" style="background-image: url('<?php echo ale_get_meta('servic1'); ?>')"></div>
                    </div>
                    <h2 class="firstfont caption colormain"><?php if(ale_get_meta('servlink1')){ ?><a href="<?php echo ale_get_meta('servlink1'); ?>"><?php } ?><?php echo ale_get_meta('servtit1'); ?><?php if(ale_get_meta('servlink1')){ ?></a><?php } ?></h2>
                    <p class="text text-center"><?php echo ale_get_meta('servdesc1'); ?></p>
                </div>
                <div class="col-3">
                    <div class="circle">
                        <div class="img" style="background-image: url('<?php echo ale_get_meta('servic2'); ?>')"></div>
                    </div>
                    <h2 class="firstfont caption colormain"><?php if(ale_get_meta('servlink2')){ ?><a href="<?php echo ale_get_meta('servlink2'); ?>"><?php } ?><?php echo ale_get_meta('servtit2'); ?><?php if(ale_get_meta('servlink2')){ ?></a><?php } ?></h2>
                    <p class="text text-center"><?php echo ale_get_meta('servdesc2'); ?></p>
                </div>
                <div class="col-3">
                    <div class="circle">
                        <div class="img" style="background-image: url('<?php echo ale_get_meta('servic3'); ?>')"></div>
                    </div>
                    <h2 class="firstfont caption colormain"><?php if(ale_get_meta('servlink3')){ ?><a href="<?php echo ale_get_meta('servlink3'); ?>"><?php } ?><?php echo ale_get_meta('servtit3'); ?><?php if(ale_get_meta('servlink3')){ ?></a><?php } ?></h2>
                    <p class="text text-center"><?php echo ale_get_meta('servdesc3'); ?></p>
                </div>
                <div class="col-3">
                    <div class="circle">
                        <div class="img" style="background-image: url('<?php echo ale_get_meta('servic4'); ?>')"></div>
                    </div>
                    <h2 class="firstfont caption colormain"><?php if(ale_get_meta('servlink4')){ ?><a href="<?php echo ale_get_meta('servlink4'); ?>"><?php } ?><?php echo ale_get_meta('servtit4'); ?><?php if(ale_get_meta('servlink4')){ ?></a><?php } ?></h2>
                    <p class="text text-center"><?php echo ale_get_meta('servdesc4'); ?></p>
                </div>


            </div> -->
        </article>
    </div>
<?php } else { /*echo'<div class="heightonhome cf"></div>';*/ } ?>

<!-- ## Home Gallery -->
<?php if(ale_get_meta('galleryonhome')=='on') { ?>
    <section class="home-gallery nokeyframebug" <?php if(ale_get_meta('galbg')){ echo 'style="background-image: url('.ale_get_meta('galbg').');"';} ?>>
        <div class="maskkeyframebug">
            <div class="center-align">
                <a href="#top" class="top"></a>
                <div class="filterwrapper">
                    <div id="filters" class="filter-line cf">
                        <p><?php _e('FILTER BY','aletheme'); ?>:</p>
                        <a data-filter="*" href="#" class="active">
                            <span class="triangle"></span>
                            <span class="ref"><?php _e('All', 'aletheme')?></span>
                        </a>
                        <?php $args = array(
                            'type'                     => 'gallery',
                            'child_of'                 => 0,
                            'parent'                   => '',
                            'orderby'                  => 'name',
                            'order'                    => 'ASC',
                            'hide_empty'               => 1,
                            'hierarchical'             => 1,
                            'exclude'                  => '',
                            'include'                  => '',
                            'number'                   => '',
                            'taxonomy'                 => 'gallery-category',
                            'pad_counts'               => false );

                        $categories = get_categories( $args );

                        foreach($categories as $cat){ ?>
                            <a href="#" data-filter=".<?php echo $cat->slug; ?>">
                                <span class="triangle"></span>
                                <span class="ref"><?php echo $cat->name; ?></span>
                            </a>
                        <?php } ?>
                    </div>
                </div>

                <div id="galcontainer" class="gallery cf">
                    <?php query_posts('&post_type=gallery&posts_per_page=8');
                    if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-3 element <?php $terms = get_the_terms($post->ID, 'gallery-category'); foreach($terms as $itcat) { echo $itcat->slug.' ';} ?>">
                        <div class="background">
                            <a href="<?php the_permalink(); ?>">
                                <div class="hover"></div>
                                <?php echo get_the_post_thumbnail($post->ID,'gallery-thumba'); ?>
                            </a>
                            <div class="pic"></div>
                            <a class="look" href="<?php the_permalink(); ?>"><?php _e('Take a look','aletheme'); ?></a>
                        </div>
                </div>
                    <?php endwhile; else: ?>
                        <?php ale_part('notfound')?>
                    <?php endif; wp_reset_query(); ?>
                </div>

            </div>

            <!-- ## ## ## ## ## ## ## ## ## ## -->
            <div class="inner-border"></div>
            <div class="background-opacity"></div>
        </div>
    </section>
<?php } else { /*echo'<div class="heightonhome cf"></div>';*/ } ?>

<!-- Our Team -->
<?php if(ale_get_meta('teamonhome')=='on') { ?>
    <article class="our-team">
        <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamtit'); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>
        <!-- ## ## ## ## ## ## ## ## ## ## ## -->
        <div class="center-align content cf">
            <div class="col-3">
                <div class="circle">
                    <img src="<?php echo ale_get_meta('teamphoto1'); ?>" alt="<?php echo ale_get_meta('teamname1'); ?>"/>
                </div>
                <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamname1'); ?></h2>
                <p class="text">
                    <?php echo ale_get_meta('teamdesc1'); ?>
                </p>
            </div>
            <div class="col-3">
                <div class="circle">
                    <img src="<?php echo ale_get_meta('teamphoto2'); ?>" alt="<?php echo ale_get_meta('teamname2'); ?>"/>
                </div>
                <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamname2'); ?></h2>
                <p class="text">
                    <?php echo ale_get_meta('teamdesc2'); ?>
                </p>
            </div>
            <div class="col-3">
                <div class="circle">
                    <img src="<?php echo ale_get_meta('teamphoto3'); ?>" alt="<?php echo ale_get_meta('teamname3'); ?>"/>
                </div>
                <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamname3'); ?></h2>
                <p class="text">
                    <?php echo ale_get_meta('teamdesc3'); ?>
                </p>
            </div>
            <div class="col-3">
                <div class="circle">
                    <img src="<?php echo ale_get_meta('teamphoto4'); ?>" alt="<?php echo ale_get_meta('teamname4'); ?>"/>
                </div>
                <h2 class="firstfont caption colormain"><?php echo ale_get_meta('teamname4'); ?></h2>
                <p class="text">
                    <?php echo ale_get_meta('teamdesc4'); ?>
                </p>
            </div>
        </div>
    </article>
<?php } else { /*echo'<div class="heightonhome cf"></div>';*/ } ?>

<!-- ## Home Price -->
<?php if(ale_get_meta('menuonhome')=='on') { ?>
    <section class="home-price nokeyframebug" <?php if(ale_get_meta('menubg')){ echo 'style="background-image: url('.ale_get_meta('menubg').');"'; } ?>>
        <div class="maskkeyframebug">
            <div class="center-align">
                <a href="#top" class="top"></a>

                <div class="prices cf">
                    <!-- Item -->
                    <div class="col-3">
                        <div class="item-top">
                            <div class="item-logo"></div>
                            <span><?php echo ale_get_meta('menutitic1'); ?></span>
                        </div>
                        <img src="<?php echo ale_get_meta('menuphoto1'); ?>" alt="<?php echo ale_get_meta('menutitic1'); ?>"/>
                        <div class="item-info">
                            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('menutit1'); ?></h2>
                            <p class="text">
                                <?php echo ale_get_meta('menudesc1'); ?>
                            </p>
                        </div>
                        <div class="item-price">
                            <h3 class="firstfont"><?php echo ale_get_meta('menuprice1'); ?></h3>
                        </div>
                        <div class="item-rombs"></div>
                    </div>
                    <!-- Item -->
                    <div class="col-3">
                        <div class="item-top">
                            <div class="item-logo"></div>
                            <span><?php echo ale_get_meta('menutitic2'); ?></span>
                        </div>
                        <img src="<?php echo ale_get_meta('menuphoto2'); ?>" alt="<?php echo ale_get_meta('menutitic2'); ?>"/>
                        <div class="item-info">
                            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('menutit2'); ?></h2>
                            <p class="text">
                                <?php echo ale_get_meta('menudesc2'); ?>
                            </p>
                        </div>
                        <div class="item-price">
                            <h3 class="firstfont"><?php echo ale_get_meta('menuprice2'); ?></h3>
                        </div>
                        <div class="item-rombs"></div>
                    </div>
                    <!-- Item -->
                    <div class="col-3">
                        <div class="item-top">
                            <div class="item-logo"></div>
                            <span><?php echo ale_get_meta('menutitic3'); ?></span>
                        </div>
                        <img src="<?php echo ale_get_meta('menuphoto3'); ?>" alt="<?php echo ale_get_meta('menutitic3'); ?>"/>
                        <div class="item-info">
                            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('menutit3'); ?></h2>
                            <p class="text">
                                <?php echo ale_get_meta('menudesc3'); ?>
                            </p>
                        </div>
                        <div class="item-price">
                            <h3 class="firstfont"><?php echo ale_get_meta('menuprice3'); ?></h3>
                        </div>
                        <div class="item-rombs"></div>
                    </div>
                    <!-- Item -->
                    <div class="col-3">
                        <div class="item-top">
                            <div class="item-logo"></div>
                            <span><?php echo ale_get_meta('menutitic4'); ?></span>
                        </div>
                        <img src="<?php echo ale_get_meta('menuphoto4'); ?>" alt="<?php echo ale_get_meta('menutitic4'); ?>"/>
                        <div class="item-info">
                            <h2 class="firstfont caption colormain"><?php echo ale_get_meta('menutit4'); ?></h2>
                            <p class="text">
                                <?php echo ale_get_meta('menudesc4'); ?>
                            </p>
                        </div>
                        <div class="item-price">
                            <h3 class="firstfont"><?php echo ale_get_meta('menuprice4'); ?></h3>
                        </div>
                        <div class="item-rombs"></div>
                    </div>
                </div>

            </div>

            <!-- ## ## ## ## ## ## ## ## ## ## -->
            <div class="inner-border"></div>
            <div class="background-opacity"></div>
        </div>
    </section>
<?php } else { /*echo'<div class="heightonhome cf"></div>'; */} ?>

<!-- Our Events -->
<?php if(ale_get_meta('eventsonhome')=='on') { ?>
    <article class="our-events">
        <h2 class="firstfont caption colormain"><?php echo ale_get_meta('eventtit'); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>
        <!-- ## ## ## ## ## ## ## ## ## ## ## -->
        <div class="center-align content cf">

            <div class="events">
                <ul class="slides">
                    <?php if(ale_get_meta('eventimg1')){ ?>
                        <li>
                            <img src="<?php echo ale_get_meta('eventimg1'); ?>" alt="<?php echo ale_get_meta('eventtit1'); ?>" />
                            <h2 class="firstfont caption"><?php echo ale_get_meta('eventtit1'); ?></h2>
                            <span class="date"><?php echo ale_get_meta('eventdate1'); ?></span>
                            <p>
                                <?php echo ale_get_meta('eventdesc1'); ?>
                            </p>
                        </li>
                    <?php } ?>
                    <?php if(ale_get_meta('eventimg2')){ ?>
                        <li>
                            <img src="<?php echo ale_get_meta('eventimg2'); ?>" alt="<?php echo ale_get_meta('eventtit2'); ?>" />
                            <h2 class="firstfont caption"><?php echo ale_get_meta('eventtit2'); ?></h2>
                            <span class="date"><?php echo ale_get_meta('eventdate2'); ?></span>
                            <p>
                                <?php echo ale_get_meta('eventdesc2'); ?>
                            </p>
                        </li>
                    <?php } ?>
                    <?php if(ale_get_meta('eventimg3')){ ?>
                        <li>
                            <img src="<?php echo ale_get_meta('eventimg3'); ?>" alt="<?php echo ale_get_meta('eventtit3'); ?>" />
                            <h2 class="firstfont caption"><?php echo ale_get_meta('eventtit3'); ?></h2>
                            <span class="date"><?php echo ale_get_meta('eventdate3'); ?></span>
                            <p>
                                <?php echo ale_get_meta('eventdesc3'); ?>
                            </p>
                        </li>
                    <?php } ?>
                    <?php if(ale_get_meta('eventimg4')){ ?>
                        <li>
                            <img src="<?php echo ale_get_meta('eventimg4'); ?>" alt="<?php echo ale_get_meta('eventtit4'); ?>" />
                            <h2 class="firstfont caption"><?php echo ale_get_meta('eventtit4'); ?></h2>
                            <span class="date"><?php echo ale_get_meta('eventdate4'); ?></span>
                            <p>
                                <?php echo ale_get_meta('eventdesc4'); ?>
                            </p>
                        </li>
                    <?php } ?>
                </ul>
                <div class="outlines"></div>
                <div class="shadows"></div>
            </div>

        </div>
    </article>
<?php } else { /*echo'<div class="heightonhome cf"></div>'; */} ?>
<!-- About us -->
<a name="about"></a>
<article class="our-team">
        <h2 class="firstfont caption colormain">About us</h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>
        <!-- ## ## ## ## ## ## ## ## ## ## ## -->
        <div class="center-align content">
            <div class="text story textalignleft">
               <p><?php $id=90; $post = get_page($id); echo $post->post_content;  ?></p>
            </div>
        </div>
    </article>
<?php get_footer(); ?>

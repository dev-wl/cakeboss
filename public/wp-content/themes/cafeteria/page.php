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
        <div class="text story textalignleft">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
    </div>
</article>
<?php get_footer(); ?>
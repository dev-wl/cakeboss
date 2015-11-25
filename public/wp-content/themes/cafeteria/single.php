<?php get_header(); ?>

    <div class="story-open">
        <div class="center-align cf">
            <div class="col-12 main">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                    ale_part('posthead');
                    ale_part('postcontent');
                    ale_part('postfooter');
                endwhile;
                    else:  ale_part('notfound');
                endif;

                // comments_template(); ?>
            </div>
            
        </div>
    </div>
<?php get_footer(); ?>
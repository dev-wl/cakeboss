<?php 
/**
 * Template Name: Template Contact
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="contact-us">
            <h2 class="firstfont caption colormain"><?php the_title(); ?></h2>
            <div class="center-align">
                <div class="line-cake">
                    <div class="cake"></div>
                    <div class="line left"></div>
                    <div class="line right"></div>
                </div>
            </div>
            <!-- ## ## ## ## ## ## ## ## ## ## ## -->
            <div class="center-align content">

                <?php if(ale_get_meta('contacttopimg')){ ?>
                <div class="img">
                    <img src="<?php echo ale_get_meta('contacttopimg') ?>" alt="<?php the_title(); ?>"/>
                    <div class="shadows"></div>
                </div>
                <?php } ?>
                <div class="text">
                    <?php the_content(); ?>
                </div>

            </div>
        </article>
    <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
    <?php endif; ?>
<?php get_footer(); ?>
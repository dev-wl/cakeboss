<?php 
/**
 * Template Name: Template Retailer
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
    <div>
        <!-- Our Services -->
        <article class="our-services cf">
            <h2 class="firstfont caption colormain">Our partners</h2>
            <div class="center-align">
                <div class="line-cake">
                    <div class="cake"></div>
                    <div class="line left"></div>
                    <div class="line right"></div>
                </div>
            </div>
                
                <?php
                global $post;
                $args = array('category' => 11, 'numberposts' => -1 );
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
                            <div class="square" style="background-image: url('<?php echo $url; ?>'); background-position: 50% 52%; background-repeat: no-repeat; background-size: 77% auto;">
                                <div class="img"></div>
                            </div>
                            <h2 class="firstfont caption colormain" style="top: 148px;"><?php the_title(); ?></h2>
                            <p class="text text-center"><?php echo $post->post_content; ?></p>
                        </div>
                    <?php } if($i == 4): {
                            $i = 0; ?>
                        </div>
                        <?php } endif; ?>
                <?php endforeach;
                wp_reset_postdata(); ?>
        </article>
    </div>

    <script type="text/javascript">
        $('.center-align.content.cf:not(.center-align.content.cf:eq(0))').css('margin-top', '0px');
    </script>

<?php get_footer(); ?>
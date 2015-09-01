<?php
	// Do not delete these lines for security reasons
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
		die ('Please do not load this page directly. Thanks!');
	}
?>

<?php if (ale_get_option('comments_style') == 'off') : ?>
    <?php
        // comments are disabled
        return;
    ?>
<?php elseif (ale_get_option('comments_style') == 'wp') : ?>
    <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="comments-closed"><?php _e('Comments are closed.', 'aletheme'); ?></p>
    <?php endif; ?>
    <?php if (comments_open()) : ?>
        <div class="comments">
            <h2 class="firstfont caption colormain"><?php _e('Comments','aletheme'); ?>  <span><?php echo get_comments_number();?> <?php _e('comments to this post','aletheme'); ?></span> </h2>
            <a name="comments"></a>
                <?php if (post_password_required()) : ?>
                    <p class="comments-protected"><?php _e('This post is password protected. Enter the password to view comments.', 'aletheme'); ?></p>
                    <?php
                    return; endif; ?>
                <?php if (have_comments()) : ?>
                    <?php wp_list_comments(array('callback' => 'aletheme_comment_default','style' => 'div', 'max_depth' => 2,'avatar_size' => 95,)); ?>
                    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
                        <nav class="comments-nav" class="pager">
                            <div class="previous"><?php previous_comments_link(__('&larr; Older comments', 'aletheme')); ?></div>
                            <div class="next"><?php next_comments_link(__('Newer comments &rarr;', 'aletheme')); ?></div>
                        </nav>
                    <?php endif; // check for comment navigation ?>
                <?php endif; ?>
        </div>

        <h2 class="firstfont message colormain"><?php _e('Send me a message','aletheme'); ?> </h2>
        <a name="respond"></a>
        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
            <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'aletheme'), wp_login_url(get_permalink())); ?></p>
        <?php else : ?>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="comment-form" method="post" class="comment-form cf">
                <div class="col-5">
                    <?php if (is_user_logged_in()) : ?>
                        <p><?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'aletheme'), get_option('siteurl'), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'aletheme'); ?>"><?php _e('Log out &raquo;', 'aletheme'); ?></a></p>
                    <?php else : ?>
                        <input name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> required="required" type="text" placeholder="<?php _e('Your Name','aletheme');?>*"/>
                        <input name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> required="required" email="true" type="email" placeholder="<?php _e('Your Email address','aletheme'); ?>*"/>
                        <input name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" type="text" placeholder="<?php _e('Your Website','aletheme'); ?>"/>
                    <?php endif; ?>
                </div>

                <div class="col-7">
                    <textarea name="comment" id="comment" class="message" required="required" placeholder="<?php _e('Type here your message...','aletheme'); ?>*"></textarea>
                    <input type="submit" name="submit" value="<?php _e('Send','aletheme'); ?>"/>
                    <?php comment_id_fields(); ?>
                    <?php do_action('comment_form', $post->ID); ?>
                </div>
            </form>
        <?php endif; // if registration required and not logged in ?>
    <?php endif; ?>
<?php elseif(ale_get_option('comments_style') == 'fb') : ?>
    <section class="facebook-comments">
        <div id="fb-comments<?php the_ID()?>" class="fb-comments" data-href="<?php the_permalink()?>" data-num-posts="5"></div>
    </section>
<?php elseif(ale_get_option('comments_style') == 'dq') : ?>
    <section class="disqus-comments">
        <?php _e('Please download the DISQUS plugin from Wordpress Repository and install it.', 'aletheme'); ?>
    </section>
<?php elseif(ale_get_option('comments_style') == 'lf') : ?>
    <section class="disqus-comments">
        <?php _e('Please download the Livefyre Realtime Comments plugin from Wordpress Repository and install it.', 'aletheme'); ?>
    </section>
<?php elseif(ale_get_option('comments_style') == 'ws') : ?>
    <section class="defaultwp">
        <?php if (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>
            <p class="comments-closed"><?php _e('Comments are closed.', 'aletheme'); ?></p>
        <?php endif; ?>
        <div id="comments">
            <?php //wp_list_comments()
             wp_list_comments(array('callback' => 'aletheme_comment_default', 'max_depth' => 2,'avatar_size' => 80,));
            ?>

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav id="comment-nav-below" class="navigation" role="navigation">
                <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'aletheme' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'aletheme' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'aletheme' ) ); ?></div>
            </nav>
            <?php endif; // check for comment navigation ?>
        </div>
        <div class="respondbox">
            <?php comment_form(); ?>
        </div>
    </section>
<?php endif; ?>

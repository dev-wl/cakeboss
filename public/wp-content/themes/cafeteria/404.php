<?php get_header(); ?>
    <article class="our-team">
        <h2 class="firstfont caption colormain"><?php _e('Error 404','aletheme'); ?></h2>
        <div class="center-align">
            <div class="line-cake">
                <div class="cake"></div>
                <div class="line left"></div>
                <div class="line right"></div>
            </div>
        </div>
        <div class="center-align content">
            <div class="text story">
                <h1 class="errorh1"><?php _e('Error, Page not found','aletheme'); ?></h1>
                <p class="errorh1"><?php _e('Sorry, but the page you\'re looking for has not found. Try checking the URL for errors, then hit the refresh<br /> button on your browser.','aletheme'); ?></p>
                <a href="<?php echo home_url();?>" class="gohomebut"><?php _e('Return to the homepage','aletheme'); ?></a>
            </div>
        </div>
    </article>
<?php get_footer(); ?>
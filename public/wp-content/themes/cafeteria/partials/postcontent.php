<div class="text story">
    <?php the_content(); ?>
    <?php
    	$categories = wp_get_post_categories($post->ID);
    	$flag = false;
    	foreach($categories as $c) {
    		if($c == 4) {
    			$flag = true;
    		}
    	}
    ?>
    <?php if($flag) : ?>
	    <a class="buy_now" href="http://coffeemarvel.com" target="_blank">Buy now!</a>
	<?php endif; ?>
	
    <?php if(get_the_tags()) { ?>
        <p class="tagsphar"><?php the_tags(); ?></p>
    <?php } ?>

    <?php wp_link_pages(array(
        'before' => '<p>' . __('Pages:', 'aletheme'),
        'after'	 => '</p>',
    )) ?>
</div>
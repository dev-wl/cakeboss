<div class="text story">
    <?php the_content(); ?>
    <?php if(get_the_tags()){ ?>
        <p class="tagsphar"><?php the_tags(); ?></p>
    <?php } ?>

    <?php wp_link_pages(array(
        'before' => '<p>' . __('Pages:', 'aletheme'),
        'after'	 => '</p>',
    )) ?>
</div>
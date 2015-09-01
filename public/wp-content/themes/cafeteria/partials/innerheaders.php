<?php if(is_page_template('template-contact.php') and ale_get_option('contactheader')){ ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('contactheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>
<?php } elseif(is_object($post) && $post->post_type == "gallery" and ale_get_option('galleryheader')) { ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('galleryheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>
<?php } elseif(is_object($post) && $post->post_type == "events" and ale_get_option('eventsheader')){ ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('eventsheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>
<?php } elseif(is_object($post) && $post->post_type == "menu" and ale_get_option('menuheader')){ ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('menuheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>
<?php } elseif(is_blog() and ale_get_option('storyheader')) { ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('storyheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>
<?php } elseif(ale_get_option('mainheader')){ ?>
    <div class="header-back" style="background-image: url('<?php echo ale_get_option('mainheader'); ?>');">
        <div class="triang top"></div>
        <div class="triang bot"></div>
    </div>
<?php } else { ?>
    <div class="header-back" style="background-image: none; height: 13px; margin-bottom: 60px;');">
        <div class="triang top"></div>
    </div>
<?php } ?>
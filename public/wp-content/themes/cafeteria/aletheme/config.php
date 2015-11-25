<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $scheme = array(
        'scheme1'  => 'Scheme 1',
        'scheme2'  => 'Scheme 2',
        'scheme3'  => 'Scheme 3',
        'scheme4'  => 'Scheme 4',
        'scheme5'  => 'Scheme 5',
        'scheme6'  => 'Scheme 6',
    );

    $analytics = array(
        'classic'  => 'Classic Analytics',
        'universal'  => 'Universal Analytics',
    );

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 200-200px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Mobile Site Logo",
                        "desc" => "Upload or put the mobile site logo link (Default logo size: 100-100px)",
                        "id" => "ale_mobsitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Loading Animation Logo",
                        "desc" => "Upload or put the animation logo link (Max size: 200-200px).Use a gif animation or a static image",
                        "id" => "ale_animationsitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Color Scheme",
                        "desc" => "Select a color scheme",
                        "id" => "ale_colscheme",
                        "std" => "scheme1",
                        "type" => "select",
                        "options" => $scheme);

    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. Default background is the #ffffff color",
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');


    $options[] = array( "name" => "Upload a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

    $options[] = array( "name" => "Copyrights",
                        "desc" => "Your copyright message.",
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor");

    $options[] = array( "name" => "Home Page Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_homeslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the First Font from Google Library",
                        "desc" => "The default Font is - Damion",
                        "id" => "ale_headerfont",
                        "std" => "Damion",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the First Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - empty",
                        "id" => "ale_headerfontex",
                        "std" => "",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Select the Second Font from Google Library",
                        "desc" => "The default Font is - Viga",
                        "id" => "ale_mainfont",
                        "std" => "Viga",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Second Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - empty",
                        "id" => "ale_mainfontex",
                        "std" => "",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Select the Third Font from Google Library",
                        "desc" => "The Third Font is - Georgia",
                        "id" => "ale_thirdfont",
                        "std" => "Georgia",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Third Font (Extended) from Google Library",
                        "desc" => "The Third Font (extended) is - empty",
                        "id" => "ale_thirdfontex",
                        "std" => "",
                        "type" => "text",
                        );

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '18px','face' => 'Georgia','style' => 'normal','color' => '#5e3c3d'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '16px','face' => 'Georgia','style' => 'normal','color' => '#5e3c3d'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '14px','face' => 'Georgia','style' => 'normal','color' => '#5e3c3d'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '12px','face' => 'Georgia','style' => 'normal','color' => '#5e3c3d'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '10px','face' => 'Georgia','style' => 'normal','color' => '#5e3c3d'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '8px','face' => 'Georgia','style' => 'normal','color' => '#5e3c3d'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '15px','face' => 'Georgia','style' => 'normal','color' => '#474747'),
                        'type' => 'typography');

	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "Facebook link",
                        "desc" => "Your profile link",
                        "id" => "ale_fb",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Twitter link",
                        "desc" => "Your profile link",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Pinterest link",
                        "desc" => "Your profile link",
                        "id" => "ale_pin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Flickr link",
                        "desc" => "Your profile link",
                        "id" => "ale_flickr",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Vimeo link",
                        "desc" => "Your profile link",
                        "id" => "ale_vim",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "LinkedIn link",
                        "desc" => "Your profile link",
                        "id" => "ale_lin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Google+ link",
                        "desc" => "Your profile link",
                        "id" => "ale_gog",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Youtube link",
                        "desc" => "Your profile link",
                        "id" => "ale_ytb",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Instagram link",
                        "desc" => "Your profile link",
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Email",
                        "desc" => "Your email",
                        "id" => "ale_emailcont",
                        "std" => "",
                        "type" => "text");
	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");

	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

    $options[] = array( "name" => "Google Analytics Type",
                        "desc" => "Select the google analytics code type. Universal or Classic (The difference between versions you will find in google)",
                        "id" => "ale_analyticstype",
                        "std" => "classic",
                        "type" => "select",
                        "options" => $analytics);
	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Enable or Disable the Skin Selector Box",
                        "desc" => "Check if you want to show the Skin Selector Box",
                        "id" => "ale_skinselector",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Enable or Disable the Language Switcher Line",
                        "desc" => "Check if you want to show the switcher line in the top",
                        "id" => "ale_langswitcher",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Hide the Contact Form  from Homepage",
                        "desc" => "Check if you want to hide the Contact Form from Homepage",
                        "id" => "ale_formcontact",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Upload a custom cake icon (Dark)",
                        "desc" => "Upload or put the link of your custom cake icon, if you want to replace the default one. The default size is - 26px-28px",
                        "id" => "ale_customcake1",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Disable the Preloader",
                        "desc" => "Check if you want to disable the Preloader from Homepage",
                        "id" => "ale_preloaderstatus",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Upload a custom cake icon (Light)",
                        "desc" => "Upload or put the link of your custom cake icon, if you want to replace the default one. The default size is - 26px-28px",
                        "id" => "ale_customcake2",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Headers Settings",
                        "type" => "heading");

    $options[] = array( "name" => "Galleries pages Header image",
                        "desc" => "Upload the image. Recommended size 1900px-1145px",
                        "id" => "ale_galleryheader",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Events pages Header image",
                        "desc" => "Upload the image. Recommended size 1900px-1145px",
                        "id" => "ale_eventsheader",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Story pages Header image",
                        "desc" => "Upload the image. Recommended size 1900px-1145px",
                        "id" => "ale_storyheader",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Menu pages Header image",
                        "desc" => "Upload the image. Recommended size 1900px-1145px",
                        "id" => "ale_menuheader",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Contact page Header image",
                        "desc" => "Upload the image. Recommended size 1900px-1145px",
                        "id" => "ale_contactheader",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Main page Header image",
                        "desc" => "Upload the image. Recommended size 1900px-1145px",
                        "id" => "ale_mainheader",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "All pages FOOTER image",
                        "desc" => "Upload the image. Recommended size 1900px-720px",
                        "id" => "ale_mainfooter",
                        "std" => "",
                        "type" => "upload");
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";

    $meta_boxes[] = array(
        'id'         => 'events_metabox',
        'title'      => 'Events Metaboxes',
        'pages'      => array( 'events', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Event Date',
                'desc' => 'Select a date for your event post.',
                'id'   => $prefix . 'event_date',
                'type'    => 'text_date_timestamp',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'pagebg_metabox',
        'title'      => 'Custom Background',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Custom Background',
                'desc' => 'Upload your custom background or leave this field blank to show the main site background from Theme Options',
                'id'   => $prefix . 'custombg',
                'type'    => 'file',
            ),
            array(
                'name' => 'Custom CSS',
                'desc' => 'Add custom CSS to this page',
                'id'   => $prefix . 'custompagecss',
                'std' => '',
                'type'    => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'story_metabox',
        'title'      => 'Story Option',
        'pages'      => array( 'post', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Blog Image type',
                'desc' => 'Select the blog image type. Select Icon - and upload an icon in a field below. Or Select Banner and upload a banner in a field bellow.',
                'id'   => $prefix . 'blogtypeimage',
                'std'  => 'icon',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Icon', 'value' => 'icon', ),
                    array( 'name' => 'Banner', 'value' => 'banner', ),
                ),
            ),
            array(
                'name' => 'Custom Icon',
                'desc' => 'Upload your custom Icon. Size 75px-75px',
                'id'   => $prefix . 'storyphoto',
                'type'    => 'file',
            ),
            array(
                'name' => 'Custom Banner',
                'desc' => 'Upload your custom banner. Size 452px-130px',
                'id'   => $prefix . 'storybanner',
                'type'    => 'file',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'menu_page_metabox',
        'title'      => 'Menu Options',
        'pages'      => array( 'menu', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Menu item Icon',
                'desc' => 'Upload your icon. Recommended size 75-75px',
                'id'   => $prefix . 'itemicon',
                'type'    => 'file',
            ),
            array(
                'name' => 'Item Price',
                'desc' => 'Add the item Price',
                'id'   => $prefix . 'itemprice',
                'std'  => 'just 19$',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'home_metabox',
        'title'      => 'Home Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Display or Hide Boxes on Home',
                'desc' => 'Select Enable or disable block on Home Page',
                'id'   => $prefix . 'descr0',
                'type' => 'title',
            ),
            array(
                'name' => 'Show The Services Box?',
                'desc' => 'Select enable to show the services box',
                'id'   => $prefix . 'serviceonhome',
                'std'  => 'on',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Enable', 'value' => 'on', ),
                    array( 'name' => 'Disable', 'value' => 'off', ),
                ),
            ),
            array(
                'name' => 'Show The Gallery Box?',
                'desc' => 'Select enable to show the services box',
                'id'   => $prefix . 'galleryonhome',
                'std'  => 'on',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Enable', 'value' => 'on', ),
                    array( 'name' => 'Disable', 'value' => 'off', ),
                ),
            ),
            array(
                'name' => 'Show The Team Box?',
                'desc' => 'Select enable to show the services box',
                'id'   => $prefix . 'teamonhome',
                'std'  => 'on',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Enable', 'value' => 'on', ),
                    array( 'name' => 'Disable', 'value' => 'off', ),
                ),
            ),
            array(
                'name' => 'Show The Menu Box?',
                'desc' => 'Select enable to show the services box',
                'id'   => $prefix . 'menuonhome',
                'std'  => 'on',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Enable', 'value' => 'on', ),
                    array( 'name' => 'Disable', 'value' => 'off', ),
                ),
            ),
            array(
                'name' => 'Show The Events Box?',
                'desc' => 'Select enable to show the services box',
                'id'   => $prefix . 'eventsonhome',
                'std'  => 'on',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Enable', 'value' => 'on', ),
                    array( 'name' => 'Disable', 'value' => 'off', ),
                ),
            ),
            array(
                'name' => 'Services Section',
                'desc' => 'Insert the data for Services Section on Home page',
                'id'   => $prefix . 'descr1',
                'type' => 'title',
            ),
            array(
                'name' => 'Services Box title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'servtit',
                'std'  => 'Our services',
                'type' => 'text',
            ),
            array(
                'name' => 'Services icon 1',
                'desc' => 'Insert or upload the icon. Icon max size - 160-160px',
                'id'   => $prefix . 'servic1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Services icon 2',
                'desc' => 'Insert or upload the icon. Icon max size - 160-160px',
                'id'   => $prefix . 'servic2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Services icon 3',
                'desc' => 'Insert or upload the icon. Icon max size - 160-160px',
                'id'   => $prefix . 'servic3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Services icon 4',
                'desc' => 'Insert or upload the icon. Icon max size - 160-160px',
                'id'   => $prefix . 'servic4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Services title 1',
                'desc' => 'Insert the title. ',
                'id'   => $prefix . 'servtit1',
                'std'  => 'Best Desserts',
                'type' => 'text',
            ),
            array(
                'name' => 'Services title 2',
                'desc' => 'Insert the title. ',
                'id'   => $prefix . 'servtit2',
                'std'  => 'Our Menu',
                'type' => 'text',
            ),
            array(
                'name' => 'Services title 3',
                'desc' => 'Insert the title. ',
                'id'   => $prefix . 'servtit3',
                'std'  => 'Menu Planners',
                'type' => 'text',
            ),
            array(
                'name' => 'Services title 4',
                'desc' => 'Insert the title. ',
                'id'   => $prefix . 'servtit4',
                'std'  => 'Awesome Recipes',
                'type' => 'text',
            ),

            array(
                'name' => 'Services link 1',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servlink1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Services link 2',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servlink2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Services link 3',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servlink3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => 'Services link 4',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'servlink4',
                'std'  => '',
                'type' => 'text',
            ),

            array(
                'name' => 'Services Description 1',
                'desc' => 'Insert the description. ',
                'id'   => $prefix . 'servdesc1',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Services Description 2',
                'desc' => 'Insert the description. ',
                'id'   => $prefix . 'servdesc2',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Services Description 3',
                'desc' => 'Insert the description. ',
                'id'   => $prefix . 'servdesc3',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Services Description 4',
                'desc' => 'Insert the description. ',
                'id'   => $prefix . 'servdesc4',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Gallery Section',
                'desc' => 'Insert the data for Gallery Section on Home page',
                'id'   => $prefix . 'descr2',
                'type' => 'title',
            ),
            array(
                'name' => 'Box background',
                'desc' => 'Insert or upload the background. Recommended size - 1900-1265px',
                'id'   => $prefix . 'galbg',
                'std'  => '',
                'type' => 'file',
            ),

            array(
                'name' => 'Out Team Section',
                'desc' => 'Insert the data for Our Team Section on Home page',
                'id'   => $prefix . 'descr3',
                'type' => 'title',
            ),
            array(
                'name' => 'Team Box title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'teamtit',
                'std'  => 'Our team',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Photo 1',
                'desc' => 'Insert or upload the photo. Recommended size - 200-200px',
                'id'   => $prefix . 'teamphoto1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member Photo 2',
                'desc' => 'Insert or upload the photo. Recommended size - 200-200px',
                'id'   => $prefix . 'teamphoto2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member Photo 3',
                'desc' => 'Insert or upload the photo. Recommended size - 200-200px',
                'id'   => $prefix . 'teamphoto3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member Photo 4',
                'desc' => 'Insert or upload the photo. Recommended size - 200-200px',
                'id'   => $prefix . 'teamphoto4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member Name 1',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'teamname1',
                'std'  => 'Minodora Oreiro',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Name 2',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'teamname2',
                'std'  => 'Olivia Wilder',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Name 3',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'teamname3',
                'std'  => 'Melissa Morgan',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Name 4',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'teamname4',
                'std'  => 'Andreea Marino',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Description 1',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'teamdesc1',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Member Description 2',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'teamdesc2',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Member Description 3',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'teamdesc3',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Member Description 4',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'teamdesc4',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Menu Section',
                'desc' => 'Insert the data for Menu Section on Home page',
                'id'   => $prefix . 'descr4',
                'type' => 'title',
            ),
            array(
                'name' => 'Menu Box Icon Title 1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutitic1',
                'std'  => 'Cupcakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Icon Title 2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutitic2',
                'std'  => 'Cakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Icon Title 3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutitic3',
                'std'  => 'Drinks',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Icon Title 4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutitic4',
                'std'  => 'Desserts',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Title 1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutit1',
                'std'  => 'Cream Cupcakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Title 2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutit2',
                'std'  => 'Delicious Cakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Title 3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutit3',
                'std'  => 'Drinks',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Title 4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutit4',
                'std'  => 'Best Desserts',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Description 1',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'menudesc1',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Menu Box Description 2',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'menudesc2',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Menu Box Description 3',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'menudesc3',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Menu Box Description 4',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'menudesc4',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Menu Box Price 1',
                'desc' => 'Insert the price',
                'id'   => $prefix . 'menuprice1',
                'std'  => 'just 19$',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Price 2',
                'desc' => 'Insert the price',
                'id'   => $prefix . 'menuprice2',
                'std'  => 'just 16$',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Price 3',
                'desc' => 'Insert the price',
                'id'   => $prefix . 'menuprice3',
                'std'  => 'just 10$',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Price 4',
                'desc' => 'Insert the price',
                'id'   => $prefix . 'menuprice4',
                'std'  => 'just 20$',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Photo 1',
                'desc' => 'Insert the photo. Size 232-121px',
                'id'   => $prefix . 'menuphoto1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Menu Box Photo 2',
                'desc' => 'Insert the photo. Size 232-121px',
                'id'   => $prefix . 'menuphoto2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Menu Box Photo 3',
                'desc' => 'Insert the photo. Size 232-121px',
                'id'   => $prefix . 'menuphoto3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Menu Box Photo 4',
                'desc' => 'Insert the photo. Size 232-121px',
                'id'   => $prefix . 'menuphoto4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Menu Box bg',
                'desc' => 'Insert the photo. Size 1900-1510px',
                'id'   => $prefix . 'menubg',
                'std'  => '',
                'type' => 'file',
            ),

            array(
                'name' => 'Events Section',
                'desc' => 'Insert the data for Events Section on Home page',
                'id'   => $prefix . 'descr5',
                'type' => 'title',
            ),
            array(
                'name' => 'Events Box title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'eventtit',
                'std'  => 'Our events',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 1 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'eventtit1',
                'std'  => 'Eliza & Mario Wedding',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 2 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'eventtit2',
                'std'  => 'Eliza',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 3 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'eventtit3',
                'std'  => 'Meet Alex and Ellen',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 4 title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'eventtit4',
                'std'  => 'Best and Delicious Cakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 1 date',
                'desc' => 'Insert the date',
                'id'   => $prefix . 'eventdate1',
                'std'  => '31 Sep, 2014',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 2 date',
                'desc' => 'Insert the date',
                'id'   => $prefix . 'eventdate2',
                'std'  => '31 Sep, 2014',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 3 date',
                'desc' => 'Insert the date',
                'id'   => $prefix . 'eventdate3',
                'std'  => '31 Sep, 2014',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 4 date',
                'desc' => 'Insert the date',
                'id'   => $prefix . 'eventdate4',
                'std'  => '31 Sep, 2014',
                'type' => 'text',
            ),
            array(
                'name' => 'Events 1 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'eventdesc1',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit tellus nec consequat. Praesent rhoncus purus sed arcu volutpat ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit tellus nec consequat. Praesent rhoncus purus sed arcu volutpat ornare.',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Events 2 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'eventdesc2',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit tellus nec consequat. Praesent rhoncus purus sed arcu volutpat ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit tellus nec consequat. Praesent rhoncus purus sed arcu volutpat ornare.',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Events 3 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'eventdesc3',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit tellus nec consequat. Praesent rhoncus purus sed arcu volutpat ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit tellus nec consequat. Praesent rhoncus purus sed arcu volutpat ornare.',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Events 4 Description',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'eventdesc4',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit tellus nec consequat. Praesent rhoncus purus sed arcu volutpat ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit tellus nec consequat. Praesent rhoncus purus sed arcu volutpat ornare.',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Events 1 Image',
                'desc' => 'Insert the image. Image size 680px-117px',
                'id'   => $prefix . 'eventimg1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Events 2 Image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'eventimg2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Events 3 Image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'eventimg3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Events 4 Image',
                'desc' => 'Insert the image',
                'id'   => $prefix . 'eventimg4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Contact Section',
                'desc' => 'Insert the data for Contact Section on Home page',
                'id'   => $prefix . 'descr6',
                'type' => 'title',
            ),
            array(
                'name' => 'Contact Background Image',
                'desc' => 'Insert the image. Recommended Size - 1900-1145px',
                'id'   => $prefix . 'contactbg',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Contact Box Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contacttit',
                'std'  => 'Send me a Message',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Box Address',
                'desc' => 'Insert the address',
                'id'   => $prefix . 'contactaddress',
                'std'  => '1412 Cafeteria San Francisco, BC 2390',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Box Phone',
                'desc' => 'Insert the phone',
                'id'   => $prefix . 'contactphone',
                'std'  => '(620) 695-1236780',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Box Email',
                'desc' => 'Insert the email',
                'id'   => $prefix . 'contactemail',
                'std'  => 'contact@cofeteria.com',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Box MAP HTML Code',
                'desc' => 'Insert the map HTML Code',
                'id'   => $prefix . 'contactmap',
                'std'  => '<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=1412+San+Francisco,+2390&amp;aq=&amp;sll=-23.462777,-52.060045&amp;sspn=0.008621,0.010643&amp;g=Rua+San+Francisco,+2390+1412&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A1%D0%B0%D0%BD-%D0%A4%D1%80%D0%B0%D0%BD%D1%86%D0%B8%D1%81%D0%BA%D0%BE,+%D0%9A%D0%B0%D0%BB%D0%B8%D1%84%D0%BE%D1%80%D0%BD%D0%B8%D1%8F+94103&amp;ll=37.766415,-122.415673&amp;spn=0.059442,0.061197&amp;t=m&amp;z=14&amp;output=embed"></iframe>',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_page_metabox',
        'title'      => 'Contact Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Contact Section',
                'desc' => 'Insert the data for Contact Section on Home page',
                'id'   => $prefix . 'descr6',
                'type' => 'title',
            ),
            array(
                'name' => 'Contact Background Image',
                'desc' => 'Insert the image. Recommended Size - 1900-1145px',
                'id'   => $prefix . 'contactbg',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Contact Top Image',
                'desc' => 'Insert the image. Recommended Size - 982-200px',
                'id'   => $prefix . 'contacttopimg',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Contact Box Title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'contacttit',
                'std'  => 'Send me a Message',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Box Address',
                'desc' => 'Insert the address',
                'id'   => $prefix . 'contactaddress',
                'std'  => '1412 Cafeteria San Francisco, BC 2390',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Box Phone',
                'desc' => 'Insert the phone',
                'id'   => $prefix . 'contactphone',
                'std'  => '(620) 695-1236780',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Box Email',
                'desc' => 'Insert the email',
                'id'   => $prefix . 'contactemail',
                'std'  => 'contact@cofeteria.com',
                'type' => 'text',
            ),
            array(
                'name' => 'Contact Box MAP HTML Code',
                'desc' => 'Insert the map HTML Code',
                'id'   => $prefix . 'contactmap',
                'std'  => '<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=1412+San+Francisco,+2390&amp;aq=&amp;sll=-23.462777,-52.060045&amp;sspn=0.008621,0.010643&amp;g=Rua+San+Francisco,+2390+1412&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%A1%D0%B0%D0%BD-%D0%A4%D1%80%D0%B0%D0%BD%D1%86%D0%B8%D1%81%D0%BA%D0%BE,+%D0%9A%D0%B0%D0%BB%D0%B8%D1%84%D0%BE%D1%80%D0%BD%D0%B8%D1%8F+94103&amp;ll=37.766415,-122.415673&amp;spn=0.059442,0.061197&amp;t=m&amp;z=14&amp;output=embed"></iframe>',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_page_metabox',
        'title'      => 'About Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Out Team Section',
                'desc' => 'Insert the data for Our Team Section on Home page',
                'id'   => $prefix . 'descr3',
                'type' => 'title',
            ),
            array(
                'name' => 'Team Box title',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'teamtit',
                'std'  => 'Our team',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Photo 1',
                'desc' => 'Insert or upload the photo. Recommended size - 200-200px',
                'id'   => $prefix . 'teamphoto1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member Photo 2',
                'desc' => 'Insert or upload the photo. Recommended size - 200-200px',
                'id'   => $prefix . 'teamphoto2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member Photo 3',
                'desc' => 'Insert or upload the photo. Recommended size - 200-200px',
                'id'   => $prefix . 'teamphoto3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member Photo 4',
                'desc' => 'Insert or upload the photo. Recommended size - 200-200px',
                'id'   => $prefix . 'teamphoto4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Member Name 1',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'teamname1',
                'std'  => 'Minodora Oreiro',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Name 2',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'teamname2',
                'std'  => 'Olivia Wilder',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Name 3',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'teamname3',
                'std'  => 'Melissa Morgan',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Name 4',
                'desc' => 'Insert the name',
                'id'   => $prefix . 'teamname4',
                'std'  => 'Andreea Marino',
                'type' => 'text',
            ),
            array(
                'name' => 'Member Description 1',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'teamdesc1',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Member Description 2',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'teamdesc2',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Member Description 3',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'teamdesc3',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Member Description 4',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'teamdesc4',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),

            array(
                'name' => 'Menu Section',
                'desc' => 'Insert the data for Menu Section on Home page',
                'id'   => $prefix . 'descr4',
                'type' => 'title',
            ),
            array(
                'name' => 'Menu Box Icon Title 1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutitic1',
                'std'  => 'Cupcakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Icon Title 2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutitic2',
                'std'  => 'Cakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Icon Title 3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutitic3',
                'std'  => 'Drinks',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Icon Title 4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutitic4',
                'std'  => 'Desserts',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Title 1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutit1',
                'std'  => 'Cream Cupcakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Title 2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutit2',
                'std'  => 'Delicious Cakes',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Title 3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutit3',
                'std'  => 'Drinks',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Title 4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'menutit4',
                'std'  => 'Best Desserts',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Description 1',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'menudesc1',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Menu Box Description 2',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'menudesc2',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Menu Box Description 3',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'menudesc3',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Menu Box Description 4',
                'desc' => 'Insert the description',
                'id'   => $prefix . 'menudesc4',
                'std'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt suscipit',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Menu Box Price 1',
                'desc' => 'Insert the price',
                'id'   => $prefix . 'menuprice1',
                'std'  => 'just 19$',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Price 2',
                'desc' => 'Insert the price',
                'id'   => $prefix . 'menuprice2',
                'std'  => 'just 16$',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Price 3',
                'desc' => 'Insert the price',
                'id'   => $prefix . 'menuprice3',
                'std'  => 'just 10$',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Price 4',
                'desc' => 'Insert the price',
                'id'   => $prefix . 'menuprice4',
                'std'  => 'just 20$',
                'type' => 'text',
            ),
            array(
                'name' => 'Menu Box Photo 1',
                'desc' => 'Insert the photo. Size 232-121px',
                'id'   => $prefix . 'menuphoto1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Menu Box Photo 2',
                'desc' => 'Insert the photo. Size 232-121px',
                'id'   => $prefix . 'menuphoto2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Menu Box Photo 3',
                'desc' => 'Insert the photo. Size 232-121px',
                'id'   => $prefix . 'menuphoto3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Menu Box Photo 4',
                'desc' => 'Insert the photo. Size 232-121px',
                'id'   => $prefix . 'menuphoto4',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => 'Menu Box bg',
                'desc' => 'Insert the photo. Size 1900-1510px',
                'id'   => $prefix . 'menubg',
                'std'  => '',
                'type' => 'file',
            ),
        )
    );


	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-thumba',
                'width'     => 212,
                'height'    => 162,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-slider',
                'width'     => 985,
                'height'    => 410,
                'crop'      => true,
            ),
        ),
        'post' => array(
            array(
                'name'      => 'post-thumba',
                'width'     => 475,
                'height'    => 295,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-slider',
                'width'     => 658,
                'height'    => 296,
                'crop'      => true,
            ),
        ),
        'events' => array(
            array(
                'name'      => 'events-thumba',
                'width'     => 452,
                'height'    => 130,
                'crop'      => true,
            ),
            array(
                'name'      => 'events-slider',
                'width'     => 657,
                'height'    => 296,
                'crop'      => true,
            ),
        ),
        'menu' => array(
            array(
                'name'      => 'menu-thumba',
                'width'     => 239,
                'height'    => 141,
                'crop'      => true,
            ),
            array(
                'name'      => 'menu-slider',
                'width'     => 985,
                'height'    => 410,
                'crop'      => true,
            ),
        ),
    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_icon' => '',
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),

        'events' => array(
            'config' => array(
                'public' => true,
                'menu_icon' => '',
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                    'comments',
                    'post-formats',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Event',
            'multiple' => 'Events',
            'columns'    => array(
                'first_image',
            )
        ),

        'menu' => array(
            'config' => array(
                'public' => true,
                'menu_icon' => '',
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Menu',
            'multiple' => 'Menu',
            'columns'    => array(
                'first_image',
            )
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),

        'menu-category'    => array(
            'for'        => array('menu'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Menu Category',
            'multiple'    => 'Menu Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array('gallery');
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('gallery','menu','events','post');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}
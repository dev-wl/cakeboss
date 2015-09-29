<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
    define('ALETHEME_PATH', get_theme_root() . '/cafeteria/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/cafeteria/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'aletheme', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 * 
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/

function exclude_category($query) {
	if ( $query->is_home() ) {
		$query->set('cat', '-4 -11');
	}
	return $query;
}
add_filter('pre_get_posts', 'exclude_category');

add_action('wpcf7_before_send_mail', 'save_form' );

function save_form( $wpcf7 ) {
	
   global $wpdb;
 
   /*
    Note: since version 3.9 Contact Form 7 has removed $wpcf7->posted_data
    and now we use an API to get the posted data.
   */
 
   $submission = WPCF7_Submission::get_instance();
 
   if ( $submission ) {
 
       $submited = array();
       $submited['title'] = $wpcf7->title();
       $submited['posted_data'] = $submission->get_posted_data();
 
    }

	$wpdb->insert( $wpdb->prefix . 'tps_forms', array( 
    	'name' => $submited['posted_data']['your-name'],
    	'email' => $submited['posted_data']['your-email'],
    	'subj' => $submited['posted_data']['your-subject'],
    	'message' => $submited['posted_data']['your-message'],
    	'date_add' => @date('Y-m-d H:i:s')
	));
}

function buy_now( $atts ) {
  extract( shortcode_atts( array(
      'link' => 'http://www.coffeemarvel.com/Cake-Boss-s/2196.htm',
      ), $atts ) );
    return "<a href='{$link}' class='shop-link'>Buy now</a>";
}
add_shortcode('shop', 'buy_now');
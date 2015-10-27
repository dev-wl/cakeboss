<?php
/*
Plugin Name: MailPress_connection_sendmail 
Plugin URI: http://groups.google.com/group/mailpress 
Description: This is just an add-on for MailPress to replace default SMTP connection by SendMail connection.
Author: Andre Renaut
Version: 1.9.2
Author URI: http://www.nogent94.com
*/

class MailPress_connection_sendmail 
{
	function MailPress_connection_sendmail ()
	{
		load_plugin_textdomain('MailPress_connection_sendmail', MP_MailPress_connection_sendmail_PATH . 'mp-includes/languages');
// for settings
		add_action('MailPress_register_scripts', 			array(&$this,'register_scripts'));
		add_filter('MailPress_enqueue_scripts',			array(&$this,'enqueue_scripts'),8,1);
		add_action('MailPress_settings_extraform_update', 	array(&$this,'update'));
// for connection type & settings
		add_filter('MailPress_Swift_Connection_type',		array(&$this,'Swift_Connection_type'),8,1);
		add_filter('MailPress_Swift_Connection_settings',	array(&$this,'Swift_Connection_settings'),8,1);
// for connection 
		add_filter('MailPress_Swift_Connection_SENDMAIL', 	array(&$this,'connect'),8,1);
	}

	function register_scripts($x)
	{
		wp_register_script( 'mp-sendmail', 	'/' . MP_MailPress_connection_sendmail_PATH . 'mp-admin/js/connection_sendmail.js');
	}

	function enqueue_scripts($x)
	{
		$x[MailPress_page_settings][] = 'mp-sendmail';
		return $x;
	}

	function update()
	{
		if ($_POST['formname'] != 'connection_sendmail_form') return;

		global $mp_general, $mp_tab;

		$mp_general['tab']	= $mp_tab =  1;

		$connection_sendmail	= $_POST['connection_sendmail'];

		if (!add_option ('MailPress_connection_sendmail', $connection_sendmail, 'MailPress - connection_sendmail config' )) update_option ('MailPress_connection_sendmail', $connection_sendmail);
		if (!add_option ('MailPress_general', $mp_general, 'MailPress - general settings' )) update_option ('MailPress_general', $mp_general);

		MP_Admin::message(__("'SENDMAIL' settings saved",'MailPress_connection_sendmail'));
	}

	function Swift_Connection_type($x)
	{
		return 'SENDMAIL';
	}

	function Swift_Connection_settings($x)
	{
		return ABSPATH . MP_MailPress_connection_sendmail_PATH . 'mp-admin/includes/settings-sendmail.php';
	}

	function connect($x)
	{
		require_once MP_TMP . "/mp-includes/class/swift/Swift/Connection/Sendmail.php";

		$sendmail_settings = get_option('MailPress_connection_sendmail');

		switch ($sendmail_settings['cmd'])
		{
			case 'std' :
				$conn = new Swift_Connection_Sendmail();
			break;
			case 'custom' :
				$conn = new Swift_Connection_Sendmail($sendmail_settings['custom']);
			break;
			default :
				$conn = new Swift_Connection_Sendmail(Swift_Connection_Sendmail::AUTO_DETECT);
			break;
		}
		return $conn;
	}
}
define ('MP_MailPress_connection_sendmail_FOLDER', 	basename(dirname(__FILE__)));
define ('MP_MailPress_connection_sendmail_PATH', 	'wp-content/plugins/' . MP_MailPress_connection_sendmail_FOLDER . '/' );
define ('MP_MailPress_connection_sendmail_TMP', 		dirname(__FILE__));

$MailPress_connection_sendmail = new MailPress_connection_sendmail();
?>
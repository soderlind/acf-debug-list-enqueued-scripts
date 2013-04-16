<?php
/*
Plugin Name: Advanced Custom Fields: debug_list_enqueued_scripts
Plugin URI: https://github.com/soderlind/acf-debug-list-enqueued-scripts
Description: List Enqueued Scripts
Version: 1.0.0
Author: Per Soderlind
Author URI: http://soderlind.no
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


class acf_field_debug_list_enqueued_scripts_plugin
{
	/*
	*  Construct
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function __construct()
	{
		// set text domain
		/*
		$domain = 'acf-debug_list_enqueued_scripts';
		$mofile = trailingslashit(dirname(__File__)) . 'lang/' . $domain . '-' . get_locale() . '.mo';
		load_textdomain( $domain, $mofile );
		*/
		
		
		// version 4+
		add_action('acf/register_fields', array($this, 'register_fields'));	

		
		// version 3-
		add_action( 'init', array( $this, 'init' ));
	}
	
	
	/*
	*  Init
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function init()
	{
		if(function_exists('register_field'))
		{ 
			register_field('acf_field_debug_list_enqueued_scripts', dirname(__File__) . '/debug_list_enqueued_scripts-v3.php');
		}
	}
	
	/*
	*  register_fields
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function register_fields()
	{
		include_once('debug_list_enqueued_scripts-v4.php');
	}
	
}

new acf_field_debug_list_enqueued_scripts_plugin();
		
?>

<?php

// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\AdminPages;

// class AlecadddPlugin
// {
// 		public $plugin;
// 		function __construct() {
// 			$this->plugin = plugin_basename( __FILE__ );
// 			/* here we are passing custome_post_type as parameter in the array to initialize CPT.
// 			$this keyword reffering to AlecadddPlugin Class 
// 			add_action() serching custom_post_type in the AlecadddPlugin class to initialize.
// 			*/
// 			//add_action('init', array($this, 'custome_post_type'));

// 		}

// 		function register() {
// 			/* use wp_admin_enqueue_scripts instead to use script/style at front end. */
// 			add_action('admin_enqueue_scripts', array($this, 'enqueue'));
// 			
            /*registering admin menu for plugin*/
// 			add_action('admin_menu', array($this, 'add_admin_pages'));
			
// 			add_filter( "plugin_action_links_$this->plugin" , array($this, 'settings_links'));

// 		}

// 		function settings_links($links) {
// 			$settings_link = '<a href = "admin.php?page=alecaddd_plugin"> Setting </a>';
// 			array_push($links,$settings_link); // pushing $settings_link into $links array.
// 			return $links;
// 		}

// 		function add_admin_pages() {
// 			/* creating admin menu */
// 			add_menu_page( 'Alecadd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array($this, 'admin_index'), 'dashicons-store', 110 );
// 		}

// 		function admin_index() {
// 			require_once plugin_dir_path( __FILE__ ).'templates/admin.php';
// 			//Admin :: adminfun();
// 		}
		
// 		// function activate() {
// 		// 	// generating a Custome Post Type
// 		// 	$this->custome_post_type();
// 		// 	// flush rewrite rules
// 		// 	flush_rewrite_rules();
// 		// }

// 		// function deactivate() {
// 		// 	// flush rewrite rules
// 		// 	flush_rewrite_rules();
// 		// }

// 		/* Calling static method from other file into this current class*/
// 		function activate() {
// 			//require_once plugin_dir_path(__FILE__).'include/alecaddd-plugin-activate.php';		
// 			Activate :: activate();
// 		}

// 		function deactivate() {
// 			//require_once plugin_dir_path(__FILE__).'include/alecaddd-plugin-deactivate.php';
// 			Deactivate :: deactivate();
// 		}

// 		function unistall() {
// 			// delete CPT
// 			// delete all the plugin data from the DB
// 		}
// 		function custome_post_type() {
// 			/* registering post type. e.g. 'book' it could be anything. */
// 			register_post_type('book', ['public'=>true, 'label'=>'Books']);
// 		}
// 		function enqueue() {
// 			/* enqueue all our script. __FILE__ : where we want to use our code. */
// 			wp_enqueue_style('mypluginstyle', plugins_url('asset/mystyle.css', __FILE__));
// 			wp_enqueue_script('mypluginscript', plugins_url('asset/myscript.js', __FILE__));
// 		}
// }

// if(class_exists('AlecadddPlugin')) {
// 	$alecadddPlugin = new AlecadddPlugin();
// 	$alecadddPlugin->register();
// }

// // activation.
// /* we are passing here $alecadddPlugin Object and activate() as parameter. */
// register_activation_hook('FILE', array($alecadddPlugin,'activate'));
 
// // deactivation
// register_activation_hook('FILE', array(Deactivate,'deactivate'));

// // uninstall


alecaddd-plugin data

/*
	following first 3 method/function does same work.

	if(! defined('ABSPATH')) { // If Unauthorised person is trying to access this file
		die; // Prevent Unauthorised Access
	}

	if add_action() doesn't exist then wordpress didn't take any action
	if( ! function_exists('add_action')) {
		echo 'hey, you can not access this file';
		exit();
	}
*/
// if this file is called directly, abort.
defined('ABSPATH') or die('hey you can\'t access this file');
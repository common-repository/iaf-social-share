<?php
/*
 * Plugin Name: IAF Social Share
 * Description: A simple plugin to share articles, pages and any other post types on the most commonly used social media including Whatsapp. Use the shortcode <code>[iaf-share-buttons]</code> anywhere on the website to display the buttons and share any page.
 * Author: Fotso Fonkam
 * Author URI: http://www.iamfotso.cm/a-propos/
 * Version: 1.2
 * Licence: GPL2+
 * Text Domain: iaf-social-share
 */

// SETUP
define( 'IAF_PLUGIN_FILE', __FILE__ );

// INCLUDES
include( 'inc/activate.php' );
include( 'inc/enqueue.php' );
include( 'inc/admin/menu.php' );
include( 'inc/add-buttons.php' );
include( 'inc/add-opengraph.php' );
include( 'inc/admin/save-options.php' );
include( 'inc/shortcode.php' );
include( 'inc/textdomain.php' );

// HOOKS
register_activation_hook( __FILE__, 'iaf_activate_plugin' );
add_action( 'wp_enqueue_scripts', 'iaf_enqueue' );
add_action( 'admin_enqueue_scripts', 'iaf_admin_enqueue' );
add_action( 'wp_head', 'iaf_add_opengraph' );
add_action( 'admin_menu', 'iaf_admin_menu' );
add_filter( 'the_content', 'iaf_add_share_buttons' );
add_action( 'admin_post_iaf_save_options', 'iaf_save_options' );
add_action( 'plugins_loaded', 'iaf_load_textdomain' );

// SHORTCODES
add_shortcode( 'iaf-share-buttons', 'iaf_share_shortcode' );
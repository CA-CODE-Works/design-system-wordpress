<?php
/**
 * Plugin Name:       Ds Link Grid
 * Plugin URI:        https://github.com/CA-CODE-Works/design-system-wordpress/blocks/ds-link-grid
 * Description:       California Design System Ds Link Grid Component
 * Version:           1.1.0
 * Requires at least: 6.2
 * Requires PHP:      8.1
 * Author:            CAWebPublishing
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ds-link-grid
 *
 * @package           cagov-design-system
 */

if ( ! defined('DsLinkGrid_URI') ){
	$cagov_design_system_ds_link_grid_doc_root = isset( $_SERVER['DOCUMENT_ROOT'] ) ? sanitize_text_field( wp_unslash( $_SERVER['DOCUMENT_ROOT'] ) ) : '';
	define( 'DsLinkGrid_URI', esc_url( str_replace( $cagov_design_system_ds_link_grid_doc_root, '', __DIR__ ) ) );
}

if ( ! defined( 'CAGOV_DESIGN_SYSTEM_DEBUG' ) ) {
	define( 'CAGOV_DESIGN_SYSTEM_DEBUG', false );
}

// Include Ds Link Grid Core Functionality.
foreach ( glob( __DIR__ . '/core/*.php' ) as $file ) {
	require_once $file;
}

// Include Ds Link Grid Functionality.
foreach ( glob( __DIR__ . '/inc/*.php' ) as $file ) {
	require_once $file;
}

/**
 * Plugin API/Action Reference
 * Actions Run During a Typical Request
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference#Actions_Run_During_a_Typical_Request
 */
add_action( 'init', 'cagov_design_system_ds_link_grid_init' );
add_action( 'wp_enqueue_scripts', 'cagov_design_system_ds_link_grid_wp_enqueue_scripts' );

if ( ! function_exists( 'cagov_design_system_ds_link_grid_init' ) ) {
	/**
	 * Ds Link Grid Initialization
	 *
	 * Fires after WordPress has finished loading but before any headers are sent.
	 * Include Gutenberg Block assets by getting the index file of each block build file.
	 *
	 * @link https://developer.wordpress.org/reference/hooks/init/
	 * @return void
	 */
	function cagov_design_system_ds_link_grid_init() {
		global $pagenow;

		if ( ! function_exists( 'get_plugin_data' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		$version = get_plugin_data( __FILE__ )['Version '];

		/**
		* Enqueues the default ThickBox js and css. (if not on the login page or customizer page)
		*
		* @link https://developer.wordpress.org/reference/functions/add_thickbox/
		*/
		if ( ! in_array( $pagenow, array( 'wp-login.php', 'customize.php' ), true ) ) {
			add_thickbox();
		}

		// if editing a page/post register compiled Gutenberg Block bundles.
		if ( in_array( $pagenow, array( 'post.php', 'post-new.php' ), true ) ) {

			wp_enqueue_style( 'cagov-design-system-ds-link-grid', cagov_design_system_ds_link_grid_get_min_file( '/css/ds-link-grid.css' ), array(), $version );
		}

		$block_args = array(
			'render_callback' => 'cagov_design_system_ds_link_grid_block_renderer',
		);

		/**
		 * Registers the block using the metadata loaded from the `block.json` file.
		 * Behind the scenes, it registers also all assets so they can be enqueued
		 * through the block editor in the corresponding context.
		 *
		 * @see https://developer.wordpress.org/reference/functions/register_block_type/
		*/
		register_block_type( __DIR__ . '/build', $block_args );
	}
}

if ( ! function_exists( 'cagov_design_system_ds_link_grid_wp_enqueue_scripts' ) ) {
	/**
	 * Register Ds Link Grid scripts/styles
	 *
	 * Fires when scripts and styles are enqueued.
	 *
	 * @category add_action( 'wp_enqueue_scripts', 'cagov_design_system_ds_link_grid_wp_enqueue_scripts' );
	 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
	 *
	 * @return void
	 */
	function cagov_design_system_ds_link_grid_wp_enqueue_scripts() {

		if ( ! function_exists( 'get_plugin_data' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}

		$version = get_plugin_data( __FILE__ )['Version '];

		// Register compiled Gutenberg Block bundles.
		wp_enqueue_script( 'cagov-design-system-ds-link-grid', cagov_design_system_ds_link_grid_get_min_file( '/js/ds-link-grid.js', 'js' ), array(), $version, true );

		wp_enqueue_style( 'cagov-design-system-ds-link-grid', cagov_design_system_ds_link_grid_get_min_file( '/css/ds-link-grid.css' ), array(), $version );

	}
}

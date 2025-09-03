<?php

if (!function_exists('breakdance_zero_theme_setup')) {
    function breakdance_zero_theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails' );

    }
}

add_action('after_setup_theme', 'breakdance_zero_theme_setup');


if (!function_exists('warn_if_breakdance_is_disabled')) {
    add_action( 'admin_notices', 'warn_if_breakdance_is_disabled' );

    function warn_if_breakdance_is_disabled() {
        if (defined('__BREAKDANCE_DIR__')){
            return;
        }

        ?>
        <div class="notice notice-error is-dismissible">
            <p>You're using Breakdance's Zero Theme but Breakdance is not enabled. This isn't supported.</p>
        </div>
        <?php
    }
}

add_action( 'wp_enqueue_scripts', 'custom_enqueue_files' );
/**
 * Loads <list assets here>.
 */
function custom_enqueue_files() {
	// if this is not the front page, abort.
	// if ( ! is_front_page() ) {
	// 	return;
	// }

	// loads a CSS file in the head.
	wp_enqueue_style( 'custom', get_stylesheet_directory_uri().'/style.css?v=1' );

	/**
	 * loads JS files in the footer.
	 */
	// wp_enqueue_script( 'highlightjs', plugin_dir_url( __FILE__ ) . 'assets/js/highlight.pack.js', '', '9.9.0', true );

	// wp_enqueue_script( 'highlightjs-init', plugin_dir_url( __FILE__ ) . 'assets/js/highlight-init.js', '', '1.0.0', true );
}

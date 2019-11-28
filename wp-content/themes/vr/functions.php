<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
function my_theme_enqueue_scripts() {
    wp_enqueue_script( 'bundle', get_stylesheet_directory_uri() . '/dist/bundle.js', array('jquery'), 1, false );
}
?>
<?php
function enqueue_my_custom_styles() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', false);
}
add_action('wp_enqueue_scripts', 'enqueue_my_custom_styles', 15);
?>
<?php
/**
 * Fix Template Caching - Bug Fix for Wordpress 4.9+
 * Plugin name: WP Trac #42573: Fix for theme template file caching.
 * Description: Flush the theme file cache each time the admin screens are loaded which uses the file list.
 * Plugin URI: https://core.trac.wordpress.org/ticket/42573
 * Author: Weston Ruter, XWP.
 * Author URI: https://weston.ruter.net
 */
function wp_42573_fix_template_caching( WP_Screen $current_screen ) {
    // Only flush the file cache with each request to post list table, edit post screen, or theme editor.
    if ( ! in_array( $current_screen->base, array( 'post', 'edit', 'theme-editor' ), true ) ) {
        return;
    }
    $theme = wp_get_theme();
    if ( ! $theme ) {
        return;
    }
    $cache_hash = md5( $theme->get_theme_root() . '/' . $theme->get_stylesheet() );
    $label = sanitize_key( 'files_' . $cache_hash . '-' . $theme->get( 'Version' ) );
    $transient_key = substr( $label, 0, 29 ) . md5( $label );
    delete_transient( $transient_key );
}
add_action( 'current_screen', 'wp_42573_fix_template_caching' );
?>
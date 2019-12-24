<?php 

// Register Styles and Scripts

function torontoOnline_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri() );


}
add_action('wp_enqueue_scripts', 'torontoOnline_scripts');

// Add Menus

register_nav_menus(array(
    'main-menu' => __('Main Menu', 'torontoOnline')
));



add_filter('show_admin_bar', '__return_false');
<?php 

// Register Styles and Scripts

function torontoOnline_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri() );


}
add_action('wp_enqueue_scripts', 'torontoOnline_scripts');

// Add Navigation Menus
register_nav_menus(array(
    'main_menu' => __('Main Menu', 'torontoOnline')
));

//Add Widget Zone
function theme_widgets(){
    register_sidebar(array(
        'name'        => __('Sidebar Testimonials'),
        'id'          => 'testimonials',
        'description' => 'Testimonial Widgets',
        'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title"> ',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'theme_widgets');

// Add Featured Image
add_theme_support('post-thumbnails');

//Add Custom image sizes
add_image_size('featured', 1100, 418, true);
add_image_size('medium-blog', 358, 208, true);

// Hide WP Admin bar
add_filter('show_admin_bar', '__return_false');
<?php

function load_css()
{
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_css');

add_theme_support('menus');

//Register menu location
register_nav_menus(
    array(
        'huvudmeny' => __('Plats för Huvudmeny'),
        'undersidameny' => __('Undersida Meny')
    )
);
// Registered img-size
add_theme_support('post-thumbnails');
add_image_size('XS', 200, 200, true);
add_image_size('S', 250, 250, true);
add_image_size('M', 500, 500, true);
add_image_size('L', 750, 500, true);
add_image_size('XL', 1000, 1000, true);
add_image_size('XXL', 1150, 600, true);

function register_widgets()
{
    register_sidebar(array(
        'name'          =>'Header Widget',
        'id'            =>'header-widget',
        'before-widget' =>'<div class="header-widget">',
        'after-widget'  =>'</div>',
        'before-title'  =>'<h2>',
        'after-title'   =>'</h2>',
    ));
}

// Registered footer widget
function register_footer_widgets() {
    register_sidebar(array(
        'name'          => 'Footer Widget',
        'id'            => 'footer-widget',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after-widget'  => '</div>',
        'before-title'  => '<h2>',
        'after-title'   => '</h2>',
    ));
}
add_action('widgets_init', 'register_footer_widgets');
add_action('widgets_init', 'register_widgets');
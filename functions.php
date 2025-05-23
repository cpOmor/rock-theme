<?php


/*
* theme title 
*/ 


add_theme_support('title-tag');


// theme css and js file calling
function ri_theme_css_js_file_calling() { 
    wp_enqueue_style('ri-style', get_stylesheet_uri());
    wp_register_style('ri-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.3.6', 'all');
    wp_enqueue_style('ri-bootstrap');

    // jQuery file calling
    wp_enqueue_script('jquery');
    // bootstrap js file calling
    wp_enqueue_script('ri-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.3.6', true);
    wp_enqueue_script('ri-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ri_theme_css_js_file_calling');


// theme function

function ri_theme_customizer($wp_customize) {
    $wp_customize->add_section('ri_theme_section', array(
        'title' => __('Rock Theme Options', 'ri-theme'),
        'description' => __('If you want to change the theme options, you can do it here.', 'ri-theme'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('ri_theme_setting', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ri_theme_setting', array(
        'label' => __('Logo uploard', 'ri-theme'),
        'section' => 'ri_theme_section',
        'settings' => 'ri_theme_setting',
    )));

}
add_action('customize_register', 'ri_theme_customizer');
?>



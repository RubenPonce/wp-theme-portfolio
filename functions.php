<?php
function myportfolio_files(){
    wp_enqueue_style('myportfolio_main_styles', get_theme_file_uri("/css/index-style.css"));
    wp_enqueue_script( 'myportfolio-main-js', get_template_directory_uri() . '/javascript/main.js', array(), '1.0', true );
    wp_enqueue_style( 'myportfolio-style', get_stylesheet_uri() );
    wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/4810a47f7e.js', array(), '1.0', true);

}
add_action('wp_enqueue_scripts', 'myportfolio_files');

// @TODO Add a custom post type for portfolio items
function myportfolio_widgets_init() {
    register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'main-sidebar',
        'description'   => 'Widgets added here will appear in all pages.',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'myportfolio_widgets_init' );

//@TODO move to mu-plugins
function create_work_experience_post_type() {
    register_post_type('work_experience',
        array(
            'labels' => array(
                'name' => __('Work Experience'),
                'singular_name' => __('Work Experience'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-businessman',
        )
    );
}
add_action('init', 'create_work_experience_post_type');

?>


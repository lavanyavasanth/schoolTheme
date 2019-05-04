<?php
//adding css and js files 

function school_setup(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'school_setup');

//adding theme support

function school_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list','comment-form', 'search-form')
    );
}
add_action('after_setup_theme', 'school_init');
//adding projects post type

function school_custom_post_type(){
    register_post_type('program', 
        array(
            'rewrite' => array('slug' => 'programs'),
            'labels' => array(
                'name' => 'Programs',
                'singular_name' => 'Program',
                'add_new_item' => 'Add New program',
                'edit_item' => 'Edit Program'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
        );
}
add_action('init', 'school_custom_post_type');

function school_widgets(){
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
        );
}
add_action('widgets_init','school_widgets');

function search_filter($query){
    if($query->is_search()){
        $query->set('post_type', array('post','program'));
    }
}
add_filter('pre_get_posts','search_filter');
?>
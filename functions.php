<?php

// adding the CSS and JS files

function gt_setup(){
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), $media = 'all');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// Adding Theme Support

function init() {
    add_theme_support('post-thumbnails');
    add_theme_support('titel-tag');
}

add_action('after_setup_theme', 'init');

// Adding Custom Post Type Mmenschen


function custom_post_type_menschen ()
{
    register_post_type('menschen',
        array(
            'rewrite' => array('slug' => 'menschen'),
            'labels' => array(
                'name' => 'Menschen',
                'singular_name' => 'Menschen',
                'add_new_item' => 'Menschen hinzufügen',
                'edit_item' => 'Menschen bearbeiten'
            ),
            'menu-icon' => 'dashicons-clippboard',
            'public' => true,
            'has_archive' => true,
            'taxonomies'          => array('category' ),
            'supports' => array(
                'title', 'thumbnail', 'editor'
            )
        )
            );
}

add_action('init', 'custom_post_type_menschen');


// Adding Custom Post Type Submission


function custom_post_type_ideen()
{
    register_post_type('Ideen',
        array(
            'rewrite' => array('slug' => 'ideen'),
            'labels' => array(
                'name' => 'Ideen',
                'singular_name' => 'Ideen',
                'add_new_item' => 'Ideen hinzufügen',
                'edit_item' => 'Ideen bearbeiten'
            ),
            'menu-icon' => 'dashicons-clippboard',
            'public' => true,
            'has_archive' => true,
            'taxonomies'          => array('category' ),
            'supports' => array(
                'title', 'thumbnail', 'editor'
            )
        )
            );
}

add_action('init', 'custom_post_type_ideen');


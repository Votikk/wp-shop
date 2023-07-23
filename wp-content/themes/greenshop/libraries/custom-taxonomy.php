<?php

add_action('init', 'greenshop_init_posttypes');

function greenshop_init_posttypes()
{

    $countries_args = array(
        'labels' => array(
            'name' => 'Countries',
            'singular_name' => 'Countries',
            'all_items' => 'All countries',
            'add_new' => 'Add new country',
            'add_new_item' => 'Add new country',
            'edit_item' => 'Edit country',
            'new_item' => 'New country',
            'view_item' => 'See the country',
            'search_items' => 'Search country',
            'not_found' => 'Countries not found',
            'not_found_in_trash' => 'Countries not found in trash',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_bar' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author',
            'custom-fields'
        ),
        'has_archive' => true
    );

    $cities_args = array(
        'labels' => array(
            'name' => 'Cities',
            'singular_name' => 'Cities',
            'all_items' => 'All cities',
            'add_new' => 'Add new city',
            'add_new_item' => 'Add new city',
            'edit_item' => 'Edit city',
            'new_item' => 'New city',
            'view_item' => 'See the city',
            'search_items' => 'Search city',
            'not_found' => 'Cities not found',
            'not_found_in_trash' => 'Cities not found in trash',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_bar' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author',
            'custom-fields'
        ),
        'has_archive' => true
    );

    register_post_type('countries', $countries_args);
    register_post_type('cities', $cities_args);

}
?>
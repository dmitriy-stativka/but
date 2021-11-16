<?php
function post_type_cases()
{
  register_post_type('cases', array(
    'labels' => array(
      'name' => 'Use Cases',
      'singular_name' => 'Use Cases',
      'add_new' => 'Add cases',
      'add_new_item' => 'Add cases',
      'edit_item' => 'Edit cases',
      'new_item' => 'New cases',
      'view_item' => 'View cases',
      'search_items' => 'Search cases',
      'not_found' => 'Not found',
      'not_found_in_trash' => 'No items were found in the basket',
      'parent_item_colon' => '',
      'menu_name' => 'Use Cases'
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('slug' => '/cases'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'comments', 'thumbnail', 'excerpt', 'custom-fields', 'category', 'page-attributes')
  ));

}


add_action('init', 'post_type_cases');
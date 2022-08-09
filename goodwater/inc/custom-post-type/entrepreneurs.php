<?php 
add_action( 'init', 'entrepreneurs');
function entrepreneurs() {
    $labels = array(
        'name'                => 'Entrepreneur',
        'singular_name'       => 'Entrepreneur',
        'menu_name'           => 'Entrepreneur',
        'parent_item_colon'   => 'Parent Entrepreneur:',
        'all_items'           => 'All Entrepreneur',
        'view_item'           => 'View Entrepreneur',
        'add_new_item'        => 'Add New Entrepreneur',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Entrepreneur',
        'update_item'         => 'Update Entrepreneur',
        'search_items'        => 'Search Entrepreneur',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
      
    $args = array(
        'labels'              => $labels,
        'description'         => 'Entrepreneur',
        'supports'            => array( 'title', 'editor', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-businessperson',
        'menu_position'       => 8,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
    register_post_type( 'entrepreneurs', $args );
}?>
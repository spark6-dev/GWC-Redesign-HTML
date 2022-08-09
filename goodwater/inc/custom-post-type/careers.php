<?php 
add_action( 'init', 'careers');
function careers() {
    $labels = array(
        'name'                => 'Career',
        'singular_name'       => 'Career',
        'menu_name'           => 'Career',
        'parent_item_colon'   => 'Parent Career:',
        'all_items'           => 'All Career',
        'view_item'           => 'View Career',
        'add_new_item'        => 'Add New Career',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Career',
        'update_item'         => 'Update Career',
        'search_items'        => 'Search Career',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
      
    $args = array(
        'labels'              => $labels,
        'description'         => 'Career',
        'supports'            => array( 'title' ),
        'hierarchical'        => false,
        'public'              => false,
        'taxonomies'          => array('career_category'),
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-portfolio',
        'menu_position'       => 8,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
    register_post_type( 'careers', $args );
}?>
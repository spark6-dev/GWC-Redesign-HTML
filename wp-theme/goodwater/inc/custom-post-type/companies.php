<?php 
add_action( 'init', 'companies');
function companies() {
    $labels = array(
        'name'                => 'Company',
        'singular_name'       => 'Company',
        'menu_name'           => 'Company',
        'parent_item_colon'   => 'Parent Company:',
        'all_items'           => 'All Company',
        'view_item'           => 'View Company',
        'add_new_item'        => 'Add New Company',
        'add_new'             => 'Add New',
        'edit_item'           => 'Edit Company',
        'update_item'         => 'Update Company',
        'search_items'        => 'Search Company',
        'not_found'           => 'Not Found',
        'not_found_in_trash'  => 'Not found in Trash',
    );
      
    $args = array(
        'labels'              => $labels,
        'description'         => 'Company',
        'supports'            => array( 'title', 'editor', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => false,
        'taxonomies'          => array('company_category','location','growth_stage'),
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
    register_post_type( 'companies', $args );
}?>
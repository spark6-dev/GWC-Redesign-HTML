<?php 
add_action( 'init', 'create_location_hierarchical_taxonomy', 0 ); 
function create_location_hierarchical_taxonomy() {
    $labels = array(
        'name'              => _x( 'Location', 'taxonomy general name' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
        'search_items'      =>  __( 'Search Location' ),
        'all_items'         => __( 'All Location' ),
        'parent_item'       => __( 'Parent Location' ),
        'parent_item_colon' => __( 'Parent Location:' ),
        'edit_item'         => __( 'Edit Location' ), 
        'update_item'       => __( 'Update Location' ),
        'add_new_item'      => __( 'Add New Location' ),
        'new_item_name'     => __( 'New Location Name' ),
        'menu_name'         => __( 'Location' ),
    );    
    // Now register the taxonomy
    register_taxonomy('location',array('companies'), array(
        'hierarchical'        => true,
        'labels'              => $labels,
        'public'              => false,
        'show_ui'             => true,
        'show_in_rest'        => true,
        'show_admin_column'   => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'rewrite'             => array( 'slug' => 'location' ),
    )); 
}?>
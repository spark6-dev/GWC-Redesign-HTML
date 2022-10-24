<?php 
add_action( 'init', 'create_career_category_hierarchical_taxonomy', 0 ); 
function create_career_category_hierarchical_taxonomy() {
    $labels = array(
        'name'              => _x( 'Category', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      =>  __( 'Search Category' ),
        'all_items'         => __( 'All Category' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ), 
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Category' ),
    );    
    // Now register the taxonomy
    register_taxonomy('career_category',array('careers'), array(
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
        'rewrite'             => array( 'slug' => 'career_category' ),
    )); 
}?>
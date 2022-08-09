<?php 
add_action( 'init', 'create_growth_stage_hierarchical_taxonomy', 0 ); 
function create_growth_stage_hierarchical_taxonomy() {
    $labels = array(
        'name'              => _x( 'Stage', 'taxonomy general name' ),
        'singular_name'     => _x( 'Stage', 'taxonomy singular name' ),
        'search_items'      =>  __( 'Search Stage' ),
        'all_items'         => __( 'All Stage' ),
        'parent_item'       => __( 'Parent Stage' ),
        'parent_item_colon' => __( 'Parent Stage:' ),
        'edit_item'         => __( 'Edit Stage' ), 
        'update_item'       => __( 'Update Stage' ),
        'add_new_item'      => __( 'Add New Stage' ),
        'new_item_name'     => __( 'New Stage Name' ),
        'menu_name'         => __( 'Stage' ),
    );    
    // Now register the taxonomy
    register_taxonomy('growth_stage',array('companies'), array(
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
        'rewrite'             => array('slug' => 'stage','with_front' => false),
    )); 
}?>
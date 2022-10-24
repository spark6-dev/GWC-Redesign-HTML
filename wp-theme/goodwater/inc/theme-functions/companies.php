<?php 
function company_list(){
    $args = array(
        'posts_per_page'   => -1,
        'post_type'        => 'companies',
        'post_status'      => 'publish',
        'order-by'         => 'date',
        'order'            => 'asc',
    );
    $company_query = new WP_Query( $args ); 
    if ($company_query->have_posts()) {
        return $company_query->posts;
    } else {
        return false;
    }
}
?>
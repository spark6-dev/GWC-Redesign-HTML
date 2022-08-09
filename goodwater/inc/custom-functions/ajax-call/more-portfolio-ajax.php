<?php 
// Portfolio load more
function more_portfolio_ajax(){
    if(isset($_POST['page'])){
        $page       = $_POST['page'] + 1;
        $limit      = $_POST['limit'];
        $taxonomy   = $_POST['taxonomy'];
        $val        = $_POST['val'];
        header("Content-Type: text/html");

        if($taxonomy){
            $args = array(
                'post_type'         => 'companies',
                'post_status'       => 'publish',
                'posts_per_page'    => $limit,
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field'    => 'term_id',
                        'terms'    => $val,
             
                    ),
                ),
                'paged'             => $page,
            );
        }else if( $taxonomy == '' && $val != '' ){
            $args = array(
                'post_type'         => 'companies',
                'post_status'       => 'publish',
                'posts_per_page'    => $limit,
                's' => $val,
                'paged'             => $page,
            );
        }else{
            $args = array(
                'post_type'         => 'companies',
                'post_status'       => 'publish',
                'posts_per_page'    => $limit,
                'paged'             => $page,
            );
        }


        $loop = new WP_Query($args);
        $out = '';
        if ($loop -> have_posts()) :  //$count = 0;
        	while ($loop -> have_posts()) : $loop -> the_post(); 
                $title    = get_the_title();
                $tags     = get_the_terms( get_the_ID(), 'company_category' ); 
                if ( ! empty( $tags ) ) {
                    $tag = $tags[0]->name;   
                }
                $link                       = get_field('link');
                $location_country_state     = get_field('locationcountrystate');
            	$out .= '<div class="filter__box">
                        <a href="'.$link['url'].'" title="'.esc_html($title).'" target="_blank">
                            <div class="gwc filter filter--box">
                                <span class="l-tag">'.esc_html($tag).'</span>
                                <span class="l-tag">'.esc_html($location_country_state).'</span>
                                <div class="filter__head">
                                    <h2>'.esc_html($title).'</h2>'.get_image(array('imgid'=> 216)).'
                                </div>
                                '.apply_filters('the_content', get_the_content()).'
                            </div>
                        </a>
                    </div>';
            endwhile;
        endif;
        wp_reset_postdata();
        die($out);
    }else{
        echo -1;
    }
}
add_action('wp_ajax_nopriv_more_portfolio_ajax', 'more_portfolio_ajax');
add_action('wp_ajax_more_portfolio_ajax', 'more_portfolio_ajax');
?>
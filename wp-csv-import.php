<?php if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
require_once(ABSPATH . 'wp-load.php');?>

<h2 style="text-align: center;">Import Company CSV</h2>

<?php 
function get_companies(){
	// Filename
	$file = get_theme_file_uri() .'/inc/company-csv/Goodwater Portcos 20220713.csv';
	$data = $header = array(); 
	$i = 0;
	$handle = fopen($file, "r");
	if($handle){
	    while(($row = fgetcsv($handle)) !== false){
	        if (empty($header)) {
	            $header = $row;
	            continue;
	        }
	        foreach ($row as $key=>$value) {
	            $data[$i][$header[$key]] = $value;
	        }
	        $i++;
	    }
	    fclose($handle);
	}else{
		echo "File could not be opened.";
	}
	return $data;
}

function company_exists( $company_name ){
	$args = array(
        'post_type' 	 => 'companies',
        'posts_per_page' => -1,
      	'post_status'    => 'publish',
        'title' 		 => $company_name,
    );
	$company_query = new WP_Query($args);
    if ($company_query->have_posts()) {
        return $company_query->posts;
    } else {
        return false;
    }
}


$companies = get_companies();
if( !empty($companies) ){
	foreach ($companies as $company){
		$company_name    	  = $company["Company"];
		$company_website 	  = $company["Website"];
		if (!preg_match("~^(?:f|ht)tps?://~i", $company_website)) {
	        $company_website = "https://" . $company_website;
	    }
	    $link_array = array(
			'url'   => $company_website,
			'title' => 'Read More',
		);
	    echo '<br>'.$company_website.'<br>';
		$company_growth_stage  = $company["Stage"];
		$company_region 	   = $company["Location (for search)"];
		$company_country_state = $company["Country/State (for display on card)"];
		$company_category 	   = $company["Category"];
		$company_content 	   = $company["One-liner"];   

        echo $company_name.'<br>';

		if( strpos($company_category, ',') !== false ) {
		    $company_category = explode (",", $company_category);
		}

	   	$company_exists = company_exists($company_name);

	   	if ( $company_exists ) {
	   		echo "Exists----";
     	  	echo "<br/>";
	   		foreach($company_exists as $company_exist){
        		$company_id = $company_exist->ID;
	   			echo "Company ID is -----------------------".$company_id;
	   			echo "<br/>";
	   			echo "<br/>";
	   			if($company_id){
	   				$new_company = array(
		   				'ID'            => $company_id,
		                'post_title'    => $company_name,
		                'post_content'  => $company_content,
		                'post_status'   => 'publish',
		                'post_type' 	=> 'companies',
		            );
		            $updated = wp_update_post( $new_company );
		            echo "Company updated ---------".$updated;
		            echo "<br/>";
		            echo "<br/>";
		            wp_set_object_terms( $company_id, $company_growth_stage, 'growth_stage');
		            wp_set_object_terms( $company_id, $company_region, 'location');
		            if(is_array($company_category)){
						foreach($company_category as $category){
							wp_set_object_terms( $company_id, $category, 'company_category', true);
						}
					}else{
						wp_set_object_terms( $company_id, $company_category, 'company_category');
					}
					update_field('locationcountrystate', $company_country_state, $company_id);
		            update_field('link', $link_array, $company_id);
	   			}
	   		}
        }else{
			$new_company = array(
                'post_title'    => $company_name,
                'post_content'  => $company_content,
                'post_status'   => 'publish',
                'post_author'   => 1,
                'post_type' 	=> 'companies',
            );
            $new_company_id = wp_insert_post( $new_company );
            echo "New Company Added ---------".$new_company_id;
            echo "<br/>";
            echo "<br/>";
            wp_set_object_terms( $new_company_id, $company_growth_stage, 'growth_stage', true);
            wp_set_object_terms( $new_company_id, $company_region, 'location', true);
    		if(is_array($company_category)){
				foreach($company_category as $category){
					wp_set_object_terms( $new_company_id, $category, 'company_category', true);
				}
			}else{
				wp_set_object_terms( $new_company_id, $company_category, 'company_category');
			}
			update_field('locationcountrystate', $company_country_state, $new_company_id);
            update_field('link', $link_array, $new_company_id);
        }
	}
}
?>
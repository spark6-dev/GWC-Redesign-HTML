<?php 
function header_blue_logo( $wp_customize ) {
	$wp_customize->add_setting( 'header_blue_logo' );
	//Controls
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 
			'blue_logo', 
			array(
				'label' => 'Header Blue Logo',
				'section' => 'title_tagline',
				'settings' => 'header_blue_logo',
				'priority' => 8
			)
		)
	);		
}
add_action('customize_register', 'header_blue_logo');

function header_light_logo( $wp_customize ) {
	$wp_customize->add_setting( 'header_light_logo' );
	//Controls
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 
			'light_logo', 
			array(
				'label' => 'Header Light Logo',
				'section' => 'title_tagline',
				'settings' => 'header_light_logo',
				'priority' => 8
			)
		)
	);		
}
add_action('customize_register', 'header_light_logo');

function ogg_logo($wp_customize) {
	// add a setting 
	$wp_customize->add_setting('ogg_logo');
	// Add a control to upload the hover logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize, 'ogglogo', array(
					'label' => 'Open Grapg Logo',
					'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
					'settings' => 'ogg_logo',
					'priority' => 8 // show it just below the custom-logo
				)
			)
		);
        		
	}
add_action('customize_register', 'ogg_logo');
?>
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Goodwater
 */

get_header();
?>

<div class="gwc banner banner--inner">
    <div class="banner__wrap">
        <div class="container">
        	<span class="l-banner"><?php esc_html_e( 'This Page Does Not Exist', 'Goodwater' ); ?></span>
            <div class="banner__details">
              	<h1><?php esc_html_e( '404', 'Goodwater' ); ?><span class="is--desktop"><?php esc_html_e( 'Oops! Page Not Found', 'Goodwater' ); ?></span></h1>
            </div>
            <span class="is--mobile"><?php esc_html_e( 'Oops! Page Not Found', 'Goodwater' ); ?></span>
        </div>
    </div>
</div>
<div class="error__button"> 
	<a class="l-btn l-btn--dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="home link"><?php esc_html_e( 'Back to Reality', 'Goodwater' ); ?><i><svg width="11" height="11" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.21047 1.17139H9.41407M9.41407 1.17139L9.17486 9.3715M9.41407 1.17139L0.500392 9.82837" stroke="white" stroke-width="1.25"></path></svg></i></a>
</div>

<?php
get_footer();
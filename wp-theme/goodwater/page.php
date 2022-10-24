<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Goodwater
 */

get_header();
?>
<?php if(get_field('banner_heading')):?>
    <div class="gwc banner banner--inner">
        <div class="banner__wrap">
          	<div class="container">
          		<span class="l-banner"><?php echo esc_html(get_the_title());?></span>
          		<?php if( get_field('banner_heading') ):?>
    	            <div class="banner__details">
    	              	<?php echo apply_filters('the_content',get_field('banner_heading')); ?>
    	            </div>
    	        <?php endif;?>
          	</div>
        </div>
    </div>
<?php endif;?>
<div class="standard-text">
    <div class="container">
        <?php echo apply_filters('the_content',get_the_content()); ?>
    </div>
</div>
<?php
get_footer();
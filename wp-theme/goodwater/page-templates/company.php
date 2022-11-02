<?php
/**
 * The company template file
 * Template Name: Company
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header();?>

<?php
global $post;
if( !post_password_required( $post )): ?>
<!-- Banner Section -->
<?php get_template_part('template-parts/inner-page/banner'); ?>
<!-- Two column Content Section -->
<?php get_template_part('template-parts/inner-page/two-column-content'); ?>
<!-- Company Stats Section -->
<?php get_template_part('template-parts/company/overview'); ?>
<!-- Story Section -->
<?php get_template_part('template-parts/company/story'); ?>
<!-- Photo Gallery Section -->
<?php get_template_part('template-parts/company/photos'); ?>
<!-- Learn more Section -->
<?php get_template_part('template-parts/inner-page/bottom-text'); ?>'
<?php else: ?>
    <div class="container" style="padding-top:100px;padding-bottom:50px">
        <?php echo get_the_password_form(); ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>
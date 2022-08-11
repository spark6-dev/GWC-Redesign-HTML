<?php
/**
 * The genesis template file
 * Template Name: genesis
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header(); ?>

<!-- Banner Section -->
<?php get_template_part('template-parts/inner-page/banner'); ?>
<!-- Two column Content Section -->
<?php get_template_part('template-parts/inner-page/two-column-content',null,array('class'=>'consumer--capital')); ?>
<!-- Investment Approach Section (add something similar for genesis)-->
<?php get_template_part('template-parts/capital/investment-approach'); ?>

<!-- Accordion Section -->
<?php get_template_part('template-parts/about/accordion'); ?>

<!-- Reach Section -->
<?php get_template_part('template-parts/capital/reach'); ?>
<!-- Number Cards Section -->
<?php get_template_part('template-parts/capital/number-cards'); ?>


<!-- Careers Section -->
<?php get_template_part('template-parts/about/careers'); ?>


<?php get_footer(); ?>
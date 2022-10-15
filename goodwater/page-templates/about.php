<?php
/**
 * The homepage template file
 * Template Name: About
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header(); ?>

<!-- Banner Section -->
<?php get_template_part('template-parts/inner-page/banner',null,array('class'=>'banner--about')); ?>
<!-- Two column Content Section -->
<?php get_template_part('template-parts/inner-page/two-column-content',null,array('class'=>'consumer--about is--mobile')); ?>
<!-- Steps Section -->
<?php get_template_part('template-parts/about/steps'); ?>
<!-- Number Cards Section -->
<?php get_template_part('template-parts/inner-page/number-cards'); ?>
<!-- Manifesto Section -->
<?php get_template_part('template-parts/about/manifesto'); ?>
<!-- Accordion Section -->
<?php get_template_part('template-parts/inner-page/accordion'); ?>
<!-- Careers Section -->
<?php get_template_part('template-parts/about/careers'); ?>   
   
<?php get_footer(); ?>
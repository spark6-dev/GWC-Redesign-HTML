<?php
/**
 * The homepage template file
 * Template Name: Capital
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header(); ?>

<!-- Banner Section -->
<?php get_template_part('template-parts/inner-page/banner'); ?>
<!-- Two column Content Section -->
<?php get_template_part('template-parts/inner-page/two-column-content',null,array('class'=>'consumer--capital')); ?>
<!-- Investment Approach Section -->
<?php get_template_part('template-parts/inner-page/two-col-text+image'); ?>
<!-- Cards Section -->
<?php get_template_part('template-parts/inner-page/cards'); ?>
<!-- Reach Section -->
<?php get_template_part('template-parts/inner-page/two-col-text+image-2'); ?>
<!-- Number Cards Section -->
<?php get_template_part('template-parts/capital/number-cards'); ?>
<!-- Portfolio Section -->
<?php get_template_part('template-parts/capital/portfolio'); ?>
<!-- Slider Section -->
<?php get_template_part('template-parts/capital/slider'); ?>  
      
<?php get_footer(); ?>
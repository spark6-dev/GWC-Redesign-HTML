<?php
/**
 * The collective template file
 * Template Name: collective
 * Template Type: page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 */

get_header(); ?>

<!-- Banner Section -->
<?php get_template_part('template-parts/inner-page/banner'); ?>
<!-- Two column Content Section -->
<?php get_template_part('template-parts/inner-page/two-column-content',null,array('class'=>'collective', 'button_on_left' => true)); ?>
<!-- How it works Section -->
<?php get_template_part('template-parts/inner-page/two-col-text+image-2',null,array('class'=>'manifesto--capital collective')); ?>
<!-- Accordion Section -->
<?php get_template_part('template-parts/inner-page/accordion'); ?>
<!-- Contact Us Section -->
<?php get_template_part('template-parts/inner-page/bottom-text'); ?>


<?php get_footer(); ?>
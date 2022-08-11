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
<?php get_template_part('template-parts/inner-page/two-column-content',null,array('class'=>'consumer--capital')); ?>
<!-- Reach Section -->
<?php get_template_part('template-parts/capital/reach'); ?>

<!-- Accordion Section -->
<?php get_template_part('template-parts/about/accordion'); ?>

<!-- Two column Content Section -->
<?php get_template_part('template-parts/inner-page/two-column-content',null,array('class'=>'consumer--capital')); ?>

<!-- new template, collective case study is going to be an additional 8 hours-->

<!-- Careers Section -->
<?php get_template_part('template-parts/about/careers'); ?>


<?php get_footer(); ?>
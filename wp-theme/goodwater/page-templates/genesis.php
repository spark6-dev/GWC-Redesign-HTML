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
<!-- Program Overview Section -->
<?php get_template_part('template-parts/inner-page/two-col-text+image'); ?>
<!-- Accordion Section -->
<?php get_template_part('template-parts/inner-page/accordion'); ?>
<!-- Number Cards Section -->
<?php get_template_part('template-parts/inner-page/number-cards'); ?>
<!-- How we work Section -->
<?php get_template_part('template-parts/inner-page/two-col-text+image-2',null,array('class'=>'manifesto--capital')); ?>
<!-- Genesis Steps Section -->
<?php get_template_part('template-parts/inner-page/cards'); ?>
<!-- Genesis Apply Section -->
<?php get_template_part('template-parts/inner-page/bottom-text'); ?>
<!-- Footer text -->
<?php get_template_part('template-parts/genesis/footer-text'); ?>

<?php get_footer(); ?>
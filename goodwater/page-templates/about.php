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
<!-- Animation Section -->
<?php get_template_part('template-parts/about/animation'); ?>
<!-- Number Cards Section -->
<?php get_template_part('template-parts/inner-page/number-cards'); ?>
<!-- Manifesto Section -->
<?php get_template_part('template-parts/about/manifesto'); ?>
<!-- Accordion Section -->
<?php get_template_part('template-parts/inner-page/accordion'); ?>
<!-- Careers Section -->
<?php get_template_part('template-parts/about/careers'); ?>   
   
<?php get_footer(); ?>

<script>
    $(function() {
        $('.pin-spacer').css("width", `${window.innerWidth - 7}px`)
        $(window).scroll(function() {
            var boundingRect = $('.pin-spacer').offset().top - 100;
            var hT = $('.gwc.goal').offset().top,
                hH = $('.gwc.goal').outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();

            if (wS > boundingRect && wS < (3900 - boundingRect)){
               $('.gwc.goal').css({
                   "transform": "translate(0px, 0px)",
                "left": "0px",
                "top": "90px",
                "margin":"0px",
                "max-width": `${window.innerWidth - 7}px`,
                "width": `${window.innerWidth - 7}px`,
                "max-height": "900px",
                "height": "900px",
                "padding": "0px",
                "box-sizing": "border-box",
                "position": "fixed"
                   }

               );
            } else {
                $('.gwc.goal').css({
                        "transform": wS >= (3900 - boundingRect) ? "translate(0px, 3000px)" : "" ,
                        "left": "",
                        "top": "",
                        "margin":"",
                        "max-width": "",
                        "width": "",
                        "max-height": "",
                        "height": "",
                        "padding": "",
                        "box-sizing": "",
                        "position": "",
                    }

                );
            }
        });
    })
</script>

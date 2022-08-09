<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Goodwater
 */

get_header();
?>
<div class="gwc banner banner--inner">
    <div class="banner__wrap">
      	<div class="container">
        	<div class="banner__details">
        		<?php while ( have_posts() ) : the_post();?>
        			<h1><?php the_title();?></h1>
				<?php endwhile;?>
        	</div>
      	</div>
    </div>
</div>
<?php
get_footer();
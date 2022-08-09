<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Goodwater
 */

?>
	<footer class="gwc footer">
        <div class="container container--lg">
          	<div class="footer__brand">
            	<div class="footer__logo">
            		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Logo"><?php echo get_image(array('imgid'=>get_theme_mod('custom_logo'))); ?> </a>
            	</div>
            	<div class="footer__text">
            		<?php if( get_field('normal_text', 'option') && get_field('italic_text', 'option') ):?>
              			<h2><?php echo esc_html(get_field('normal_text', 'option'));?> <i><?php echo esc_html(get_field('italic_text', 'option'));?> </i></h2>
              		<?php endif;
              		if( have_rows('social_media_items', 'option') ):?>
	              		<ul class="is--mobile"> 
	              			<?php while( have_rows('social_media_items', 'option') ) : the_row();
	                            $link = get_sub_field('link');
	                            if( $link ):?>
	                            	<li><a href="<?php echo esc_url( $link['url'] );?>" title="<?php echo $link['title'];?>" target="<?php echo $link['target'];?>"> <?php echo get_image(array('url'=>get_sub_field('icon'))); ?></a></li>
	                            <?php endif;
                            endwhile;?>
	              		</ul>
	              	<?php endif;?>
            	</div>
          	</div>
          	<div class="footer__nav is--desktop">
            	<div class="footer__col">
              		<div class="footer__subcol"> 
                		<div class="footer__contact"> 
                  			<?php if( have_rows('address_rows', 'option') ):
                  				if( get_field('contact_heading', 'option') ):?>
                  					<h3><?php echo esc_html( get_field('contact_heading', 'option') );?></h3>
                  				<?php endif;?>
	                  			<ul> 
	                  				<?php while( have_rows('address_rows', 'option') ) : the_row();?>
				                    	<li><p><?php echo esc_html( get_sub_field('address') );?></p></li>
				                    <?php endwhile;?>
				          		</ul>
				          	<?php endif;?>	
			          		<ul>
			                    <?php if( get_field('email_id', 'option') ):?>
			                    	<li> <a href="mailto:<?php echo sanitize_email( get_field('email_id', 'option') );?>" title="mail"><?php echo esc_html( get_field('email_id', 'option') );?></a></li>
			                    <?php endif;?>
                  			</ul>
                		</div>
              		</div>
              		<div class="footer__subcol">
                		<div class="footer__careers"> 
                  			<?php if( get_field('careers_heading', 'option') ):?>
                  				<h3><?php echo esc_html( get_field('careers_heading', 'option') );?></h3>
                  			<?php endif;?>
                  			<!-- Career Menu -->
                  			<?php get_template_part('template-parts/menu/career');?>
                		</div>
                		<?php if( have_rows('social_media_items', 'option') ):?>
	                		<div class="footer__social"> 
	                  			<?php if( get_field('social_heading', 'option') ):?>
                  					<h3><?php echo esc_html( get_field('social_heading', 'option') );?></h3>
                  				<?php endif;?>
	                  			<ul> 
				                    <?php while( have_rows('social_media_items', 'option') ) : the_row();
                                		$link = get_sub_field('link');
                                		if( $link ):?>
					                      	<li><a href="<?php echo esc_url( $link['url'] );?>" title="<?php echo $link['title'];?>" target="<?php echo $link['target'];?>"> <?php echo get_image(array('url'=>get_sub_field('icon'))); ?></a></li>
				                      	<?php endif;
                            		endwhile;?>
	                  			</ul>
	                		</div>
	                	<?php endif;?>
              		</div>
            	</div>
	            <div class="footer__col">
	              	<div class="footer__thumb"><?php echo get_image(array('imgid'=> 82)); ?></div>
	            </div>
       	 	</div>
	        <div class="footer__bottom"> 
	            <div class="footer__copyright"> 
	              	<?php echo apply_filters('the_content',get_field('copyright','option')); ?>
	            </div>
	            <div class="footer__menu"> 
	              	<?php 
					    wp_nav_menu( 
					        array( 
					            'theme_location' => 'legal', 
					            'container' => 'ul'
					        )
					    ); 
					?>
	            </div>
	        </div>
    	</div>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
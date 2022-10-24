<div class="gwc brand">
	<div class="container container--lg">
  		<div class="brand__wrap"> 
    		<div class="brand__logo"><a href="<?php echo get_home_url(); ?>" title="Logo"><?php echo get_image(array('imgid'=>get_theme_mod('custom_logo'))); ?></a></div>
    		<?php if( get_field('normal_text', 'option') && get_field('italic_text', 'option') ):?>
        		<div class="brand__text">
          			<h2><?php echo esc_html(get_field('normal_text', 'option'));?> <span><?php echo esc_html(get_field('italic_text', 'option'));?> </span></h2>
        		</div>
    		<?php endif;?>
  		</div>
	</div>
</div>
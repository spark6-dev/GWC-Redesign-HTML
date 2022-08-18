<div class="gwc reach reach--capital"> 
    <div class="container">
        <?php if( get_field('tcti-label') ):?>
            <span class="l-caption"><?php echo esc_html(get_field('tcti-label'));?></span>
        <?php endif;?>
        <div class="reach__wrap">
            <?php if( get_field('tcti-heading') ):?>
                <h3 class="hide"><?php echo esc_html(get_field('tcti-heading'));?></h3>
            <?php endif; ?>
            <div class="reach__content"> 
                <?php if( get_field('tcti-heading') ):?>
                    <h3><?php echo esc_html(get_field('tcti-heading'));?></h3>
                <?php endif;
                if( get_field('tcti-content') ):
                    echo apply_filters('the_content',get_field('tcti-content'));
                endif;?>
            </div>
            <?php if( get_field('tcti-image') ):?>
                <div class="reach__thumb"><?php echo get_image(array('url'=>get_field('tcti-image'))); ?></div>
            <?php endif;?>
            <?php if( get_field('tcti-image-mobile') ):?>
                <div class="reach__thumb_mobile"><?php echo get_image(array('url'=>get_field('tcti-image-mobile'))); ?></div>
            <?php endif;?>
        </div>
    </div>
</div>
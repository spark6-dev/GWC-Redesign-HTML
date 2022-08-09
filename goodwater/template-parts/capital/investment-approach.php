<div class="gwc reach reach--capital"> 
    <div class="container">
        <?php if( get_field('ilabel') ):?>
            <span class="l-caption"><?php echo esc_html(get_field('ilabel'));?></span>
        <?php endif;?>
        <div class="reach__wrap">
            <div class="reach__content"> 
                <?php if( get_field('invest_heading') ):?>
                    <h3><?php echo esc_html(get_field('invest_heading'));?></h3>
                <?php endif;
                if( get_field('invest_content') ):
                    echo apply_filters('the_content',get_field('invest_content')); 
                endif;?>
            </div>
            <?php if( get_field('invest_desk_image') ):?>
                <div class="reach__thumb"><?php echo get_image(array('url'=>get_field('invest_desk_image'))); ?></div>
            <?php endif;?>
        </div>
    </div>
</div>
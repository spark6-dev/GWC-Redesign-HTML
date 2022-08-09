<div class="gwc manifesto manifesto--capital">
    <div class="container container--full">
        <?php if( get_field('rlabel') ):?>
            <div class="span l-caption"><?php echo esc_html(get_field('rlabel'));?></div>
        <?php endif;?>
        <div class="manifesto__wrap">
            <div class="manifesto__content"> 
                <?php if( get_field('reach_heading') ):?>
                    <h3><?php echo esc_html(get_field('reach_heading'));?></h3>
                <?php endif;
                if( get_field('reach_content') ):
                    echo apply_filters('the_content',get_field('reach_content'));
                endif;?>
            </div>
            <div class="manifesto__thumb">
                <?php if( get_field('reach_desktop_image') ):
                    echo get_image(array('url'=>get_field('reach_desktop_image'),'class'=>'is--desktop')); 
                endif;
                if( get_field('reach_mobile_image') ):
                    echo get_image(array('url'=>get_field('reach_mobile_image'),'class'=>'is--mobile')); 
                endif;?>   
            </div>
        </div>
    </div>
</div>
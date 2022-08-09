<div class="gwc manifesto manifesto--about">
    <div class="container container--full">
        <?php if( get_field('mlabel') ):?>
            <h2 class="l-caption"><?php echo esc_html(get_field('mlabel'));?></h2>
        <?php endif;?>
        <div class="manifesto__wrap">
            <div class="manifesto__content">
                <?php if( get_field('manifesto_right_mobile_image') ):
                    echo get_image(array('url'=>get_field('manifesto_right_mobile_image'),'class'=>'is--mobile')); ?>
                <?php endif;
                if( get_field('manifesto_heading') ):?>
                    <h3><?php echo esc_html(get_field('manifesto_heading'));?></h3>
                <?php endif;
                if( get_field('manifesto_left_content') ):
                    echo apply_filters('the_content',get_field('manifesto_left_content'));
                endif;?>
            </div>
            <?php if( get_field('manifesto_right_desktop_image') ):?>
                <div class="manifesto__thumb"> 
                    <?php echo get_image(array('url'=>get_field('manifesto_right_desktop_image'),'class'=>'is--desktop'));?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
<div class="gwc invest invest--about">
    <div class="container"> 
        <div class="invest__wrap"> 
            <?php if( get_field('manifesto_left_image') ):?>
                <div class="invest__col">
                    <figure><?php echo get_image(array('url'=>get_field('manifesto_left_image'))); ?></figure>
                </div>
            <?php endif;
            if( get_field('manifesto_right_content') ):?>  
                <div class="invest__col">
                    <div class="invest__content">
                        <?php echo apply_filters('the_content',get_field('manifesto_right_content'));?>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
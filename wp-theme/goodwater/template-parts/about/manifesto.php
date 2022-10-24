<?php get_template_part('template-parts/inner-page/two-col-text+image-2',null,array('class'=>'manifesto--about')); ?>
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
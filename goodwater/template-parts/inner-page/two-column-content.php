<?php if( $args['class'] ){
    $class_name = $args['class'];
}?>
<div class="gwc consumer <?php echo $class_name;?>"> 
    <div class="container"> 
        <div class="consumer__wrap"> 
            <?php if( get_field('left_content') ):?>
                <div class="consumer__col">
                    <?php echo apply_filters('the_content',get_field('left_content')); ?>
                </div>
            <?php endif;
            if( get_field('right_content') ):?>
                <div class="consumer__col">
                    <?php echo apply_filters('the_content',get_field('right_content')); ?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
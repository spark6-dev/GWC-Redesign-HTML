<div class="gwc reach"> 
    <div class="container">
        <?php if( get_field('reach_heading') ):
            echo apply_filters('the_content',get_field('reach_heading')); 
        endif;
        if( get_field('reach_image') ):?>
            <div class="reach__thumb is--mobile"><?php echo get_image(array('url'=>get_field('reach_image'))); ?></div>
        <?php endif;?>
        <div class="reach__wrap">
            <div class="reach__content"> 
                <?php if( get_field('reach_content') ):
                    echo apply_filters('the_content',get_field('reach_content')); 
                endif;
                if( get_field('reach_sub_content') ):
                    echo apply_filters('the_content',get_field('reach_sub_content')); 
                endif;?>
            </div>
            <?php if( get_field('reach_image') ):?>
                <div class="reach__thumb is--desktop"><?php echo get_image(array('url'=>get_field('reach_image'))); ?></div>
            <?php endif;?>
        </div>
        <div class="reach__boxes"> 
            <div class="reach__col mt-100">
                <div class="reach__card large reach__card--max-width">
                    <div class="gwc card">
                        <?php if( get_field('user_value') ):?>
                            <h2><?php echo esc_html(get_field('user_value'));?></h2>
                        <?php endif;
                        if( get_field('user_label') ):?>
                            <h4><?php echo esc_html(get_field('user_label'));?></h4>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="reach__col"> 
                <div class="reach__card small"> 
                    <div class="gwc card">
                        <?php if( get_field('company_value') ):?>
                            <h2><?php echo esc_html(get_field('company_value'));?></h2>
                        <?php endif;
                        if( get_field('company_label') ):?>
                            <h4><?php echo esc_html(get_field('company_label'));?></h4>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="reach__boxes"> 
            <div class="reach__col"> 
                <div class="reach__card small ml-auto"> 
                    <div class="gwc card">
                        <?php if( get_field('country_value') ):?>
                            <h2><?php echo esc_html(get_field('country_value'));?></h2>
                        <?php endif;
                        if( get_field('country_label') ):?>
                            <h4><?php echo esc_html(get_field('country_label'));?></h4>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="reach__col mt--100">
                <div class="reach__card large">
                    <div class="gwc card">
                        <?php if( get_field('transaction_value') ):?>
                            <h2><?php echo esc_html(get_field('transaction_value'));?></h2>
                        <?php endif;
                        if( get_field('transaction_label') ):?>
                            <h4><?php echo esc_html(get_field('transaction_label'));?></h4>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if( $args['class'] ){
    $class_name = $args['class'];
}?>
<div class="gwc banner banner--inner <?php echo $class_name;?>">
    <div class="banner__wrap">
        <div class="container">
            <span class="l-banner"><?php echo esc_html(get_field('banner_label'));?></span>
            <div class="banner__details">
                <?php if( get_field('banner_heading') ):?>
                    <?php echo apply_filters('the_content',get_field('banner_heading')); ?>
                <?php endif;?>
                <?php if( get_field('do_you_want_to_show_the_popup') ):
                    if( have_rows('popup_section') ):
                        while( have_rows('popup_section') ) : the_row();?>
                            <div class="banner__value">
                                <div class="banner__count">
                                    <?php if( get_sub_field('popup_button_text') ):?>
                                        <p><?php echo esc_html(get_sub_field('popup_button_text'));?></p>
                                    <?php endif;?>
                                    <div class="banner__seek">
                                        <div class="banner__count-inner">
                                            <button class="banner__count-close"><?php echo get_image(array('imgid'=> 462)); ?></button>
                                        </div>
                                        <?php
                                        if( get_sub_field('popup_content') ):?>
                                            <?php echo apply_filters('the_content',get_sub_field('popup_content')); ?>
                                        <?php endif;?>
                                        <?php if( get_sub_field('popup_footer_text') ):?>
                                            <div class="banner__footer">
                                                <p><?php echo esc_html(get_sub_field('popup_footer_text'));?></p>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    endif;?>
                <?php endif;?>
                <?php $logo = get_field('company_logo');
                if( $logo ):?>
                    <div class="banner__details_wrap">
                        <div class="l_col">
                            <div class="company_logo">
                                <?php echo get_image(array('url'=>$logo));?>
                            </div>
                            <div class="invested_in">
                                <div>Invested In</div>
                                <h5><?php echo get_field('invested_in');?></h5>
                            </div>
                        </div>
                        <div class="r_col">
                            <div class="banner_image">
                            <?php $banner_image = get_field('banner_image');
                                if($banner_image):
                                    echo get_image(array('url'=>$banner_image));
                                endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            </div>

        </div>
    </div>
</div>
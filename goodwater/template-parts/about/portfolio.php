<div class="gwc care">
    <div class="container container--full">
        <?php if( get_field('portfolio_heading') ):?>
            <h2><?php echo esc_html(get_field('portfolio_heading'));?></h2>
        <?php endif;?>
        <div class="care__content"> 
            <?php if( get_field('portfolio_content') ):?>
                <p><?php echo esc_html(get_field('portfolio_content'));?></p>
            <?php endif;?>
        </div>
        <?php if( have_rows('portfolio_slider') ): $count=0;?>
            <div class="care__portfolio">
                <div class="gwc about-hero">
                    <div class="hero__toggle-wrap">
                        <?php while( have_rows('portfolio_slider') ) : the_row(); $count++;
                            $bg_color = get_sub_field('bg_color');
                            if($count<10):
                                $prefix_count = "0".$count;
                            else:
                                $prefix_count = $count;
                            endif;?>
                            <div class="hero__toggle-item <?php if($count==1) echo "active";?>">
                                <div class="toggle__btn <?php if($count==1) echo "hid";?>"> 
                                    <div class="toggle__btn-wrap <?php echo esc_attr($bg_color); ?>">
                                        <?php if( get_sub_field('portfolio_slider_tag') ):?>
                                            <span class="item__btn-title"><?php echo esc_html(get_sub_field('portfolio_slider_tag'));?> </span>
                                        <?php endif;?>
                                        <span class="item__btn-no"><?php echo $prefix_count;?></span>
                                    </div>
                                </div>
                                <div class="toggle__pane"> 
                                    <div class="toggle__wrap <?php echo esc_attr($bg_color); ?>"> 
                                        <?php if( get_sub_field('portfolio_slider_image') ):?>
                                            <div class="toggle__thumb">
                                                <?php echo get_image(array('url'=>get_sub_field('portfolio_slider_image')));?>
                                            </div>
                                        <?php endif;?>
                                        <div class="toggle__content"> 
                                            <div class="toggle__head">
                                                <?php if( get_sub_field('portfolio_slider_value') ):?>
                                                    <h2><?php echo esc_html(get_sub_field('portfolio_slider_value'));?></h2>
                                                <?php endif;
                                                if( get_sub_field('portfolio_slider_heading') ):?>
                                                    <h3><?php echo esc_html(get_sub_field('portfolio_slider_heading'));?></h3>
                                                <?php endif;
                                                if( get_sub_field('portfolio_slider_tag') ):?>
                                                    <div class="toggle__head--heading">
                                                        <h4><?php echo esc_html(get_sub_field('portfolio_slider_tag'));?></h4><span><?php echo $prefix_count;?></span>
                                                    </div>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;?>
                    </div>
                </div>
            </div>
        <?php endif;?>
    </div>
</div>
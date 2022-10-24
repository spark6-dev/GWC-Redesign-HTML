<div class="gwc impact">
    <div class="container container--full">
        <div class="impact__head"> 
            <?php if( get_field('impact_heading') ):?>
                <?php echo apply_filters('the_content',get_field('impact_heading')); ?>
            <?php endif;?>
            <?php $link = get_field('impact_mobile_link');
            if($link):?>
                <a class="l-btn l-btn--dark is--mobile" href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>" title="<?php echo $link['title'];?>"><?php echo $link['title'];?><i> <svg width="11" height="11" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.21047 1.17139H9.41407M9.41407 1.17139L9.17486 9.3715M9.41407 1.17139L0.500392 9.82837" stroke="white" stroke-width="1.25"></path>
                  </svg></i></a>
            <?php endif;?>
        </div>
        <div class="impact__title">
            <?php if( get_field('impact_content') ):?>
                <?php echo apply_filters('the_content',get_field('impact_content')); ?>
            <?php endif;
            $link = get_field('impact_link');
            if($link):?>
                <a class="l-btn l-btn--light-blue" href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>" title="<?php echo $link['title'];?>"><?php echo $link['title'];?>
                    <i><svg width="11" height="11" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.21047 1.17139H9.41407M9.41407 1.17139L9.17486 9.3715M9.41407 1.17139L0.500392 9.82837" stroke="white" stroke-width="1.25"></path>
                    </svg></i>
                </a>
            <?php endif;?>
        </div>
        <?php if( have_rows('impact_items') ):?>
            <div class="impact__cards">
                <?php while( have_rows('impact_items') ) : the_row();?>
                    <div class="impact__card">
                        <div class="gwc card">
                            <?php if( get_sub_field('impact_item_tag_name') ):?>
                                <h3><?php echo esc_html(get_sub_field('impact_item_tag_name'));?></h3>
                            <?php endif;
                            if( get_sub_field('impact_item_count') ):?>
                                <h2><?php echo esc_html(get_sub_field('impact_item_count'));?></h2>
                            <?php endif;
                            if( get_sub_field('impact_item_title') ):?>
                                <h4><?php echo esc_html(get_sub_field('impact_item_title'));?></h4>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
        </div>
    </div>
</div>
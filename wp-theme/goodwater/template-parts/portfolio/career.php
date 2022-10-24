<div class="gwc career">
    <div class="container container--full">
        <div class="career__wrap"> 
            <div class="career__content">
                <?php if( get_field('career_heading') ):?>
                    <h2><?php echo esc_html(get_field('career_heading'));?></h2>
                <?php endif;
                if( get_field('career_content') ):?>
                    <p><?php echo esc_html(get_field('career_content'));?></p>
                <?php endif;
                $link = get_field('career_link');
                if($link):?>
                    <a class="l-btn" href="<?php echo $link['url'];?>" title="<?php echo $link['title'];?>" target="<?php echo $link['target'];?>"><?php echo $link['title'];?><i><svg width="11" height="11" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.21047 1.17139H9.41407M9.41407 1.17139L9.17486 9.3715M9.41407 1.17139L0.500392 9.82837" stroke="white" stroke-width="1.25"></path></svg></i></a>
                <?php endif;?>
            </div>
            <?php if( get_field('career_image') ):?>
                <div class="career__thumb"><?php echo get_image(array('url'=>get_field('career_image'))); ?></div>
            <?php endif;?>
        </div>
    </div>
</div>
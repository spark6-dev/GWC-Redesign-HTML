<div class="gwc invest invest--capital">
    <div class="container">
        <?php if( get_field('plabel') ):?>
            <span class="l-caption"><?php echo esc_html(get_field('plabel'));?></span>
        <?php endif;?>
        <div class="invest__wrap"> 
            <?php if( get_field('portfolio_heading') ):?>
                <div class="invest__col">
                    <h3><?php echo esc_html(get_field('portfolio_heading'));?></h3>
                </div>
            <?php endif;?>
            <div class="invest__col">
                <?php if( get_field('portfolio_content') ):?>
                    <p><?php echo esc_html(get_field('portfolio_content'));?></p>
                <?php endif;?>
                <?php $link = get_field('portfolio_link');
                if($link):?>
                    <a class="l-btn l-btn--dark" href="<?php echo $link['url'];?>" title="<?php echo $link['title'];?>"><?php echo $link['title'];?>
                        <i><svg width="11" height="11" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.21047 1.17139H9.41407M9.41407 1.17139L9.17486 9.3715M9.41407 1.17139L0.500392 9.82837" stroke="white" stroke-width="1.25"></path>
                        </svg></i>
                    </a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
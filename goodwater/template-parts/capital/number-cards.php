<div class="gwc grid"> 
    <div class="container">
        <?php if( get_field('nlabel') ):?>
            <span class="l-caption"><?php echo esc_html(get_field('nlabel'));?></span>
        <?php endif;?>
        <div class="grid__boxes"> 
            <div class="grid__col mt-100">
                <div class="grid__card large grid__card--max-width">
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
            <div class="grid__col"> 
                <div class="grid__card">
                    <div class="gwc card">
                        <?php if( get_field('company_value') ):?>
                            <h2><?php echo esc_html(get_field('company_value'));?></h2>
                        <?php endif;
                        if( get_field('company_label') ):?>
                            <h4><?php echo esc_html(get_field('company_label'));?></h4>
                        <?php endif;?>
                    </div>
                </div>
                <div class="grid__card">
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
            <div class="grid__col mt-100">
                <div class="grid__card">
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
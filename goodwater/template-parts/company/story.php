<div class="gwc story">
    <div class="container container--full">
        <?php if( get_field('story_label') ):?>
            <span class="l-caption"><?php echo esc_html(get_field('story_label'));?></span>
        <?php endif;?>
        <div class="story__wrap">
            <?=get_field('story_body')?>
        </div>
    </div>
</div>
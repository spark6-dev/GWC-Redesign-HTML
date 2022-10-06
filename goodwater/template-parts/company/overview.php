<div class="gwc overview">
    <div class="container">
        <ul class="stats">
            <?php while( have_rows('stats') ) : the_row(); ?>
                <li>
                    <h5><?=get_sub_field('stat_heading')?></h5>
                    <div><?=get_sub_field('stat_value')?></div>
                </li>
            <?php endwhile; ?>
        </ul>
        <div class="company_hero">
            <?=get_image(array('url'=>get_field('company_hero'))); ?>
        </div>
    </div>
</div>
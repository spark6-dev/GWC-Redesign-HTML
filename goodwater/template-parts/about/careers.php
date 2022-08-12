<section class="section section--career">
    <div class="gwc reach reach--about"> 
        <div class="container">
            <?php if( get_field('clabel') ):?>
                <h2 class="l-caption"><?php echo esc_html(get_field('clabel'));?></h2>
            <?php endif;?>
            <?php if( get_field('career_mobile_image') ):?>
                <div class="reach__thumb is--mobile"><?php echo get_image(array('url'=>get_field('career_mobile_image'))); ?></div>
            <?php endif;?>
            <div class="reach__wrap">
                <?php if( get_field('career_content') ):?>
                    <div class="reach__content"> 
                        <?php echo apply_filters('the_content',get_field('career_content'));?>
                    </div>
                <?php endif;
                if( get_field('career_desktop_image') ):?>
                    <div class="reach__thumb is--desktop"><?php echo get_image(array('url'=>get_field('career_desktop_image'))); ?></div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php  
    $args = array(
        'post_type'         => 'careers',
        'post_status'       => 'publish',
        'posts_per_page'    => -1,
    );
    $careers  = new WP_Query($args);
    if ($careers -> have_posts()) :?>
        <div class="gwc panel">
            <div class="container">
                <div class="panel__boxes"> 
                    <?php while ($careers -> have_posts()) : $careers -> the_post();
                        $cats = get_the_terms( get_the_ID(), 'career_category' );?>
                        <div class="panel__box">
                            <div class="gwc panel panel--box">
                                <?php if(!empty($cats)):
                                    foreach($cats as $cat):
                                        $tag_bg_color = get_field('tag_bg_color', 'career_category_' . $cat->term_id);?>
                                        <span class="l-tag <?php echo $tag_bg_color;?>"><?php echo esc_attr($cat->name);?></span>
                                    <?php endforeach;
                                endif;?>
                                <div class="panel__head">
                                    <h3><?php echo esc_html(get_the_title());?></h3>
                                    <a class="l-btn l-btn--dark" href="https://jobs.lever.co/goodwatercap" title="panel">Apply
                                        <i><svg width="11" height="11" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.21047 1.17139H9.41407M9.41407 1.17139L9.17486 9.3715M9.41407 1.17139L0.500392 9.82837" stroke="white" stroke-width="1.25"></path></svg></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata();?>
                </div>
            </div>
        </div>
    <?php endif;?>
    <!-- See additional Opportunities Section -->
    <?php get_template_part('template-parts/inner-page/bottom-text'); ?>
</section>
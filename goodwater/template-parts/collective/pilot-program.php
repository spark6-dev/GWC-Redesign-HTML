<div class="gwc consumer pilot-program">
    <div class="container container--full">
        <?php if( get_field('pilot-label') ):?>
            <div class="span l-caption"><?php echo esc_html(get_field('pilot-label'));?></div>
        <?php endif;?>
        <div class="consumer__wrap">
            <div class="consumer__col">
                <?php if( get_field('pilot-heading') ):?>
                    <h3><?php echo esc_html(get_field('pilot-heading'));?></h3>
                <?php endif; ?>
            </div>
            <div class="consumer__col">
                <?php if( get_field('pilot-heading-desc') ):?>
                    <p><?php echo esc_html(get_field('pilot-heading-desc'));?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if( have_rows('tabs') ):?>
    <div class="container container--full is--desktop">
        <div class="tab-header" data-tabs>
        <?php while (have_rows('tabs')):
            the_row(); ?>
            <div><?php echo the_sub_field('tab_name') ?></div>
        <?php endwhile; ?>
        </div>
        <div class="tab-content" data-panes>
        <?php reset_rows('tabs');
        while (have_rows('tabs')):
            the_row();
            $num_slides = count(get_sub_field('tab_slider'));?>
            <div class="pilot-program_slides">
            <?php if (have_rows('tab_slider')):
                while (have_rows('tab_slider')):
                    the_row(); ?>
                    <div class="consumer__wrap">
                        <div class="consumer__col pilot-program_content">
                            <div class="counter"><?php echo str_pad(strval(get_row_index()), 2, '0', STR_PAD_LEFT) ?>
                                / <?php echo str_pad(strval($num_slides),2, '0', STR_PAD_LEFT)?></div>
                            <h3><?php echo the_sub_field('tab_slider_title') ?></h3>
                            <p><?php echo the_sub_field('tab_slider_desc') ?></p>
                            <div class="healthcare__nav">
                                <div class="healthcare__slider-arrow">
                                    <button class="healthcare__arrow healthcare__arrow--prev" role="button" aria-label="Previous">
                                        <svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>
                                        </svg>
                                    </button>
                                    <button class="healthcare__arrow healthcare__arrow--next" role="button" aria-label="Next">
                                        <svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="consumer__col pilot-program_image">
                            <?php echo get_image(array('url'=>get_sub_field('tab_slider_desktop_image'))); ?>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
    <div class="container container--full is--mobile">
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            tabbis();
            let tabId = ''
            const initSlick = function () {
                tabId = $(".pilot-program_slides:not([hidden]").attr('id');
                $(`#${tabId}`).slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    centerMode: false,
                    autoplay: true,
                    fade: true,
                    adaptiveHeight: false,
                });
            };
            initSlick();
            $(".tab-header > div").on('mousedown', function() {
                $(`#${tabId}`).slick('unslick');
            });
            $(".tab-header > div").on('click', function () {
               initSlick();
            });
            $(".healthcare__arrow--prev").on("click", function () {
                $(`#${tabId}`).slick("slickPrev");
            });
            $(".healthcare__arrow--next").on("click", function () {
                $(`#${tabId}`).slick("slickNext");
            });
        });
    </script>
    <?php endif;?>
</div>

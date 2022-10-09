<div class="gwc photo-gallery pilot-program">
    <div class="container container--full">
        <?php if( get_field('photo_gallery_label') ):?>
            <div class="span l-caption"><?php echo esc_html(get_field('photo_gallery_label'));?></div>
        <?php endif;?>
        <div class="photo-slider">
        <?php
            $num_slides = count(get_field('photo_slider'));
            if (have_rows('photo_slider')):
            while (have_rows('photo_slider')):
                the_row(); ?>
                <div>
                    <div class="pilot-program_image">
                        <?php echo get_image(array('url'=>get_sub_field('photo_slider_image'))); ?>
                    </div>
                    <div class="pilot-program-slider-controls">
                        <div class="counter"><?php echo str_pad(strval(get_row_index()), 2, '0', STR_PAD_LEFT) ?>
                            / <?php echo str_pad(strval($num_slides),2, '0', STR_PAD_LEFT)?></div>
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
                </div>
            <?php endwhile;
        endif; ?>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('.photo-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
                centerMode: false,
                autoplay: false,
                fade: true,
                adaptiveHeight: false,
            });
            $(".healthcare__arrow--prev").on("click", function () {
                $('.photo-slider').slick("slickPrev");
            });
            $(".healthcare__arrow--next").on("click", function () {
                $('.photo-slider').slick("slickNext");
            });
        });
    </script>
</div>

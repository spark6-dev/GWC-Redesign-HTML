<div class="gwc investment">
    <div class="container">
<!--        --><?php //if( have_rows('company_card') ):?>
<!--            <div class="healthcare__slider"> -->
<!--                <div class="gwc healthcare healthcare--slider">-->
<!--                    <div class="healthcare__slider"> -->
<!--                        <div class="healthcare__cards">-->
<!--                            --><?php //while( have_rows('company_card') ) : the_row();
//                                $featured_company = get_sub_field('select_featured_company');
//                                if( $featured_company ):
//                                    $bg_color = get_sub_field('card_bg');
//                                    $label    = get_sub_field('card_company_label');
//                                    $year     = get_sub_field('card_company_year');
//                                    $loc      = get_field('locationcountrystate', $featured_company->ID);
//                                    $title    = $featured_company->post_title;
//                                    $content  = $featured_company->post_content;
//                                    $tags     = get_the_terms( $featured_company->ID, 'company_category' );
//                                    if ( ! empty( $tags ) ) {
//                                        $tag = $tags[0]->name;
//                                    }?>
<!--                                    <div class="healthcare__tab">-->
<!--                                        <div class="healthcare__card --><?php //echo esc_attr($bg_color); ?><!--">-->
<!--                                            --><?php //if($tag):?>
<!--                                                <span class="l-tag">--><?php //echo esc_html($tag);?><!--</span>-->
<!--                                            --><?php //endif;?>
<!--                                            --><?php //if($loc):?>
<!--                                                <span class="l-tag">--><?php //echo esc_html($loc);?><!--</span>-->
<!--                                            --><?php //endif;?>
<!--                                            <div class="healthcare__head"> -->
<!--                                                <h2>--><?php //echo esc_html($title);?><!--</h2>-->
<!--                                            </div>-->
<!--                                            <div class="healthcare__content"> -->
<!--                                                --><?php //echo apply_filters('the_content', $content); ?>
<!--                                                --><?php //if($label):?>
<!--                                                    <div class="healthcare__button"> -->
<!--                                                        <p>--><?php //echo esc_html($label);?><!--</p>-->
<!--                                                    </div>-->
<!--                                                --><?php //endif;?>
<!--                                            </div>-->
<!--                                            <div class="healthcare__nav"> -->
<!--                                                <div class="healthcare__slider-arrow">-->
<!--                                                    <button class="healthcare__arrow healthcare__arrow--prev" role="button" aria-lebel="Previous">-->
<!--                                                        <svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                                            <path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>-->
<!--                                                        </svg>-->
<!--                                                    </button>-->
<!--                                                    <button class="healthcare__arrow healthcare__arrow--next" role="button" aria-lebel="Next">-->
<!--                                                        <svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                                            <path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>-->
<!--                                                        </svg>-->
<!--                                                    </button>-->
<!--                                                </div>-->
<!--                                                --><?php //if($year):?>
<!--                                                    <div class="healthcare__year"> -->
<!--                                                        <h4>--><?php //echo esc_html($year);?><!--</h4>-->
<!--                                                    </div>-->
<!--                                                --><?php //endif;?>
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                --><?php //endif;
//                            endwhile;?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //endif;?>
        <div class="investment__slider">
            <div class="investment__head"> 
                <h2> 
                    <span data-aos="fade-up" data-aos-duration="4000"><?php echo esc_html(get_field('investment_normal_text'));?></span>
                    <span data-aos="fade-up" data-aos-duration="4000"><span><?php echo esc_html(get_field('investment_inactive_normal_text_before_italic'));?> </span><em><?php echo esc_html(get_field('investment_inactive_italic_text'));?></em></span>
                    <span data-aos="fade-up" data-aos-duration="4000"><?php echo esc_html(get_field('investment_inactive_normal_text_after_italic'));?> 
                        <div class="investment__value" data-type="<?php echo esc_html(get_sub_field('data_value'));?>">
                            <div class="investment__count"> 
                                <p class="investment__count-outer"><?php esc_html_e( '1', 'Goodwater' ); ?></p>
                                <div class="investment__seek"> 
                                    <div class="investment__count-inner"> 
                                        <button class="investment__count-close"><?php echo get_image(array('imgid'=> 462)); ?></button>
                                    </div>
                                    <?php if( get_field('investment_popup_heading') ):?>
                                        <?php echo apply_filters('the_content', get_field('investment_popup_heading')); ?>
                                    <?php endif;
                                    if( get_field('investment_popup_content') ):?>
                                        <p><?php echo esc_html(get_field('investment_popup_content'));?></p>
                                    <?php endif;?>
                                    <?php if( get_field('investment_popup_content_after_line') ):?>
                                        <div class="investment__footer"> 
                                            <p><?php echo esc_html(get_field('investment_popup_content_after_line'));?></p>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </span>
                </h2>
            </div>
            <div class="investment__content">
                <div class="investment__loop is--desktop">
                    <svg width="104" height="53" viewbox="0 0 104 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Closed Loop Icon">
                            <g id="Group"></g>
                            <g id="Group_2">
                                <g id="Group_3"></g>
                                <path id="Vector" d="M18.7554 50.3182C21.9424 51.2641 25.3773 51.7033 28.8684 51.6583C30.5351 51.6245 32.1681 51.4443 33.4857 51.2529C39.0377 50.7574 45.851 47.8406 52.0224 38.6848" stroke="#181C4B" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path id="Vector_2" d="M18.7554 50.3183C21.5258 50.6111 24.4651 50.5773 27.4607 50.1268C28.8121 49.9241 30.141 49.5975 31.3122 49.2597C36.6164 47.7281 42.7315 44.0455 48.1146 34.5857C48.2498 34.3604 48.5651 33.7748 48.8241 33.2793" stroke="#181C4B" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path id="Vector_3" d="M18.7554 50.3182C18.7554 50.3182 18.8342 50.307 18.868 50.2957H18.8905C26.5259 49.147 35.1074 46.5681 42.4387 33.3243L43.3284 31.6351C44.1505 30.0247 44.9388 28.2566 45.7159 26.3308" stroke="#181C4B" stroke-linecap="round" stroke-linejoin="round"></path>
                                <g id="Group_4"></g>
                                <path id="Vector_4" d="M52.0112 13.9541C58.1714 4.8096 64.9847 1.90408 70.5255 1.40856C71.8318 1.21711 73.4648 1.02566 75.1315 1.00314C78.6339 0.958094 82.0575 1.3973 85.2558 2.34328" stroke="#181C4B" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path id="Vector_5" d="M55.187 19.3708C55.446 18.8753 55.7614 18.301 55.8965 18.0757C61.2796 8.6159 67.3947 4.93332 72.6877 3.40173C73.8702 3.06388 75.1991 2.73729 76.5505 2.53458C79.5348 2.08411 82.4741 2.03906 85.2558 2.34313" stroke="#181C4B" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path id="Vector_6" d="M58.2837 26.3307H58.295V26.3082C59.072 24.3937 59.8603 22.6256 60.6712 21.0264L61.5608 19.3372C68.8922 6.08215 77.4962 3.50322 85.1316 2.36579C85.1766 2.35452 85.2104 2.35452 85.2555 2.34326" stroke="#181C4B" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                            <g id="Group_5">
                                <path id="Vector_7" d="M28.1369 47.6942C13.1138 42.8742 13.3729 27.0515 13.3954 26.3871C13.3729 25.6776 13.1364 9.88867 28.0469 5.03487L28.2496 4.9673L29.3082 4.62945C30.0514 4.40422 30.8735 4.17898 31.7632 3.97627C34.5674 3.32309 37.9459 2.92893 40.9753 3.62716" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                                <path id="Vector_8" d="M23.5421 49.0007C18.0239 47.379 14.071 44.4397 11.3457 40.2954C7.96716 35.16 7.2802 29.2138 7.20137 26.3872C7.14506 24.4164 7.59553 20.4748 9.17217 16.5557C9.82535 14.9453 10.6812 13.3574 11.7511 11.8708C14.499 8.07562 18.5982 5.14758 23.8236 3.60473C23.9137 3.5822 24.0601 3.53716 24.2403 3.49211H24.2516C24.6007 3.39076 25.0624 3.25562 25.2314 3.22183C25.9071 3.0529 26.6053 2.9065 27.3373 2.78262H27.3486C31.6731 2.00557 36.7521 1.94926 40.9752 3.62725" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                                <path id="Vector_9" d="M18.9358 50.3183C18.9358 50.3183 18.902 50.307 18.8908 50.2958H18.8683C13.3613 48.8092 8.93544 46.1177 5.63576 41.2864C2.68519 36.9394 1.16486 31.6239 1.0072 26.3872C0.905842 22.806 1.88561 18.9882 3.2708 15.7223C4.0366 13.9317 5.01637 12.2425 6.19884 10.6996C9.38591 6.55531 13.9582 3.81871 18.9246 2.37722H18.9358C18.9358 2.37722 19.0485 2.33217 19.116 2.32091C19.7805 2.12946 20.4562 1.96053 21.1431 1.81413C23.2716 1.36366 25.5352 1.08212 27.8326 1.01455C28.3844 1.00329 28.9362 1.00329 29.4881 1.01455C29.6682 1.01455 29.8484 1.02581 30.0286 1.03707C31.7404 1.08212 33.4634 1.27357 35.1189 1.62268C35.1752 1.62268 35.2315 1.64521 35.2766 1.65647C37.2812 2.08441 39.2069 2.72633 40.975 3.62727" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                            </g>
                            <g id="Group_6">
                                <path id="Vector_10" d="M75.8636 4.96729C90.8867 9.7873 90.6277 25.5987 90.6051 26.2744C90.6277 26.9839 90.8642 42.7728 75.9537 47.6154L75.7735 47.6717H75.7622" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                                <path id="Vector_11" d="M79.6475 49.1694H79.6587C85.1995 47.6378 89.5803 44.5747 92.4295 40.5204C93.4543 39.0564 94.2764 37.491 94.8958 35.9031C96.4049 32.0629 96.8554 28.2339 96.799 26.2744C96.7202 23.4477 96.0332 17.5015 92.6547 12.3549C89.9294 8.22188 85.9765 5.27131 80.4583 3.66089" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                                <path id="Vector_12" d="M82.8569 50.8474C83.5777 50.6898 84.2984 50.5208 85.0079 50.3069C85.098 50.2843 85.1881 50.2618 85.2669 50.228C85.2782 50.2393 85.2782 50.228 85.2782 50.228C90.1658 48.7753 94.6592 46.0499 97.8012 41.9619C98.9837 40.4191 99.9635 38.7298 100.729 36.9392C102.114 33.6733 103.094 29.8556 102.993 26.2744C102.835 21.0377 101.315 15.7222 98.3643 11.3752C95.0646 6.54388 90.65 3.85233 85.1431 2.36579C85.1431 2.36579 85.098 2.35452 85.0755 2.34326" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                            </g>
                            <g id="Group_7">
                                <path id="Vector_13" d="M28.2495 4.96729C33.1146 7.21963 38.0021 11.3301 42.4393 19.3372L43.3289 21.0265C44.151 22.6369 44.9394 24.3937 45.7164 26.3307C45.784 26.4771 45.8403 26.6235 45.8966 26.7699C46.8426 29.1574 47.8224 31.3197 48.8246 33.2792C48.9485 33.527 49.0724 33.7522 49.1963 33.9887C49.8044 35.0811 50.4013 36.1172 50.9644 37.0631C51.3135 37.6262 51.6626 38.1668 52.023 38.6848C55.5929 44.0004 59.3994 47.1874 63.0257 49.0343C68.9155 52.03 76.4721 52.1989 82.8575 50.8475L85.0085 50.3069C85.0986 50.2844 85.1887 50.2619 85.2675 50.2281H85.3013" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                                <path id="Vector_14" d="M85.3013 50.2281H85.2675C84.8058 50.2056 83.2179 50.4083 82.8238 50.3745C80.9881 50.2281 79.1637 50.0029 77.3956 49.6988H77.3844C75.7739 49.4173 74.2086 49.0569 72.6882 48.5727C69.6588 47.6605 66.8434 46.3203 64.3996 44.3608C61.9783 42.3562 59.7147 39.8336 57.6651 36.7479C57.4511 36.5114 56.8205 35.3514 56.6065 35.0924C56.1898 34.4054 55.7731 33.6734 55.379 32.9189C55.2101 32.6261 55.0524 32.322 54.8947 32.018C54.6808 31.6238 54.478 31.2296 54.2753 30.8355C53.7573 29.7994 53.2167 28.7408 52.6762 27.6709C52.4509 27.2205 52.2257 26.7813 52.0005 26.3308C51.032 24.3938 50.0747 22.4793 49.0949 20.5761C48.9485 20.2945 48.8021 20.013 48.6445 19.7314C47.7661 18.0647 46.8313 16.5782 45.8966 15.2268C45.6714 14.979 45.007 13.9091 44.7817 13.6952C40.8626 8.58236 36.7409 5.9809 33.0245 4.46057C32.6191 4.29165 32.2024 4.12272 31.7632 3.97632" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                                <path id="Vector_15" d="M85.3013 50.2281H85.2675C83.2855 50.0592 81.416 49.6988 79.6592 49.1695H79.6479C78.2853 48.7641 77.0014 48.2685 75.7739 47.6717H75.7626C68.5664 44.2256 63.5324 37.8402 60.3228 30.9143L59.4782 29.1124C59.0841 28.2227 58.6786 27.2992 58.2957 26.3307V26.3082C58.2282 26.1618 58.1606 26.0042 58.1043 25.8578C57.1696 23.4815 56.1898 21.3305 55.1875 19.371C54.1514 17.3552 53.0928 15.5533 52.0117 13.9541C46.4935 5.77813 40.4572 2.5798 35.2768 1.65634C35.2318 1.65634 35.1754 1.63382 35.1191 1.62256" stroke="#181C4B" stroke-miterlimit="10" stroke-linecap="round"></path>
                            </g>
                            <g id="Group_8"></g>
                            <path id="Vector_16" d="M7.30282 29.1801C5.73745 29.1801 4.45361 27.9075 4.45361 26.3309C4.45361 24.7543 5.72619 23.4817 7.30282 23.4817C8.87946 23.4817 10.152 24.7543 10.152 26.3309C10.152 27.9075 8.87946 29.1801 7.30282 29.1801Z" fill="white" stroke="#181C4B" stroke-miterlimit="10" data-type="genesis"></path>
                            <path id="Vector_17" d="M7.30275 24.1685C8.49649 24.1685 9.47625 25.137 9.47625 26.3421C9.47625 27.5471 8.50775 28.5156 7.30275 28.5156C6.09774 28.5156 5.12924 27.5471 5.12924 26.3421C5.12924 25.137 6.09774 24.1685 7.30275 24.1685ZM7.30275 22.8171C5.36573 22.8171 3.77783 24.3938 3.77783 26.3421C3.77783 28.2903 5.35447 29.867 7.30275 29.867C9.25102 29.867 10.8277 28.2903 10.8277 26.3421C10.8277 24.3938 9.25102 22.8171 7.30275 22.8171V22.8171Z"></path>
                            <path id="Vector_18" d="M52.0226 28.5044C53.223 28.5044 54.1961 27.5313 54.1961 26.3309C54.1961 25.1305 53.223 24.1573 52.0226 24.1573C50.8222 24.1573 49.8491 25.1305 49.8491 26.3309C49.8491 27.5313 50.8222 28.5044 52.0226 28.5044Z" fill="white" stroke="#181C4B" stroke-miterlimit="10" data-type="capital"></path>
                            <path id="Vector_19" d="M96.7321 28.5044C97.9325 28.5044 98.9056 27.5313 98.9056 26.3309C98.9056 25.1305 97.9325 24.1573 96.7321 24.1573C95.5317 24.1573 94.5586 25.1305 94.5586 26.3309C94.5586 27.5313 95.5317 28.5044 96.7321 28.5044Z" fill="white" stroke="#181C4B" stroke-miterlimit="10" data-type="collective"></path>
                        </g>
                    </svg>
                </div>
                <p> 
                    <?php if( have_rows('investment_content_section') ):
                        while( have_rows('investment_content_section') ) : the_row();?>
                            <span data-aos="fade-up" data-aos-duration="4000" data-type="<?php echo get_sub_field('data_value');?>" data-aos-id="<?php echo get_sub_field('data_value');?>"> <span class="dots"> </span><span><?php echo get_sub_field('content');?></span></span>
                        <?php endwhile;
                    endif;?>
                </p>
            </div>
        </div>
    </div>
</div>
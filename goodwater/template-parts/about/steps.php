<div class="gwc goal">
    <div class="container">
        <div class="goal__wrapper is--desktop">
        	<div class="goal__container">
                <div class="gwc consumer consumer--about goal__consumer">
                    <div class="consumer__wrap">
                        <div class="consumer__col">
                            <h3>From day one, we’ve believed in the power of consumer technology to measurably improve billions of lives across the globe.</h3>
                        </div>
                        <div class="consumer__col">
                            <p>From housing to healthcare, food delivery to finances, education to entertainment and transportation, we&#8217;re investing in the world’s most promising entrepreneurs to solve the world’s most pressing problems.</p>
                        </div>
                    </div>
                </div>
                <h3 class="goal__wearegoodwater"> <span class="goal__subhead">We are G</span><span><img src="https://goodwatercadev.wpengine.com/wp-content/uploads/2022/07/img-infinity.svg" alt="img-infinity" id="" class="" srcset="" ></span><span class="goal__subhead">dwater.</span></h3>
                <h2 class="goal__regen"> The world’s first <em>regenerative investment platform.</em></h2>
                <div class="goal__meaning">
                    <p>What does that even mean?</p>
                    <p>Let us explain.</p>
                </div>
                <div class="goal__logo__container">
                    <div class="goal__logo">
                        <img data-selection="0" src="<?php echo get_template_directory_uri() . '/images/Goodwater-7-line-icon.png'; ?>" alt=""/>
                        <img data-selection="1" src="<?php echo get_template_directory_uri() . '/images/7-line-icon-left.png'; ?>" alt="" style="display:none"/>
                        <img data-selection="2" src="<?php echo get_template_directory_uri() . '/images/7-line-icon-middle.png'; ?>" alt="" style="display:none"/>
                        <img data-selection="3" src="<?php echo get_template_directory_uri() . '/images/7-line-icon-right.png'; ?>" alt="" style="display:none"/>
                        <div class="goal__point point-1">01</div>
                        <div class="goal__point point-2">02</div>
                        <div class="goal__point point-3">03</div>
                        <div class="goal__selection__area point-1" data-selection="1"></div>
                        <div class="goal__selection__area point-2" data-selection="2"></div>
                        <div class="goal__selection__area point-3" data-selection="3"></div>
                    </div>
                    <div class="goal__selection">
                        <div data-selection="1">
                            <div class="goal__point">01</div><div><h3>Genesis</h3></div>
                        </div>
                        <div data-selection="2">
                            <div class="goal__point">02</div><div><h3>Capital</h3></div>
                        </div>
                        <div data-selection="3">
                            <div class="goal__point">03</div><div><h3>Collective</h3></div>
                        </div>
                    </div>
                    <div class="goal__step__description" data-selection="0">
                    </div>
                    <div class="goal__step__description" data-selection="1" style="display:none">
                        <div><em>Genesis</em> is the initial step in our closed-loop process.</div>
                        <div>We democratize software, systems, and wisdom for entrepreneurs everywhere. By lowering the bar of entry, we allow more promising business ideas—from more places around the world—to explore the field, learn best practices, and find their initial footing.</div>
                    </div>
                    <div class="goal__step__description" data-selection="2" style="display:none">
                        <div>The next step is <em>Capital</em>, where we invest in the very best world-changing companies and entrepreneurs.</div>
                        <div>We accelerate teams that are ready to scale, and help them move from successful startups to market leaders.</div>
                    </div>
                    <div class="goal__step__description" data-selection="3" style="display:none">
                        <div>Then there’s <em>Collective</em>, the final step in our model.</div>
                        <div>This is where we close the loop, funneling Goodwater’s profits back into our Portfolio Companies, increasing the accessibility and affordability of their products for people in need. It’s how we ensure that our profits and companies improve the lives of communities around the world.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="goal__wrapper is--mobile">
        	<?php $animation_title = get_field('animation_title');
			if( $animation_title ): ?>
	            <div class="goal__head">
	              	<h2><span class="goal__subhead"><?php echo esc_html($animation_title['title_left_text']);?></span><span><?php echo get_image(array('imgid'=> 647)); ?></span><span class="goal__subhead"><?php echo esc_html($animation_title['title_right_text']);?> </span></h2>
	            </div>
	        <?php endif; ?>
            <div class="goal__content">
              	<?php $scroll_texts = get_field('scroll_texts');
        		if($scroll_texts['scroll_text_1']):
        			echo apply_filters('the_content',$scroll_texts['scroll_text_1']);
        		endif;
              	if($scroll_texts['scroll_text_3']):
        			echo apply_filters('the_content',$scroll_texts['scroll_text_3']);
        		endif;?>
            </div>
            <div class="goal__arrow"><?php echo get_image(array('imgid'=> 649)); ?></div>
            <div class="goal__slider">
              	<div class="goal__slide">
                	<div class="goal__slide-wrap"><img src="<?php echo get_template_directory_uri() . '/images/img-goalmobile.png'; ?>" alt="img-goalmobile"/><span class="goal__count">01</span></div>
              	</div>
              	<div class="goal__slide">
                	<div class="goal__slide-wrap"><img src="<?php echo get_template_directory_uri() . '/images/img-slidercenter.png'; ?>" alt="img-slidercenter"/><span class="goal__count">02</span></div>
              	</div>
              	<div class="goal__slide">
                	<div class="goal__slide-wrap"><img src="<?php echo get_template_directory_uri() . '/images/img-sliderright.png'; ?>" alt="img-sliderright"/><span class="goal__count">03</span></div>
              	</div>
            </div>
            <div class="goal__slider-values">
              	<div class="goal__slide-value">
              		<?php if($first_block['link']):?>
	                	<div class="goal__slide-head"> <span>01</span>
	                  		<h3><?php echo esc_html( $first_block['link']['title'] ); ?></h3><a class="goal__arrow" href="<?php echo esc_url( $first_block['link']['url'] ); ?>">
	                     	<svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 15.0004C0 7.08696 6.54343 0.671875 14.4568 0.671875C22.3702 0.671875 28.9137 7.08696 28.9137 15.0004C28.9137 22.9138 22.3702 29.3289 14.4568 29.3289C6.54343 29.3289 0 22.9138 0 15.0004Z" fill="#4A5C76"/>
								<path d="M10.7105 10.6719H18.9141M18.9141 10.6719L18.6749 18.872M18.9141 10.6719L10.0004 19.3289" stroke="white" stroke-width="1.25"/>
							</svg></a>
	                	</div>
	                <?php endif;?>
	                <?php $first_block = get_field('first_block');
                	if($first_block):?>
	                	<div class="goal__slide-content">
	                  		<?php if($first_block['hover_text']):
                    			echo apply_filters('the_content',$first_block['hover_text']);
                    		endif;
                    		if($first_block['hover_content']):
                    			echo apply_filters('the_content',$first_block['hover_content']);
                    		endif;?>
	                	</div>
	                <?php endif;?>
                	<div class="goal__nav">
                  		<div class="goal__slider-arrow">
                    		<button class="goal__arrow goal__arrow--prev" role="button" aria-lebel="Previous">
                      			<svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        			<path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>
                      			</svg>
                    		</button>
                    		<button class="goal__arrow goal__arrow--next" role="button" aria-lebel="Next">
                      			<svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        			<path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>
                      			</svg>
                    		</button>
                  		</div>
                	</div>
              	</div>
              	<div class="goal__slide-value">
              		<?php if($second_block['link']):?>
	                	<div class="goal__slide-head"> <span>02</span>
	                  		<h3><?php echo esc_html( $second_block['link']['title'] ); ?></h3><a class="goal__arrow" href="<?php echo esc_html( $second_block['link']['url'] ); ?>">
	                 		<svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 15.0004C0 7.08696 6.54343 0.671875 14.4568 0.671875C22.3702 0.671875 28.9137 7.08696 28.9137 15.0004C28.9137 22.9138 22.3702 29.3289 14.4568 29.3289C6.54343 29.3289 0 22.9138 0 15.0004Z" fill="#4A5C76"/>
								<path d="M10.7105 10.6719H18.9141M18.9141 10.6719L18.6749 18.872M18.9141 10.6719L10.0004 19.3289" stroke="white" stroke-width="1.25"/>
							</svg></a>
	                	</div>
	                <?php endif;
	                $second_block = get_field('second_block');
	                if($second_block):?>
	                	<div class="goal__slide-content">
	                  		<?php if($second_block['hover_text']):
                    			echo apply_filters('the_content',$second_block['hover_text']);
                    		endif;
                    		if($second_block['hover_content']):
                    			echo apply_filters('the_content',$second_block['hover_content']);
                    		endif;?>
	                	</div>
	                <?php endif;?>
                	<div class="goal__nav">
                  		<div class="goal__slider-arrow">
                    		<button class="goal__arrow goal__arrow--prev" role="button" aria-lebel="Previous">
	                      		<svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	                        		<path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>
	                      		</svg>
                    		</button>
                    		<button class="goal__arrow goal__arrow--next" role="button" aria-lebel="Next">
                      			<svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        			<path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>
                      			</svg>
                    		</button>
                  		</div>
                	</div>
              	</div>
              	<div class="goal__slide-value">
              		<?php if($third_block['link']):?>
	                	<div class="goal__slide-head"> <span>03</span>
	                 	 	<h3><?php echo esc_html( $third_block['link']['title'] ); ?></h3><a class="goal__arrow" href="<?php echo esc_html( $third_block['link']['url'] ); ?>">
	                 		<svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 15.0004C0 7.08696 6.54343 0.671875 14.4568 0.671875C22.3702 0.671875 28.9137 7.08696 28.9137 15.0004C28.9137 22.9138 22.3702 29.3289 14.4568 29.3289C6.54343 29.3289 0 22.9138 0 15.0004Z" fill="#4A5C76"/>
								<path d="M10.7105 10.6719H18.9141M18.9141 10.6719L18.6749 18.872M18.9141 10.6719L10.0004 19.3289" stroke="white" stroke-width="1.25"/>
							</svg></a>
	               	 	</div>
	               	<?php endif;
	               	$third_block = get_field('third_block');
	                if($third_block):?>
	                	<div class="goal__slide-content">
	                  		<?php if($third_block['hover_text']):
                    			echo apply_filters('the_content',$third_block['hover_text']);
                    		endif;
                    		if($third_block['hover_content']):
                    			echo apply_filters('the_content',$third_block['hover_content']);
                    		endif;?>
	                	</div>
	                <?php endif;?>
	                <div class="goal__nav">
	                  	<div class="goal__slider-arrow">
	                    	<button class="goal__arrow goal__arrow--prev" role="button" aria-lebel="Previous">
	                      		<svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	                        		<path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>
	                      		</svg>
	                    	</button>
	                    	<button class="goal__arrow goal__arrow--next" role="button" aria-lebel="Next">
	                      		<svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	                        		<path d="M7.41142 1.32353L13.2122 7.12435M13.2122 7.12435L7.24474 12.7536M13.2122 7.12435L0.787908 6.94284" stroke="white" stroke-width="1.25"></path>
	                      		</svg>
	                    	</button>
	                  	</div>
	                </div>
              	</div>
            </div>
        </div>
    </div>
</div>
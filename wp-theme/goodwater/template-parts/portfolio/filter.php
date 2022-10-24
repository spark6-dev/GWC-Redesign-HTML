<?php
    $locations = get_terms( array(
        'taxonomy' => 'location',
        'hide_empty' => false
    ) );
    $categories = get_terms( array(
        'taxonomy' => 'company_category',
        'hide_empty' => false
    ) );
    $growth_stages = get_terms( array(
        'taxonomy' => 'growth_stage',
        'hide_empty' => false,
        'orderby' => 'term_id',
        'order' => 'ASC'
    ) );
?>
<div class="gwc filter">
    <div class="container">
        <div class="filter__row">
            <div class="filter__nav is--desktop">
                <ul> 
                    <?php if(!empty($locations)):?>
                        <li><a class="primary" href="javascript:void(0)" title="Location">Location</a>
                            <ul class="filter__subnav"> 
                                <?php foreach($locations as $location):?>
                                    <li>
                                        <a href="#<?php //echo esc_attr($location->slug);?>" title="<?php echo esc_attr($location->name);?>" data-location="<?php echo esc_attr($location->term_id);?>"><?php echo esc_attr($location->name);?></a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                    <?php endif;
                    if(!empty($categories)):?>
                        <li><a class="primary" href="javascript:void(0)" title="Category">Category</a>
                            <ul class="filter__subnav"> 
                                <?php foreach($categories as $category):?>
                                    <li>
                                        <a href="#<?php //echo esc_attr($category->slug);?>" title="<?php echo esc_attr($category->name);?>" data-category="<?php echo esc_attr($category->term_id);?>"><?php echo esc_attr($category->name);?></a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                    <?php endif;
                    if(!empty($growth_stages)):?>
                        <li> <a class="primary" href="javascript:void(0)" title="Stage">Stage</a>
                            <ul class="filter__subnav"> 
                                <?php foreach($growth_stages as $growth_stage):?>
                                    <li>
                                        <a href="#<?php //echo esc_attr($growth_stage->slug);?>" title="<?php echo esc_attr($growth_stage->name);?>" data-growth-stage="<?php echo esc_attr($growth_stage->term_id);?>"><?php echo esc_attr($growth_stage->name);?></a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                    <?php endif;?>
                </ul>
            </div>
            <div class="filter__mob is--mobile"> <a class="l-btn l-btn--light-blue js-filter" href="javascript:void(0)" title="Filter Link"> Filter</a></div>
            <div class="filter__search"> 
                <div class="filter__searchbar">
                    <input type="text" placeholder="Search" id="searchPortfolio">
                    <button><?php echo get_image(array('imgid'=> 213)); ?></button>
                </div>
            </div>
        </div>
        <div class="filter__search-mobile is--mobile"> 
            <div class="filter__search-head"> 
                <h2>Filter By:</h2>
                <span class="js-filter"><?php echo get_image(array('imgid'=> 214)); ?></span>
            </div>
            <?php if(!empty($locations)):?>
                <div class="filter__tab">
                    <div class="filter__tabup">
                        <h3>Location</h3>
                        <?php echo get_image(array('imgid'=> 215)); ?>
                    </div>
                    <div class="filter__tab-collapse"> 
                        <ul class="filter__items">
                            <?php foreach($locations as $location):?>
                                <li>
                                    <label class="l-checkbox"><?php echo esc_attr($location->name);?>
                                        <input type="checkbox" value="<?php echo esc_attr($location->term_id);?>" data-taxnomony="location"><span class="l-checkmark"></span>
                                    </label>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            <?php endif;
            if(!empty($categories)):?>
                <div class="filter__tab">
                    <div class="filter__tabup">
                        <h3>Category</h3><?php echo get_image(array('imgid'=> 215)); ?>
                    </div>
                    <div class="filter__tab-collapse"> 
                        <ul class="filter__items">
                            <?php foreach($categories as $category):?>
                                <li>
                                    <label class="l-checkbox"><?php echo esc_attr($category->name);?>
                                        <input type="checkbox" value="<?php echo esc_attr($category->term_id);?>" data-taxnomony="company_category"><span class="l-checkmark"></span>
                                    </label>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            <?php endif;
            if(!empty($growth_stages)):?>
                <div class="filter__tab border-0">
                    <div class="filter__tabup">
                        <h3>Stage</h3>
                        <?php echo get_image(array('imgid'=> 215)); ?>
                    </div>
                    <div class="filter__tab-collapse"> 
                        <ul class="filter__items">
                            <?php foreach($growth_stages as $growth_stage):?>
                                <li>
                                   <label class="l-checkbox"><?php echo esc_attr($growth_stage->name);?>
                                        <input type="checkbox" value="<?php echo esc_attr($growth_stage->term_id);?>" data-taxnomony="growth_stage"><span class="l-checkmark"></span>
                                    </label> 
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            <?php endif;?>
            <div class="filter__buttons"> 
                <a class="l-btn l-btn--light-blue" id="mobileFilter" href="#" title="Reset All Filters">View Companies</a>
                <a class="link" id="mobileResest" href="#" title="Link">Reset All Filters</a>
            </div>
        </div>
        <div class="filter-boxes-wrapper">
            <div class="loader__wrap">
                <div class="loader"></div>
            </div>
            <div class="no-post-found" style="display: none;">No result found</div>
        </div>
    </div>
</div>
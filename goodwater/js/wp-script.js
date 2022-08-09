jQuery(document).ready(function(){
	// Showing portfolio company's
	if(jQuery(window).width() <= 480){
	    load_portfolio( 5 );
	}else{
	    load_portfolio( 18 );
	}

	// Desktop Filter
	jQuery(".gwc.filter .filter__subnav a").on("click",function(e){
	    e.preventDefault();
	    var locArr   = [];
	    var catArr   = [];
	    var stageArr = [];
	    jQuery('.filter__search input').val('');
	    jQuery(this).parents("ul.filter__subnav").find("li").each(function(){
		    if(jQuery(this).hasClass( "active" )){
		    	if (typeof jQuery(this).find("a").data('location') !== 'undefined') {
					var location = jQuery(this).find("a").data('location');
					locArr.push(location);
				}else if (typeof jQuery(this).find("a").data('category') !== 'undefined') {
					var category = jQuery(this).find("a").data('category');
					catArr.push(category);
				}else if (typeof jQuery(this).find("a").data('growth-stage') !== 'undefined') {
					var growthStage = jQuery(this).find("a").data('growth-stage');
					stageArr.push(growthStage);
				}
		    }
		});

	    if (locArr.length !== 0) {
	    	removeDivs();
		    portfolioFilter("filter","location",locArr,18);
		}else if(catArr.length !== 0){
			removeDivs();
			portfolioFilter("filter","company_category",catArr,18);
		}else if(stageArr.length !== 0){
			removeDivs();
			portfolioFilter("filter","growth_stage",stageArr,18);
		}else{
			removeDivs();
			load_portfolio( 18 );
		}

	});

	// Portfolio Search
	jQuery('.filter__searchbar button').on("click",function(e){
		e.preventDefault();
		jQuery(".filter__nav.is--desktop .filter__subnav li").removeClass('active');
		if(jQuery(this).parent().find("#searchPortfolio").val().length > 2){
			var keyword = jQuery(this).parent().find("#searchPortfolio").val();
	      	removeDivs();
			if(jQuery(window).width() <= 480){
			    portfolioFilter("search"," ",keyword,5);
			}else{
				portfolioFilter("search"," ",keyword,18);
			}
		}
	});

	jQuery('.filter__searchbar input').on("keyup", function(e) {
		if(jQuery(this).val() == ''){
			if(jQuery(window).width() <= 480){
				removeDivs();
				load_portfolio(5);
			}else{
				removeDivs();
				load_portfolio(18);
			}
		}
	});

	// Portfolio mobile filter
	jQuery(".filter__buttons #mobileFilter").on("click",function(e){
	    e.preventDefault();
	    var locFilter 		  = [];
	    var catFilter 		  = [];
	    var growthStageFilter = [];
	    jQuery('.filter__search input').val('');
	    jQuery('.filter__items input[type="checkbox"]:checked').each(function() {
			if( jQuery(this).attr("data-taxnomony") === 'location' ){
				locFilter.push(jQuery(this).val());
			}else if( jQuery(this).attr("data-taxnomony") === 'company_category' ){
				catFilter.push(jQuery(this).val());
			}else if( jQuery(this).attr("data-taxnomony") === 'growth_stage' ){
				growthStageFilter.push(jQuery(this).val());
			}
		});
		if (locFilter.length !== 0) {
	    	removeDivs();
			jQuery(".filter__search-head .js-filter").trigger("click");
		    portfolioFilter("filter","location",locFilter,5);
		}else if(catFilter.length !== 0){
			removeDivs();
			jQuery(".filter__search-head .js-filter").trigger("click");
			portfolioFilter("filter","company_category",catFilter,5);
		}else if(growthStageFilter.length !== 0){
			removeDivs();
			jQuery(".filter__search-head .js-filter").trigger("click");
			portfolioFilter("filter","growth_stage",growthStageFilter,5);
		}else{
			removeDivs();
			jQuery(".filter__search-head .js-filter").trigger("click");
			load_portfolio( 5 );
		}

	});

	// Portfolio Mobile reset filter 
	jQuery(".filter__buttons #mobileResest").on("click",function(e){
	    e.preventDefault();
	    jQuery('.filter__items input[type=checkbox]').prop('checked', false);
	    removeDivs();
	    load_portfolio( 5 );
	});

});

// Removing div's
function removeDivs(){
	jQuery(".gwc.filter .container .filter__boxes").remove();
	jQuery(".gwc.filter .container .filter__load-more").remove();
	return false;
}
// Portfolio load
function load_portfolio( limit ){
	jQuery(".gwc.filter .no-post-found").css("display", "none");
	var url = ajax_object.ajax_url;
    var data = {
        'action': 'load_portfolio_ajax',
        'limit': limit,
    };
    jQuery.ajax({
        type: "POST",
        dataType: "html",
        url: url,
        data: data,
        success: function(data){
            var $data = jQuery(data);
            if($data.length){ 
                jQuery(".gwc.filter .filter-boxes-wrapper").append($data);
                randomClasses();
                if(jQuery(window).width() <= 480){
                    jQuery(".gwc.filter .filter__load-more").on("click",function(e){
                        e.preventDefault();
                        var page  = jQuery(this).attr('data-page');
                        load_more_portfolio(5, page, '', '');
                    });
                }else{
                    jQuery(".gwc.filter .filter__load-more").on("click",function(e){
                        e.preventDefault();
                        var page  = jQuery(this).attr('data-page');
                        load_more_portfolio(18, page, '', '');
                    });
                }
            }
        },
    });
    return false;
}

// ajax load more portfolio
function load_more_portfolio(loadLimit,page,taxonomy,val){
	jQuery(".gwc.filter .no-post-found").css("display", "none");
    var maxPages = jQuery('.filter__load-more').attr('data-max-pages');
    var url 	 = ajax_object.ajax_url;
    var data = {
        'action': 'more_portfolio_ajax',
        'page': page,
        'limit': loadLimit,
        'taxonomy' : taxonomy,
        'val' : val
    };
    jQuery.ajax({
        type: "POST",
        dataType: "html",
        url: url,
        data: data,
        beforeSend: function(){
	    	jQuery(".filter-boxes-wrapper .loader").css("display","block");
	    	jQuery(".filter__boxes").addClass("opacity");
	   	},
        success: function(data){
            var $data = jQuery(data);
            if($data.length){ 
                jQuery(".filter__boxes").append($data);
                randomClasses();
                page++;
                jQuery('.gwc.filter .filter__load-more').attr('data-page',page);
                if( page == maxPages ){
                    jQuery(".filter__load-more").remove();
                }
            }else{ 
                jQuery(".gwc.filter .filter__load-more").remove();
                // jQuery(".gwc.filter .no-post-found").css("display", "block");
            }
        },
        complete:function(data){
		   jQuery(".filter-boxes-wrapper .loader").css("display","none");
		   jQuery(".filter__boxes").removeClass("opacity");
		}
    });
    return false;
}

// Filtering and Search
function portfolioFilter( type, taxonomy, val, limit){
	jQuery(".gwc.filter .no-post-found").css("display", "none");
	var url = ajax_object.ajax_url;
    var data = {
        'action': 'portfolio_filter_ajax',
        'type': type,
        'taxonomy': taxonomy,
        'val': val,
        'limit': limit
    };
    jQuery.ajax({
        type: "POST",
        dataType: "html",
        url: url,
        data: data,
        beforeSend: function(){
	    	jQuery(".filter-boxes-wrapper .loader").css("display","block");
	    	jQuery(".filter__boxes").addClass("opacity");
	   	},
        success: function(data){
            var $data = jQuery(data);
            if($data.length){ 
                jQuery(".gwc.filter .filter-boxes-wrapper").append($data);
                if(jQuery(window).width() <= 480){
	                jQuery(".gwc.filter .filter__load-more").on("click",function(e){
                        e.preventDefault();
                        var page  = jQuery(this).attr('data-page');
                        if( jQuery(this).attr("data-type") === 'filter' ){
	                        load_more_portfolio(5, page, taxonomy, val);
                        }else if( jQuery(this).attr("data-type") === 'search' ){
                        	load_more_portfolio(5, page, '', val);
                        }
                	});
	            }else{
	           		jQuery(".gwc.filter .filter__load-more").on("click",function(e){
                        e.preventDefault();
                        var page  = jQuery(this).attr('data-page');
                        if( jQuery(this).attr("data-type") === 'filter' ){
	                        load_more_portfolio(18, page, taxonomy, val);
                        }else if( jQuery(this).attr("data-type") === 'search' ){
                        	load_more_portfolio(18, page, '', val);
                        }
                	});
	            }
            }else{ 
                jQuery(".gwc.filter .no-post-found").css("display", "block");
            }
        },
        complete:function(data){
		   jQuery(".filter-boxes-wrapper .loader").css("display","none");
		   jQuery(".filter__boxes").removeClass("opacity");
		}
    });
    return false;
}

// Random color hover for portfolio cards
function randomClasses() {
    var currentNo = 0;
    $(".filter__box").each(function () {
      	var classList = [
        	"filter--lake",
        	"filter--gold",
        	"filter--lawn",
        	"filter--violet",
      	];
      	var randomClass = Math.floor(Math.random() * 3);

      	if (randomClass == currentNo) {
	        randomClass = randomClass + 1;
	        currentNo = randomClass;
	        $(this).addClass(classList[randomClass]);
	        return currentNo;
      	} else {
	        randomClass = randomClass;
	        currentNo = randomClass;
	        $(this).addClass(classList[randomClass]);
	        return currentNo;
      	}
    });
}
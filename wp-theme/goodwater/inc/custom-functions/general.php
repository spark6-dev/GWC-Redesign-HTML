<?php 
    /**
     * Remove specific class form wp body tag
     */
    // add_filter('body_class', 'remove_body_classes');
    function remove_body_classes( $classes ) {
        $remove_classes = ['page'];
        $classes = array_diff($classes, $remove_classes);
        return $classes;
    }

    //disabling rss feeds
    // add_action('do_feed', 'wpb_disable_feed', 1);
    // add_action('do_feed_rdf', 'wpb_disable_feed', 1);
    // add_action('do_feed_rss', 'wpb_disable_feed', 1);
    // add_action('do_feed_rss2', 'wpb_disable_feed', 1);
    // add_action('do_feed_atom', 'wpb_disable_feed', 1);
    // add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
    // add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);

    //php version remover
    function wp_version_remove_version() {
        return '';
    }
    add_filter('the_generator', 'wp_version_remove_version');

    // contact form validation for name filed
    // add_filter( 'wpcf7_validate_text*', 'custom_text_validation_filter', 50, 2 );
    function custom_text_validation_filter( $result, $tag ) {
       //Get The Tag
        $tag = new WPCF7_FormTag($tag);
        //Check if the text field is the name
        if ('your-firstname'== $tag->name || 'name' == $tag->name || 'first-name' == $tag->name)
        {   
                //Set the possible name variables
                $your_name = isset($_POST['your-firstname']) ? trim($_POST['your-firstname']) : '';
                $name = isset($_POST['name']) ? trim($_POST['name']) : '';
                $first_name = isset($_POST['first-name']) ? trim($_POST['first-name']) : '';
                //Check if any of the name variables have numbers
                if (preg_match('#[0-9]#', $your_name) || preg_match('#[0-9]#', $name) || preg_match('#[0-9]#', $first_name))
                {
                // Fail validation and set validation error message
                $result->invalidate($tag, "Please enter a valid name.");
                }
            }
        
            if ('your-lastname'== $tag->name || 'lname' == $tag->name || 'last-name' == $tag->name)
            {   
                //Set the possible name variables
                $your_last_name = isset($_POST['your-lastname']) ? trim($_POST['your-lastname']) : '';
                $lname = isset($_POST['lname']) ? trim($_POST['lname']) : '';
                $last_name = isset($_POST['last-name']) ? trim($_POST['last-name']) : '';
                //Check if any of the name variables have numbers
                if (preg_match('#[0-9]#', $your_last_name) || preg_match('#[0-9]#', $lname) || preg_match('#[0-9]#', $last_name))
                {
                // Fail validation and set validation error message
                $result->invalidate($tag, "Please enter a valid name.");
                }
            }
        return $result;
    }

    // remove [...] from search result. 
    function new_excerpt_more( $more ) {
        return '....';
    }
    // add_filter('excerpt_more', 'new_excerpt_more');

    /**
     * Ogg data manager
     */
    function generate_ogg(){
        $meta ='';

            $title = get_the_title();
            if(!$title){
                if (is_single()) {
                    $title = get_bloginfo('name');
                } else {
                    $title = single_cat_title('', false);
                }
            }
            if(is_single()){$type = 'article';} else {$type = 'page';}
            $meta .= '<meta property="og:title" content="'.$title.'" />';
            $meta .= '<meta property="og:url" content="'.get_permalink().'"/>';
            $meta .= '<meta property="og:site_name" content="'.get_bloginfo('name').'" />';
            $meta .= '<meta property="og:type" content="'.$type.'" />';

        return $meta;
    }
    
    // adding css for blocks only in admin dashboard
    // add_action( 'enqueue_block_editor_assets', function() {
    //     wp_enqueue_style( 'twentytwenty-custom-block-editor-styles',
    //         get_theme_file_uri( "/css/block.css" ),
    //         false, wp_get_theme()->get( 'Version' ));
    // } );

   
?>
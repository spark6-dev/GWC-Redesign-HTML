<?php 
    //php version remover
    function wp_version_remove_version() {
        return '';
    }
    add_filter('the_generator', 'wp_version_remove_version');

    /**
     * Ogg data manager
     */
    function generate_ogg(){
        $meta ='';
        if(!$yoast_data){
            $title = get_the_title();
            if(!$title){$title = get_bloginfo('name');}
            if(is_single()){$type = 'article';} else {$type = 'page';}
            $meta .= '<meta property="og:title" content="'.$title.'" />';
            $meta .= '<meta property="og:url" content="'.get_permalink().'"/>';
            $meta .= '<meta property="og:site_name" content="'.get_bloginfo('name').'" />';
            $meta .= '<meta property="og:type" content="'.$type.'" />';
        }
        $meta .= '<meta property="og:image" content="'.get_theme_mod('ogg_logo').'">';
        return $meta;
    }
?>
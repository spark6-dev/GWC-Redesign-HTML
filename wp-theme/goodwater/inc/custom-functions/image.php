<?php 
/**
 * imgid    = image id
 * url      = image url
 * id       = attribute id
 * class    = attribute class
 * set      = src set. no for disbale src set. 
 * lazy     = lazy load. no for disbale lazy load. 
 */

function image_from_url($url){
    $feature_id = attachment_url_to_postid($url);
    return $feature_id;
}

function image_from_id($id){
    $post_image_url = wp_get_attachment_image_src($id,$size = 'full');
    $url 	= $post_image_url[0];
    return $url;
}


function get_image($data){

    $id     = ($data['imgid'])?$data['imgid']:'';
    $url    = ($data['url'])?$data['url']:"";
    
    if($url){
        $id = image_from_url($url);
    }

    if($id){
        $url = image_from_id($id);
    }

    if($url && $id){
      
        $img_id    = ($data['id'])?$data['id']:"";
        $img_class = ($data['class'])?$data['class']:"";
        $img_set   = ($data['set'])?$data['set']:"";
        $img_lazy  = ($data['lazy'])?$data['lazy']:"";
        $img_type  = ($data['type'])?$data['type']:"";
        $img_size  = ($data['size'])?$data['size']:"";
        $img_anim  = ($data['anim'])?$data['anim']:"";
       

        $image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
        if(!$image_alt){
            $image_alt = get_the_title($id);
        } 
        
        if($img_set == 'no'){
            $image_srcset = '';
        } else {
            $image_srcset = wp_get_attachment_image_srcset( $id, 'full');
        }

        if($img_lazy=='no'){
            $lazy = '';
        } else {
            $lazy = 'loading="lazy"';
        }
        $image_attributes = wp_get_attachment_image_src($id,'full');
        if($img_size=='no'){
            $h = '';
            $w = '';
        } else {
            $h = $image_attributes[2];
            $w = $image_attributes[1];
        }

        if($img_anim){
            $anim = $img_anim;
        } else {
            $anim = '';
        }
        
        //$result = '<img width="'.$w.'" height="'.$h.'" src="'.$url.'" alt="'.$image_alt.'" id="'.$img_id.'" class="'.$img_class.'" '.$lazy.' srcset="'.$image_srcset.'" '.$anim.'>';
        $result = '<img src="'.$url.'" alt="'.$image_alt.'" id="'.$img_id.'" class="'.$img_class.'" srcset="'.$image_srcset.'" '.$anim.'>';
          
        return $result;
    }

}

function featured_image($id){
    if($id){
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($id));
        $data = $this->image($feat_image);
        if($data){
            return $data;
        }            
    }
}

?>
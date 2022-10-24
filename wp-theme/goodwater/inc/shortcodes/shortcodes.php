<?php function year_show(){
  return date('Y');
}
add_shortcode( 'year', 'year_show' );?>
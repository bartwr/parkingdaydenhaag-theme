<?php  

/* Remove width/height attribute */
function kite_remove_image_size_attr( $html ) {
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
  return $html;
}

add_filter( 'post_thumbnail_html', 'kite_remove_image_size_attr', 10 );
add_filter( 'image_send_to_editor', 'kite_remove_image_size_attr', 10 );

?>
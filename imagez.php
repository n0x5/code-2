
<?php
/*
Template Name: imagez
*/
?>


<?php
$post_thumbnail_id = get_post_thumbnail_id( $iPostID );
foreach( $arrKeys as $key) {
    if( $key == $post_thumbnail_id )
        continue;
    $sImageUrl = wp_get_attachment_url($key);
    $sImgString = '<li><img src="' . $sImageUrl . '" alt="Thumbnail Image" /></li>';
    echo $sImgString;
}
?>

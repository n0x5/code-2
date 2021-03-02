<?php
/*
Template Name: pagination gal3
*/
?>


<div class="gallery">
<?php

$my_query = new WP_Query( array(
    'meta_key' => 'my_hash',
    'nopaging' => true,
    'orderby' => 'meta_value',
    'fields' => 'ids',
    'category_name' => 'photos',
));

if ( $post_ids = $my_query->get_posts() ) {
    $post_ids = implode( ',', $post_ids );
    $atts_ids = $wpdb->get_col( "SELECT ID FROM $wpdb->posts WHERE post_parent IN($post_ids) AND post_type = 'attachment'" );   

    $my_query->query( array(
        'posts_per_page' => $batch_size,
        'post_mime_type' =>'image',
        'post_status' => 'any',
        'post_type' => 'attachment',
        'post__in' => $atts_ids,
    ));


}


?>


		</div>
	</div>
</div>


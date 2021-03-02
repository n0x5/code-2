<?php get_header(); ?>

<h3>Psychological mystery thrillers from 2000-2010</h3>
<?php $myQuery = new WP_Query( 'post_status=publish&post_type=movies_post_type&posts_per_page=-1&order=ASC' ); ?>
<?php if ($myQuery -> have_posts()) : ?>
    <?php while ($myQuery -> have_posts()) : $myQuery -> the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
           <div class="title2"><a href="<?php $mykey_values = get_post_custom_values( 'film_url' ); foreach ( $mykey_values as $key => $value ) { echo "$value"; } ?>"><?php the_title(); ?></a> <?php $mykey_values = get_post_custom_values( 'year2' ); foreach ( $mykey_values as $key => $value ) { echo "$value"; } ?> </div>
                <div class="people"><?php $mykey_values = get_post_custom_values( 'people2' ); foreach ( $mykey_values as $key => $value ) { echo "$value"; } ?></div>
                 <div class="plot"> <?php the_content(); ?></div>
<div class="genres"><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name; } } ?></div>
    <?php

?>
       </div>
        <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>


 ?> 

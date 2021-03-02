<?php
/*
Template Name: pagination gallery
*/
?>

<?php
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => $paged,
//    'category' => 'photos',
//    'post_status' => 'any'
  );
  $the_query1 = new WP_Query( $query_args );
?>

<?php if ( $the_query1->have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); 
  <article>
    <h1><?php echo the_title(); ?></h1>
    <div class="content">
      <?php the_excerpt(); ?>
    </div>
  </article>
<?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { 
  <nav class="prev-next-posts">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); 
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Newer Entries' ); 
    </div>
  </nav>
<?php } ?>

<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('Sorry, no posts matched your criteria.', 'code-2'); ?></p>
  </article>
<?php endif; ?>
<?php wp_reset_query(); ?>

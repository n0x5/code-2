<?php
/*
Template Name: pagination gal
*/
?>



<?php
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'attachment',
    'post_status' => 'any',
    'posts_per_page' => 5,
    'paged' => $paged
  );
  $the_query = new WP_Query( $query_args );
?>


<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
  <article>
    <h1><?php echo the_title(); ?></h1>
    <div class="excerpt">
      <?php the_content(); ?>
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

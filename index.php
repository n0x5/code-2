<?php get_header(); ?>
</div> <!-- header -->


<div id="main">
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<?php
					get_template_part( 'content', get_post_format() );

                                     if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
				 endwhile; ?>

	<?php endif; ?>
</div>

<div id="navigation">
<?php next_posts_link(__('&laquo; Previous Entries', 'code-2')) ?><br>
<?php previous_posts_link(__('Newer Entries &raquo;','code-2')); ?>
</div>
<div id="foot"><?php get_footer(); ?></div>

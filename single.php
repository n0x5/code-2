<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<?php
					get_template_part( 'content', get_post_format() );
                                      //  comments_template( $file, $separate_comments );
                                         
				 endwhile; ?>
	<?php endif; ?>

</div>
<?php get_footer(); ?>
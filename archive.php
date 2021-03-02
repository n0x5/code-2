<?php get_header(); ?>
<div id="main">
	<?php if (have_posts()) : ?>
	    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h1 class="pagetitle"><?php _e('Archive for category', 'code-2'); echo ' ';single_cat_title(); ?></h1>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h1 class="pagetitle"><?php _e('Posts Tagged', 'code-2');echo ' ';single_tag_title(); ?></h1>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h1 class="pagetitle"><?php _e('Archive for ', 'code-2'); echo get_the_date( 'd-m-Y' ); ?></h1>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h1 class="pagetitle"><?php _e('Archive for ', 'code-2'); echo get_the_date( 'm-Y' ); ?></h1>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h1 class="pagetitle"><?php _e('Archive for ', 'code-2'); echo get_the_date( 'Y' ); ?></h1>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h1 class="pagetitle"><?php _e('Author Archive', 'code-2'); ?></h1>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h1 class="pagetitle"><?php _e('Blog Archives', 'code-2'); ?></h1>
        <?php } ?>
     
	<?php while (have_posts()) : the_post(); ?>

<?php
					get_template_part( 'content', get_post_format() );

				 endwhile; ?>
	<div class="navigation">               
                <div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries', 'code-2')) ?></div>
                <div class="alignright"><?php previous_posts_link(__('Newer Entries  &raquo;', 'code-2')); ?></div>
       </div>	
	</div>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
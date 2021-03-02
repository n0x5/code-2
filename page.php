<?php get_header(); ?>
<div id="main">



	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	<div id="content">

<div class="content">
		


		<div class="entry">
			<div class="navigation">
            	<br clear="all" />
			</div>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content('more))'); ?>
			<br clear="left" />
		</div>
	</div>
	</div>
	
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
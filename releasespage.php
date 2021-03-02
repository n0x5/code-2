<?php
/*
Template Name: Front Page
*/
?>

<?php get_header('releases'); ?>
<script type="text/javascript" src="http://webplayer.yahooapis.com/player.js"></script> 
<div id="main">
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	<div id="content">

		<div class="metainfo">
		<div class="metatitle1">
		<?php the_time('F jS, Y') ?><br />
		<?php the_category(', '); ?><br />
                </div><br />
		</div>
             
		<div class="entry">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div id="post-entry"><?php the_content('more))'); ?></div>
		</div>
	</div>
	</div>
	<?php endwhile; ?>
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		<br clear="all" />
	</div>
	<?php endif; ?>
</div>

<div class="content">
		<div class="metainfo">
		<div class="metatitle1">



		<div class="time2"><?php the_time('F jS, Y') ?></div>
                <div class="category"><?php the_category(', '); ?></div>
<span class="post-format">
                                <a class="format-standard" href="?post_format=standard"><?php echo get_post_format_string( 'standard' ); ?></a>
                        </span>


                </div>
		</div>
		<div class="entry">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="post-entry"><?php the_content('more))'); ?></div>
		</div>
</div>

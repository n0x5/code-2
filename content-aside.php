<div class="content-aside">
		<div class="metainfo">
		<div class="metatitle1">
		<div class="time2"><?php the_time('F jS, Y') ?></div>
                <div class="category"><?php the_category(', '); ?></div>
<span class="post-format">
				<a class="format-aside" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>"><?php echo get_post_format_string( 'aside' ); ?></a>
			</span>
                </div><br />
		</div>
		<div class="entry">
			<div class="post-entry-aside"><?php the_content(); ?></div>
		</div>
</div>


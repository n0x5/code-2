<?php
/*
Template Name: Front Page
*/
?>

<?php get_header('front'); ?>

<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <div id="content">
                </div>

                <div class="entry">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <div id="post-entry"><?php the_content('more))'); ?></div>
                </div>
        </div>
        </div>
        <?php endwhile; ?>


<?php endif; ?>

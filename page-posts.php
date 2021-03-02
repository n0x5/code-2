<?php
/*
Template Name: Posts Page
*/
?>

<?php get_header('blog'); ?>

<div class="entry">
<?php
$debut = 0; //The first article to be displayed
?>
<?php while(have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<ul>
<?php
$myposts = get_posts('numberposts=-1&offset=$debut');
foreach($myposts as $post) :
?>
<li><?php the_time('d/m/y') ?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<div id="post-entry"><?php the_content('more))'); ?></div>

<?php endforeach; ?>
</ul>
<?php endwhile; ?>
</div>

<?php
/*
Template Name: Post Archives Custom
*/
?>

<?php get_header(); ?>


<?php /*
 global $post;
 $myposts = get_posts('numberposts=-1&category=13');

 foreach($myposts as $post) :
 ?>
    <div class="permalink"><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_time('F jS, Y'); ?> </li></div>
 <?php endforeach; ?>



<h2>Music</h2>
<?php
 global $post;
 $myposts = get_posts('numberposts=-1&category=8');

 foreach($myposts as $post) :
 ?>
    <div class="permalink"><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_time('F jS, Y'); ?> </li></div>
 <?php endforeach; ?>

<h2>Photos</h2>
<?php
 global $post;
 $myposts = get_posts('numberposts=-1&category=10');

 foreach($myposts as $post) :
 ?>
    <div class="permalink"><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_time('F jS, Y'); ?> </li></div>
 <?php endforeach; */ ?>

<div class="entry">
<h2>Archives from categories</h2>


<?php
//for each category, show 5 posts
 global $post;
$cat_args=array(
  'orderby' => 'name',
  'order' => 'ASC'
   );
$categories=get_categories($cat_args);
  foreach($categories as $category) { 
    $args=array(
      'showposts' => -1,
      'category__in' => array($category->term_id),
      'caller_get_posts'=>1
    );
    $posts=get_posts($args);
      if ($posts) {
        echo '<p><h2 class="arch"> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s", 'code-2' ), $category->name ) . '" ' . '>' . $category->name.' </a> </h2> </p> ';
        foreach($posts as $post) {
          setup_postdata($post); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <?php the_time('F jS, Y'); ?></li>
          <?php
        } // foreach($posts
      } // if ($posts
    } // foreach($categories
?>
</div>

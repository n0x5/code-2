<?php
/*
Template Name: Gallery Index t
*/
?>

<body>
<style type="text/css">
	.mainbody {
		width: 800px;
		margin-left: auto;
		margin-right: auto;
	}
body {
background-color: black;
color: white;
}
.post-entry {
}
.categoryl {
height: 1045px;
width: 430px;
float: left;
}

.category2 {
height: 100px;
width: 430px;
display: block;
}
a.titlecat2 {
font-size: 13px;
color: #e91e63;
}
a.titlecat3 {
font-size: 13px;
color: white;
}

a {
color: white;
}
a:visited {
color: #c1c1c1;
}
.grid-item {
}
a.titlecat {
font-size: 30px;
color: #e91e63;
}

.headtitle {
text-align: center;
font-size: 80px;
}
.descr {
text-align: center;
font-size: 20px;
}
.lists {
/*padding-left: 350;*/
}
p.recent {
font-size: 12px;
}
.banner{
margin-bottom: 20px;
}
.galleries {

float: left;
	margin-right: 15px;
}

</style>

<?php // get_header(); ?>
<title><?php echo esc_html(get_the_title()); ?></title>
<center>

        <?php
if ( $post->post_parent ) {
    $children = wp_list_pages( array(
        'title_li' => '',
        'child_of' => $post->post_parent,
        'echo'     => 0
    ) );
   $page_link = get_page_link( $post->post_parent );
    $title = get_the_title( $post->post_parent );
} else {
    $children = wp_list_pages( array(
        'title_li' => '',
        'child_of' => $post->ID,
        'echo'     => 0
    ) );
    $page_link = get_page_link( $post->post_parent );
    $title = get_the_title( $post->ID );
}

if ( $children ) : ?>
    <h2><?php // echo $title ; ?></h2>
    <h2><?php if (get_the_title() != "Galleries") echo '<center>Part of gallery: <a href=' . $page_link .'>' . $title . '</a></center>'; ?></h2>
    <ul>
        <?php // echo $children; ?>
    </ul>
<?php endif; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


<div class="banner"><?php // echo get_the_post_thumbnail($post_id, 'large', array( 'class' => 'alignleft' )); ?></div>
<div class="mainbody">
	
	
<?php the_content(); ?>

<?php
  $subs = new WP_Query(
    array(
      'posts_per_page' => -1,
      'post_parent' => $post->ID,
      'post_type' => 'page',
      'order' => 'asc',
      'meta_key' => '_thumbnail_id'
    )
  );
if( $subs->have_posts() ) :
  while( $subs->have_posts() ) :
    $subs->the_post();
    echo '<div class="galleries"> <a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_post_thumbnail($post_id, 'thumbnail', array( 'class' => 'alignleft' )).'</a>'.'<h2><a href="'.get_permalink().'">'.get_the_title().'</a></h2></div>';
  endwhile;
endif;
wp_reset_postdata(); ?>
</center>
</div>
<?php // get_footer(); ?>

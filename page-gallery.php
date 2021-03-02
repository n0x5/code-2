<?php
/*
Template Name: Gallery Single Page
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
.content {
width: 900px;
margin-left: auto;
margin-right: auto;
}
.entry {
width: 900px;
}
.imgc {
width: 200px;
float: left;
}
</style>

<title><?php echo esc_html( get_the_title() ); ?></title>
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
    <h2><?php echo '<center>Part of gallery: <a href=' . $page_link .'>' . $title . '</a></center>' ; ?></h2>
    <ul>
        <?php // echo $children; ?>
    </ul>
<?php endif; ?>
	
<?php // get_header(); ?>
<div id="main">



	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	<div id="content">

<div class="content">
		


		<div class="entry">
			<div class="navigation">
            	<br clear="all" />
			</div>
			<center><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2><center>
			<?php the_content('more))'); ?>
			<br clear="left" />
		</div>
	</div>
	</div>
	
	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php // get_footer(); ?>

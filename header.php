<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section 
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">	
<link rel="icon" type="image/x-ico" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />	
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<?php get_sidebar(); ?>
<div id="page">
	<div id="header">

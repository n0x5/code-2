<div class="side">
<a href="<?php echo esc_url( home_url()); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.jpg" alt="logo"></a>
<ul id="sidebar">

 <li id="about">
  <?php bloginfo( 'description' ); ?>
 </li>

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
 
<?php endif; ?>
</ul>
</div>

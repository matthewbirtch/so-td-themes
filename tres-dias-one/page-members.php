<?php
/*
 * Template Name: Members
 * Description: A Page Template with a darker design.
 */
?>

<?php get_header(); ?>
<?php         
  if ( is_user_logged_in()) { 
    wp_nav_menu( array( 'theme_location' => 'members-nav' ) );
  } 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
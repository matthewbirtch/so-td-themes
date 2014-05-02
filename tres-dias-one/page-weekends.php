<?php
/*
 * Template Name: Weekends
 * Description: A Page Template with a darker design.
 */
?>

<?php get_header(); ?>
<?php         
  if ( is_user_logged_in()) { 
    wp_nav_menu( array( 'theme_location' => 'members-nav' ) );
  } 
?>
<div class="page-container-outer">
<div class="page-container-inner">
<section class="content-container weekends">
<?php         
  if ( is_user_logged_in()) { 
    dropdown_menu( array( 
      'theme_location' => 'weekends-nav',
      'dropdown_title' => '-- Select a Weekend --'
    ));
  } 
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>
</section>
</div>
</div>

<?php get_footer(); ?>
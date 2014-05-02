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
<div class="page-container-outer">
	<div class="page-container-inner">
		<?php if ( is_user_logged_in()) { ?>
			<section class="content-container logged-in">
		<?php } else { ?>
			<section class="content-container">
		<?php 
			}
		?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>
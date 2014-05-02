<?php get_header(); ?>
<?php 
  if ( is_user_logged_in()) {
    wp_nav_menu( array( 'theme_location' => 'members-nav' ) ); 
  }
?>
      <div class="page-container-outer">
        <div class="page-container-inner">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="content-container blog">
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
							<div class="entry">
								<?php the_content(); ?>
							</div>
							<div class="postmetadata">
								<?php the_tags('Tags: ', ', ', '<br />'); ?>
								Posted in <?php the_category(', ') ?> | 
								<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
							</div>
						</div>
					</div>
		
		<?php endwhile; ?>
		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
		<?php else : ?>
			<div class="page-container-outer">
				<div class="page-container-inner">
				<div class="content-container blog">
					<h2>Not Found</h2>
					</div>

		<?php endif; ?>
    </div>
      </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
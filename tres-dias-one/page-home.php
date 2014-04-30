<?php
/*
 * Template Name: Homepage
 * Description: A Page Template with a darker design.
 */
?>

<?php get_header(); ?>
<div id='nav-bar'>
	<div id='logo'>
	  <a href='home' rel='page'>
	    Southern Ontario Tres Dias
	  </a>
	</div>
	<a class='menu' href='menu' rel='overlay'>
	  <i class='icon-menu'></i>
	</a>
	<ul class='nav'>
	  <li class='selected'>
	    <a class='nav-home' href='home' rel='page'>
	      Home
	    </a>
	  </li>
	  <li>
	    <a class='nav-about' href='about' rel='page'>
	      About
	    </a>
	  </li>
	  <li>
	    <a class='nav-calendar' href='calendar' rel='page'>
	      Calendar
	    </a>
	  </li>
	  <li>
	    <a class='nav-statement-of-faith' href='statement-of-faith' rel='page'>
	      Statement of Faith
	    </a>
	  </li>
	</ul>
	<ul class='login-nav'>
	  <?php if ( is_user_logged_in()) { ?>
	    <li>
	      <a class='login-dropdown-button' href='<?php echo wp_logout_url(); ?>'>
	        Log Out
	      </a>
	    </li>
	  <?php } else { ?>
	    <li>
	      <a class='login-dropdown-button' href='login' rel='overlay'>
	        Log in
	      </a>
	    </li>
	  <?php } ?>
	</ul>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
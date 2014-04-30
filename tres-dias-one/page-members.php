<?php
/*
 * Template Name: Members
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
  <a class='mobile-menu' href='menu' rel='overlay'>
    <i class='icon-menu'></i>
  </a>
  <ul class='nav'>
    <li>
      <a class='nav-home' href='<?php echo site_url(); ?>'>
        Home
      </a>
    </li>
    <li>
      <a class='nav-about' href='<?php echo site_url(); ?>/#page-about'>
        About
      </a>
    </li>
    <li>
      <a class='nav-calendar' href='<?php echo site_url(); ?>/#page-calendar'>
        Calendar
      </a>
    </li>
    <li>
      <a class='nav-statement-of-faith' href='<?php echo site_url(); ?>/#page-statement-of-faith'>
        Statement of Faith
      </a>
    </li>
    <li class="selected">
      <a class='nav-members' href='<?php echo site_url(); ?>/members'>
        Members
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
<?php wp_nav_menu( array( 'theme_location' => 'members-nav' ) ); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
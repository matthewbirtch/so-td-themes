<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta content="Southern Ontario Tres Dias (SOTD) is a Christian community with a purpose to share God's limitless love through a special retreat weekend. Our first weekend is in the fall of 2014 with the generous support of the Northern Virginia Tres Dias community." name='description'>
  <meta content='matthewbirtch.com' name='author'>
  <meta content='Southern Ontario Tres Dias' property='og:title'>
  <meta content="Southern Ontario Tres Dias (SOTD) is a Christian community with a purpose to share God's limitless love through a special retreat weekend. Our first weekend is in the fall of 2014 with the generous support of the Northern Virginia Tres Dias community." property='og:description'>
  <meta content='images/sotd-facebook-image.jpg' property='og:image'>
  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link href='<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png' rel='apple-touch-icon'>
	<link href='<?php echo get_template_directory_uri(); ?>/css/reset.css' rel='stylesheet'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href='<?php echo get_template_directory_uri(); ?>/css/fonticons.css' rel='stylesheet'>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
	<script type="text/javascript" src="//use.typekit.net/dbv3sjv.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script src='<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.7.1.min.js'></script>
</head>
<body <?php body_class(); ?>>
	<div class="html-mobile-background"></div>
  <div class='overlay hidden' id='menu-overlay'>
    <div class='overlay-content-container'>
      <button class='close'>
        +
      </button>
      <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container_class' => 'big-nav' ) ); ?>
      <?php 
        if ( is_user_logged_in()) { 
          wp_nav_menu( array( 'theme_location' => 'mobile-nav', 'container_class' => 'big-nav') ); 
        } else {
      ?>
      <?php 
        }
      ?>
    </div>
  </div>
  <div class='overlay hidden' id='login-overlay'>
    <div class='overlay-content-container'>
      <button class='close' href='#'>
        +
      </button>
      <form class='form-container' action="post" id="login">
        <h2>Login</h2>
        <p class="status"></p>
        <label for="username">Username</label>
        <input id="username" type="text" name="username">
        <label for="password">Password</label>
        <input id="password" type="password" name="password">
        <a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
        <input class="submit_button" type="submit" value="Login" name="submit">
        <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
      </form>
    </div>
  </div>
  <div id='nav-bar'>
  <div id='logo'>
    <a <?php if ( is_front_page() ) { ?> href='home' rel='page' <?php } else { ?> href='<?php echo site_url(); ?>' <?php } ?>>
      Southern Ontario Tres Dias
    </a>
  </div>
  <a class='mobile-menu' href='menu' rel='overlay'>
    <i class='icon-menu'></i>
  </a>
  <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container_class' => 'nav' ) ); ?>
  <ul class='login-nav'>
    <?php if ( is_user_logged_in()) { 
      global $current_user;
      get_currentuserinfo();
    ?> 
      <li><a href="#"><?php echo $current_user->display_name;?></a>
        <ul class="login-dropdown">
          <li>
            <a class='login-dropdown-button' href='<?php echo site_url(); ?>/profile'>
              My Profile
            </a>
          </li>
          <li>
            <a class='login-dropdown-button' href='<?php echo wp_logout_url(); ?>'>
              Log Out
            </a>
          </li>
        </ul>
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
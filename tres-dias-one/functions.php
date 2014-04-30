<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    add_action('wp_logout',create_function('','wp_redirect(home_url());exit();'));

    function ajax_login_init(){

        wp_register_script('ajax-login-script', get_template_directory_uri() . '/js/ajax-login.js', array('jquery') ); 
        wp_enqueue_script('ajax-login-script');

        wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'redirecturl' => home_url(),
            'loadingmessage' => __('Sending user info, please wait...')
        ));

        // Enable the user with no privileges to run ajax_login() in AJAX
        add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
    }

    // Execute the action only if the user isn't logged in
    if (!is_user_logged_in()) {
        add_action('init', 'ajax_login_init');
    }

    function ajax_login(){

        // First check the nonce, if it fails the function will break
        check_ajax_referer( 'ajax-login-nonce', 'security' );

        // Nonce is checked, get the POST data and sign user on
        $info = array();
        $info['user_login'] = $_POST['username'];
        $info['user_password'] = $_POST['password'];
        $info['remember'] = true;

        $user_signon = wp_signon( $info, false );
        if ( is_wp_error($user_signon) ){
            echo json_encode(array('loggedin'=>false, 'message'=>__('Wrong username or password.')));
        } else {
            echo json_encode(array('loggedin'=>true, 'message'=>__('Login successful, redirecting...')));
        }

        die();
    }

    //Initialize Menu Support
    function register_my_menu() {
      register_nav_menu('members-nav',__( 'Members Nav' ));
    }
    add_action( 'init', 'register_my_menu' );


    add_filter( 'wpmem_register_heading', 'my_heading' );
 
    function my_heading( $heading ){
        /**
         * The original heading comes in with7
         * the optional $heading parameter.
         * You can filter it or change it.9
         */
        $heading = 'Complete this form to register.';
        return $heading;
    }


?>
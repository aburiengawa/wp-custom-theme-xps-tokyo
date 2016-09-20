<?php
	//Theme Support
	function xps_theme_support(){

		//Logo Support
		add_theme_support('custom-logo');
		
		//Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu'),
			'service_menu' => __('Service Menu')
		));

		//Featured Image Support
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'xps_theme_support');

	// Custom Post Type
	function create_posttype() {

		register_post_type( 'services',
		// CPT Options
			array(
				'labels' => array(
					'name' 			=> __( 'Services' ),
					'singular_name' => __( 'Service' )
				),
				'public' 		=> true,
				'has_archive' 	=> true,
				'rewrite' 		=> array('slug' => 'services'),
				'menu_icon'		=> 'dashicons-star-filled',
			)
		);

		register_post_type( 'testimonials',
		// CPT Options
			array(
				'labels' => array(
					'name' 			=> __( 'Testimonials' ),
					'singular_name' => __( 'Testimonial' )
				),
				'public' 		=> true,
				'has_archive' 	=> true,
				'rewrite' 		=> array('slug' => 'testimonials'),
				'menu_icon' 	=> 'dashicons-testimonial',
			)
		);
	}
	
	add_action( 'init', 'create_posttype' );

    //Force reCAPTCHA to display in English
    function forceEN_recaptcha_scripts() {
        wp_deregister_script( 'google-recaptcha' );
 
        $url = 'https://www.google.com/recaptcha/api.js';
        $url = add_query_arg( array(
            'onload' => 'recaptchaCallback',
            'render' => 'explicit',
            'hl' => 'en'), $url ); // en is the language code for English language
 
        wp_register_script( 'google-recaptcha', $url, array(), '2.0', true );
    }
 
    add_action( 'wpcf7_enqueue_scripts', 'forceEN_recaptcha_scripts', 11 );

    // Custom ajax loader
    function my_wpcf7_ajax_loader () {
        return  get_bloginfo('template_url') . '/img/ajax-loader.gif';
    }
    add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
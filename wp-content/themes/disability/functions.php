<?php 
	//css=================================================
	function ndis_styles(){
		wp_register_style('custom_style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('custom_style');

		wp_register_style('icons', get_template_directory_uri() . '/assets/css/icons.min.css');
		wp_enqueue_style('icons');

		wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap');

		wp_register_style('select', get_template_directory_uri() . '/assets/css/bootstrap-select.min.css');
		wp_enqueue_style('select');

		wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
		wp_enqueue_style('animate');

		wp_register_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
		wp_enqueue_style('carousel');

		wp_register_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css');
		wp_enqueue_style('fancybox');

		wp_register_style('perfect', get_template_directory_uri() . '/assets/css/perfect-scrollbar.css');
		wp_enqueue_style('perfect');

		wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
		wp_enqueue_style('slick');

		wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');
		wp_enqueue_style('style');

		wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
		wp_enqueue_style('responsive');

		wp_register_style('color', get_template_directory_uri() . '/assets/css/color.css');
		wp_enqueue_style('color');
	}
	add_action("wp_enqueue_scripts", "ndis_styles");


	//js=============================================================

	function ndis_js(){
		wp_register_script('jsjquery',get_template_directory_uri(). '/assets/js/jquery.min.js',array(),1,1,1);
		wp_enqueue_script('jsjquery');

		wp_register_script('jsbootstrap',get_template_directory_uri(). '/assets/js/bootstrap.min.js',array(),1,1,1);
		wp_enqueue_script('jsbootstrap');

		wp_register_script('jsselect',get_template_directory_uri(). '/assets/js/bootstrap-select.min.js',array(),1,1,1);
		wp_enqueue_script('jsselect');

		wp_register_script('jscarousel',get_template_directory_uri(). '/assets/js/owl.carousel.min.js',array(),1,1,1);
		wp_enqueue_script('jscarousel');

		wp_register_script('jsfancybox',get_template_directory_uri(). '/assets/js/fancybox.min.js',array(),1,1,1);
		wp_enqueue_script('jsfancybox');

		wp_register_script('jswow',get_template_directory_uri(). '/assets/js/wow.min.js',array(),1,1,1);
		wp_enqueue_script('jswow');

		wp_register_script('jsperfectscrollbar',get_template_directory_uri(). '/assets/js/perfectscrollbar.min.js',array(),1,1,1);
		wp_enqueue_script('jsperfectscrollbar');

		wp_register_script('jsscroll',get_template_directory_uri(). '/assets/js/scroll-up-bar.min.js',array(),1,1,1);
		wp_enqueue_script('jsscroll');

		wp_register_script('jscounterup',get_template_directory_uri(). '/assets/js/counterup.min.js',array(),1,1,1);
		wp_enqueue_script('jscounterup');

		wp_register_script('jsslick',get_template_directory_uri(). '/assets/js/slick.min.js',array(),1,1,1);
		wp_enqueue_script('jsslick');

		wp_register_script('jscustom',get_template_directory_uri(). '/assets/js/custom-scripts.js',array(),1,1,1);
		wp_enqueue_script('jscustom');
	}
	add_action("wp_enqueue_scripts", "ndis_js");

	//menu=====================================================

	function register_menu(){
    register_nav_menus(
        array(
            'primary-menu' => 'Primary Main Menu',
            'footer-menu'  => 'Footer Menu',
        )
    );

	}
	add_action("init", "register_menu");

	//theme support ==============================================

	function ndis_support_theme(){
		add_theme_support('custom-logo');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

        add_image_size('image_left_1', 370, 260, true);
         add_image_size('image_left_2', 370, 260, true);
          add_image_size('image_left_3', 370, 260, true);
          add_image_size('image_right_1', 370, 260, true);
           add_image_size('image_right_2', 370, 260, true);
            add_image_size('image_right_3', 370, 260, true);

        add_image_size('charity_image_1', 270, 230, true);
        add_image_size('charity_image_2', 270, 230, true);
	}
	add_action('after_setup_theme','ndis_support_theme');

	//testimonial cpt ==============================================

	/*
* Creating a function to create our CPT
*/
 
function testimonial_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'ndis' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'ndis' ),
        'menu_name'           => __( 'Testimonials', 'ndis' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'ndis' ),
        'all_items'           => __( 'All Testimonials', 'ndis' ),
        'view_item'           => __( 'View Testimonial', 'ndis' ),
        'add_new_item'        => __( 'Add New Testimonial', 'ndis' ),
        'add_new'             => __( 'Add New', 'ndis' ),
        'edit_item'           => __( 'Edit Testimonial', 'ndis' ),
        'update_item'         => __( 'Update Testimonial', 'ndis' ),
        'search_items'        => __( 'Search Testimonial', 'ndis' ),
        'not_found'           => __( 'Not Found', 'ndis' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ndis' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'testimonials', 'ndis' ),
        'description'         => __( 'Testimonial news and reviews', 'ndis' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-users',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'testimonial_post_type', 0 );

//Expert Cpt ===================================================

/*
* Creating a function to create our CPT
*/
 
function expert_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Experts', 'Post Type General Name', 'ndis' ),
        'singular_name'       => _x( 'Expert', 'Post Type Singular Name', 'ndis' ),
        'menu_name'           => __( 'Experts', 'ndis' ),
        'parent_item_colon'   => __( 'Parent Expert', 'ndis' ),
        'all_items'           => __( 'All Experts', 'ndis' ),
        'view_item'           => __( 'View Expert', 'ndis' ),
        'add_new_item'        => __( 'Add New Expert', 'ndis' ),
        'add_new'             => __( 'Add New', 'ndis' ),
        'edit_item'           => __( 'Edit Expert', 'ndis' ),
        'update_item'         => __( 'Update Expert', 'ndis' ),
        'search_items'        => __( 'Search Expert', 'ndis' ),
        'not_found'           => __( 'Not Found', 'ndis' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ndis' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'experts', 'ndis' ),
        'description'         => __( 'Expert news and reviews', 'ndis' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-businessperson',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'experts', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'expert_post_type', 0 );

//events cpt==============================================

/*
* Creating a function to create our CPT
*/
 
function event_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Events', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Event', 'twentytwenty' ),
        'all_items'           => __( 'All Events', 'twentytwenty' ),
        'view_item'           => __( 'View Event', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Event', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Event', 'twentytwenty' ),
        'update_item'         => __( 'Update Event', 'twentytwenty' ),
        'search_items'        => __( 'Search Event', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'events', 'twentytwenty' ),
        'description'         => __( 'Event news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt',  'thumbnail',  'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-controls-volumeon',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'events', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'event_post_type', 0 );


//sidebar function===============================================

function ndis_sidebars(){
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before-title' => '<h4 itemprop="headline">',
        'after_title' => '</h4>',
        
    ));

}
add_action('widgets_init','ndis_sidebars');


//theme-customizer=========================================================

function ndis_customize_register($wp_customize){

    //header section

    $wp_customize-> add_section('ndis_header_section', [
        'title' => __('Header Section', 'ndis'),
        'priority' => 30,
    ]);

    

    $wp_customize -> add_setting('ndis_facebook_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_facebook_handle_input', array(
        'label' => __('Facebook Link', 'ndis'),
        'section' => 'ndis_header_section',
        'settings' => 'ndis_facebook_handle',
        'description' => __('please enter your facebook link'),
        
    )));

    $wp_customize -> add_setting('ndis_insta_handle',[
        'default' => ''
    ]);

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_insta_handle_input', array(
        'label' => __('Instagram Link', 'ndis'),
        'section' => 'ndis_header_section',
        'settings' => 'ndis_insta_handle',
        'description' => __('please enter your twitter link')
    )));

    $wp_customize -> add_setting('ndis_youtube_handle',[
        'default' => ''
    ]);

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_youtube_handle_input', array(
        'label' => __('Youtube Link', 'ndis'),
        'section' => 'ndis_header_section',
        'settings' => 'ndis_youtube_handle',
        'description' => __('please enter your youtube plus link')
    )));

    $wp_customize -> add_setting('ndis_phone_handle',[
        'default' => ''
    ]);

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_phone_handle_input', array(
        'label' => __('Phone Number', 'ndis'),
        'section' => 'ndis_header_section',
        'settings' => 'ndis_phone_handle',
        'description' => __('please enter your phone number')
    )));

    $wp_customize -> add_setting('ndis_email_handle',[
        'default' => ''
    ]);

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_email_handle_input', array(
        'label' => __('Email Address', 'ndis'),
        'section' => 'ndis_header_section',
        'settings' => 'ndis_email_handle',
        'description' => __('please enter your email address')
    )));

    

     $wp_customize -> add_panel('ndis',[
        'title'=>__('Footer Section', 'ndis'),
        'priority' => 40
     ]);
    $wp_customize-> add_section('ndis_front_section', [
        'title' => __('Details', 'ndis'),
        'priority' => 40,
        'panel' =>  'ndis'
    ]);
    //content
    $wp_customize -> add_setting('ndis_content_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_content_handle_input', array(
        'label' => __('Content', 'ndis'),
        'section' => 'ndis_front_section',
        'settings' => 'ndis_content_handle',
        'type' => 'textarea'
    )));
    //Address
    $wp_customize -> add_setting('ndis_address_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_address_handle_input', array(
        'label' => __('Address', 'ndis'),
        'section' => 'ndis_front_section',
        'settings' => 'ndis_address_handle',
        'type' => 'text'
    )));
    //Phone
    $wp_customize -> add_setting('ndis_phone_content_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_phone_content_handle_input', array(
        'label' => __('Phone Number', 'ndis'),
        'section' => 'ndis_front_section',
        'settings' => 'ndis_phone_content_handle',
        'type' => 'text'
    )));

    //Email
    $wp_customize -> add_setting('ndis_email_content_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_email_content_handle_input', array(
        'label' => __('Email', 'ndis'),
        'section' => 'ndis_front_section',
        'settings' => 'ndis_email_content_handle',
        'type' => 'email'
    )));

    // Images

    $wp_customize-> add_section('ndis_images_section', [
        'title' => __('Footer Logo', 'ndis'),
        'priority' => 50,
        'panel' =>  'ndis'
    ]);

    //image
    $wp_customize -> add_setting('ndis_img_handle',[
        'transport' => 'refresh',
        'height' => 320
    ]);
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'ndis_img_handle_input', array(
        'label' => __('Logo Image', 'ndis'),
        'section' => 'ndis_images_section',
        'settings' => 'ndis_img_handle',
        
    )));

    // $wp_customize -> add_setting('ndis_img1_handle',[
    //     'transport' => 'refresh',
    //     'height' => 320
    // ]);
    // $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'ndis_img1_handle_input', array(
    //     'label' => __('Developed by Image', 'ndis'),
    //     'section' => 'ndis_images_section',
    //     'settings' => 'ndis_img1_handle',
        
    // )));
    

    //copyright  section
    $wp_customize -> add_setting('ndis_copyright_handle',[
        'default' => ''
    ]);
    $wp_customize-> add_control(new WP_Customize_Control($wp_customize, 'ndis_copyright_handle_input', array(
        'label' => __('Copyright', 'ndis'),
        'section' => 'ndis_front_section',
        'settings' => 'ndis_copyright_handle',
        'type' => 'textarea'
    )));

}
add_action('customize_register', 'ndis_customize_register');     
<?php
// Link or enqueue Script and style 
function projukti_theme_scripts(){
    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sen:wght@400..800&display=swap', array(), null);

    // Custom CSS link
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/style.css');

    // Custom Responsive CSS link
    wp_enqueue_style('custom-responsive-style', get_template_directory_uri() . '/assets/css/responsive.css');

    // Slick Slider CSS ad
    wp_enqueue_style('slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    // Style CSS
    wp_enqueue_style('style-css', get_template_directory_uri().'/style.css');
    wp_enqueue_style('style-css', get_stylesheet_uri());

    // Box Icon
    wp_enqueue_style('box-icon', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4');

    // add jQuery
    wp_enqueue_script('jquery');

    // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);

    // Main Js
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts','projukti_theme_scripts');

function projukti_theme_custom_logo() {
	add_theme_support( 'custom-logo', array(
		'height'               => 30,
		'width'                => 80,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => false, 
	));

    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'projukti'),
        'footer_menu_one' => __('Footer Menu One', 'projukti'),
        'footer_menu_two' => __('Footer Menu Two', 'projukti'),
    ));
}
add_action('after_setup_theme', 'projukti_theme_custom_logo');

// Blog Section Start Here
function projukti_blog_register ($wp_customize){

    // Add Section for Blog
    $wp_customize -> add_section('projukti_blog_section', array(
        'title' => __('Blog Section', 'projukti'),
        'priority' => 101,
    ));

    // Add Setting for Blog Title
    $wp_customize -> add_setting('projukti_blog_title', array(
        'default' => 'Title',
    ));

    // Add Control for Blog Title
    $wp_customize -> add_control('projukti_blog_title', array(
        'label' => __('Blog Title', 'projukti'),
        'section' => 'projukti_blog_section',
        'type' => 'text',
    ));

    // Add Setting for Blog Discription
    $wp_customize -> add_setting('projukti_blog_discription', array(
        'default' => 'Description',
    ));

    // Add Control for Blog Title
    $wp_customize -> add_control('projukti_blog_discription', array(
        'label' => __('Blog Discription', 'projukti'),
        'section' => 'projukti_blog_section',
        'type' => 'text',
    ));

}
add_action('customize_register', 'projukti_blog_register');

function projukti_blog_feature(){
    add_theme_support('post-thumbnails');
}
add_action ('after_setup_theme', 'projukti_blog_feature');
// Blog Section Ended Here

// Footer Section start here
function projukti_footer_register ($wp_customize){
    $wp_customize -> add_section('footer_settings', array(
        'title' => __('Footer Settings', 'projukti'),
        'priority' => 102,
    ));

    // Footer Logo
    $wp_customize -> add_setting('footer_logo');
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => __('Footer Logo', 'projukti'),
        'settings' => 'footer_logo',
        'section' => 'footer_settings',
    )));

    // About Text
    $wp_customize -> add_setting('footer_about_text', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_about_text', array(
        'label' => __('About Text', 'projukti'),
        'section' => 'footer_settings',
        'type' => 'textarea',
    ));

    // Social Links
    $socials = ['twitter', 'facebook', 'linkedin', 'instagram'];
    foreach ($socials as $social){
        $wp_customize -> add_setting("footer_{$social}_link", array(
            'default' => '#'
        ));
        $wp_customize -> add_control("footer_{$social}_link", array(
            'label' => sprintf(__('%s URL', 'projukti'), ucfirst($social)),
            'section' => 'footer_settings',
            'type' => 'url',
        ));
    }

    // Footer Menu One Title
    $wp_customize -> add_setting('footer_menu_one_title', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_menu_one_title', array(
        'label' => __('Footer Menu One Title', 'projukti'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Menu Two Title
    $wp_customize -> add_setting('footer_menu_two_title', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_menu_two_title', array(
        'label' => __('Footer Menu Two Title', 'projukti'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Address Title
    $wp_customize -> add_setting('footer_address_title', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_address_title', array(
        'label' => __('Footer Address Title', 'projukti'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Address One title
    $wp_customize -> add_setting('footer_address_one_title', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_address_one_title', array(
        'label' => __('Footer Address One Title'),
        'section' => 'footer_settings',
        'type' => 'text'
        
    ));

    // Footer Address One
    $wp_customize -> add_setting('footer_address_one', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_address_one', array(
        'label' => __('Footer Address One ', 'projukti'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

    // Footer Address two title
    $wp_customize -> add_setting('footer_address_two_title', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_address_two_title', array(
        'label' => __('Footer Address Two Title'),
        'section' => 'footer_settings',
        'type' => 'text', 
    ));

    // Footer Address two
    $wp_customize -> add_setting('footer_address_two', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_address_two', array(
        'label' => __('Footer Address Two ', 'projukti'),
        'section' => 'footer_settings',
        'type' => 'text',
    )); 
    
    // Footer Address three title
    $wp_customize -> add_setting('footer_address_three_title', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_address_three_title', array(
        'label' => __('Footer Address Three Title'),
        'section' => 'footer_settings',
        'type' => 'text', 
    ));
 
    // Footer Address three
    $wp_customize -> add_setting('footer_address_three', array(
        'default' => '',
    ));
    $wp_customize -> add_control('footer_address_three', array(
        'label' => __('Footer Address Three ', 'projukti'),
        'section' => 'footer_settings',
        'type' => 'text',
    ));

}
add_action('customize_register', 'projukti_footer_register');
// Footer section ended here
?>
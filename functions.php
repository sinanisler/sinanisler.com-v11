<?php






add_theme_support( 'post-thumbnails' );


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wp_resource_hints', 2 );
function wps_deregister_styles() {
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );














/*
function theme_customize_register( $wp_customize ) {
    
    //add section
     $wp_customize->add_section( 'header_logo' , array(
    'title'      => __( 'Header Logo MFFFS', 'mytheme' ),
    'priority'   => 30,
    ) );

    //settings
    $wp_customize->add_setting( 'header_logo_image',
    array(
       'default' => '',
       'transport' => 'refresh',
       'sanitize_callback' => 'esc_url_raw'
    )
    );


  //control
 $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo_image',
    array(
       'label' => __( 'Select logo image' ),
       'description' => esc_html__( 'Add logo to header' ),
       'section' => 'header_logo',
       'button_labels' => array( // Optional.
          'select' => __( 'Select Image' ),
          'change' => __( 'Change Image' ),
          'remove' => __( 'Remove' ),
          'default' => __( 'Default' ),
          'placeholder' => __( 'No image selected' ),
          'frame_title' => __( 'Select Image' ),
          'frame_button' => __( 'Choose Image' ),
       )
    )
    ) );



    $wp_customize->add_section( 'example', array(
 
       'title'=> __( 'Add Your Name', 'TextDomain' ),
       'priority' => 201
    ) );
 
    $wp_customize->add_setting( 'setting' );
    $wp_customize->add_control( 'setting', array(
        'id'=> 'id',
        'label' => __( 'First Name:', 'TextDomain' ),
        'section' => 'example'
    ) );




}

add_action( 'customize_register', 'theme_customize_register' );


*/




?>
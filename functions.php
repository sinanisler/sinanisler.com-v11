<?php



register_nav_menus( array(
      'header_menu' => __( 'Header Menu', 'header_menu' ),
) );
 

// Removing some things 
// remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wp_resource_hints', 2 );

// Adding some support things
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array('style','script', ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'wp-block-styles' );





function ss_excerpt_more( $more ) {
   if ( ! is_single() ) {
       $more = sprintf( '...');
   }
   return $more;
}
add_filter( 'excerpt_more', 'ss_excerpt_more' );

function ss_custom_excerpt_length( $length ) {
   return 40;
}
add_filter( 'excerpt_length', 'ss_custom_excerpt_length', 999 );









// Custom Post Type codex_post_type Register
function codex_post_type() {
    $args = array(
        'public'    => true,
        'label'     => 'Codex',
        'menu_icon' => 'dashicons-book',
        'has_archive' => true,
        'supports' =>   array( 'title', 'editor', 'author', 'comments' , 'revisions' , 'custom-fields' )
    );
    register_post_type( 'codex', $args );
}
add_action( 'init', 'codex_post_type' );


// Custom Taxonomy codex-topic Register
function register_codex_topic_taxonomy() {
    $args = array(
        'label'        => 'Codex Topic',
        'public'       => true,
        'rewrite'      => true,
        'hierarchical' => true
    );
     
    register_taxonomy( 'codex-topic', 'codex', $args );
}
add_action( 'init', 'register_codex_topic_taxonomy', 0 );




// Custom Post Type gpl_download Register
function gpl_download() {
    $args = array(
        'public'    => true,
        'label'     => 'GPL Download',
        'menu_icon' => 'dashicons-arrow-down-alt',
        'has_archive' => true
    );
    register_post_type( 'gpl-download', $args );
}
add_action( 'init', 'gpl_download' );



// Custom Taxonomy gpl-topic Register
function register_gpl_topic_taxonomy() {
    $args = array(
        'label'        => 'GPL Topic',
        'public'       => true,
        'rewrite'      => true,
        'hierarchical' => true
    );
     
    register_taxonomy( 'gpl-topic', 'gpl-download', $args );
}
add_action( 'init', 'register_gpl_topic_taxonomy', 0 );




?>
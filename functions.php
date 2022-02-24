<?php

require_once('wp-bootstrap-navwalker.php');





// support post thubnail

add_theme_support( 'post-thumbnails' );

// styles


function add_theme_styles() {

    $version = wp_get_theme()->get('Version');

    // this is url bootstrap css style and put it link head 
  
    // this is url bootstrap css style and put it link head 
    wp_enqueue_style( 'style-bootstrap', get_theme_file_uri('/assits/Framwork/Bootstrap/css/bootstrap.css') , array() , $version , 'all');

    // this is url fontawsome css style and put it link head 
    wp_enqueue_style( 'style-font',get_theme_file_uri('/assits/Framwork/Fontawsome/css/all.css') , array() , $version , 'all');

    
}


// scripts
function add_theme_scripts() {

    $version = wp_get_theme()->get('Version');

    // remove regester jquery 
    wp_deregister_script('jquery');

    // add regester jquery  the same wp-enqueue script arguments
    wp_register_script('jquery', includes_url('js/jquery/jquery.js') , array() , $version , true);

    // iclude jquery scripts
    wp_enqueue_script( 'jquery');

    // this is url bootstrap  style and put it link js scripts
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/assits/Framwork/Bootstrap/js/bootstrap.js'),array('jquery'), $version, true);

    // this is url fontawsome style and put it link js scripts
    wp_enqueue_script( 'Font-js', get_theme_file_uri('/assits/Framwork/Fontawsome/js/all.js') ,array(),$version,true);


}

  add_action( 'wp_enqueue_scripts', 'add_theme_styles' );
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 41,
        'width'                => 122,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

	
add_theme_support( 'custom-logo' );


// regester menu 

 
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_first'  => __( 'footer_first', 'text_domain' ),
            'footer_Secound'  => __( 'footer_Secound', 'text_domain' )
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}


function nav(){
    wp_nav_menu(
        array(
            'theme_location' => 'primary_menu',
            'menu_class'     => 'navbar-nav',
            'container'     => false,
            'depth'    => 2,
            'walker'  => new wp_bootstrap_navwalker()
        )
    );
}

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
        
    return $content;
});


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_filter('wpcf7_autop_or_not', '__return_false');





function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length');

function wpdocs_custom_excerpt_more( $more ) {
    global $post;
    return '
    <div class="more">
        <a class="more-link" href="'. get_permalink($post->ID) . '">  More...</a>
    </div>
    ';
}
add_filter( 'excerpt_more', 'wpdocs_custom_excerpt_more');


function foote_first(){
    wp_nav_menu(
        array(
            'theme_location' => 'footer_first',
            'menu_class'     => 'Foot',
            'container'     => false,
            'depth'    => 2,
        )
    );
}
function footer_secound(){
    wp_nav_menu(
        array(
            'theme_location' => 'footer_Secound',
            'menu_class'     => 'food',
            'container'     => false,
            'depth'    => 2,
        )
    );
}

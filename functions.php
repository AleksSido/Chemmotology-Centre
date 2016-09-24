<?php
/*********
*Chemmotology-Centre functions and definitions
********/

function chemmotology_centre_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'post-thumbnails' );
	load_theme_textdomain( 'chemmotology-centre' );
}
add_action( 'after_setup_theme', 'chemmotology_centre_setup' );

function chemmotology_centre_scripts() {
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap-css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-social-style', get_template_directory_uri() . '/bootstrap-css/bootstrap-social.css' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'chemmotology-centre-style', get_stylesheet_uri() );	
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'chemmotology-centre-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ) );
	wp_enqueue_style( 'google-fonts-lora', 'https://fonts.googleapis.com/css?family=Lora' );
	wp_enqueue_style( 'google-fonts-philosopher', 'https://fonts.googleapis.com/css?family=Philosopher&subset=latin,cyrillic' );
	wp_enqueue_style( 'google-fonts-jura', 'https://fonts.googleapis.com/css?family=Jura&subset=latin,cyrillic' );
	wp_enqueue_style( 'google-fonts-serifcaption', 'https://fonts.googleapis.com/css?family=PT+Serif+Caption&subset=latin,cyrillic' );
	wp_enqueue_style( 'google-fonts-forum', 'https://fonts.googleapis.com/css?family=Forum&subset=latin,cyrillic' );
	wp_enqueue_style( 'google-fonts-comfortaa', 'https://fonts.googleapis.com/css?family=Comfortaa&subset=latin,cyrillic' );
}
add_action( 'wp_enqueue_scripts', 'chemmotology_centre_scripts' );

/**
 * Check whether we are on this page or a sub page
 *
 * @param int $pid Page ID to check against.
 * @return bool True if we are on this page or a sub page of this page.
 * Is got from https://developer.wordpress.org/reference/functions/is_page/
 */
function is_tree( $pid ) {      // $pid = The ID of the page we're looking for pages underneath
    $post = get_post();               // load details about this page
 
    $is_tree = false;
    if ( is_page( $pid ) ) {
        $is_tree = true;            // we're at the page or at a sub page
    }
 
    $anc = get_post_ancestors( $post->ID );
    foreach ( $anc as $ancestor ) {
        if ( is_page() && $ancestor == $pid ) {
            $is_tree = true;
        }
    }
    return $is_tree;  // we arn't at the page, and the page is not an ancestor
}

/**
* function returns slug of the parent page.
* Function is got from https://wordpress.org/support/topic/get-pages-parents-slug-post_name
**/
function the_parent_slug() { 
	global $post; 
	if($post->post_parent == 0) return ''; 
	$post_data = get_post($post->post_parent); 
	echo $post_data->post_name . "/"; 
}

/**
*
*
**/
function lang_icon_href( $lang_icon ) {
	$rel_path = str_replace( home_url(), '', get_permalink() );
	echo $lang_icon . $rel_path;

}
?>
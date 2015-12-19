<?php 

function wpwm_theme_styles() {

	wp_enqueue_style( 'font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Permanent+Marker' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );


}

add_action( 'wp_enqueue_scripts', 'wpwm_theme_styles' );

function wpwm_theme_js() {

	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/main.js', array('jquery'), ' ' , false);

}

add_action( 'wp_enqueue_scripts', 'wpwm_theme_js' );

?>
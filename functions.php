<?php 

// Javascript有効にするための記述
function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/top.js',
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');
/**
* 固定ページのみ自動整形機能を無効化します。
*/
function disable_page_wpautop() {
if ( is_page() ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );

/* HOMEのURLをショートコードで表示
**********************************************/
add_shortcode( 'hurl', 'shortcode_homeurl' );
function shortcode_homeurl( $atts, $content = "" ) {
return esc_url( home_url() ).$content;
}
/* テンプレートURLをショートコードで表示
**********************************************/
add_shortcode( 'tp', 'shortcode_tp' );
function shortcode_tp( $atts, $content = "" ) {
return get_template_directory_uri().$content;
}
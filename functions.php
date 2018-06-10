<?php
//llamar a nuestro menu
if(function_exists('register_nav_menus')){
	register_nav_menus( array('superior' => 'Menú pricipal superior') );
}

//aqui clase para la ancal
add_filter('nav_menu_link_attributes','classe_menu_a',10,3);
function classe_menu_a($atts,$items,$args){
	$class = 'nav-link';
	$atts['class'] = $class;
	return $atts;
}

//thumbmails imatges destacades en noticies
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
 }



?>
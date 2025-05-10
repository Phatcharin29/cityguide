<?php function get_component($path) {
  return include get_stylesheet_directory(  ) . "/components" . $path;
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

function enqueue_styles() {
	wp_enqueue_style( 'cg-style', get_stylesheet_uri());
	wp_enqueue_style( 'phosphor-icons', get_stylesheet_directory_uri(  ).'/library/phosphor-icons/regular.css');
	wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri(  ).'/library/swiper/swiper.min.css');
	wp_enqueue_script( 'swiper-js', get_stylesheet_directory_uri(  ).'/library/swiper/swiper-bundle.min.js');
	wp_enqueue_script( 'cg-script', get_stylesheet_directory_uri(  ).'/script.js', [], '', [
		'in_footer' => true,
		'strategry' => 'defer'
	]);
}

function register_theme_menu() {
	$menus = [
    'Main Menu' => __( 'Main Menu', '' ),
		'Subnav Lvl 2' => __( 'Subnav Lvl 2', '' ),
		'Subnav Lvl 3' => __( 'Subnav Lvl 3', '' ),
		'Footer' => __( 'Footer', '' ),
		'Bottom' => __( 'Bottom', '' ),
	];
	register_nav_menus( $menus );
}
add_action( 'init', 'register_theme_menu' );
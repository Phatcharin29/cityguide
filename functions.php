<?php function get_component($path, $data = null, $return = false) {
  $fullPath = get_stylesheet_directory(  ) . "/components" . $path;

	if ($return) {
		ob_start();
		include $fullPath;
		return ob_get_clean();
	} else {
			include $fullPath;
	}
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

function set_query_defaults( $query ) {
	if ( !is_admin() && $query->is_main_query() && $query->is_archive() ) {
			$query->set( 'posts_per_page', 26 );
			$query->set( 'paged', get_query_var('paged') ? get_query_var('paged') : 1);
	}
}
add_action( 'pre_get_posts', 'set_query_defaults' );

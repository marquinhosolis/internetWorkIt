<?php
	
	// add post thumbnails
	add_theme_support( 'post-thumbnails' ); 
	
	// register menu
	function register_my_menus() {
		register_nav_menus(
			array(
			'header-menu' => __( 'Header Menu' )
			//'extra-menu' => __( 'Extra Menu' )
		)
		);
	}
	add_action( 'init', 'register_my_menus' );

	// Filter except length to 25 words.
	function tn_custom_excerpt_length( $length ) {
		return 25;
	}
	add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

	// remove brackets from excerpt
	function new_excerpt_more( $more ) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	// function to sort cover bg image
	function teste($imgArr){
		$countArr = count($imgArr);
		$imgSort = rand(0, $countArr - 1);
		$imgCover = $imgArr[$imgSort]['cover_background_image'];
		return $imgCover;
	}
?>
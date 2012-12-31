<?php

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'less' ),
) );


/*-----------------------------------------------------------------------------------*/
/* Enque Styles and scripts
/*-----------------------------------------------------------------------------------*/

function less_scripts()  { 

	// theme styles
	wp_register_style( 'less-style', get_template_directory_uri() . '/style.css', '10000', 'all' );
	wp_enqueue_style( 'less-style' );
	
	// include jquery
	wp_enqueue_script( 'jquery' );
		
	// add fitvid
	wp_enqueue_script( 'less-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.0', true );
	
  
}
add_action('wp_enqueue_scripts', 'less_scripts');


?>
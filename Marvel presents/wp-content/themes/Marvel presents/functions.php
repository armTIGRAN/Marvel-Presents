<?php  

function connect_resources(){
	wp_enqueue_style("style", get_stylesheet_uri() );
}

add_action("wp_enqueue_scripts", "connect_resources");

function custom_excerpt_length(){
	return 22;
}

add_filter("excerpt_length", "custom_excerpt_length");


function custom_theme_setup(){

	// navigation menu
	register_nav_menus( array(
		"top_menu" => __("Top Menu"),
		"social_menu" => __("Socia links"),
	));

	// add featured image
	add_theme_support("post-thumbnails");

	// add post format
	add_theme_support("post-formats", array("aside", "link", "gallery", "video") );

	add_image_size('small-img', 180, 120, true);
	add_image_size('cover', 1000, 200, array("left", "center") );
}

add_action("after_setup_theme", "custom_theme_setup");


function widgetsInit(){

	register_sidebar( array(
		"id" => "Sidebar1",
		"name" => "Sidebar1",
		"before_widget" => "<div class='muraba'>",
		"after_widget" => "</div>"
	) );

	register_sidebar( array(
		"id" => "sidebar2",
		"name" => "Sidebar2",
		"before_widget" => "<div class='muraba2'>",
		"after_widget" => "</div>"
	) );
}

add_action("widgets_init", "widgetsInit");





?>
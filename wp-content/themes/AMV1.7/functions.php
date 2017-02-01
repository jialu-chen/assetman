<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


function add_isotope() {
    wp_register_script( 'isotope', get_template_directory_uri().'/js/isotope.pkgd.min.js', array('jquery'),  true );
    wp_register_script( 'isotope-main', get_template_directory_uri().'/js/main.js', array('jquery', 'isotope'),  true );
 
    wp_enqueue_script('isotope-main');
    wp_enqueue_style('isotope');
}
 
add_action( 'wp_enqueue_scripts', 'add_isotope' );

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI']);

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>
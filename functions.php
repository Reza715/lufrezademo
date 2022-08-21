<?php //functions.php always loaded before index.html

//variable

//includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));
include(get_theme_file_path('/includes/setup.php'));

//hooks
add_action('wp_enqueue_scripts','u_enqueue'); //prioriiyy is 10 by default
add_action('wp_head', 'u_head',5); //wp is event that runs when head element is created priority is 5
add_action('after_setup_theme','u_setup_theme');//event that runs after our theme has been loaded
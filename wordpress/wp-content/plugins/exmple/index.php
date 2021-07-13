<?php
/*
 * Plugin Name: example plugin

Plugin URI: http://127.0.0.1/wordpress/wp-admin

Description: plugin to example

Version:  version 5.7.3

Author: Zluf Ruth

Author URI: ruthzluf@gmail.com

 */


function print_hello_world_title()  {
    echo "<h1>Hello World</h1>";
}
function hello_world_admin_menu()  {

    add_menu_page(
    'Hello World',// page title
    'Hello World Menu Title',// menu title
    'manage_options',// capability
    'hello-world',// menu slug
    'print_hello_world_title'  // callback function
  );  
}  
add_action( 'admin_menu', 'hello_world_admin_menu' );
?>

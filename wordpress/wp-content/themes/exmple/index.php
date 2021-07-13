<?php
/*
Theme Name: exampletheme
Author: Zluf Ruth
Author URI: ruthzluf@gmail.com
Version: 1.0
 */
function add_stylesheet_student()
{
    // Respects SSL, Style.css is relative to the current file
    wp_register_style('prefix-style-student', plugins_url('style.css', __FILE__), array(), rand(111, 9999), 'all');
    wp_enqueue_style('prefix-style-student');
}
add_action('wp_enqueue_scripts', 'add_stylesheet_student');

?>
<h1 class="h1">תבנית לדוגמא</h1>
<link href="style.css" rel="stylesheet">
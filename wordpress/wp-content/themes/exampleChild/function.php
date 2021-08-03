<?php

//function enqueue_parent_styles()
//{
// You have to look up the parent theme’s stylesheet handle
// How to do this is covered later in the tutorial
    $parenthandle = ’parent - style’;
// Double check this is the correct stylesheet location for the parent
    wp_enqueue_style($parenthandle, get_template_directory_uri() . ’ / style . css’);
//}

//add_action(’wp_enqueue_scripts’, ’enqueue_parent_styles’);
?>
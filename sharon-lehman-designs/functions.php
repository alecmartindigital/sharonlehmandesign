<?php

function sharonlehman_register_styles(){
    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('sharonlehman-stylesheet', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('sharonlehman-fontawesom', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css", array(), '5.14.0', 'all');

}
add_action('wp_enqueue_scripts', 'sharonlehman_register_styles');

function sharonlehman_register_scripts(){
    
    wp_enqueue_script('sharonlehman_script',  get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'sharonlehman_register_scripts');
?>
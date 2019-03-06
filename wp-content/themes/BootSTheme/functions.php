<?php

function load_stylesheets(){

    //Commented out due to conflicts with NavBar
    /*wp_register_style('stylesheet1', get_template_directory_uri() .'/css/bootstrap.min.css', array(), false,
        'all');
    wp_enqueue_style('stylesheet1');

    wp_register_style('stylesheet2', get_template_directory_uri() .'/css/bootstrap-grid.min.css', array(), false,
        'all');
    wp_enqueue_style('stylesheet2');

    wp_register_style('stylesheet3', get_template_directory_uri() .'/css/bootstrap-reboot.min.css', array(), false,
        'all');
    wp_enqueue_style('stylesheet3');
    */
    wp_register_style('navbar', get_template_directory_uri() .'/css/navbar.css', array(), false,
        'all');
    wp_enqueue_style('navbar');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function loadjs(){

    wp_register_script('BootstrapJS', get_template_directory_uri().'/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('BootstrapJS');

}

add_action('wp_enqueue_scripts', 'loadjs');

function includeJQ(){
    wp_deregister_script('JQuery');
    wp_register_script('JQuery', get_template_directory_uri().'/js/JQuery.js', '', 1, true);
    wp_enqueue_script('JQuery');
}

add_action('wp_enqueue_scripts', 'includeJQ');

?>


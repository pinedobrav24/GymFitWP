<?php

function gf_setup(){
    //imagen destacada
    add_theme_support('post-thumbnails');

    //Titulos para SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme','gf_setup');

function gf_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal','gymfitness'),
        'menu-top' => __('Menu top','gymfitness'),
        'redes-sociales' => __('Redes Sociales','gymfitness')
    ) );
}

add_action('init','gf_menus');

function gf_scripts_styles(){
    wp_enqueue_style('normalize', get_stylesheet_uri(), array(),'8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'),'1.0.0');  //nombre de hoja de estilos, ubicacion, paginas previas, version
    
}

add_action('wp_enqueue_scripts', 'gf_scripts_styles');


?>
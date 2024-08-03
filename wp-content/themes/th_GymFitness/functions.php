<?php

//habilitar widgets
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

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
    //Archivos css
    wp_enqueue_style('normalize', get_stylesheet_uri(), array(),'8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'),'1.0.0');  //nombre de hoja de estilos, ubicacion, paginas previas, version
    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css',array(),'2.11.3');
    /*wp_enqueue_style('swiper_css',get_template_directory_uri(). '/css/swiper-blundle.min.css',array(),'11.1.8');*/
    wp_enqueue_style('swiper_css','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',array(),'11.1.8');


    //Archivos js
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js',array('jquery'),'2.11.3',true);
    /*wp_enqueue_script('swiper_js',get_template_directory_uri(). '/js/swiper-blundle.min.js',array(),'11.1.8',true);*/
    wp_enqueue_script('swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',array(),'11.1.8',true);
    wp_enqueue_script('scripts',get_template_directory_uri() . '/js/scripts.js',array('swiper_js'),'1.0.0',true);
}

add_action('wp_enqueue_scripts', 'gf_scripts_styles');

// DEFINIR ZONA DE WIDGETS

function gf_widgets(){
    register_sidebar(array(
        'name'=>'sidebar 1',
        'id'=>'sidebar_1',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3 class="text-center text-primary">',
        'after_title'=>'</h3>'
    ));

    register_sidebar(array(
        'name'=>'sidebar 2',
        'id'=>'sidebar_2',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3 class="text-center text-primary">',
        'after_title'=>'</h3>'
    ));
    }
add_action('widgets_init','gf_widgets'); //habilita zona de widgets

function gf_ubicacion_shortcode(){
    ?>
    <div class="mapa">
        <?php
            if(is_page('contacto')){
                the_field('ubicacion');
            }
        ?>
    </div>
    <h2 class="text-primary text-center ">Formulario</h2>
    <?php
    echo do_shortcode('[contact-form-7 id="de545ef" title="Contact form 1"]');
}

add_shortcode( 'gf_ubicacion','gf_ubicacion_shortcode' );

/* ---- Imagenes dinamicas como BG ---*/

function gf_hero_imagen(){
    //obtener el id de la pagina
    $front_id=get_option('page_on_front');
    
    //obtener el id de la imagen
    $id_imagen=get_field('hero_imagen',$front_id);
    
    //obtener la ruta de la imagen
    $imagen=wp_get_attachment_image_src($id_imagen,'full')[0];
    
    //crear css
    wp_register_style('custom',false);  //hoja virtual en donde archivo de hoja de estilos
    wp_enqueue_style('custom');

    $imagen_destacada_css="
        body.home .header{
            background-image:linear-gradient(rgb(0 0 0 / .70),rgb(0 0 0 / .70)),url($imagen);
        }
    ";
    //inyectar css a la imagen

    wp_add_inline_style('custom',$imagen_destacada_css);
}

add_action('init','gf_hero_imagen');


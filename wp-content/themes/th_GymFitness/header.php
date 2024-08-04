<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">       
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <a href="<?php echo site_url('/');?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
                </a>
                
            </div>
            <div class="hambuger-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="64" height="64" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </div>

            <div class="contenedor-menu">
                <nav>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-principal', //memu
                                'menu_class' => 'menu-principal', //clase
                                'container' => 'ul',  //tipo de contenedor
                                'depth'=>2,
                                )
                            );
                    ?>
                </nav> 
            </div>
            
        </div> 

        <!-- validar si la pagina que esta llamando al header es el front-page (pagina de inicio) !-->
        <?php
            if(is_front_page()){ ?>
              <div class="tagline text-center contenedor">
                <h1 class="ml11">
                    <span class="text-wrapper">
                        <span class="line line1"></span>
                        <span class="letters"><?php the_field('hero_heading');?></span>
                    </span>
                </h1>
                <p><?php the_field('hero_texto');?></p>
              </div>  
        <?php } ?>       
    </header>
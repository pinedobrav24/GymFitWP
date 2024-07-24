<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">       
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <a href="<?php site_url('/');?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
                </a>
                
            </div>
            

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
    </header>
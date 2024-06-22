<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">       
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
            </div>
            
            <?php
                $args = array(
                    'theme_location'=>'menu-principal', //memu
                    'container'=>'nav',  //tipo de contenedor
                    'container'=>'menu-principal' //clase
                );

                wp_nav_menu($args); //especificar el menú incluido en el args
            ?>

        </div> 
    </header>
    <main>
            <?php
                while(have_posts()):the_post(  );
                    the_title();
                    the_content();
                endwhile;

            ?>
    </main>
</body>
</html>
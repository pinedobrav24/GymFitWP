<footer class="footer contenedor">

    <hr>
    <div class="contenido-footer">
        
        <?php
            $args = array(
                'theme_location' => 'menu-principal', //memu
                'container' => 'nav',  //tipo de contenedor
                'container_class' => 'menu-principal' //clase
            );

            wp_nav_menu($args); //especificar el menú incluido en el args
        ?> 
           
        <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y') ?></p>

    </div>
</footer>
 <?php wp_footer(); ?>
</body>
</html>
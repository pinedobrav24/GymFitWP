<?php
 get_header();
?>

    <main class="contenedor seccion con-sidebar">
        <section class="contenido-principal">
            <?php
                get_template_part('template-parts/clase');
            ?>
        </section>
        <?php
            get_sidebar('clases'); //para llamar a sidebar-$clases.php
        ?>
            
    </main>
        <?php  
            get_footer();
        ?>
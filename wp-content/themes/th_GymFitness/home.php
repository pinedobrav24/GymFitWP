<?php
 get_header();
?>          
    <main class="contenedor seccion">
        <ul class="listado-grid">
            <?php
                while(have_posts()):the_post();
                    get_template_part('template-parts/blog');
                endwhile;
            ?>
        </ul>
        <?php
            the_posts_pagination();
        ?>
    </main>
        <?php  
            get_footer();
        ?>

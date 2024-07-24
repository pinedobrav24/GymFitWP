<?php
    function gf_lista_clases($cantidad=-1){
        ?>
        <ul class="listado-grid">
                <?php
                    $args=array(
                        'post_type'=>'gf_clases',   //cargar en un array el post_type gf_clases
                         'posts_per_page'=>$cantidad 
                    );

                    $clases=new WP_Query($args); //recorrer el array con una consulta y guardamos en una variable

                    while($clases->have_posts()){
                        $clases->the_post();
                ?>
                    <li class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="contenido">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title();?></h3>
                            </a>
                            <?php
                                $hora_inicio=get_field('hora_de_inicio');
                                $hora_fin=get_field('hora_de_fin');
                            ?>
                            <p>
                                <?php the_field('dias_clase'); ?> - 
                                <?php echo $hora_inicio . " a " . $hora_fin; ?>
                            </p>
                        </div>
                    </li>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
           </ul>
        <?php  
    }
?>
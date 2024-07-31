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

    function gf_instructores($cantidad=-1){
        ?>
        <ul class="listado-grid">
                <?php
                    $args=array(
                        'post_type'=>'instructores',   //cargar en un array el post_type gf_clases
                         'posts_per_page'=>$cantidad 
                    );

                    $instructores=new WP_Query($args); //recorrer el array con una consulta y guardamos en una variable

                    while($instructores->have_posts()){
                        $instructores->the_post();
                ?>
                    <li class="instructor">
                        <?php the_post_thumbnail('large'); ?>
                        <div class="contenido text-center">
                            <h3><?php the_title();?></h3>
                            <?php the_content();?>
                            <div class="especialidad">
                                <?php 
                                    $esp=get_field('especialidad');
                                    foreach ($esp as $e){ ?>
                                        <span class="etiqueta">
                                            <?php echo esc_html($e); ?>
                                        </span>
                                        
                                   <?php }?>
                            </div>
                           
                        </div>
                    </li>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
           </ul>
        <?php  
    }

    function gf_testimoniales($cantidad=-1){
        ?>
            <ul class="listado-testimoniales swiper-wrapper">
                <?php
                    $args=array(
                        'post_type'=>'testimoniales',   //cargar en un array el post_type gf_clases
                         'posts_per_page'=>$cantidad 
                    );

                    $testimoniales=new WP_Query($args); //recorrer el array con una consulta y guardamos en una variable

                    while($testimoniales->have_posts()){
                        $testimoniales->the_post();
                ?>
                    <li class="testimonial text-center swiper-slide">
                        <blockquote>
                            <?php the_content();?>
                        </blockquote>
                        <footer class="testimonial-footer">
                            <?php the_post_thumbnail('thumbnail');?>
                            <p><?php the_title();?></p>
                        </footer>
                    </li>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
           </ul>
        <?php
    }
?>
<?php

if(!defined('ABSPATH')) die();

class GF_Clases_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'gf_widget',
			esc_html__( 'GF Clases', 'gymfitness' ), //nombre del widget y dominio
			array( 'description' => esc_html__( 'Agrega las Clases como Widget', 'gymfitness' ), )
		);
	}

	public function widget( $args, $instance ) {
        ?>
        <ul class="clases-sidebar">
            <?php
                 $args=array(
                    'post_type'=>'gf_clases',  //cargar en un array el post_type gf_clases
                    'posts_per_page'=>$instance['cantidad'] //limita resultados por la cantidad ingresada 
                );

                $clases=new WP_Query($args); //recorrer el array con una consulta y guardamos en una variable
                while($clases->have_posts()){
                    $clases->the_post();
            ?>
            <li>
                <div class="imagen">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>
                <div class="contenido-clase">
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

    public function form( $instance ) {
        //agregando formulario al widget
        $cantidad =!empty($instance['cantidad']) ? $instance['cantidad']: esc_html( '¿Cuántas clases deseas mostrar?');
        ?> <!-- si esta vacia la variable instancia entonces cantidad = instancia->cantidad sino es asi entonces preguntar !-->

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cantidad')) ?>"> <!--declara donde se almacenara el valor->field(cantidad)-!>
                <?php esc_attr_e( '¿Cuántas clases deseas mostrar?' )?> imprime texto !-->
            </label>
            <input
                class="widefat"
                id="<?php echo esc_attr($this->get_field_id('cantidad')) ?>"
                name="<?php echo esc_attr($this->get_field_name('cantidad')) ?>"
                type="number"
                value="<?php echo esc_attr($cantidad)?>"
            />
        </p>

        <?php
   	}

	public function update( $new_instance, $old_instance ) {
        //guardando dato ingresado
        $instance=array();
        $instance['cantidad']=(!empty($new_instance['cantidad'])) ? sanitize_text_field($new_instance['cantidad']):'';
        return $instance;
	}
} 

function gf_registrar_widget() {
    register_widget( 'GF_Clases_Widget' );
}
add_action('widgets_init', 'gf_registrar_widget');
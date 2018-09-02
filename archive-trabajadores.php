<?php get_header(); ?>

<div class="page-content-wrapper ">
    <div class="content">
        <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Trabajadores</li>
                </ol>
                <!-- END BREADCRUMB -->
              </div>
            </div>
        </div>

        <div class=" container-fluid   container-fixed-lg">












<?php
$trabajadores = array(
        'numberposts'       => -1,
        'posts_per_page'    => -1,
        'post_type'         => 'trabajadores',
        'order'             => 'desc'     
                );



$the_query = new WP_Query( $trabajadores );  
if( $the_query->have_posts() ):    ?>

        <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">Trabajadores
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Buscar">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
        </div>


              <div class="card-block">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th style="min-width:50px">#</th>
                      <th>Nombre completo</th>
                      <th>Estatus</th>
                      <th style="min-width:300px">Área</th>
                      <th>Fecha de inicio</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>




<?php

 while ( $the_query->have_posts() ) : $the_query->the_post();
        $miID  = get_the_ID();
        $comprobante_banco = get_field('comprobante_de_pago_2018');
        $comprobante_paypal = get_field('comprobante_de_pago_paypal_2018'); 
        $requierefactura  = get_field('factura');
        $validar_pago_2018 = get_field('validar_pago_2018');
        $validar_pago_2018 = get_field('validar_pago_2018');

        ?>

                    <tr>
                      <td class="v-align-middle semi-bold">
                        <p><?php the_field('trabajador_id'); ?></p>
                      </td>
                      <td class="v-align-middle semi-bold">
                        <p><?php the_field('nombres'); ?> <?php the_field('paterno'); ?> <?php the_field('materno'); ?></p>
                      </td>
                      <td class="v-align-middle"><?php the_field('estatus'); ?></td>
                      <td class="v-align-middle">
                        <?php the_field('area_de_trabajo'); ?>
                      </td>
                      <td class="v-align-middle">
                        <?php the_field('fecha_de_contratacion'); ?>
                      </td>
                      <td><a href="<?php the_permalink(); ?>">Ver</a></td>

                    </tr>
   
<?php

 endwhile; ?>




                  </tbody>
                </table>
            </div>
        
<?php
    // If no content, include the "No posts found" template.
        else :
        //  get_template_part( 'template-parts/content', 'none' );
?>
<?php  endif; ?>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>


        </div>

        </div>
    </div>
</div>
     
<?php get_footer(); ?>
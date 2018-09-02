<?php get_header(); ?>

<div class="page-content-wrapper ">
    <div class="content">
      
      <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">         
          <ul class="breadcrumb p-l-0">
            <li class="breadcrumb-item"><a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Trabajadores
            </li>
          </ul>                
          <h3 class="page-title">Trabajadores</h3>
      </div>
      
      <div class=" container-fluid   container-fixed-lg">


<?php
$trabajadores = array(
        'numberposts'       => -1,
        'posts_per_page'    => -1,
        'post_type'         => 'trabajadores',
        'orderby'           => 'title',
        'order'             => 'asc'     
                );



$the_query = new WP_Query( $trabajadores );  
if( $the_query->have_posts() ):    ?>


              <div class="card-block">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th style="max-width:50px;">ID</th>
                      <th style="min-width:400px;">Nombre completo</th>
                      <th style="min-width:250px;" class="text-center">Estatus</th>
                      <th style="min-width:250px;" class="text-center">Área</th>
                      <th style="min-width:150px;" class="text-center">Fecha de inicio</th>
                      <th style="min-width:50px;"></th>
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
                        <p><a href="<?php the_permalink(); ?>"><?php the_field('trabajador_id'); ?></a></p>
                      </td>
                      <td class="v-align-middle semi-bold">
                        <p><a href="<?php the_permalink(); ?>"><?php the_field('nombres'); ?> <?php the_field('paterno'); ?> <?php the_field('materno'); ?></a></p>
                      </td>
                      <td class="v-align-middle  text-center">                                                    
                        <?php $estatus = get_field('estatus'); 
                                                    if ($estatus == 'Activo') { echo '<i class="far fa-check-circle text-success fs-16 m-t-10"></i>'; }   
                                                    if ($estatus == 'Baja') { echo '<i class="fa fa-times-circle text-danger fs-16 m-t-10"></i> '; } ?><a href="<?php the_permalink(); ?>"> <?php the_field('estatus'); ?></a></td>
                      <td class="v-align-middle">
                      <a href="<?php the_permalink(); ?>"><?php the_field('area_de_trabajo'); ?></a>
                      </td>
                      <td class="v-align-middle">
                      <a href="<?php the_permalink(); ?>"><?php the_field('fecha_de_contratacion'); ?></a>
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
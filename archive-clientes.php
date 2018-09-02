<?php get_header(); ?>

<div class="page-content-wrapper ">
    <div class="content">
        <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Clientes</li>
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
        'post_type'         => 'clientes',
        'order'             => 'desc'     
                );



$the_query = new WP_Query( $trabajadores );  
if( $the_query->have_posts() ):    ?>

        <div class="card card-transparent">
              <div class="card-header ">
                <div class="card-title">Clientes
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
                      <th style="min-width:900px">Empresa</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>




<?php
$contador = 1;
 while ( $the_query->have_posts() ) : $the_query->the_post();
        $miID  = get_the_ID();
        ?>

                    <tr>
                      <td class="v-align-middle semi-bold" style="max-width:50px">
                        <p><?php echo $contador; $contador = $contador + 1; ?></p>
                      </td>
                      <td class="v-align-middle semi-bold">
                        <p><?php the_field('nombre'); ?> </p>
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
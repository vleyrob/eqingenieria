<?php get_header(); ?>
<div class="content ">
    <div class="social-wrapper">
        <div class="social " data-pages="social">

              <!-- END JUMBOTRON -->
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="feed">
                    <div class="day" data-social="day" style="position: relative; width: 1260px; height: 1104.62px;">
                        <div class="card no-border bg-transparent full-width" data-social="item" style="position: absolute; left: 0px; top: 0px;">
                            <div class="container-fluid p-t-30 p-b-30 ">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="container-xs-height">
                                            <div class="row-xs-height">
                                                <div class="social-user-profile col-xs-height text-center col-top">
                                                    <div class="thumbnail-wrapper d48 circular bordered b-white">
                                                        <img alt="Avatar" width="55" height="55" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar_small2x.jpg">
                                                    </div>
                                                    <br>
                                                    <?php $estatus = get_field('estatus'); 
                                                    if ($estatus == 'Activo') { echo '<i class="far fa-check-circle text-success fs-16 m-t-10"></i> ' . $estatus; }   
                                                    if ($estatus == 'Baja') { echo '<i class="fa fa-times-circle text-danger fs-16 m-t-10"></i> ' . $estatus; } ?>
                                                </div>
                                                <div class="col-xs-height p-l-20">
                                                    <h3 class="no-margin p-b-5"><span><?php the_field('trabajador_id');?></span><strong> <?php the_field('nombres');?> <?php the_field('paterno');?> <?php the_field('materno');?></strong></h3>
                                                    <p class="no-margin fs-16">Empresa: <?php the_field('empresa');?></p>
                                                    <p class="hint-text m-t-5 small">Área de trabajo: <?php the_field('area_de_trabajo');?> | <?php the_field('puesto');?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
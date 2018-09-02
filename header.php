<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>EQ Ingenieria</title>
        <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="<?php echo get_template_directory_uri(); ?>/pages/css/pages.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo get_template_directory_uri(); ?>/pages/css/themes/corporate.css" rel="stylesheet" type="text/css"  />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-6425672-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-6425672-1');
</script>

  </head>


<?php $current_user_id = get_current_user_id();  ?>
<?php if (is_user_logged_in()) {  ?>
    <body class="fixed-header dashboard">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">

        <?php /* <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.png" alt="logo" class="brand" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white.png" data-src-retina="<?php echo get_template_directory_uri(); ?>/assets/img/logo_white_2x.png" width="78" height="22"> */ ?>
        <?php /* <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20 hidden-md-down" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link hidden-md-down" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button> */ ?>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="<?php echo get_site_url(); ?>" class="detailed">
              <span class="title">Inicio</span>

            </a>
            <span class="bg-success icon-thumbnail"><i class="pg-home"></i></span>
          </li>
          <li class="">
            <a href="<?php echo get_site_url(); ?>/trabajadores" class="detailed">
              <span class="title">(<?php wp_contador_post('trabajadores'); ?>) Trabajadores</span>
              <!--span class="details"> Activos</span-->
            </a>
            <span class="icon-thumbnail"><i class="fas fa-users"></i></span>
          </li>
          <li class="">
            <a href="<?php echo get_site_url(); ?>/clientes" class="detailed">
              <span class="title">(<?php wp_contador_post('clientes'); ?>) Clientes</span>
              <!--span class="details"> Activos</span -->
            </a>
            <span class="icon-thumbnail"><i class="far fa-address-book"></i></span>
          </li>          
          <li class="">
            <a href="<?php echo get_site_url(); ?>/proveedores" class="detailed">
              <span class="title">(<?php wp_contador_post('proveedores'); ?>) Proveedores</span>
            </a>
            <span class="icon-thumbnail"><i class="far fa-handshake"></i></span>
          </li>
          <li class="">
            <a href="<?php echo get_site_url(); ?>/cotizaciones" class="detailed">
              <span class="title">(<?php wp_contador_post('cotizaciones'); ?>) Cotizaciones</span>
            </a>
            <span class="icon-thumbnail"><i class="fas fa-calculator"></i></i></span>
          </li>
          <li class="">
            <a href="#" class="detailed">
              <span class="title"> (<?php wp_contador_post('facturas'); ?>) Facturación</span>
            </a>
            <span class="icon-thumbnail"><i class="fas fa-money-check-alt"></i></span>
          </li>                                    
          <li>
            <a href="#"><span class="title">Reportes</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="fas fa-poll"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="#">Ingresos</a>
                <span class="icon-thumbnail"><i class="far fa-money-bill-alt"></i></span>
              </li>
              <li class="">
                <a href="#">Egresos</a>
                <span class="icon-thumbnail"><i class="fas fa-money-bill-alt"></i></span>
              </li>
            </ul>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>


   
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
          <div class="brand inline   m-l-10">
            <?php /* img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" data-src-retina="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2x.png" width="78" height="22"> */ ?>
          </div>
          <!-- START NOTIFICATION LIST -->
          <?php /*<ul class="hidden-md-down notification-list no-margin hidden-sm-down b-grey b-l b-r no-style p-l-30 p-r-20">
            <li class="p-r-10 inline">
              <div class="dropdown">
                <a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
                  <span class="bubble"></span>
                </a>
                <!-- START Notification Dropdown -->
                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                  <!-- START Notification -->
                  <div class="notification-panel">
                    <!-- START Notification Body-->
                    <div class="notification-body scrollable">
                      <!-- START Notification Item-->
                      <div class="notification-item unread clearfix">
                        <!-- START Notification Item-->
                        <div class="heading open">
                          <a href="#" class="text-complete pull-left">
                            <i class="pg-map fs-16 m-r-10"></i>
                            <span class="bold">Carrot Design</span>
                            <span class="fs-12 m-l-10">David Nesr</span>
                          </a>
                          <div class="pull-right">
                            <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                              <div><i class="fa fa-angle-left"></i>
                              </div>
                            </div>
                            <span class=" time">few sec ago</span>
                          </div>
                          <div class="more-details">
                            <div class="more-details-inner">
                              <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                                            distinguishes between <br>
                                                            A leader and a follower.”</h5>
                              <p class="small hint-text">
                                Commented on john Smiths wall.
                                <br> via pages framework.
                              </p>
                            </div>
                          </div>
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- START Notification Body-->
                      <!-- START Notification Item-->
                      <div class="notification-item  clearfix">
                        <div class="heading">
                          <a href="#" class="text-danger pull-left">
                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                            <span class="bold">98% Server Load</span>
                            <span class="fs-12 m-l-10">Take Action</span>
                          </a>
                          <span class="pull-right time">2 mins ago</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                      <!-- START Notification Item-->
                      <div class="notification-item  clearfix">
                        <div class="heading">
                          <a href="#" class="text-warning-dark pull-left">
                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                            <span class="bold">Warning Notification</span>
                            <span class="fs-12 m-l-10">Buy Now</span>
                          </a>
                          <span class="pull-right time">yesterday</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                      <!-- START Notification Item-->
                      <div class="notification-item unread clearfix">
                        <div class="heading">
                          <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                            <img width="30" height="30" data-src-retina="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/1x.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/1.jpg" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/1.jpg">
                          </div>
                          <a href="#" class="text-complete pull-left">
                            <span class="bold">Revox Design Labs</span>
                            <span class="fs-12 m-l-10">Owners</span>
                          </a>
                          <span class="pull-right time">11:00pm</span>
                        </div>
                        <!-- START Notification Item Right Side-->
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                          <a href="#" class="mark"></a>
                        </div>
                        <!-- END Notification Item Right Side-->
                      </div>
                      <!-- END Notification Item-->
                    </div>
                    <!-- END Notification Body-->
                    <!-- START Notification Footer-->
                    <div class="notification-footer text-center">
                      <a href="#" class="">Read all notifications</a>
                      <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                        <i class="pg-refresh_new"></i>
                      </a>
                    </div>
                    <!-- START Notification Footer-->
                  </div>
                  <!-- END Notification -->
                </div>
                <!-- END Notification Dropdown -->
              </div>
            </li>

          </ul> */ ?>
          <!-- END NOTIFICATIONS LIST -->
          
        </div>
        <div class="d-flex align-items-center">
          <!-- START User Info-->
          <?php 
      $user_info = get_userdata(get_current_user_id());
      $first_name = $user_info->first_name;
      $last_name = $user_info->last_name;
      
?>
          <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
           Bienvenido/a  <span class="semi-bold"><?php echo $first_name; ?></span> <span class="text-master"><?php echo  $last_name; ?></span>
          </div>
 
        </div>
      </div>

      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
<?php } ?>
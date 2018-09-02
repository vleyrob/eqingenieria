<?php if (is_user_logged_in()) {  ?>      
      <div class=" container-fluid  container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2018 </span>
              <span class="font-montserrat">EQIngenieria</span>.
              <span class="hint-text">Todos los derechos reservados. </span>

            </p>
            <p class="small no-margin pull-right sm-pull-reset">
                            <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Términos de uso</a> <span class="muted">|</span> <a href="#" class="m-l-10">Políticas de privacidad</a></span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" data-src-retina="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar.jpg" data-src-retina="<?php echo get_template_directory_uri(); ?>/assets/img/profiles/avatar2x.jpg" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>


    <?php } ?>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/classie/classie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/mapplic/js/hammer.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/mapplic/js/mapplic.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/rickshaw/rickshaw.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/skycons/skycons.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dashboard.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>
  <!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/png">
    <title>Sistema de Campeonatos</title>
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/ui.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')); ?>"></script>
    <!-- BEGIN PAGE STYLE -->
    
    
    <!-- END PAGE STYLE -->
    
  </head>
  <!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
  <!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
  <!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
  <!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
  <!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
  <!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
  <!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
  <!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
  <!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

  <!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
  <!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->
  
  <!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
  <!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
  <!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
  <!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
  <!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
  <!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
  <!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
  <!-- BEGIN BODY -->
  <body class="fixed-topbar fixed-sidebar theme-sdtl color-default">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>
      <!-- BEGIN SIDEBAR -->
        
      <!-- END SIDEBAR -->
      <div class="main-content">
        <!-- BEGIN TOPBAR -->
        
         
         
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <div class="header">
            <?php echo $__env->yieldContent('titleContent'); ?>
            <!--<h2>Lista <strong>Paneles</strong></h2>-->
            <div class="breadcrumb-wrapper">
              <!--
              <ol class="breadcrumb">
                <li><a href="#">Make</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active">Buttons</li>
              </ol>-->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 portlets">
              <div class="panel panel-default no-bd">
                <div class="panel-header bg-dark">
                  <?php echo $__env->yieldContent('titlePanel'); ?>
                  <!--<h3 class="panel-title"><strong>Agregar </strong>nuevo panel</h3>-->
                </div>

                <div class="panel-content bg-white">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <?php if(count($errors)>0): ?>

                        <div class="alert alert-danger">Errores
                          <ul>
                            <?php foreach($errors->all() as $error): ?>
                              <li><?php echo e($error); ?></li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      <?php endif; ?>
                      <?php echo $__env->yieldContent('content'); ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span> <span class="copyright"></span>2016</span>
                <span>RIVER SRL</span>.
                <span>Todos los derechos reservados. </span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="#" class="m-r-10">Soporte</a> | <a href="#" class="m-l-10 m-r-10">Terminos de uso</a> | <a href="#" class="m-l-10">Politicas de Privacidad</a></span>
              </p>
            </div>
          </div>
        </div>
        
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
      
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->
  
    <!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN SEARCH -->
    
 
    <!-- END SEARCH -->
    <!-- BEGIN PRELOADER -->
    <div class="loader-overlay">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
    <!-- END PRELOADER -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
    <script src="<?php echo e(asset('plugins/jquery/jquery-1.11.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery/jquery-migrate-1.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-ui/jquery-ui-1.11.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jquery-cookies/jquery.cookies.min.js')); ?>"></script> <!-- Jquery Cookies, for theme -->
    <script src="<?php echo e(asset('plugins/jquery-block-ui/jquery.blockUI.min.js')); ?>"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="<?php echo e(asset('plugins/translate/jqueryTranslator.min.js')); ?>"></script> <!-- Translate Plugin with JSON data -->
    <script src="<?php echo e(asset('plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')); ?>"></script> <!-- Custom Scrollbar sidebar -->
    <script src="<?php echo e(asset('plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js')); ?>"></script> <!-- Show Dropdown on Mouseover -->
    <script src="<?php echo e(asset('js/application.js')); ?>"></script> <!-- Main Application Script -->
    <script src="<?php echo e(asset('js/plugins.js')); ?>"></script> <!-- Main Plugin Initialization Script -->
    
    
    <!-- BEGIN PAGE SCRIPT -->
    <script src="<?php echo e(asset('plugins/noty/jquery.noty.packaged.min.js')); ?>"></script>  <!-- Notifications -->
    <!-- END PAGE SCRIPT -->
    <!-- BEGIN TABLA SCRIPT -->
    <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script> <!-- Tables Filtering, Sorting & Editing -->
    
     <?php echo $__env->yieldContent('scripts'); ?>
    
  </body>
</html>
<?php echo $__env->make('layouts.bread', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
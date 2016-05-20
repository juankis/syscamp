<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Centralita</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <link rel="shortcut icon" href="<?php echo e(asset('images/logo/logo-dark.png')); ?>">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/ui.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('plugins/bootstrap-loading/lada.min.css')); ?>" rel="stylesheet">
        
    </head>
    <body class="account" data-page="login">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                            
                        <div id="salida"></div>
                    </div>
                </div>
            </div>
            <p class="account-copyright">
                <span>Copyright © 2016  </span><span>Centralita</span>.<span> All rights reserved.</span>
            </p>
            
        </div>
        <script src="<?php echo e(asset('plugins/jquery/jquery-1.11.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/jquery/jquery-migrate-1.2.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/gsap/main-gsap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/backstretch/backstretch.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/bootstrap-loading/lada.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/noty/jquery.noty.packaged.min.js')); ?>"></script>  <!-- Notifications -->
       
        <script type="text/javascript" src="<?php echo e(asset('js/login.js')); ?>"></script>
        <!-- BEGIN PAGE SCRIPTS -->
        <script src="<?php echo e(asset('plugins/jquery-validation/jquery.validate.js')); ?>"></script> <!-- Form Validation -->
        <script src="<?php echo e(asset('plugins/jquery-validation/additional-methods.min.js')); ?>"></script> <!-- Form Validation Additional Methods - OPTIONAL -->
    </body>
</html>
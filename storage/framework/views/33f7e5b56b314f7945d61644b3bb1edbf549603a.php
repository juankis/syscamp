<?php $__env->startSection('content'); ?>
<div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            

                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Correo electronico .." name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            

                            <div class="col-md-12">
                                <input type="password" class="form-control" placeholder="Contrase&ntilde;a ..." name="password">

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
                                        <input type="checkbox" name="remember"> Recordar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Autenticarse
                                </button>

                                <!--<a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>-->
                            </div>
                        </div>
                    </form>
                        <div id="salida"></div>
                    </div>
                </div>
            </div>
            <p class="account-copyright">
                <span> <span class="copyright"></span>2016</span>
                <span>RIVER SRL</span>.
                <span>Todos los derechos reservados. </span>
            </p>
            
        </div>
<script src="<?php echo e(asset('plugins/jquery-validation/src/localization/messages_es.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
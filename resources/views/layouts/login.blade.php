<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Centralita</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <link rel="shortcut icon" href="{{ asset('images/logo/logo-dark.png')}}">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/ui.css')}}" rel="stylesheet">
        <link href="{{ asset('plugins/bootstrap-loading/lada.min.css')}}" rel="stylesheet">
        
    </head>
    <body class="account" data-page="login">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>
                        <form class="ladda-button" action="#" method="post" id="login" enctype="multipart/form-data" data-style="zoom-out">
                            <div class="form-group append-icon">
                                <input id="user" data-type="text" type="text" name="name" id="name" class="form-control form-white username" placeholder="Username" required>
                                <i class="icon-user"></i>
                            </div>
                            <div class="form-group append-icon m-b-20">
                                <input id="password" data-type="text" type="password" name="password" class="form-control form-white password" placeholder="Password" required>
                                <i class="icon-lock"></i>
                            </div>
                            <button id="submitlogin" onClick="login('login','login', 'login', 'login')" class="btn btn-lg btn-blue btn-block ladda-button" data-style="expand-left">Sign In</button>
                           
                            <div class="clearfix">
                                <p class="pull-left m-t-20"><a id="password" href="#">Forgot password?</a></p>
                            </div>
                        </form>
                        <form class="form-password" role="form">
                                
                        </form>
                            
                        <div id="salida"></div>
                    </div>
                </div>
            </div>
            <p class="account-copyright">
                <span>Copyright © 2016  </span><span>Centralita</span>.<span> All rights reserved.</span>
            </p>
            
        </div>
        <script src="{{ asset('plugins/jquery/jquery-1.11.1.min.js')}}"></script>
        <script src="{{ asset('plugins/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
        <script src="{{ asset('plugins/gsap/main-gsap.min.js')}}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('plugins/backstretch/backstretch.min.js')}}"></script>
        <script src="{{ asset('plugins/bootstrap-loading/lada.min.js')}}"></script>
        <script src="{{ asset('plugins/noty/jquery.noty.packaged.min.js')}}"></script>  <!-- Notifications -->
       
        <script type="text/javascript" src="{{ asset('js/login.js')}}"></script>
        <!-- BEGIN PAGE SCRIPTS -->
        <script src="{{ asset('plugins/jquery-validation/jquery.validate.js')}}"></script> <!-- Form Validation -->
        <script src="{{ asset('plugins/jquery-validation/additional-methods.min.js')}}"></script> <!-- Form Validation Additional Methods - OPTIONAL -->
    </body>
</html>
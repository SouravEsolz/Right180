<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Right | Login - Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        {{HTML::style('assets/plugins/pace-master/themes/blue/pace-theme-flash.css')}}
        {{HTML::style('assets/plugins/uniform/css/uniform.default.min.css')}}
        {{HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css')}}
        {{HTML::style('assets/plugins/fontawesome/css/font-awesome.css')}}
        {{HTML::style('assets/plugins/line-icons/simple-line-icons.css')}}
        {{HTML::style('assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css')}}	
        {{HTML::style('assets/plugins/waves/waves.min.css')}}
        {{HTML::style('assets/plugins/switchery/switchery.min.css')}}
        {{HTML::style('assets/plugins/3d-bold-navigation/css/style.css')}}
        
        <!-- Theme Styles -->
        {{HTML::style('assets/css/modern.min.css')}}
        {{HTML::style('assets/css/themes/green.css')}}
        {{HTML::style('assets/css/custom.css')}}
        
        <script src="{{URL::asset('assets/plugins/3d-bold-navigation/js/modernizr.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/offcanvasmenueffects/js/snap.svg-min.js')}}"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Right180</a>
                                <p class="text-center m-t-md">Please login into your account.</p>
                               
                               <!--  <form class="" id="form" action="" method="post">-->
                                
                               {{ Form::open(array('action' => 'AdminLoginController@postlogin')) }}
                                    <div class="form-group">
                                         <!--<input type="text" class="form-control" placeholder="Email" required />-->
                                        {{ Form::text('email', Input::old('email'), $attributes = array('class' => 'form-control','placeholder' =>'Email')) }}
                                    
                                    </div>
                                    <div class="form-group">
                                       <!--<input type="password" class="form-control" placeholder="Password" required />-->
                                       
									   {{ Form::password('password', $attributes = array('class' => 'form-control','placeholder' =>'Password'))}}
                                     
                                    </div>
                                    <!--<button type="submit" class="btn btn-success btn-block">Login</button>-->
                                   {{ Form::submit('Login', array('class' => 'btn btn-success btn-block')) }}
                                    <a href="{{route('admin.forgotpassword')}}" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                <!-- </form>-->
                                 {{ Form::close() }}
                                <p class="text-center m-t-xs text-sm">2015 &copy; Right180 by Steelcoders.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="{{URL::asset('assets/plugins/jquery/jquery-2.1.3.min.js')}}"></script>
        <script src="{{URL::asset('')}}assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{URL::asset('assets/plugins/pace-master/pace.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/offcanvasmenueffects/js/classie.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/waves/waves.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/modern.min.js')}}"></script>
        
    </body>
</html>
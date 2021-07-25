<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('css/theme.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('images/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600')}}" rel='stylesheet'>
        
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>

                    <a class="brand" href="login">
                        Edmin
                    </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <!-- <ul class="nav pull-right">

                            <li><a href="#">
                                    Sign Up
                                </a></li>
                            <li><a href="#">
                                    Forgot your password?
                                </a></li>
                        </ul> -->
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="module module-login span4 offset4">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf                        
                            <div class="module-head">
                                <h3>Sign In</h3>
                            </div>
                            <div class="module-body">
                                <div class="control-group">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Id/Username') }}</label>
                                    <div class="controls row-fluid">
                                        <input class="span12 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" id="inputEmail" required autocomplete="email" autofocus>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="control-group">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <div class="controls row-fluid">
                                        <input class="span12 form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" required autocomplete="current-password" data-toggle="password">
                                    </div>
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="module-foot">
                                <div class="control-group">
                                    <div class="controls clearfix">
                                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                                        <!-- <label class="checkbox">
                                            <input type="checkbox"> Remember me
                                        </label> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.wrapper-->

        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

        <script type="text/javascript">

	$("#password").password('toggle');

</script>
    </body>
  </html>

  

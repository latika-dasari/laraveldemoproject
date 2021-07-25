<!DOCTYPE html>
<html lang="en">
    <head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('images/icons/css/font-awesome.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600') }}"
              rel='stylesheet'>
        @yield('custom_css')
    </head>
    <body>
        @include('layouts.include.header')
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        @include('layouts.include.sidebar')
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">                                                                                                                
                            @yield('content')
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

        @include('layouts.include.footer')
        <script src="{{ asset('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script>
        <script src="{{ asset('scripts/jquery-ui-1.10.1.custom.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>           
        @yield('custom_js')
    </body>    
</html>
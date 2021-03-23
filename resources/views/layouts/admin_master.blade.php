<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>E-Voting | @yield('title')</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   

	<!-- icons -->
    <link href="{{asset('assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--bootstrap -->
	<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
    
	<!-- morris chart -->
    <link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
	<!-- animation -->
	<link href="{{asset('assets/css/pages/animate_page.css')}}" rel="stylesheet">
	<!-- Template Styles -->
    <link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" /> 
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
     <div class="page-wrapper">
       
        <div class="page-container">

             @include('includes.admin_header')

             @include('includes.admin_sidebar')

             @yield('content')

             @include('includes.admin_settings')

             @include('includes.admin_footer')

        </div>
    
    </div>

    @yield('extra-js')
    <!-- start js include path -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}" ></script>
    <script src="{{asset('assets/plugins/popper/popper.min.js')}}" ></script>
    <script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.min.js')}}" ></script>
    <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}" ></script>
    <script src="{{asset('assets/js/pages/sparkline/sparkline-data.js')}}" ></script>
    <!-- Common js-->
    <script src="{{asset('assets/js/app.js')}}" ></script>
    <script src="{{asset('assets/js/layout.js')}}" ></script>
    <script src="{{asset('assets/js/theme-color.js')}}" ></script>
    <!-- material -->
    <script src="{{asset('assets/plugins/material/material.min.js')}}"></script>
    <!-- animation -->
    <script src="{{asset('assets/js/pages/ui/animations.js')}}" ></script>
    <!-- end js include path -->
  </body>
</html>  
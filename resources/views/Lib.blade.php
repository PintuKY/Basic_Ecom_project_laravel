<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>

<!--Required mwta tags-->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
<!-- Fontfaces CSS-->
    <link href="{{asset('student/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

     <!-- FullCalendar -->
    <link href="{{asset('student/vendor/fullcalendar-3.10.0/fullcalendar.css')}}" rel='stylesheet' media="all" />

<!-- Bootstrap CSS-->
    <link href="{{asset('student/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">


<!-- Vendor CSS-->
    <link href="{{asset('student/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('student/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
<!-- Main CSS-->
    <link href="{{asset('student/css/theme.css')}}" rel="stylesheet" media="all">
</head>
<body>




<!-- Jquery JS-->
    <script src="{{asset('student/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('student/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('student/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

    <!-- full calendar requires moment along jquery which is included above -->
    <script src="{{asset('student/vendor/fullcalendar-3.10.0/lib/moment.min.js')}}"></script>
    <script src="{{asset('student/vendor/fullcalendar-3.10.0/fullcalendar.js')}}"></script>

    <!-- Vendor JS       -->
    <script src="{{asset('student/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('student/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('student/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('student/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('student/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('student/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('student/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('student/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('student/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('student/vendor/select2/select2.min.js')}}">
    </script>

    <!--Maps Lib-->
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.brazil.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.europe.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.france.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.germany.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.russia.js')}}"></script>
    <script src="{{asset('student/vendor/vector-map/jquery.vmap.usa.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('student/js/main.js')}}"></script>
</body>
</html>
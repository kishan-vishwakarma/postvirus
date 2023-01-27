<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Dashboard">
    <meta name="Author" content="NIC Durg">
    <meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Title -->
    <title> @yield('title') </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/header photo/app_logo.png') }}" type="image/x-icon" />

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

    <!-- Icons css -->
    <link href="{{ asset('assets/plugins/icons/icons.css') }}" rel="stylesheet">

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/sidemenu.css') }}">

    <!--- Dashboard-2 css-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">

    <!--- Color css-->
    <link id="theme" href="{{ asset('assets/css/colors/color.cs') }}s" rel="stylesheet">


    <!--  Owl-carousel css-->
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- Maps css -->
    <link href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <!-- Jvectormap css -->
    <link href="{{ asset('assets/plugins/jqvmap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />


    <!---Skinmodes css-->
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/switcher/demo.css') }}" rel="stylesheet">


    <!-- Internal Data table css -->
    <link href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">


</head>

<body class="main-body light-theme horizontal-color header-light">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/img/loader-2.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->


    @include('include.mainHeader')
    @include('include.stickyHeader')

    @yield('content')

    @include('include.rightSidebar')

    <!-- Footer opened -->
    <div class="main-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
            <span>Copyright © 2023 <a href="#">Dashboard</a>. Designed by <a href="#">NIC</a> All rights reserved.</span>
        </div>
    </div>
    <!-- Footer closed -->
    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap4 js-->
    <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Ionicons js-->
    <script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>

    <!-- Horizontalmenu js-->
    <script src="{{ asset('assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>

    <!-- Suggestion js-->
    <script src="{{ asset('assets/plugins/suggestion/jquery.input-dropdown.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>

    <!-- Right-sidebar js -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Sticky js-->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('assets/plugins/eva-icons/eva-icons.min.js') }}"></script>


    <!--Internal  Chart.bundle js -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>

    <!--Internal  Flot js-->
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>

    <!-- Chart-circle js -->
    <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart-circle/chart-circle.js') }}"></script>

    <!-- ECharts js-->
    <script src="{{ asset('assets/plugins/echart/echart.js') }}"></script>

    <!--Internal  index js -->
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>


    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>



    <!-- Internal Data tables -->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>

    <!--Internal  Datatable js -->
    <script src="{{ asset('assets/js/table-data.js') }}"></script>

    <!-- Internal Select2.min js -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    
</body>

</html>
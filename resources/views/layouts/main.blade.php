<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 10/10/2017
 * Time: 19:55
 */
?>
<!DOCTYPE html>
<html>
<head>

    @include('layouts.head')

</head>

    <body class="fixed-left">


        <div id="wrapper">
            @include('layouts.header')

            @include('layouts.leftsidebar')

                @yield('content')

            @include('layouts.footer')

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

                @include('layouts.rightsidebar')

        </div>
    <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/detect.js') }}"></script>
        <script src="{{ asset('js/fastclick.js') }}"></script>
        <script src="{{ asset('js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>


        <!-- Counter js  -->
        <script src="{{ asset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>


        <!-- Dashboard init -->
        <script src="{{ asset('pages/jquery.dashboard.js') }}"></script>


        <!-- App js -->
        <script src="{{ asset('js/jquery.core.js') }}"></script>
        <script src="{{ asset('js/jquery.app.js') }}"></script>


    </body>
</html>
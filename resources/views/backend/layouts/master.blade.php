<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 14:34:47 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Mikop Nafuu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Mikop Nafuu Saccos" name="description" />
        <meta content="BlueTick" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico')}}">

          {{-- data table --}}
        <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

         {{-- sweet alert --}}
         <link rel="stylesheet" href="{{ asset('backend/assets/swtalrt/sweetalert.css')}}">
      

        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

          @include('backend.layouts.navbar')

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                       @include('backend.layouts.sidebar')
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
           
           <div class="main-content">
            @yield('content')
            @include('backend.layouts.footer')
           </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

          <!-- Required datatable js -->
          <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
          <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

           {{-- sweet alert --}}
       <script src="{{ asset('backend/assets/swtalrt/jquery.sweet-alert.custom.js')}}"></script>
       <script src="{{ asset('backend/assets/swtalrt/sweetalert.js')}}"></script>
       <script src="{{ asset('backend/assets/notify/notify.js')}}"></script>

        <!-- dashboard init -->
        <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>
        {{-- data table init --}}
        <script src="{{ asset('backend/assets/js/pages/datatables.init.js')}}"></script>   
        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        <script>
          function submitEvent(){
            $('.view-button').html('<i class="fa fa-spinner fa-pulse fa-spin"></i> Loading..........');
            $('.view-button').attr('disabled', true);
          }
        </script>
       @stack('scripts')
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 14:37:45 GMT -->
</html>
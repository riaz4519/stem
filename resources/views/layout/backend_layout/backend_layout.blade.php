<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('/backend/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('/backend/assets/vendors/iconfonts/puse-icons-feather/feather.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
        <link rel="stylesheet" href="{{asset('/backend/assets/vendors/css/vendor.bundle.addons.css')}}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('/backend/assets/css/shared/style.css')}}">
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('/backend/assets/css/demo_1/style.css')}}">
        <!-- End Layout styles -->
        <link rel="shortcut icon" href="{{asset('/backend/assets/images/favicon.png')}}" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        @yield('backendcss')
    </head>
  <body>
    <div class="container-scroller">

        @include('layout.backend_layout.backend_header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('layout.backend_layout.backend_sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper mt-4">
              @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('layout.backend_layout.backend_footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('/backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('/backend/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('/backend/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/misc.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/settings.js')}}"></script>
    <script src="{{asset('/backend/assets/js/shared/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('/backend/assets/js/demo_1/dashboard.js')}}"></script>
    @yield('backend_custom_script')
    <!-- End custom js for this page-->
  </body>
</html>

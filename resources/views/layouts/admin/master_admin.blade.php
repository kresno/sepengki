<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    @include('layouts.head')
  </head>
  <body class="animsition">
    <div class="page-wrapper">
      @include('layouts.navbar_mobile')
      @include('layouts.admin.sidebar')
      <div class="page-container">
        @include('layouts.navbar')
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    @yield('content')
                    @include('layouts.footer')
                </div>
            </div>
        </div>
      </div>
    </div>


    <!-- Jquery JS-->
    <script src="{{ asset('/admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('/admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('/admin/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('/admin/js/main.js') }}"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @if(session()->has('page'))
  <title>{{ session('page') }}</title>
  @else
  <title>GIMS Event Hub</title>
  @endif
  

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('em/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('em/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('em/css/adminlte.min.css') }}">

  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

  @csrf
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="{{ url('em/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
        width="60">
    </div>


    @include('admin.layout.header')

    @include('admin.layout.sidebar')

    @yield('content')





    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.layout.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{ url('em/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ url('em/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ url('em/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ url('em/js/adminlte.js') }}"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="{{ url('em/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ url('em/plugins/raphael/raphael.min.js') }}"></script>
  <script src="{{ url('em/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
  <script src="{{ url('em/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ url('em/plugins/chart.js/Chart.min.js') }}"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{ url('em/js/demo.js') }}"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ url('em/js/pages/dashboard2.js') }}"></script>

  <!-- DataTables  & Plugins -->
  <script src="{{ url('em/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('em/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('em/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

  <script src="{{ url('em/js/custom.js') }}"></script>

  <script>
    $(function () {
      $("#eventData").DataTable();
    });
  </script>
</body>

</html>
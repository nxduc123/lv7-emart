<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.layouts.head')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">

  <!-- Navbar -->
  @include('backend.layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend.layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
   @include('backend.layouts.chead')
    <!-- Main content -->
   @yield('content')
    <!-- /.content -->
 
  <!-- /.content-wrapper -->


  <!-- Main Footer 
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
  -->
</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('backend.layouts.footer')

</body>
</html>

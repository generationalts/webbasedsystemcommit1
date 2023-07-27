<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <base href="{{ \URL::to('/') }}">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="{{ asset('css/bootstrap.css') }}" rel=stylesheet>
  <style>
    .sidebar-dark-primary {
        background-color:  rgba(124,7,16,0.8939950980392157);
        color: white;
    }
</style>
</head>
<body class="sidebar-mini layout-fixed text-sm">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

</div>

        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('admin.user') }}" class="nav-link {{ (request()->is('data/view*')) ? 'active' : '' }}">
                  <i class="fa fa-th-large"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.user') }}" class="nav-link {{ (request()->is('data/view*')) ? 'active' : '' }}">
                  <i class="fa fa-th-large"></i>
                  <p>Action</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accounts.contribute') }}" class="nav-link {{ (request()->is('data/view*')) ? 'active' : '' }}">
                  <i class="far fa-handshake"></i>
                  <p>Contribution</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('document.index') }}" class="nav-link {{ (request()->is('data/view*')) ? 'active' : '' }}">
                  <i class="far fa-handshake"></i>
                  <p>Documents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('notifications.index') }}" class="nav-link {{ (request()->is('myinvoice/myinvoice*')) ? 'active' : '' }}">
                  <i class="fas fa-bell"></i>
                  <p>Notifications</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" data-toggle=modal data-target=#exampleModalLong   class="nav-link">
                  <i class="far fa-envelope"></i>
                  <p>Messages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link {{ (request()->is('myinvoice/myinvoice*')) ? 'active' : '' }}">
                  <i class="fas fa-cog"></i>
                  <p>Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>Log Out</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://quickoffice.co.ke">Quick Office</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script>
    $(document).ready(function() {
      $('.nav-link').on('click', function() {
        var unread_messages_count = '{{ $unread_messages_count ?? 0 }}';
        if (unread_messages_count > 0) {
          // update the unread_messages_count value in the database
          // or make an API call to mark the messages as read
          $(this).find('.badge').remove();
        }
      });
    });
  </script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>







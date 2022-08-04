<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Property Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  {{-- Data Table --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/67b6ece322.js" crossorigin="anonymous"></script>

<!-- Trix Editor -->
<link rel="stylesheet" type="text/css" href="/css/trix.css">
<script type="text/javascript" src="/js/trix.js"></script>

<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }
</style>

    <link rel="shortcut icon" href="#">

{{-- <link rel="shortcut icon" href="{{{ asset('storage/post-images/favicon.ico') }}}"> --}}

</head>
<body class="hold-transition sidebar-mini">
  @include('sweetalert::alert')

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <div class="ml-3"><b>@yield('title')</b></div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <form action="/logout" method="post">
            @csrf
            <button style="border: 0; background-color: white;" type="submit" class="nav-link active" aria-current="page">Logout</button>
        </form>
    </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info" style="color: white;">
          Property<b>.</b>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link @yield('dashboard')">
                <i class="fa-solid fa-gauge-high"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/title" class="nav-link @yield('page')">
              <i class="fa-solid fa-a"></i>
              <p>Page Title</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="about" class="nav-link @yield('about')">
                <i class="fa-solid fa-address-card"></i>
              <p>Tentang Kami</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/slider" class="nav-link @yield('slider')">
                <i class="fas fa-solid fa-sliders"></i>
              <p>Sliders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/property" class="nav-link @yield('property')">
                <i class="fa-solid fa-image"></i>
              <p>Properties</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/testimonial" class="nav-link @yield('testimonial')">
                <i class="fa-solid fa-comment"></i>
              <p>Testimonials</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/blog" class="nav-link @yield('blog')">
                <i class="fa-solid fa-file"></i>
              <p>Blogs</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/category" class="nav-link @yield('category')">
              <i class="fa-solid fa-quote-left"></i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="config" class="nav-link @yield('config')">
                <i class="fa-solid fa-gear"></i>
              <p>
                Configuration
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div id="content">
        <br>
        <div class="container">

          <section class="content">
            @yield('content')
          </section>

        </div>
    </div>

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Crafted with <i style="color: red;" class="nav-icon fas fa-heart"></i> by <a href="https://wanteknologi.com/"> WAN Solution</a></b>
    </div>
    <strong>2022 &copy; Property.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
  </script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });

    $("#deleteAllSelectedSlider").click(function(e){
      e.preventDefault();
      var allids = [];

      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });

      $.ajax({
        url:"{{ route('slider.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });

    $("#deleteAllSelectedProperty").click(function(e){
      e.preventDefault();
      var allids = [];

      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });

      $.ajax({
        url:"{{ route('property.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });

    $("#deleteAllSelectedTestimonial").click(function(e){
      e.preventDefault();
      var allids = [];

      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });

      $.ajax({
        url:"{{ route('testimonial.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });

    $("#deleteAllSelectedBlog").click(function(e){
      e.preventDefault();
      var allids = [];

      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });

      $.ajax({
        url:"{{ route('blog.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>

<script>
  $(function(e){
    $("#chkCheckAll").click(function(){
      $(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });

    $("#deleteAllSelectedCategory").click(function(e){
      e.preventDefault();
      var allids = [];

      $("input:checkbox[name=ids]:checked").each(function(){
        allids.push($(this).val());
      });

      $.ajax({
        url:"{{ route('category.deleteSelected') }}",
        type:"DELETE",
        data:{
          _token:$("input[name=_token]").val(),
          ids:allids
        },
        success:function(response){
          $.each(allids,function(key,val){
            $("#sid"+val).remove();
          })
        }
      });
    })
  });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>

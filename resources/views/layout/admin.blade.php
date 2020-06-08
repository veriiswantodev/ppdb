<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>

<!-- Bootstrap -->
<link href="{{asset('/admin')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
{{-- Bootstrap DataTable --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<!-- Font Awesome -->
<link href="{{asset('/admin')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
{{-- TOASTR --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!-- NProgress -->
<link href="{{asset('/admin')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="{{asset('/admin')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

<!-- bootstrap-progressbar -->
<link href="{{asset('/admin')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- JQVMap -->
<link href="{{asset('/admin')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{asset('/admin')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

{{-- datepicker --}}
<link rel="stylesheet" href="{{asset('datepicker/dist/css/datepicker.css')}}">


<!-- Custom Theme Style -->
<link href="{{asset('/admin')}}/build/css/custom.min.css" rel="stylesheet">


</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>SMK Antartika 1 Sidoarjo</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
            <img src="@if(auth()->user()->role == 'siswa') {{auth()->user()->siswa->getAvatar()}} @else /images/default.png @endif" alt="foto" class="img-circle profile_img">
            </div>
            <div class="profile_info">
            <span>Selamat Datang,</span>
            <h2>{{auth()->user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

            <ul class="nav side-menu">
                <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li><a><i class="fa fa-user"></i> Siswa <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    @if(auth()->user()->role == 'admin')
                    <li><a href="/siswa/data">Data Siswa</a></li>
                    <li><a href="/siswa/tambah">Tambah Data Siswa</a></li>
                    <li><a href="/siswa/cetak">Cetak Data Siswa</a></li>
                    @endif
                    @if (auth()->user()->role == 'siswa')
                    <li><a href="/siswa/profile/">Profile</a></li>
                    @endif
                </ul>
                </li>
                @if (auth()->user()->role == 'admin')
                <li><a href="/jurusan"><i class="fa fa-desktop"></i> Jurusan </a>

                </li>
                <li><a><i class="fa fa-user-md"></i> Admin <span class="fa fa-chevron-down"></a>
                    <ul class="nav child_menu">
                        <li><a href="general_elements.html">Data Admin</a></li>
                        <li><a href="media_gallery.html">Tambah Admin</a></li>
                </ul>
                </li>
                @endif
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer">
            <a style="width:100%" data-toggle="tooltip" class="logout" data-placement="top" title="Logout" href="#">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
        </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
        <nav>
            <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
            <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="@if(auth()->user()->role == 'siswa') {{auth()->user()->siswa->getAvatar()}} @else /images/default.png @endif" alt="">{{auth()->user()->name}}
                <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                <li><a href="javascript:;"> Profile</a></li>
                <li>
                    <a href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                    </a>
                </li>
                <li><a href="javascript:;">Help</a></li>
                <li><a href="#" class="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
            </li>

            <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                <li>
                    <a>
                    <span class="image"><img src="{{asset('/admin')}}/images/img.jpg" alt="Profile Image" /></span>
                    <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                    </a>
                </li>
                <li>
                    <a>
                    <span class="image"><img src="{{asset('/admin')}}/images/img.jpg" alt="Profile Image" /></span>
                    <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                    </a>
                </li>
                <li>
                    <a>
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                    </a>
                </li>
                <li>
                    <a>
                    <span class="image"><img src="{{asset('/admin')}}/images/img.jpg" alt="Profile Image" /></span>
                    <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                    </a>
                </li>
                <li>
                    <div class="text-center">
                    <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    </div>
                </li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    @yield('content')
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="{{asset('/admin')}}/vendors/jquery/dist/jquery.min.js"></script>
@yield('footer')
<!-- Bootstrap -->
<script src="{{asset('/admin')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('/admin')}}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{asset('/admin')}}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{asset('/admin')}}/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('/admin')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{asset('/admin')}}/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{asset('/admin')}}/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.js"></script>
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{asset('/admin')}}/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{asset('/admin')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{asset('/admin')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{asset('/admin')}}/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{asset('/admin')}}/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="{{asset('/admin')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="{{asset('/admin')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{asset('/admin')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('/admin')}}/vendors/moment/min/moment.min.js"></script>
<script src="{{asset('/admin')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

{{-- air-datepicker --}}
<script src="{{asset('datepicker/dist/js/datepicker.js')}}"></script>
<script src="{{asset('datepicker/dist/js/i18n/datepicker.en.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('/admin')}}/build/js/custom.min.js"></script>

{{-- Datatable --}}
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

{{-- sweetalert --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- TOASTR --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('sukses'))
        toastr.success("{{Session::get('sukses')}}", "sukses")
    @endif
</script>

<script>
  $('.logout').click(function(){
    swal({
      title: "Anda Yakin?",
      text: "Apakah anda yakin akan logout?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willLogout) => {
      if (willLogout) {
        window.location = "/logout";
        swal("Anda telah berhasil keluar", {
          icon: "success",
        });
      }
    });
  });
</script>
</body>
</html>

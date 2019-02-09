<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lion-admin-templates.multipurposethemes.com/lion-admin/main/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Aug 2018 11:27:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="icon" href="http://lion-admin-templates.multipurposethemes.com/lion-admin/images/favicon.ico">--}}

    <!-- Favicon-->
    <link rel="shortcut icon" href="/frontend/img/job.png">
    <title>Software engineering</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css"
          href="{{asset('/backend/assets/vendor_components/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/backend/assets/vendor_components/Ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/backend/assets/vendor_components/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/backend/assets/vendor_components/linea-icons/linea.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/backend/assets/vendor_components/glyphicons/glyphicon.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/backend/assets/vendor_components/flag-icon/css/flag-icon.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/backend/assets/vendor_components/material-design-iconic-font/css/materialdesignicons.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/backend/assets/vendor_components/simple-line-icons-master/css/simple-line-icons.css')}}">

    <link rel="stylesheet"
          href="{{ asset('/backend/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/backend/assets/vendor_plugins/iCheck/all.css')}}">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('/backend/assets/vendor_components/bootstrap/dist/css/bootstrap.css')}}">

    <!-- Bootstrap-extend -->
    <link rel="stylesheet" href="{{ asset('/backend/css/bootstrap-extend.css')}}">

    <!-- Morris charts -->
    <link rel="stylesheet" href="{{ asset('/backend/assets/vendor_components/morris.js/morris.css')}}">

    <!-- weather weather -->
    <link rel="stylesheet" href="{{ asset('/backend/assets/vendor_components/weather-icons/weather-icons.css')}}">

    <!-- date picker -->
    <link rel="stylesheet"
          href="{{ asset('/backend/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}">

    <!-- daterange picker -->
    <link rel="stylesheet"
          href="{{ asset('/backend/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css')}}">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
          href="{{ asset('/backend/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css')}}">

    <!-- theme style -->
    <link rel="stylesheet" href="{{ asset('/backend/css/master_style.css')}}">

    <!-- Lion_admin skins -->
    <link rel="stylesheet" href="{{ asset('/backend/css/skins/_all-skins.css')}}">

    <link rel="stylesheet"
          href="{{ asset('/backend/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">


    {{--ckeditor--}}
    <link rel="stylesheet" href="{{asset('/ckeditor/content.css')}}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <!-- Messages -->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-email"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <li class="header">You have 5 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu inner-content-div">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ url('/img/avatar.jpg')}}" class="rounded-circle"
                                                     alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Lorem Ipsum
                                                    <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                                </h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ url('/img/avatar.jpg')}}" class="rounded-circle"
                                                     alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Nullam tempor
                                                    <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                                </h4>
                                                <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ url('/backend/images/user4-128x128.jpg')}}"
                                                     class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Proin venenatis
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ url('/backend/images/user3-128x128.jp')}}g"
                                                     class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Praesent suscipit
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ url('/backend/images/user4-128x128.jpg')}}"
                                                     class="rounded-circle" alt="User Image">
                                            </div>
                                            <div class="mail-contnet">
                                                <h4>
                                                    Donec tempor
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See all e-Mails</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <li class="header">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu inner-content-div">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit
                                            blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien
                                            elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo
                                            porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum
                                            fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum,
                                            at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-message"></i>
                        </a>
                        <ul class="dropdown-menu scale-up">
                            <li class="header">You have 6 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu inner-content-div">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Lorem ipsum dolor sit amet
                                                <small class="pull-right">30%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 30%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">30% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Vestibulum nec ligula
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 20%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Donec id leo ut ipsum
                                                <small class="pull-right">70%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-light-blue" style="width: 70%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Praesent vitae tellus
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 40%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Nam varius sapien
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 80%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Nunc fringilla
                                                <small class="pull-right">90%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-primary" style="width: 90%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account -->

                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="ulogo">
                    <a href="">
                        <!-- logo for regular state and mobile devices -->
                        <span><b>Synopticdiary </b>Admin</span>
                    </a>
                </div>
                <div class="image">
                    {{--<img src="{{asset('/images/backend/admin/'.Auth::user()->image)}}" class="rounded-circle" alt="User Image">--}}
                </div>
                <div class="info">
                    <p>{{Auth::user()->name}}</p>
                    {{--<p>Admin Name</p>--}}

                    {{--<a href="{{route('frontend.loginUser')}}">Login</a>--}}
                </div>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="nav-devider"></li>
                <li class="header nav-small-cap">PERSONAL</li>
                <!-- dashboard menu -->
                <li class="active">
                    <a href="{{route('backend.admin')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <!-- admin menu -->
                <li>
                    <a href="{{route('backend.admin.index')}}">
                        <i class="fa fa-user-plus text-red"></i>
                        <span>Admin </span>
                    </a>
                </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-sitemap"></i>
            <span>Manage Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('backend.category.create')}}"><i class="fa fa-plus text-red"></i> Create Category</a></li>
            <li><a href="{{route('backend.category.index')}}"><i class="fa fa-circle-o  text-red"></i> Show Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Manage Custom Ads</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('backend.custom-ads.index')}}"><i class="fa fa-circle-o  text-red"></i> Add 1</a></li>
            <li><a href="{{route('backend.custom-adsii.index')}}"><i class="fa fa-circle-o  text-red"></i> Add 2</a></li>
            <li><a href="{{route('backend.custom-adsiii.index')}}"><i class="fa fa-circle-o  text-red"></i> Add 3</a></li>


          </ul>
        </li>
        <li>
          <a href="{{route('backend.merchant.index')}}">
                <i class="fa fa-users"></i>
                  <span>Vendors</span>
            </a>
         </li>
         <li>
         <a href="{{route('backend.mails.index')}}">
                <i class="fa fa-envelope"></i>
                  <span>Mails</span>
            </a>
         </li>
         <li>
          <a href="{{route('backend.post.index')}}">
                <i class="fa fa-database"></i>
                  <span>Posts</span>
            </a>
         </li>
         <li>
          <a href="{{route('backend.websiteinformation.index')}}">
                <i class="fa  fa-gears (alias)"></i>
                  <span>Settings</span>
            </a>
         </li>
        
                {{--<li class="treeview">--}}

                    {{--<a href="#">--}}
                        {{--<i class="fa fa-search-plus text-red"></i>--}}
                        {{--<span>Job Seeker (Client Side)</span>--}}
                        {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="{{route('admin.fresher.index')}}">Fresher</a></li>--}}
                        {{--<li><a href="{{route('admin.professional.index')}}">Professional</a></li>--}}
                    {{--</ul>--}}

                {{--</li>--}}



                <li>

                    <a href="{{route('backend.logout')}}">
                        <i class="fa fa-sign-out text-red"></i>
                        <span>Logout</span>
                        {{--<span class="pull-right-container">--}}
                        {{--<i class="fa fa-angle-right pull-right"></i>--}}
                        {{--</span>--}}
                    </a>
                </li>
            </ul>
        </section>
    </aside>

    @yield('content')

    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>

            </ul>
        </div>
        &copy; 2018 <a href="#">synopticdiary</a>. All Rights Reserved. |<span> Developed By:</span>
        <a href="#">Horizon International</a>
    </footer>


    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{ asset('/backend/assets/vendor_components/jquery/dist/jquery.js')}}"></script>

<!-- popper -->
<script src="{{ asset('Backend')}}"></script>

<!-- Bootstrap 4.0-->
<script src="{{ asset('Backend')}}"></script>

<!-- Morris.js charts -->
<script src="{{ asset('/backend/assets/vendor_components/raphael/raphael.min.js')}}"></script>

<script src="{{ asset('/backend/assets/vendor_components/morris.js/morris.min.js')}}"></script>

<!-- weather for demo purposes -->
<script src="{{ asset('/backend/assets/vendor_plugins/weather-icons/WeatherIcon.js')}}"></script>

<!-- Sparkline -->
<script src="{{ asset('/backend/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>

<!-- daterangepicker -->
<script src="{{ asset('/backend/assets/vendor_components/moment/min/moment.min.js')}}"></script>

<script src="{{ asset('/backend/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- datepicker -->
<script src="{{ asset('/backend/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('/backend/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>

<!-- Moments.JS -->
<script src="{{ asset('/backend/assets/vendor_components/moment/moment.js')}}"></script>

<!-- Slimscroll -->
<script src="{{ asset('/backend/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- FastClick -->
<script src="{{ asset('/backend/assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>

<!-- peity -->
<script src="{{ asset('/backend/assets/vendor_components/jquery.peity/jquery.peity.js')}}"></script>

<!-- DataTables -->
<script src="{{ asset('/backend/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/backend/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

<!-- Lion_admin App -->
<script src="{{ asset('/backend/js/template.js')}}"></script>

<!-- Lion_admin dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/backend/js/pages/dashboard.js')}}"></script>

<!-- Lion_admin for demo purposes -->
<script src="{{ asset('/backend/js/demo.js')}}"></script>


<script src="{{ asset('/backend/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('/backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('/backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js')}}"></script>
<script src="{{ asset('/backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js')}}"></script>
<script src="{{ asset('/backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js')}}"></script>
<script src="{{ asset('/backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('/backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js ')}}"></script>
<script src="{{ asset('/backend/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script src="{{ asset('/backend/js/pages/data-table.js ')}}"></script>
<script>
    $(document).ready(function () {
        $('#bussearch').select2();
    });

</script>

<script src="{{ asset('/backend/assets/vendor_plugins/iCheck/icheck.min.js')}}"></script>
<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('/backend/js/custom.js')}}"></script>


</body>

</html>

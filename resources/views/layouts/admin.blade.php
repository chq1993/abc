<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Atlantic</title>
    <meta content="Đánh giá đối tượng" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/atlantic-ico.ico') }}">

    <!-- DataTables -->
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/scss/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/dashboard" class="logo">
                    <span>
                        <img src="{{asset('assets/images/atlantic.png')}}" alt="" height="24">
                        tlantic
                    </span>
                    <i>
                        <img src="{{asset('assets/images/atlantic.png')}}" alt="" height="22">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list d-none d-sm-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell noti-icon"></i>
                            <span class="badge badge-pill badge-info noti-icon-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (37)
                            </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of
                                            the printing and
                                            typesetting industry.</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87
                                            unread
                                            messages</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-flag"></i></div>
                                    <p class="notify-details">Your item is shipped<span class="text-muted">It is a long
                                            established fact
                                            that a reader will</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of
                                    the printing and
                                            typesetting industry.</span></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<span class="text-muted">You have 87
                                            unread
                                            messages</span></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light"
                                data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="https://kenh14cdn.com/2016/4-1473151037257.jpg" alt="user"
                                    class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> Ví tiền</a>
                                <a class="dropdown-item d-block" href="#">
                                    <i class="mdi mdi-settings m-r-5"></i> Cài đặt
                                    <span class="badge badge-success ml-2 text-center">11</span>
                                </a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Màn
                                    hình khóa</a>
                                <div class="dropdown-divider"></div>

                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="d-none d-sm-block">
                        <div class="dropdown pt-3 d-inline-block">
                            <a class="btn btn-header waves-effect waves-light dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Create New
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('department.create')}}">Đơn vị</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="{{URL::to('/dashboard')}}" class="waves-effect">
                                <i class="mdi mdi-home"></i><span class="badge badge-primary float-right">3</span>
                                <span> Tổng quan </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Quản lý đơn vị <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('department.index') }}">Danh sách đơn vị</a></li>
                                <li><a href="{{ route('department.create') }}">Thêm mới đơn vị</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Quản lý vai trò <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('role.index') }}">Danh sách vai trò</a></li>
                                <li><a href="{{ route('role.create') }}">Thêm mới vai trò</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Quản lý người dùng <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('user.index') }}">Danh sách người dùng</a></li>
                                <li><a href="{{ route('user.create') }}">Thêm mới người dùng</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content_layout')
                </div>
            </div>
            <footer class="footer">
                © 2020 <span class="d-none d-sm-inline-block">- Make with <i class="mdi mdi-heart text-danger"></i> by
                    BoyLoiChoi</span>
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <script>

    </script>

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/waves.min.js') }}"></script>


    <script src="{{ asset('js/script.js') }}"></script>

    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Chartist Chart-->
    <script src="{{ asset('assets/plugins/chartist/js/chartist.min.js') }}"></script>


     <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('assets/pages/datatables.init.js') }}"></script>

</body>

</html>

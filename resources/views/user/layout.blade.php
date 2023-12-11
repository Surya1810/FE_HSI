<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HSI | @yield('title')</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#181e42">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/6.2.1/css/all.min.css') }}">
    <!-- Sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/dist/css/adminlte.min.css') }}">
    <!-- Our style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css')
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-solid fa-ellipsis-vertical"></i>
                        {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
                    </a>
                    {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div> --}}
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
                    </a>
                    {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div> --}}
                </li>
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link">
                        <img src="{{ asset('assets/img/profile/default.png') }}"
                            class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline">
                            Super
                        </span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-cyan elevation-4 bg-primary">
            <!-- Brand Logo -->
            <a href="{{ route('user.dashboard') }}" class="brand-link logo-switch border-0 justify-content-center">
                <img src="{{ asset('assets/logo/Logo Alternate.png') }}" alt="HSI Logo"
                    class="brand-image-xl logo-xs text-sm">
                <img src="{{ asset('assets/logo/Logo Alternate.png') }}" alt="HSI Logo"
                    class="brand-image-xs logo-xl text-sm" style="left: 14px">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-5">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent nav-collapse-hide-child"
                        data-widget="treeview" role="menu" data-accordion="false">
                        {{-- <li class="nav-header mt-3">
                            Administrasi
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('user.dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-regular fa-pen-to-square"></i>
                                <p>
                                    Riwayat Status
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Komisi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Transaksi PIN
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-cart-shopping"></i>
                                <p>
                                    Penukaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-regular fa-credit-card"></i>
                                <p>
                                    PIN
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-clipboard-list"></i>
                                <p>
                                    Registrasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-user-group"></i>
                                <p>
                                    Referral
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Order
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Bahan Pemasaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-gear"></i>
                                <p>
                                    Bantuan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                                <p>
                                    Keluar
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
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer text-sm">
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('assets/adminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('assets/adminLTE/plugins/select2/js/select2.full.min.js') }}"></script>

    @stack('scripts')

    <!-- AdminLTE App -->
    <script src="{{ asset('assets/adminLTE/dist/js/adminlte.min.js') }}"></script>

    <script>
        /*** add active class and stay opened when selected ***/
        var url = window.location;

        // for sidebar menu entirely but not cover treeview
        $('ul.nav-sidebar a').filter(function() {
            if (this.href) {
                return this.href == url || url.href.indexOf(this.href) == 0;
            }
        }).addClass('active');

        // for the treeview
        $('ul.nav-treeview a').filter(function() {
            if (this.href) {
                return this.href == url || url.href.indexOf(this.href) == 0;
            }
        }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
    </script>

    <!-- Sweetalert2 -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast'
            },
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true
        })

        @if (session('pesan'))
            @switch(session('level-alert'))
                @case('alert-success')
                Toast.fire({
                    icon: 'success',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-danger')
                Toast.fire({
                    icon: 'error',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-warning')
                Toast.fire({
                    icon: 'warning',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @case('alert-question')
                Toast.fire({
                    icon: 'question',
                    title: '{{ Session::get('pesan') }}'
                })
                @break

                @default
                Toast.fire({
                    icon: 'info',
                    title: '{{ Session::get('pesan') }}'
                })
            @endswitch
        @endif
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                Toast.fire({
                    icon: 'error',
                    title: '{{ $error }}'
                })
            @endforeach
        @endif
    </script>
</body>

</html>

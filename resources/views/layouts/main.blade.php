<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ $title }}</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="<?= asset('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/plugins/perfectscroll/perfect-scrollbar.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/plugins/pace/pace.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/plugins/datatables/datatables.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/plugins/highlight/styles/github-gist.css') ?>" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="<?= asset('assets/css/main.min.css') ?>" rel="stylesheet">
    <link href="<?= asset('assets/css/custom.css') ?>" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('assets/images/neptune.png') ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('assets/images/neptune.png') ?>" />

    <style>
        .logout {
            margin-top: 200px;
            margin-left: 69px;
        }

    </style>

</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="{{ url('/') }}" class="logo-icon"><span class="logo-text">Aplikasi</span></a>
                <div class="sidebar-user-switcher user-activity-online">

                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Features
                    </li>
                    <li class="{{ Request::is('/') ? 'active-page' : '' }}">
                        <a href="<?= url('/') ?>" class="{{ Request::url('/') ? 'active' : '' }}"><i
                                class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>

                    <li class="{{ Request::is('/barang') ? 'active-page' : '' }}">
                        <a href="<?= url('/barang') ?>" class="{{ Request::is('/barang*') ? 'active' : '' }}"><i
                                class="material-icons-two-tone">inventory_2</i>Data
                            Barang</a>
                    </li>

                    <li class="{{ Request::is('/penjualan') ? 'active-page' : '' }}">
                        <a href="<?= url('/penjualan') ?>"
                            class="{{ Request::url('/penjualan*') ? 'active' : '' }}"><i
                                class="material-icons-two-tone">done</i>Data Penjualan</a>
                    </li>


                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary logout"><i
                                class="material-icons-two-tone">logout</i>Logout</button>
                    </form>


                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                            class="material-icons">first_page</i></a>
                                </li>

                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">

                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="{{ url('/barang') }}">Data Barang</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="{{ url('/penjualan') }}">Data Penjualan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            @yield('content')
        </div>


    </div>


    <!-- Javascripts -->
    <script src="<?= asset('assets/plugins/jquery/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/pace/pace.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?= asset('assets/plugins/highlight/highlight.pack.js') ?>"></script>
    <script src="<?= asset('assets/plugins/datatables/datatables.min.js') ?>"></script>
    <script src="<?= asset('assets/js/main.min.js') ?>"></script>
    <script src="<?= asset('assets/js/custom.js') ?>"></script>
    <script src="<?= asset('assets/js/pages/dashboard.js') ?>"></script>
    <script src="<?= asset('assets/js/pages/datatables.js') ?>"></script>
</body>

</html>

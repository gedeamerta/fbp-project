<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title><?= $data['title']?> </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= baseurl; ?>/assets/style/font-awesome/css/all.css" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= baseurl ?>/assets/images/logo.png">
    <!-- Custom CSS -->
    <link href="<?= baseurl ?>/assets/admin-assets/plugins/bower_components/chartist/dist/chartist.min.css"
        rel="stylesheet">
    <link rel="stylesheet"
        href="<?= baseurl ?>/assets/admin-assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?= baseurl ?>/assets/admin-assets/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
    table tbody tr td img {
        width: 40%;
    }

    table tbody tr td {
        width: 15%;
    }

    @media all and (max-width: 768px) {

        table tbody tr td img {
            width: 100%;
        }
    }
    </style>

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <img src="<?= baseurl ?>/assets/images/fbp-admin.png" alt="homepage" />
                        </b>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li>
                            <a class="profile-pic" href="#">
                                <span class="text-white font-medium"> Name Admin :
                                    <?= $data['admin_single']['username'] ?></span>
                            </a>
                        </li>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?= baseurl ?>/admin/dashboard" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?= baseurl ?>/admin/packages" aria-expanded="false">
                                <i class="fas fa-archive"></i>
                                <span class="hide-menu">Packages</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?= baseurl ?>/admin/coach" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <span class="hide-menu">Coach</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?= baseurl ?>/admin/before_after" aria-expanded="false">
                                <i class="fas fa-hourglass-start"></i>
                                <span class="hide-menu">Before & After</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?= baseurl ?>/admin/docs" aria-expanded="false">
                                <i class="fas fa-camera-retro"></i>
                                <span class="hide-menu">Documentations</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?= baseurl ?>/admin/testi" aria-expanded="false">
                                <i class="far fa-smile"></i>
                                <span class="hide-menu">Testimonials</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="<?= baseurl ?>/admin/setOut" class="btn d-grid btn-danger text-white">
                                Log Out</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
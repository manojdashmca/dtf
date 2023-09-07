<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

    <head>

        <meta charset="utf-8" />
        <title><?=$title?> | Drink From Tap Mission</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Minimal Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->

        <!-- Gride Table -->
        <link rel="shortcut icon" href="assets/images/logo-single.png">   
        
        <?php
        require_once __DIR__ . '/managedJsTaplePagination.php';
        ?>
        <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">
        <!-- gride Table -->

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <?php
        require_once __DIR__ . '/managedCss.php';
        ?>
    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <div class="top-tagbar">
                <div class="w-100">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-4 col-9">
                            <div class="text-white-50 fs-13">
                                <i class="bi bi-clock align-middle me-2"></i> <span id="current-time"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="/dashboard" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-single.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-inner-small.png" alt="" height="100">
                                    </span>
                                </a>

                                <a href="/dashboard" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-single.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-inner-small.png" alt="" height="100">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                        </div>
                        <div class="d-flex align-items-center">

<!--                            <div class="d-md-none topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-search-dropdown" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="bi bi-search fs-16"></i>
                                </button>
                            </div>-->
                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                                    <i class='bi bi-arrows-fullscreen fs-16'></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-sun align-middle fs-20"></i>
                                </button>
                                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                                    <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Defualt (light mode)</a>
                                    <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                                    <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system defualt)</a>
                                </div>
                            </div>
                            <?php
                            require_once __DIR__ . '/notification.php';
                            require_once __DIR__ . '/sessionuser.php';
                            ?>
                        </div>
                    </div>
                </div>
            </header>
            <?php
            require_once __DIR__ . '/leftmenu.php';
            
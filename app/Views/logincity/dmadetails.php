<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
<style>
    @media only screen and (max-width: 1024px) {
        blockquote.blockquote.custom-blockquote.blockquote-danger.rounded.mb-0 {
    margin-top: 35px;
}
}
</style>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="top-tagbar">
            <div class="w-100">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto col-9">
                        <div class="text-white-50 fs-13">
                            <i class="bi bi-clock align-middle me-2"></i> <span id="current-time"></span>
                            <script>
                                function updateCurrentTime() {
                                    const currentTimeElement = document.getElementById("current-time");
                                    const currentTime = new Date().toLocaleTimeString();
                                    currentTimeElement.textContent = currentTime;
                                }
                                updateCurrentTime();
                                setInterval(updateCurrentTime, 1000);
                            </script>
                        </div>
                    </div>
                    <div class="col-md-auto col-6 d-none d-lg-block">
                        <div class="d-flex align-items-center justify-content-center gap-3 fs-13 text-white-50">
                            <div>
                                <i class="bi bi-envelope align-middle me-2"></i> dft@onewaterindia.com
                            </div>
                            <div>
                                <i class="bi bi-globe align-middle me-2"></i> www.dft.onewaterindia.com
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto col-3">
                        <!-- <div class="dropdown topbar-head-dropdown topbar-tag-dropdown justify-content-end">
                            <button type="button" class="btn btn-icon btn-topbar rounded-circle text-white-50 fs-13" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="16" class="rounded-circle me-2"> <span id="lang-name">English</span>
                            </button>
                           
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <section></section>
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="images/cropped-watco-logo.png" alt="" style="width: 50px;">
                                </span>
                                <span class="logo-lg">
                                    <img src="images/cropped-watco-logo.png" alt="" style="width: 50px;">
                                </span>
                            </a>

                        </div>

                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <i class=" bx bx-menu-alt-left"></i> Menu
                            <!-- <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span> -->
                        </button>
                    </div>

                    <div class="d-flex align-items-center">

                        <!-- logo  -->

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Test Admin</span>
                                        <span class="d-none d-xl-block ms-1 fs-13 text-reset user-name-sub-text">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Admin!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->

            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="26">
                    </span>
                </a>
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="26">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">

                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a href="dmadetails" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Home</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="cityLoginrevenuecoll" class="nav-link menu-link"> <i class="ri-layout-fill"></i> <span>Revenue Collection</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="cityLogingrevanceCust" class="nav-link menu-link"> <i class="ri-customer-service-2-line"></i> <span>Grievance / Customer Service</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="citylogwqm" class="nav-link menu-link"> <i class="ri-slideshow-line"></i> <span>WQM</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="cityJalasathi" class="nav-link menu-link"> <i class="ri-water-flash-line"></i> <span>Jala Sathi</span> </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background bg-primary"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="h-100">
                                <!-- --------------------- -->
                                <?php
                                if ($logindmadetails != null) {
                                ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <blockquote class="blockquote custom-blockquote blockquote-danger rounded mb-0">
                                                <p class="mb-2">LAST PROGRESS UPDATE DATE : <span class="blockquote-footer mt-0"><?= $logindmadetails[0]['dma_full_details'][0]['dma_last_update'] ?></span> </p>
                                            </blockquote>
                                        </div>
                                        <div class="col-lg-12 mt-1">
                                            <blockquote class="blockquote custom-blockquote blockquote-dark rounded mb-0">
                                                <p class="mb-2">DIVISION NAME : <span class="blockquote-footer mt-0"><?= $logindmadetails[0]['dma_full_details'][0]['division_name'] ?></span> </p>
                                            </blockquote>
                                        </div>
                                        <div class="col-lg-12 mt-1">
                                            <blockquote class="blockquote custom-blockquote blockquote-dark rounded mb-0">
                                                <p class="mb-2">CITIES NAME : <span class="blockquote-footer mt-0"><?= $logindmadetails[0]['dma_full_details'][0]['city_name'] ?></span> </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="fs-15 fw-semibold">TOTAL DMA</h5>
                                                    <div class="d-flex flex-wrap justify-content-evenly">
                                                        <p class="text-muted mb-0">
                                                            <?= $logindmadetails[0]['dma_full_details'][0]['total_dma'] ?>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                                                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="fs-15 fw-semibold">TOTAL POPULATION</h5>
                                                    <div class="d-flex flex-wrap justify-content-evenly">
                                                        <p class="text-muted mb-0">
                                                            <?= $logindmadetails[0]['dma_full_details'][0]['total_population'] ?>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                                                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="fs-15 fw-semibold">TOTAL HOUSE HOLD</h5>
                                                    <div class="d-flex flex-wrap justify-content-evenly">
                                                        <p class="text-muted mb-0">
                                                            <?= $logindmadetails[0]['dma_full_details'][0]['total_household'] ?>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                                                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="fs-15 fw-semibold">TOTAL COMPLETE HOUSE CONECTION</h5>
                                                    <div class="d-flex flex-wrap justify-content-evenly">
                                                        <p class="text-muted mb-0">
                                                            <?= $logindmadetails[0]['dma_full_details'][0]['total_house_connection_complete'] ?>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                                                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="fs-15 fw-semibold">TOTAL COMPLETE METER CONNECTION</h5>
                                                    <div class="d-flex flex-wrap justify-content-evenly">
                                                        <p class="text-muted mb-0">
                                                            <?= $logindmadetails[0]['dma_full_details'][0]['total_meter_connection_comeplte'] ?>
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="progress animated-progress rounded-bottom rounded-0" style="height: 6px;">
                                                    <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->

                                    </div> <!-- end row-->
                                <?php
                                }
                                ?>
                                <!-- ------------------ -->

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title mb-0">All DMA</h4>

                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <!-- <p class="text-muted">Example of how to use the pagination plugin</p> -->
                                                <div class="row">

                                                    <?php
                                                    $dma_data = $logindmadetails[0]['dma_data'];

                                                    for ($dma_all = 0; $dma_all < count($dma_data); $dma_all++) { ?>
                                                        <div class="col-lg-6 col-12">
                                                            <div class="card bg-info-subtle text-info border-1">
                                                                <!-- <div class="card-header"> -->
                                                                <!-- <h6 class="card-title mb-0">Check your Payment <span class="badge bg-warning align-middle fs-10">Pending</span></h6> -->
                                                                <!-- </div> -->
                                                                <div class="card-body">
                                                                    <div class="row gy-3">
                                                                        <div class="col-sm">
                                                                            <h6 class="card-title fs-14">DMA : <?= $dma_data[$dma_all]->dma_no ?> <span class="badge bg-warning align-middle fs-10">NRW : <?= $dma_data[$dma_all]->nrw ?> %</span></h6>
                                                                            <p class="mb-0 fs-11"> AREA : <?= $dma_data[$dma_all]->area_name ?></p>
                                                                        </div>
                                                                        <div class="col-sm-auto">
                                                                            <a href="editdmapage/<?= $dma_data[$dma_all]->dma_id ?>" class="btn btn-info btn-label rounded-pill btn-sm"><i class="ri-edit-2-fill label-icon align-middle rounded-pill fs-16 me-2"></i>Update Now</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="position-absolute top-0 start-50 mt-2 opacity-25">
                                                                        <i class="bi bi-shop display-4"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end">
                                                                    <span class="link-warning fw-medium">Last Update : <?= $dma_data[$dma_all]->modification_date != null ? $dma_data[$dma_all]->modification_date : '00-00-0000' ?> </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <?php
                                                    }
                                                    ?>



                                                </div>

                                            </div><!-- end card -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end col -->
                                </div>
                            </div> <!-- end .h-100-->
                        </div> <!-- end col -->

                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <div>
                <button type="button" class="btn-success btn-rounded shadow-lg btn btn-icon layout-rightside-btn fs-22"><i class="ri-chat-smile-2-line"></i></button>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © dft.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by dft
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->





    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>
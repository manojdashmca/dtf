<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
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
                        <div class="dropdown topbar-head-dropdown topbar-tag-dropdown justify-content-end">
                            <button type="button" class="btn btn-icon btn-topbar rounded-circle text-white-50 fs-13" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="/assets/images/flags/us.svg" alt="Header Language" height="16" class="rounded-circle me-2"> <span id="lang-name">English</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                                    <img src="/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                    <span class="align-middle">English</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                                    <img src="/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                    <span class="align-middle">Española</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                                    <img src="/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded-circle" height="18"> <span class="align-middle">Deutsche</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                                    <img src="/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                    <span class="align-middle">Italiana</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                                    <img src="/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                    <span class="align-middle">русский</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                                    <img src="/assets/images/flags/china.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                    <span class="align-middle">中国人</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                                    <img src="/assets/images/flags/french.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                    <span class="align-middle">français</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                                    <img src="/assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded-circle" height="18">
                                    <span class="align-middle">عربى</span>
                                </a>
                            </div>
                        </div>
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
                                    <img src="/images/cropped-watco-logo.png" alt="" style="width: 50px;">
                                </span>
                                <span class="logo-lg">
                                    <img src="/images/cropped-watco-logo.png" alt="" style="width: 50px;">
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
                                    <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?= session()->get('usernamecity') ?></span>
                                        <span class="d-none d-xl-block ms-1 fs-13 text-reset user-name-sub-text">City User</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome City User!</h6>
                                <a class="dropdown-item" href="logoutcity"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded">
                    <div class="modal-header p-3">
                        <div class="position-relative w-100">
                            <input type="text" class="form-control form-control-lg border-2" placeholder="Search for hybrix..." autocomplete="off" id="search-options" value="">
                            <span class="bi bi-search search-widget-icon fs-17"></span>
                            <a href="javascript:void(0);" class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none" id="search-close-options">Clear</a>
                        </div>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">

                        <div class="dropdown-head rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-14 text-muted fw-semibold"> RECENT SEARCHES </h6>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                                <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                            </div>
                        </div>

                        <div data-simplebar style="max-height: 300px;" class="pe-2 ps-3 my-3">
                            <div class="list-group list-group-flush">
                                <div class="notification-group-list">
                                    <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Apps Pages</h5>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-speedometer2 me-2"></i> <span>Analytics Dashboard</span></a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-filetype-psd me-2"></i> <span>hybrix.psd</span></a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-ticket-detailed me-2"></i> <span>Support Tickets</span></a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-file-earmark-zip me-2"></i> <span>hybrix.zip</span></a>
                                </div>

                                <div class="notification-group-list">
                                    <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Links</h5>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-link-45deg me-2 align-middle"></i> <span>www.themesbrand.com</span></a>
                                </div>

                                <div class="notification-group-list">
                                    <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">People</h5>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                            <div>
                                                <h6 class="mb-0">Ayaan Bowen</h6>
                                                <span class="fs-13 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                            <div>
                                                <h6 class="mb-0">Alexander Kristi</h6>
                                                <span class="fs-13 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                            <div>
                                                <h6 class="mb-0">Alan Carla</h6>
                                                <span class="fs-13 text-muted">React Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-4"></i>
                            </div>
                            <div class="mt-4 fs-15">
                                <h4 class="mb-1">Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->

            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/logo-dark.png" alt="" height="26">
                    </span>
                </a>
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/logo-light.png" alt="" height="26">
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
                            <a href="/dmadetails" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Home</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cityLoginrevenuecoll" class="nav-link menu-link"> <i class="ri-layout-fill"></i> <span>Revenue Collection</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cityLogingrevanceCust" class="nav-link menu-link"> <i class="ri-customer-service-2-line"></i> <span>Grievance / Customer Service</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="/citylogwqm" class="nav-link menu-link"> <i class="ri-slideshow-line"></i> <span>WQM</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="/cityJalasathi" class="nav-link menu-link"> <i class="ri-slideshow-line"></i> <span>Jala Sathi</span> </a>
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
                        <div class="col-12 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-success">Edit Dma / Zone Information</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php


                    if ($geteditdmadetails != null) {
                    ?>
                        <form action="/updateDmaDetails/<?= $geteditdmadetails->id; ?>" method="post">
                            <div class="row">

                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">DMA NAME :</label>
                                        <input type="text" class="form-control" name="city_user_dma_name" placeholder="Dma/Zone name" value="<?= $geteditdmadetails->dma_no; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">NRW % : <span class="text-danger"><sup>(Ex.09)</sup> </span></label>
                                        <input type="text" class="form-control" name="city_user_nrw" placeholder="EX: 01/10/100...." value="<?= $geteditdmadetails->nrw; ?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div>
                                        <label for="exampleFormControlTextarea5" class="form-label">DMA AREA NAME : </label>
                                        <textarea class="form-control" name="city_user_dma_area_name" rows="2"><?= $geteditdmadetails->area_name; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">POPULATION :</label>
                                        <input type="text" class="form-control" name="city_user_population" placeholder="Ex: 0000" value="<?= $geteditdmadetails->population; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">TOTAL HOUSE HOLD :</label>
                                        <input type="text" class="form-control" name="city_user_total_house_hold" placeholder="Ex:0000" value="<?= $geteditdmadetails->no_house_holds; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">TOTAL HOUSE CONNECTION :</label>
                                        <input type="text" class="form-control" name="city_user_house_connection" placeholder="Ex:0000" value="<?= $geteditdmadetails->no_house_coction; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">HOUSE CONNECTION REPLACE :</label>
                                        <input type="text" class="form-control" name="city_user_house_connection_replace" placeholder="Ex:0000" value="<?= $geteditdmadetails->no_house_connection_replaced; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">TOTAL METER CONNECTION :</label>
                                        <input type="text" class="form-control" name="city_user_meter_connection" placeholder="Ex:0000" value="<?= $geteditdmadetails->no_metered_house_connections; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">DFT COMPLETE MONTH/YEAR :</label>
                                        <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="00/00" value="<?= $geteditdmadetails->dft_complete_m_y; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <label for="placeholderInput" class="form-label">DFT TARGET DATE COMPLETION :</label>
                                        <input type="text" class="form-control" name="city_user_dft_target_data_complete" placeholder="00-00-0000" value="<?= $geteditdmadetails->dft_target_date_completion; ?>">
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button type="button" class="btn rounded-pill btn-primary">Goto Home</button>
                                    <button type="submit" name="submit" class="btn rounded-pill btn-info">Update</button>
                                </div>

                            </div>
                        </form>

                    <?php  } ?>
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
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="/assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>
</body>

</html>
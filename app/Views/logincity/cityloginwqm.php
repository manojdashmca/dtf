<?php if (!session()->get('usernamecity')) {
    header('location:/logincity');
    exit;
}  ?>
<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <meta charset="utf-8" />
    <title>CITY USER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!--datatable css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
            .set_height {
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
                        <!-- <img src="assets/images/logo-sm.png" alt="" height="26"> -->
                    </span>
                    <span class="logo-lg">
                        <!-- <img src="assets/images/logo-dark.png" alt="" height="26"> -->
                    </span>
                </a>
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <!-- <img src="assets/images/logo-sm.png" alt="" height="26"> -->
                    </span>
                    <span class="logo-lg">
                        <!-- <img src="assets/images/logo-light.png" alt="" height="26"> -->
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
                <div class="container-fluid set_height">
                    <div class="row">
                        <div class="col-12 text-center">
                            <?php
                            if ($getDmaCityOnCityuser != NULL) {
                            ?>
                                <h5 class="text-info">REVENUE COLLECTION</h5>
                                <h5 class="text-info"><?= $getDmaCityOnCityuser->division; ?>, <?= $getDmaCityOnCityuser->city; ?></h5>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 mt-4">
                            <div class="card">
                                <ul class="list-group">
                                    <li class="list-group-item"><i class="ri-bill-line align-middle me-2"></i> NOS OF SAMPLE TAKEN
                                        <span class="text-info" style="float:right"><?php if (isset($getWqmInCityDivision->wqm_on_of_sample_taken)) {
                                                                                        echo $getWqmInCityDivision->wqm_on_of_sample_taken != null ? $getWqmInCityDivision->wqm_on_of_sample_taken : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-file-copy-2-line align-middle me-2"></i>SAMPLE COLLECTED AT WTP
                                        <span class="text-info" style="float:right"><?php if (isset($getWqmInCityDivision->wqm_sample_collected_at_wtp)) {
                                                                                        echo $getWqmInCityDivision->wqm_sample_collected_at_wtp != null ? $getWqmInCityDivision->wqm_sample_collected_at_wtp : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-question-answer-line align-middle me-2"></i>SAMPLE COLLECTED AT STORAGE
                                        <span class="text-info" style="float:right"><?php if (isset($getWqmInCityDivision->wqm_sample_collected_at_storage)) {
                                                                                        echo $getWqmInCityDivision->wqm_sample_collected_at_storage != null ? $getWqmInCityDivision->wqm_sample_collected_at_storage : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-secure-payment-line align-middle me-2"></i>RESOLVED AFTER TIME LIMIT
                                        <span class="text-info" style="float:right"><?php if (isset($getWqmInCityDivision->wqm_resolved_after_time_limit)) {
                                                                                        echo $getWqmInCityDivision->wqm_resolved_after_time_limit != null ? $getWqmInCityDivision->wqm_resolved_after_time_limit : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-water-flash-line align-middle me-2"></i>SAMPLE COLLECTED FROM DISTRIBUTION NETWORK
                                        <span class="text-info" style="float:right"><?php if (isset($getWqmInCityDivision->wqm_sample_collected_from_distribution_network)) {
                                                                                        echo $getWqmInCityDivision->wqm_sample_collected_from_distribution_network != null ? $getWqmInCityDivision->wqm_sample_collected_from_distribution_network : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-calendar-line align-middle me-2"></i>SAMPLE COLLECTED AT CONSUMER POINT
                                        <span class="text-info" style="float:right"><?php if (isset($getWqmInCityDivision->wqm_sample_collected_at_consumer_point)) {
                                                                                        echo $getWqmInCityDivision->wqm_sample_collected_at_consumer_point != null ? $getWqmInCityDivision->wqm_sample_collected_at_consumer_point : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-calendar-line align-middle me-2"></i>NOS. OF PARAMETERS TESTED
                                        <span class="text-info" style="float:right"><?php if (isset($getWqmInCityDivision->wqm_nos_of_parameters_tested)) {
                                                                                        echo $getWqmInCityDivision->wqm_nos_of_parameters_tested != null ? $getWqmInCityDivision->wqm_nos_of_parameters_tested : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-calendar-line align-middle me-2"></i>NOS OF SAMPLE FAILED
                                        <span class="text-info" style="float:right"><?php if (isset($getWqmInCityDivision->wqm_nos_of_sample_failed)) {
                                                                                        echo $getWqmInCityDivision->wqm_nos_of_sample_failed != null ? $getWqmInCityDivision->wqm_nos_of_sample_failed : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                </ul>
                                <div class="edit-button mt-2 text-center">
                                    <?php if (isset($getWqmInCityDivision)) { ?>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#cityUserRvnC" onclick="editCityUserRevenue(<?php echo $getWqmInCityDivision->id ?>)">Edit Now</button>
                                    <?php } else { ?>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cityUserRvnCAdd">Add New</button>
                                    <?php } ?>
                                </div>

                            </div>

                        </div>
                        <div class="col-6">
                            <div class="card" style="height: 342px;">
                                <img src="assets/images/rv.jpeg" alt="" style="height: 100%;">
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- <div class="page-content">
                <div class="container-fluid set_height">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5 class="text-info">WQM</h5>
                            <h5 class="text-info">KEONJHAR,BARBIL</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div>
                                <label for="placeholderInput" class="form-label">NOS OF SAMPLE TAKEN :</label>
                                <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="0000" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label for="placeholderInput" class="form-label">SAMPLE COLLECTED AT WTP :</label>
                                <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="0000" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label for="placeholderInput" class="form-label">SAMPLE COLLECTED AT STORAGE :</label>
                                <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="0000" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label for="placeholderInput" class="form-label">RESOLVED AFTER TIME LIMIT :</label>
                                <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="0000" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label for="placeholderInput" class="form-label">SAMPLE COLLECTED FROM DISTRIBUTION NETWORK :</label>
                                <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="0000" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label for="placeholderInput" class="form-label">SAMPLE COLLECTED AT CONSUMER POINT :</label>
                                <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="0000" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label for="placeholderInput" class="form-label">NOS. OF PARAMETERS TESTED :</label>
                                <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="0000" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label for="placeholderInput" class="form-label">NOS OF SAMPLE FAILED :</label>
                                <input type="text" class="form-control" name="city_user_dft_complete_m_y" placeholder="0000" value="">
                            </div>
                        </div>
                        <div class="col-12 mt-3 text-center">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </div>
            </div> -->
            

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
    </div>
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweetalerts.init.js"></script>

    <!-- App js -->
</body>

</html>
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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
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
                                    <li class="list-group-item"><i class="ri-bill-line align-middle me-2"></i> NOS. BILL GENERATED
                                        <span class="text-info" style="float:right"><?php if (isset($getRevenueDataInCityDivision->no_bill_generated)) {
                                                                                        echo $getRevenueDataInCityDivision->no_bill_generated != null ? $getRevenueDataInCityDivision->no_bill_generated : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-file-copy-2-line align-middle me-2"></i>NOS. BILL DISTRIBUTED
                                        <span class="text-info" style="float:right"><?php if (isset($getRevenueDataInCityDivision->no_bill_distributed)) {
                                                                                        echo $getRevenueDataInCityDivision->no_bill_distributed != null ? $getRevenueDataInCityDivision->no_bill_distributed : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-question-answer-line align-middle me-2"></i>INCENTIVE PAID TO JALSATHI
                                        <span class="text-info" style="float:right"><?php if (isset($getRevenueDataInCityDivision->incentive_paid_to_jalasathi)) {
                                                                                        echo $getRevenueDataInCityDivision->incentive_paid_to_jalasathi != null ? $getRevenueDataInCityDivision->incentive_paid_to_jalasathi : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-secure-payment-line align-middle me-2"></i>TOTAL REVENUE COLLECTED
                                        <span class="text-info" style="float:right"><?php if (isset($getRevenueDataInCityDivision->total_revenue_collected)) {
                                                                                        echo $getRevenueDataInCityDivision->total_revenue_collected != null ? $getRevenueDataInCityDivision->total_revenue_collected : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-water-flash-line align-middle me-2"></i>REVENUE COLLECTED BY JALSATHI
                                        <span class="text-info" style="float:right"><?php if (isset($getRevenueDataInCityDivision->revenue_collected_by_jalasathi)) {
                                                                                        echo $getRevenueDataInCityDivision->revenue_collected_by_jalasathi != null ? $getRevenueDataInCityDivision->revenue_collected_by_jalasathi : '0000';
                                                                                    } else {
                                                                                        echo '0000';
                                                                                    } ?></span>
                                    </li>
                                    <li class="list-group-item"><i class="ri-calendar-line align-middle me-2"></i>LAST UPDATED DATE
                                        <span class="text-info" style="float:right"><?php if (isset($getRevenueDataInCityDivision->last_update)) {
                                                                                        echo $getRevenueDataInCityDivision->last_update != null ? $getRevenueDataInCityDivision->last_update : '00-00-0000';
                                                                                    } else {
                                                                                        echo '00-00-0000';
                                                                                    } ?></span>
                                    </li>
                                </ul>
                                <div class="edit-button mt-2 text-center">
                                    <?php if ($getRevenueDataInCityDivision) { ?>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#cityUserRvnC" onclick="editCityUserRevenue(<?php echo $getRevenueDataInCityDivision->id ?>)">Edit Now</button>
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
    </div>
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!-- Add New modal   -->
    <!-- Default Modals -->
    <div id="cityUserRvnCAdd" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">ADD REVENUE COLLECTION</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <h5 class="fs-15">
                        <!-- Overflowing text to show scroll behavior -->
                    </h5>
                    <form method="post" id="addCityuserRevenueCollection">
                        <div class="row">
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">NOS. BILL GENERATED :</label>
                                <input type="text" class="form-control" name="rev_no_of_bill_generated" placeholder="0000" value="">
                            </div>
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">NOS. BILL DISTRIBUTED :</label>
                                <input type="text" class="form-control" name="rev_nos_bill_distributed" placeholder="0000" value="">
                            </div>
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">INCENTIVE PAID TO JALSATHI :</label>
                                <input type="text" class="form-control" name="rev_incentive_paid_to_jalsathi" placeholder="0000" value="">
                            </div>
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">TOTAL REVENUE COLLECTED :</label>
                                <input type="text" class="form-control" name="rev_total_revenue_collected" placeholder="0000" value="">
                            </div>
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">REVENUE COLLECTED BY JALSATHI :</label>
                                <input type="text" class="form-control" name="rev_revenue_collected_by_jalasathi" placeholder="0000" value="">
                            </div>
                            <div class="col-12 mt-3 text-center">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Add New</button>
                            </div>
                        </div><!--end row-->
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Add New Modal -->
    <!-- edit modal   -->
    <!-- Default Modals -->
    <div id="cityUserRvnC" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"> EDIT REVENUE COLLECTION</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <h5 class="fs-15">
                        <!-- Overflowing text to show scroll behavior -->
                    </h5>
                    <form method="post" id="editCityuserRevenueCollection">
                        <div class="row">
                            <input type="hidden" name="revenue_id" id="revenue_id">
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">NOS. BILL GENERATED :</label>
                                <input type="text" class="form-control" name="rev_no_of_bill_generated" id="rev_no_of_bill_generated" placeholder="0000" value="">
                            </div>
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">NOS. BILL DISTRIBUTED :</label>
                                <input type="text" class="form-control" name="rev_nos_bill_distributed" id="rev_nos_bill_distributed" placeholder="0000" value="">
                            </div>
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">INCENTIVE PAID TO JALSATHI :</label>
                                <input type="text" class="form-control" name="rev_incentive_paid_to_jalsathi" id="rev_incentive_paid_to_jalsathi" placeholder="0000" value="">
                            </div>
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">TOTAL REVENUE COLLECTED :</label>
                                <input type="text" class="form-control" name="rev_total_revenue_collected" id="rev_total_revenue_collected" placeholder="0000" value="">
                            </div>
                            <div class="col-12">
                                <label for=" placeholderInput" class="form-label">REVENUE COLLECTED BY JALSATHI :</label>
                                <input type="text" class="form-control" name="rev_revenue_collected_by_jalasathi" id="rev_revenue_collected_by_jalasathi" placeholder="0000" value="">
                            </div>
                            <div class="col-12 mt-3 text-center">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Save Changes</button>
                            </div>
                        </div><!--end row-->
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Edit Modal -->


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

    <!-- Table -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="assets/js/pages/datatables.init.js"></script>
    <!-- Table -->
    <?php
    require_once __DIR__ . '/../uservalidation/city_revenue_collection.php';
    ?>
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweetalerts.init.js"></script>
    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <!-- <script src="assets/js/app.js"></script> -->
</body>

</html>
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
        <link rel="shortcut icon" href="assets/images/favicon.ico">
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
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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
            ?>
            <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Cities Details</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Cities</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0 flex-grow-1">All City</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal" style="float:right;"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                                    <div id="table-gridjs"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
    <!-- end row -->

</div>



<!-- Modal -->


<div class="modal fade" id="staticBackdropEditCity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->
                <div>
                    <label for="placeholderInput" class="form-label">Zone :</label>
                    <input type="text" class="form-control" id="edit-city-zone" placeholder="Enter City Name">
                    <select class="form-control" name="edit_district_id" id="edit_district_id">
                                <option value="">Select District</option>
                    </select>
                </div> 
                <div>
                    <label for="placeholderInput" class="form-label">City :</label>
                    <input type="text" class="form-control" id="edit-city" placeholder="Enter City Name">
                </div>
                
                <div class="mt-4">
                    <div class="hstack gap-2 justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                        <a href="javascript:void(0);" class="btn btn-success">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add  -->
<div class="modal fade" id="showModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->
                <form method="post" id="addCity">
                        <div class="mb-3">
                            <p class="text-muted">Select Division <span class="text-danger">*</span> :</p>
                            <select class="form-control" name="division_id" id="division_id">
                                <option value="">Select Division</option>
                                <?php foreach ($alldivisionname as $option_all) : ?>
												<option value="<?= $option_all->id ?>"><?= $option_all->division_name ?></option>
											<?php endforeach; ?>
                            </select>
                            


                        </div>
                        <div>
                            <label for="placeholderInput" class="form-label">City :</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City Name">
                        </div>
                        
                        <div class="mt-4">
                            <div class="hstack gap-2 justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

</div>
    <!-- end page content-->


<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Drink From Tap.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Endevs <?= getVersion(); ?>
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

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>


<!-- JAVASCRIPT -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/plugins.js"></script>
<?php
require_once __DIR__ . '/managedJs.php';
?>

<?php
if ($includefile) {
    $files = explode(',', $includefile);
    for ($x = 0; $x < count($files); $x++) {
        require_once __DIR__ . '/../uservalidation/' . $files[$x];
    }
}
?>
<!-- gride Table -->
<script src="assets/libs/prismjs/prism.js"></script>
<script src="assets/libs/gridjs/gridjs.umd.js"></script>

<!-- <script src="assets/js/pipeline/division-table.js"></script> -->
<!-- gride Table -->
<script src="assets/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="assets/js/pipeline/city-table.js"></script>
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script> 
<script src="assets/js/pages/sweetalerts.init.js"></script>
</body>

</html>
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title><?=$title?> | Drink From Tap Mission</title>
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
    <link href="css/all-custom.min.css" rel="stylesheet" type="text/css" />
    <?php
        require_once __DIR__ . '/managedCss.php';
        ?>
    <style>
        .vertical-tab-left button {
    display: inline-block;
    text-align: left;
    width: 100%;
    border-radius: 0!important;
    color: #fff;
}
.vertical-tab-left button.active {
    background: #2a68c7!important;
}

/* nrw css */


/* chart formatting */
.grid-chart-nrw {
  /* background-image: linear-gradient(to top, #444, #111); */
  padding: 0.5rem;
  border-radius: 3px;
}
  .chart-label {
    text-align: center;
    font-size: 1.3rem;
  }
  .bar-chart-nrw {
    /* //height: 250px; */
    padding-top: 2em;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(1.5em, 1fr));
    grid-gap: 4px;
    align-items: end;
  }
  .bar-nrw {
    background-color: rgba(0, 255, 127, 0.5);
    position: relative;
    border-radius: 3px 3px 0 0;
    max-height: 200px;
  }
    .bar-label-nrw {
      text-align: center;
      width: 100%;
      position: absolute;
      top: -1.2em;
      left: 0;
      color: #2c5da7;
    }
  /* } */
  .item-label-nrw {
    display: block;
    color: #2c5da7;
    font-size: 0.8em;
    text-align: center;
    padding: 4px 0 1em 0;
  }
/* } */

    </style>
</head>

<body>
    <!-- Begin page -->
    <!-- <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="images/cropped-watco-logo.png" alt="">
                                </span>
                                <span class="logo-lg">
                                    <img src="images/cropped-watco-logo.png" alt="">
                                </span>
                            </a>

                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <i class=" bx bx-menu-alt-left"></i> Menu
                            
                        </button>
                    </div>

                    <div class="d-flex align-items-center">
                        <span class="logo-lg d-md-none d-sm-block">
                            <img src="images/cropped-watco-logo.png" alt="" height="26">
                            <div class="logo-caption">
                                <h1>Water Corporation of Odisha</h1>
                                <p>Government of Odisha</p>
                            </div>
                        </span>
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <div class="drink-from-tap-logo">
                                <img src="images/drink-from-tap.png" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </header> -->

        <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="/" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="images/cropped-watco-logo.png" alt="">
                                </span>
                                <span class="logo-lg">
                                    <img src="images/cropped-watco-logo.png" alt="">
                                </span>
                            </a>

                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <i class=" bx bx-menu-alt-left"></i> Menu
                            <!-- <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span> -->
                        </button>
                    </div>

                    <div class="d-flex align-items-center">
                        <span class="logo-lg d-md-none d-sm-block">
                            <img src="images/cropped-watco-logo.png" alt="" height="26">
                            <div class="logo-caption">
                                <h1>Water Corporation of Odisha</h1>
                                <p>Government of Odisha</p>
                            </div>
                        </span>
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <div class="drink-from-tap-logo">
                                <img src="images/drink-from-tap.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php
            require_once __DIR__ . '/leftmenu.php';
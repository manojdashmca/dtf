<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title><?= $title ?> | Drink From Tap Mission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/logo-single.png">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="css/all-custom.min.css" rel="stylesheet" type="text/css" />
    <!--AOS Animation-->
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.css" />
    <link href="css/home-custom.css" rel="stylesheet">
    <?php
    require_once __DIR__ . '/managedCss.php';
    ?>

    <style>
        
        .progress-container {
            display: flex;
            height: 100px;
            width: 35px;
            background-color: #ff00009e;
            overflow: hidden;
            rotate: 180deg;
        }

        .progress-bar {
            flex: 1;
        }

        .outer-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .progress-bar-round {
    display: flex;
    justify-content: center;
    align-items: center;

    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.progress-bar-round::before {
  content: attr(data-progress);
}

@media screen and (max-width: 1180px) {
  .construction_progress1 {
    display: none;
  }
}
@media screen and (min-width: 1180px) {
  .construction_progress2 {
    display: none;
  }
}



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
    </style>
</head>

<body>


    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/cropped-watco-logo.png" alt="">
                            <div class="logo-caption">
                                <h1>Water Corporation of Odisha</h1>
                                <p>Government of Odisha</p>
                            </div>
                        </a>
                    </div>
                    <div class="drink-from-tap">
                        <a href="#">
                            <img src="images/drink-from-tap.png" alt="" title="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    

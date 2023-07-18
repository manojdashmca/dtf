<?php
$cssarray = explode(',', $css);
if (in_array('sweetalert', $cssarray)) {
    ?>
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<?php
}
if (in_array('default', $cssarray)) {
    ?>

<?php } if (in_array('dashboard', $cssarray)) { ?>
    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <?php
}
if (in_array('datatable', $cssarray)) {
    ?>
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<?php }if (in_array('validation', $cssarray)) { ?>
    <link type="text/css" rel="stylesheet" href="assets/libs/formvalidation/formValidation.min.css">
<?php } if (in_array('alertify', $cssarray)) { ?>
    <link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />
<?php
}



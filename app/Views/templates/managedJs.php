<?php
$jsarray = explode(',', $js);
if (in_array('sweetalert', $jsarray)) {
    ?>
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <?php
}
if (in_array('default', $jsarray)) {
    ?>

    <?php
}
if (in_array('dashboard', $jsarray)) {
    ?>
    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>
<?php } if (in_array('datatable', $jsarray)) { ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="assets/js/pages/datatables.init.js"></script>
<?php } if (in_array('chart', $jsarray)) { ?>    
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>    
<?php }if (in_array('validation', $jsarray)) { ?>    
    <script src="assets/libs/formvalidation/formValidation.min.js"></script>
    <script src="assets/libs/formvalidation/framework/bootstrap.js"></script>
<?php } if (in_array('alertify', $jsarray)) { ?>
    <script src="assets/libs/alertifyjs/build/alertify.min.js"></script>
<?php
}if (in_array('divisionmastertable', $jsarray)) { ?>   
<!-- Division Master Table -->
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/pipeline/division-table.js"></script>
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script> 
    <script src="assets/js/pages/sweetalerts.init.js"></script>
<?php
}




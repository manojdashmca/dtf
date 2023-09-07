<!-- End Page-content -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script> Water Corporation of Odisha. All
                Rights Reserved
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
<!-- apexcharts -->
<script src="assets/js/pipeline/dependent.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Vector map-->
<script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

<!--Swiper slider js-->
<script src="assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- Dashboard init -->
<script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

<!-- App js -->
<script src="assets/js/pipeline/waterprogressdashboard.js"></script>
<script src="assets/js/pipeline/nrw_progress_filter.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>
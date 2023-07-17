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
<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>
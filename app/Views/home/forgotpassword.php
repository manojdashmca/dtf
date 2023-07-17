<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

    <head>

        <meta charset="utf-8" />
        <title>Reset Password | Dring From Tap Mission</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Drink From Trap Mission" name="description" />
        <meta content="Endevs" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo-single.png">

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
        <link type="text/css" rel="stylesheet" href="assets/libs/formvalidation/formValidation.min.css">
    </head>

    <body>

        <!-- auth-page wrapper -->
        <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
            <div class="bg-overlay"></div>
            <!-- auth-page content -->
            <div class="container-fluid">
                <div class="row g-0 justify-content-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="text-center mb-4 pb-2">
                            <img src="assets/images/logo-dft.png" alt="" height="100" />
                        </div>
                        <div class="card mb-0 border-0 py-3 shadow-none">
                            <div class="card-body p-4 p-sm-5">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary fs-20">Forgot Password?</h5>
                                    <p class="text-muted mb-4">Reset password with Hybrix</p>
                                    <div class="display-5 mb-4 text-danger">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>

                                <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                                    Enter your email and instructions will be sent to you!
                                </div>
                                <div class="p-2">
                                    <form name="forgotpasswordform" id="forgotpasswordform" method="post">
                                        <div class="form-group mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="useremail" placeholder="Enter Email" required="">
                                        </div>
                                        <div class="form-group mb-3">
                                            
                                            <div class="g-recaptcha" data-sitekey="6LcdR7oZAAAAAARotdOhsAkkpayHvS3uGEgzNrUi" data-callback="correctCaptcha"></div>
                                            <input type="hidden" name="validcaptcha" id="validcaptcha" value=""/>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Send Reset Link</button>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Wait, I remember my password... <a href="/login" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="text-white text-center mt-4">
                            <p class="mb-0">&copy;
                                <script>document.write(new Date().getFullYear())</script> Drink From Tap Mission. 
                            </p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end conatiner-->
        </div>
        <!-- end auth-page-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery.min.js"></script>        
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/libs/formvalidation/formValidation.min.js"></script>
        <script src="assets/libs/formvalidation/framework/bootstrap.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script type="text/javascript">
                                    $("form").each(function () {
                                        $(this).find(':input[type="submit"]').prop('disabled', true);
                                    });
                                    function correctCaptcha() {
                                        var response = grecaptcha.getResponse();
                                        $('#validcaptcha').val(response);
                                        $('#forgotpasswordform').formValidation("revalidateField", "validcaptcha");
                                        $("form").each(function () {
                                            $(this).find(':input[type="submit"]').prop('disabled', false);
                                        });
                                    }

                                    $(document).ready(function () {
                                        $('#forgotpasswordform').formValidation({
                                            message: 'This value is not valid',
                                            icon: {
                                            },
                                            fields: {
                                                useremail: {
                                                    validators: {
                                                        notEmpty: {
                                                            message: "Username is required"
                                                        }, regexp: {
                                                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                                                            message: 'Enter a valid email address'
                                                        }
                                                    }
                                                },
                                                validcaptcha: {
                                                    excluded: false,
                                                    validators: {
                                                        notEmpty: {
                                                            message: "Please verify the captcha"
                                                        }
                                                    }
                                                }
                                            }

                                        });
                                    });
        </script>
    </body>

</html>
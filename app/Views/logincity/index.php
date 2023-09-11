<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign In | Drink From Trap Mission</title>
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


    <section class="auth-page-wrapper-2 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="auth-card card bg-primary h-100 rounded-0 rounded-start border-0 d-flex align-items-center justify-content-center overflow-hidden p-4">
                        <div class="auth-image">
                            <img src="assets/images/logo-light-full.png" alt="" height="42" />
                            <img src="assets/images/effect-pattern/auth-effect-2.png" alt="" class="auth-effect-2" />
                            <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect" />
                            <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card mb-0 rounded-0 rounded-end border-0">
                        <div class="card-body p-4 p-sm-5 m-lg-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary fs-22">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue to Water Connection Odisha.</p>
                            </div>
                            <div class="p-2 mt-5">
                                <?= session()->getFlashdata('message'); ?>
                                <form action="" method="post" id="loginformcity" name="loginformcity">

                                    <div class="form-group mb-3">
                                        <label for="usernamecity" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="usernamecity" name="usernamecity" placeholder="Enter username" value="<?= isset($_COOKIE['dftm-username']) ? $_COOKIE['dftm-username'] : ''; ?>">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" id="passwordinputcity" name="passwordinputcity" class="form-control password-input" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" value="<?= isset($_COOKIE['dftm-password']) ? $_COOKIE['dftm-password'] : ''; ?>">
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="float-end">
                                            <a href="forgot-password" class="text-muted">Forgot password?</a>
                                        </div>
                                        <div class="g-recaptcha" data-sitekey="6LcdR7oZAAAAAARotdOhsAkkpayHvS3uGEgzNrUi" data-callback="correctCaptcha"></div>
                                        <input type="hidden" name="validcaptchacity" id="validcaptchacity" value="" />
                                    </div>
                                    <div class="form-check form-group mt-4">
                                        <input class="form-check-input" type="checkbox" id="remembercity" name="remembercity" <?= isset($_COOKIE['dftm-username']) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                    </div>

                                    <div class="form-group mt-4">
                                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                    </div>
                                </form>

                                <!-- <div class="text-center mt-5">
                                        <p class="mb-0">Don't have an account ? <a href="auth-signup-basic-2.html" class="fw-semibold text-secondary text-decoration-underline"> SignUp</a> </p>
                                    </div> -->
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/pages/password-addon.init.js"></script>
    <script src="assets/libs/formvalidation/formValidation.min.js"></script>
    <script src="assets/libs/formvalidation/framework/bootstrap.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
        $("form").each(function() {
            $(this).find(':input[type="submit"]').prop('disabled', true);
        });

        function correctCaptcha() {
            var response = grecaptcha.getResponse();
            $('#validcaptchacity').val(response);
            //$('#forgotpasswordform').formValidation("revalidateField", "validcaptchacity");
            $('#loginformcity').formValidation("revalidateField", "validcaptchacity");
            $("form").each(function() {
                $(this).find(':input[type="submit"]').prop('disabled', false);
            });
        }

        $(document).ready(function() {
            $('#loginformcity').formValidation({
                message: 'This value is not valid',
                icon: {},
                fields: {
                    usernamecity: {
                        validators: {
                            notEmpty: {
                                message: "Username is required"
                            }
                        }
                    },
                    passwordinputcity: {
                        validators: {
                            notEmpty: {
                                message: "Password is required"
                            }
                        }
                    },
                    validcaptchacity: {
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
<div class="container-fluid">
    <div class="row">
        <?= session()->getFlashdata('message'); ?>
        <div class="col-xxl-12">
            <div class="card overflow-hidden profile-setting-img">
                <div class="profile-user rounded profile-basic" style="background-image: url('assets/images/profile-bg.jpg');background-size: cover;background-position: center;">


                </div>

                <div class="card-body">
                    <div class="position-relative mb-3">
                        <div class="mt-n5">
                            <?php if (empty($úserdetail->user_profile_pic)) { ?>
                                <img src="uploads/images/default.jpg" alt="" class="avatar-lg rounded-circle p-1 bg-card-custom mt-n4">
                            <?php } else { ?>
                                <img src="uploads/images/<?= $úserdetail->user_profile_pic ?>" alt="" class="avatar-lg rounded-circle p-1 bg-card-custom mt-n4">
                            <?php } ?>
                        </div>
                    </div>

                    <!-- Nav tabs -->
                    <div class="row align-items-center mt-3 gy-3">
                        <div class="col-md order-1">
                            <ul class="nav nav-pills animation-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="true">
                                        <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Personal Details</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#changePassword" role="tab" aria-selected="false" tabindex="-1">
                                        <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Changes Password</span>
                                    </a>
                                </li>


                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!--end col-->
        <div class="col-xxl-12">
            <div class="card">
                <div class="card-body p-4">
                    <div class="tab-content">
                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                            <form action="" method="post" name="userprofile" id="userprofile" enctype="multipart/form-data">
                                <input type="hidden" name="actiontype" value="profile">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="firstnameInput" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="<?= $úserdetail->user_name ?>">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="lastnameInput" class="form-label">Mobile</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile" value="<?= $úserdetail->user_mobile ?>" readonly="">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="phonenumberInput" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email" value="<?= $úserdetail->user_email ?>" readonly>
                                        </div>
                                    </div>
                                    <!--end col-->                                    
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="emailInput" class="form-label">Profile Pic</label>
                                            <input type="file" class="form-control" id="profilepic" name="profilepic" placeholder="Select Profilepic">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-primary">Updates</button>
                                            <button type="button" class="btn btn-soft-success">Cancel</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <!--end tab-pane-->
                        <div class="tab-pane" id="changePassword" role="tabpanel">
                            <form action="" method="post" name="changepassword" id="changepassword">
                                <input type="hidden" name="actiontype" value="changepassword">
                                <div class="row g-2 justify-content-lg-between align-items-center">
                                    <div class="col-lg-4">
                                        <div>
                                            <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                            <div class="form-group position-relative">
                                                <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Enter current password">


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="auth-pass-inputgroup">
                                            <label for="password-input" class="form-label">New Password*</label>
                                            <div class="form-group  position-relative">
                                                <input type="password" class="form-control password-input" id="newpassword" name="newpassword" onpaste="return false" placeholder="Enter new password" aria-describedby="passwordInput" >

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="auth-pass-inputgroup">
                                            <label for="confirm-password-input" class="form-label">Confirm Password*</label>
                                            <div class="form-group position-relative">
                                                <input type="password" class="form-control password-input" onpaste="return false" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" >

                                            </div>

                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="/forgot-password" class="link-primary text-decoration-underline">Forgot Password ?</a>
                                        <div class="">
                                            <button type="submit" class="btn btn-success">Change Password</button>
                                        </div>
                                    </div>


                                </div>
                                <!--end row-->
                            </form>
                            <div class="mt-4 mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Login History</h5>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sl No</th>
                                                    <th scope="col">IP Address</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Browser</th>
                                                    <th scope="col">OS</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($x = 0; $x < count($logininfo); $x++) { ?>
                                                    <tr>
                                                        <td><?= str_pad(($x + 1), 2, "0", STR_PAD_LEFT) ?></td>
                                                        <td><?= $logininfo[$x]->logged_ip ?></td>
                                                        <td><?= makeDate($logininfo[$x]->logged_date, 'd-m-Y h:i:s A') ?></td>
                                                        <td><?= $logininfo[$x]->logged_browser ?></td>
                                                        <td><?= $logininfo[$x]->logged_os ?></td>

                                                    </tr>                                                
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tab-pane-->                       

                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

</div>
<!-- container-fluid -->
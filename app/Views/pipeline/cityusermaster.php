<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">CITY USERS</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">CITY USER</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">ALL CITY USER </h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalCityUser" style="float:right;"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                    <div id="table-gridjs-cityuser"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- Modal -->


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit Division</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <form method="post" id="updatedmazonedata">
                    <input type="hidden" class="form-control" id="old_division_id" name="old_division_id">
                    <div>
                        <label for="placeholderInput" class="form-label">Division :</label>
                        <input type="text" class="form-control" id="edit_division_name" name="edit_division_name" placeholder="Enter Divisions Name">
                    </div>

                    <div class="mt-4">
                        <div class="hstack gap-2 justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <!-- Input with Placeholder -->

            </div>
        </div>
    </div>
</div>

<!-- Add  -->
<div class="modal fade" id="showModalCityUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add New City User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->
                <form method="post" id="addCityUserForm">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <p class="text-muted">Select Division <span class="text-danger">*</span> :</p>
                                    <select class="form-control" name="citymaster_division" id="citymaster_division">
                                        <option value="">Select Division</option>
                                        <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                                            <option value='<?= $alldivisionname[$x]->id ?>' <?= ($city == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?>><?= $alldivisionname[$x]->division_name ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <p class="text-muted">Select City <span class="text-danger">*</span> :</p>
                                    <select class="form-control" name="cityuser_city" id="cityuser_city">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <p class="text-muted">User Name <span class="text-danger">*</span> :</p>
                                    <input type="text" class="form-control" name="user_name" id="user_name">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <p class="text-muted">User Email <span class="text-danger">*</span> :</p>
                                    <input type="text" class="form-control" name="user_email" id="user_email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <p class="text-muted">User Contact <span class="text-danger">*</span> :</p>
                                    <input type="text" class="form-control" name="user_contact" id="user_contact">
                                </div>
                            </div>
                        </div>
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
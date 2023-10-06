<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Grievance And Customer Service</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Grievance And Customer Service</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">All Grievance And Customer Service</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalGrievance" style="float:right;"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                    <div id="table-gridjs-gcs"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
</div>







<!-- Modal -->
<!-- Add  -->
<div class="modal fade modal-lg" id="showModalGrievance" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Revenue Collection Details :</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->

                <form method="post" id="addgriveancecustomer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- <h4 class="card-title mb-0">Examples</h4> <input type="text" class="form-control" name="z_population" id="z_population"> -->
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div>
                                            <!-- <h5 class="fs-14 mb-3 form-label">Date Formatting</h5> -->
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Select Division <span class="text-danger">*</span> </label>
                                                        <select class="form-control" name="z_division_id" id="z_division_id">
                                                            <option value="">Select Division</option>
                                                            <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                                                                <option value='<?= $alldivisionname[$x]->id ?>' <?= ($city == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?>><?= $alldivisionname[$x]->division_name ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>

                                                </div><!-- end col -->

                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Select City <span class="text-danger">*</span> </label>
                                                        <select class="form-control" name="z_citys" id="z_citys">
                                                            <option value="">Select City</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class="col-xl-12">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">TOTAL NOS. OF GRIEVANCE RECEIVED <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="total_no_grievance_received" id="total_no_grievance_received">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">NOS OF GRIEVENCED ADDRESSED<span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="no_of_grievenced_address" id="no_of_grievenced_address">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">RESOLVED WITH IN TIME LIMIT <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="resolved_with_in_time_limit" id="resolved_with_in_time_limit">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">RESOLVED AFTER TIME LIMIT <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="resolved_after_time_limit" id="resolved_after_time_limit">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">GRIEVANCE VIA 24 X 7 CUSTOMER SERVICE <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="grievance_via_247_cus_service" id="grievance_via_247_cus_service">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">GRIEVANCE VIA JALSATHI <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="grievance_via_jalsathi" id="grievance_via_jalsathi">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">GRIEVANCE BY DIRECT VISIT/ PHYSICAL <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="grievance_by_direct_visit_physical" id="grievance_by_direct_visit_physical">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">COLLECTED DATE <span class="text-danger">*</span> </label>
                                                        <input type="date" class="form-control" name="grievance_collected_date" id="grievance_collected_date">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
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
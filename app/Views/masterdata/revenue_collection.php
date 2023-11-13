<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Revenue Collection Details</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Revenue Collection</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <form method="post" id="addrevenuecollectiondatamaster">
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
                                            <label for="cleave-date" class="form-label">NOS. BILL GENERATED <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="no_bill_generate" id="no_bill_generate">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">NOS. BILL DISTRIBUTED<span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="no_bill_distributed" id="no_bill_distributed">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">INCENTIVE PAID TO JALSATHI <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="incentive_paid_to_jalasathi" id="incentive_paid_to_jalasathi">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">TOTAL REVENUE COLLECTED <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="total_revenue_collected" id="total_revenue_collected">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">REVENUE COLLECTED BY JALSATHI <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="revenue_collected_by_jalasathi" id="revenue_collected_by_jalasathi">
                                        </div>
                                    </div><!-- end col -->
                                    <!-- <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">COLLECTED DATE <span class="text-danger">*</span> </label>
                                            <input type="date" class="form-control" name="revenue_collected_date" id="revenue_collected_date">
                                        </div>
                                    </div> -->
                                    <div class="mt-4">
                                        <div class="hstack gap-2 justify-content-center">
                                            <button type="reset" class="btn btn-info">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
            </div>
        </div>


    </form>
    <div class="border mt-3 border-dashed border-primary"></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">All Revenue Collection Details</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <!-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalRevenueColection" style="float:right;"><i class="ri-add-line align-bottom me-1"></i> Add</button> -->
                    <div id="table-gridjs-revenue"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
</div>





<!-- Modal -->
<!-- Add  -->
<div class="modal fade modal-lg" id="showModalRevenueColection" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Revenue Collection Details :</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->

                <form method="post" id="addrevenuecollectiondatamaster">
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
                                                        <label for="cleave-date" class="form-label">NOS. BILL GENERATED <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="no_bill_generate" id="no_bill_generate">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">NOS. BILL DISTRIBUTED<span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="no_bill_distributed" id="no_bill_distributed">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">INCENTIVE PAID TO JALSATHI <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="incentive_paid_to_jalasathi" id="incentive_paid_to_jalasathi">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">TOTAL REVENUE COLLECTED <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="total_revenue_collected" id="total_revenue_collected">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">REVENUE COLLECTED BY JALSATHI <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="revenue_collected_by_jalasathi" id="revenue_collected_by_jalasathi">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">COLLECTED DATE <span class="text-danger">*</span> </label>
                                                        <input type="date" class="form-control" name="revenue_collected_date" id="revenue_collected_date">
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
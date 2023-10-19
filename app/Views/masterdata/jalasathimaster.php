<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Jalasathi Details</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Jalasathi</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <h5 class="text-info">INCENTIVE DETAILS OF JALASATHIS OF WATCO</h5>
            <h5 class="text-info"><?php
                                    if (isset($sessiondivision)) {
                                        echo $sessiondivision[0]->division_name . ',' . $sessiondivision[0]->city_name;
                                    }


                                    ?></h5>
        </div>
    </div>

    <form method="post" id="addjalsathi">
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
                                    <?php
                                    if (isset($sessiondivision)) {
                                    ?>
                                        <input type="hidden" name="z_division_id" id="z_division_id" value="<?php echo $sessiondivision[0]->division_id; ?>">
                                        <input type="hidden" name="z_citys" id="z_citys" value="<?php echo $sessiondivision[0]->city_id; ?>">
                                    <?php

                                    } else {
                                    ?>
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
                                    <?php
                                    }
                                    ?>
                                    <div class="col-xl-12">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">WARD NUMBER: <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="word_names" id="word_names">
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">NAME OF THE MSG/SHG<span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="jal_msg_shg_name" id="jal_msg_shg_name">
                                        </div>
                                    </div><!-- end col -->
                                    <!-- <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">NAME OF THE JALASATHI <span class="text-danger">*</span> </label> -->
                                    <input type="hidden" class="form-control" name="jal_jalasathi_name" id="jal_jalasathi_name">
                                    <!-- </div>
                                    </div> -->

                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">REVENUE COLLECTED BY JALSATHI <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="jal_collection_by_jalasathi" id="jal_collection_by_jalasathi">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">INCENTIVE PAID TO JALSATHI <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="jal_ibu_total_no_of_water_quality_testa" id="jal_ibu_total_no_of_water_quality_testa">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3">
                                            <label for="cleave-date" class="form-label">NOS. OF TEST CONDUCTED BY JALSATHI <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="jal_total_incentive_of_jalasathi" id="jal_total_incentive_of_jalasathi">
                                        </div>
                                    </div>
                                    <div class="hstack gap-2 justify-content-center">
                                        <button type="reset" class="btn btn-info">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>



                                </div><!-- end row -->
                            </div>
                            <div class="border mt-3 border-dashed border-primary"></div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
            </div>
        </div>

        <!-- <div class="mt-4">
            <div class="hstack gap-2 justify-content-center">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div> -->
    </form>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <!-- <span class="float-end"><button data-bs-toggle="modal" id="create-btn" data-bs-target="#showJalasathiMaster" class="btn btn-outline-info btn-sm">Add New Jalasathi</button></span> -->

                    <h5 class="card-title mb-0 text-info">JALASATHI DETAILS</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables" class="display table table-bordered table-nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>ACTION</th>

                                    <th>WARD NO</th>
                                    <th>NAME OF THE MSG/SHG</th>
                                    <!-- <th>JALASATHI NAME</th> -->
                                    <!-- <th>PAN NO</th>
                                    <th>BANK ACCOUNT NO</th>
                                    <th>IFSC CODE</th>
                                    <th>BANK NAME AND BRANCH</th> -->
                                    <th>COLLECTION BY JALASATHI(MPOS)</th>
                                    <!-- <th>5% Incentive From water charges</th> -->
                                    <!-- <th>No New Water Supply Connection</th>
                                    <th>Total Amount of new Water Connection (*Rs 100/)</th> -->
                                    <th>Total No of Water Quality Tests</th>
                                    <!-- <th>Water Quality tests (Nos of test * Rs.20/)</th> -->
                                    <th>Total Incentive of Jalasathi (Rs.)</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $counter_js = 1;
                                foreach ($cityjalasathi as $jalasathi_city) :

                                ?>
                                    <tr>
                                        <td><?= $counter_js ?></td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#editDmaZoneDetails" class="btn btn-info btn-sm" id="editIdDmaZone" disabled>Edit</button>
                                            <button class="btn btn-danger btn-sm" disabled>Delete</button>
                                        </td>

                                        <td><?= $jalasathi_city->word_names ?></td>
                                        <td><?= $jalasathi_city->msg_shg_name ?></td>

                                        <td><?= $jalasathi_city->collection_by_jalasathi ?></td>
                                        <td><?= $jalasathi_city->ibu_total_no_of_water_quality_testa ?></td>
                                        <td><?= $jalasathi_city->total_incentive_of_jalasathi ?></td>

                                    </tr>
                                <?php
                                    $counter_js++;
                                endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>




<!-- Modal -->
<!-- Add  -->
<div class="modal fade modal-lg" id="showJalasathiMaster" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Jalasathi :</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->

                <form method="post" id="addjalsathi">
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
                                                        <label for="cleave-date" class="form-label">WARD NUMBER: <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="word_names" id="word_names">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">NAME OF THE MSG/SHG<span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_msg_shg_name" id="jal_msg_shg_name">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">NAME OF THE JALASATHI <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_jalasathi_name" id="jal_jalasathi_name">
                                                    </div>
                                                </div><!-- end col -->

                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">REVENUE COLLECTED BY JALSATHI <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_collection_by_jalasathi" id="jal_collection_by_jalasathi">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">INCENTIVE PAID TO JALSATHI <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_ibu_total_no_of_water_quality_testa" id="jal_ibu_total_no_of_water_quality_testa">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">NOS. OF TEST CONDUCTED BY JALSATHI <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_total_incentive_of_jalasathi" id="jal_total_incentive_of_jalasathi">
                                                    </div>
                                                </div>



                                            </div><!-- end row -->
                                        </div>
                                        <div class="border mt-3 border-dashed border-primary"></div>
                                        <!-- <div class="mt-4">
                                            <h6 class="mb-3 fs-14 form-label">INCENTIVE BREAK UP</h6>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">5% Incentive From water charges <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_ibu_5p_incentive_from_water_charges" id="jal_ibu_5p_incentive_from_water_charges">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">No New Water Supply Connection <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_ibu_no_new_water_supply_connection" id="jal_ibu_no_new_water_supply_connection">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Total Amount of new Water connection :Rs 100 <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_ibu_total_amt_of_new_water_con" id="jal_ibu_total_amt_of_new_water_con">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Total No of Water Quality Tests <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_ibu_total_no_of_water_quality_testa" id="jal_ibu_total_no_of_water_quality_testa">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Water Quality tests (Nos of test * Rs.20/-) <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_ibu_water_quality_tests" id="jal_ibu_water_quality_tests">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- <div class="border mt-3 border-dashed border-primary"></div> -->
                                        <!-- <div class="row">
                                        <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Total Incentive of Jalasathi (Rs.) <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_total_incentive_of_jalasathi" id="jal_total_incentive_of_jalasathi">
                                                    </div>
                                                </div>
                                        </div> -->
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
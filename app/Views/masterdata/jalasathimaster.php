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
            <h5 class="text-info">KEONJHAR,BARBIL</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <span class="float-end"><button data-bs-toggle="modal" id="create-btn" data-bs-target="#showJalasathiMaster" class="btn btn-outline-info btn-sm">Add New Jalasathi</button></span>

                    <h5 class="card-title mb-0 text-info">JALASATHI DETAILS</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables" class="display table table-bordered table-nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>DIVISION</th>
                                    <th>ULB NAME</th>
                                    <th>WARD NO</th>
                                    <th>NAME OF THE MSG/SHG</th>
                                    <th>JALASATHI NAME</th>
                                    <th>PAN NO</th>
                                    <th>BANK ACCOUNT NO</th>
                                    <th>IFSC CODE</th>
                                    <th>BANK NAME AND BRANCH</th>
                                    <th>COLLECTION BY JALASATHI(MPOS)</th>
                                    <th>5% Incentive From water charges</th>
                                    <th>No New Water Supply Connection</th>
                                    <th>Total Amount of new Water Connection (*Rs 100/)</th>
                                    <th>Total No of Water Quality Tests</th>
                                    <th>Water Quality tests (Nos of test * Rs.20/)</th>
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
                                        <td><?= $jalasathi_city->division_name ?></td>
                                        <td><?= $jalasathi_city->city_name ?></td>
                                        <td><?= $jalasathi_city->word_names ?></td>
                                        <td><?= $jalasathi_city->msg_shg_name ?></td>
                                        <td><?= $jalasathi_city->jalasathi_name ?></td>
                                        <td><?= $jalasathi_city->pan_no ?></td>
                                        <td><?= $jalasathi_city->bank_account_no ?></td>
                                        <td><?= $jalasathi_city->ifsc_code ?></td>
                                        <td><?= $jalasathi_city->bank_name_branch ?></td>
                                        <td><?= $jalasathi_city->collection_by_jalasathi ?></td>
                                        <td><?= $jalasathi_city->ibu_5p_incentive_from_water_charges ?></td>
                                        <td><?= $jalasathi_city->ibu_no_new_water_supply_connection ?></td>
                                        <td><?= $jalasathi_city->ibu_total_amt_of_new_water_con ?></td>
                                        <td><?= $jalasathi_city->ibu_total_no_of_water_quality_testa ?></td>
                                        <td><?= $jalasathi_city->ibu_water_quality_tests ?></td>
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

<div class="modal fade modal-lg" id="editDmaZoneDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit DMA/Zone Details :</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->

                <form method="post" id="updatedmamasterzonedata">
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
                                                    <input type="hidden" name="old_dma_id" id="old_dma_id">

                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Select Division <span class="text-danger">*</span> </label>
                                                        <select class="form-control" name="z_division_id_u" id="z_division_id_u">
                                                            <option value="">Select Division</option>
                                                            <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                                                                <option value='<?= $alldivisionname[$x]->id ?>'><?= $alldivisionname[$x]->division_name ?></option>

                                                            <?php } ?>
                                                        </select>
                                                    </div>

                                                </div><!-- end col -->

                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Select City <span class="text-danger">*</span> </label>
                                                        <select class="form-control" name="z_citys_d" id="z_citys_d">
                                                        </select>
                                                    </div>
                                                </div><!-- end col -->

                                                <div class="col-xl-12">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">DMA Name <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_dma_name" id="edit_dma_name">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Population of the DMA (In Nos)<span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_dma_population" id="edit_dma_population">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Commissioning Completed <span class="text-danger">*</span> </label>
                                                        <select name="edit_commissioning_status" id="edit_commissioning_status" class="form-control">
                                                            <option value="">Select Commissioning Status</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Updated Date <span class="text-danger">*</span> </label>
                                                        <input type="date" class="form-control" name="edit_dma_updated_date" id="edit_dma_updated_date">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>

                                        <div class="border mt-3 border-dashed border-primary"></div>

                                        <div class="mt-4">
                                            <h6 class="mb-3 fs-14 form-label">TECHNICAL INFORMATION</h6>
                                            <div class="row">
                                                <label class="form-label text-info">Distribution Pipe Line (km) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_distribution_pipe_line_scope" id="edit_distribution_pipe_line_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_distribution_pipe_line_progress" id="edit_distribution_pipe_line_progress">
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <label class="form-label text-info">Pumping Main (km) <span class="text-danger">*</span> </label>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_pumping_main_scope" id="edit_pumping_main_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_pumping_main_progress" id="edit_pumping_main_progress">
                                                    </div>
                                                </div>
                                                <!--  -->

                                                <label class="form-label text-info">Storage Resorvoir (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_storage_resorvoir_scope" id="edit_storage_resorvoir_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_storage_resorvoir_progress" id="edit_storage_resorvoir_progress">
                                                    </div>
                                                </div>
                                                <!--  -->

                                                <label class="form-label text-info">Pumping Station (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_pumping_station_scope" id="edit_pumping_station_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_pumping_station_progress" id="edit_pumping_station_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                            </div>

                                        </div>

                                        <div class="border mt-3 border-dashed border-primary"></div>

                                        <div class="mt-4">
                                            <h5 class="fs-14 mb-3 form-label"> E & M Works</h5>
                                            <div class="row">
                                                <label class="form-label text-info">Flowmeter (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_flowmeter_scope" id="edit_flowmeter_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_flowmeter_progress" id="edit_flowmeter_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <label class="form-label text-info">Pressure Treansmitter (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_pressure_treansmitter_scope" id="edit_pressure_treansmitter_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_pressure_treansmitter_progress" id="edit_pressure_treansmitter_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <label class="form-label text-info">Level Treansmitter (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_level_treansmitter_scope" id="edit_level_treansmitter_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_level_treansmitter_progress" id="edit_level_treansmitter_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <label class="form-label text-info">Sluice Valve (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_sluice_valve_scope" id="edit_sluice_valve_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_sluice_valve_progress" id="edit_sluice_valve_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <label class="form-label text-info">PLC (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_plc_scope" id="edit_plc_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_plc_progress" id="edit_plc_progress">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border mt-3 border-dashed border-primary"></div>

                                        <div class="mt-4">
                                            <div class="row">
                                                <label class="form-label text-info">House connection (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_house_connection_scope" id="edit_house_connection_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_house_connection_progress" id="edit_house_connection_progress">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="form-label text-info">Meter Connection (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_meter_connection_scope" id="edit_meter_connection_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_meter_connection_progress" id="edit_meter_connection_progress">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="form-label text-info">Non-Revenue Water (NRW) Last Week (%) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_nrw_scope" id="edit_nrw_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="edit_nrw_progress" id="edit_nrw_progress">
                                                    </div>
                                                </div>
                                            </div>
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
                                                        <label for="cleave-date" class="form-label">Word Number: <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="word_names" id="word_names">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Name of the MSG/SHG<span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_msg_shg_name" id="jal_msg_shg_name">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Name of the Jalasathi <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_jalasathi_name" id="jal_jalasathi_name">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">PAN No <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_pan_no" id="jal_pan_no">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Bank Account No <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_bank_account_no" id="jal_bank_account_no">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">IFSC Code <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_ifsc_code" id="jal_ifsc_code">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Bank Name and Branch<span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_bank_name_branch" id="jal_bank_name_branch">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Collection by Jalasathi (Mpos) <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_collection_by_jalasathi" id="jal_collection_by_jalasathi">
                                                    </div>
                                                </div><!-- end col -->
                                                
                                            </div><!-- end row -->
                                        </div>
                                        <div class="border mt-3 border-dashed border-primary"></div>
                                        <div class="mt-4">
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
                                        </div>
                                        <div class="border mt-3 border-dashed border-primary"></div>
                                        <div class="row">
                                        <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Total Incentive of Jalasathi (Rs.) <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="jal_total_incentive_of_jalasathi" id="jal_total_incentive_of_jalasathi">
                                                    </div>
                                                </div><!-- end col -->
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
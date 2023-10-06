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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">All Revenue Collection</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalRevenueColection" style="float:right;"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                    <div id="table-gridjs-revenue"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
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
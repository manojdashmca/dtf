<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">DMA Details</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">DMA</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">All DMA</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <button type="button" class="btn btn-success add-btn mb-2" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModalZone" style="float:left;"><i class="ri-add-line align-bottom me-1"></i> Add New Dma</button>
                    <div id="table-gridjs-dma"></div>
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
<div class="modal fade modal-lg" id="showModalZone" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add DMA/Zone Details :</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->

                <form method="post" id="adddmazonedatamaster">
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
                                                        <label for="cleave-date" class="form-label">DMA Name <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="dma_name" id="dma_name">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Population of the DMA (In Nos)<span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="dma_population" id="dma_population">
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Commissioning Completed <span class="text-danger">*</span> </label>
                                                        <select name="commissioning_status" id="commissioning_status" class="form-control">
                                                            <option value="">Select Commissioning Status</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="cleave-date" class="form-label">Updated Date <span class="text-danger">*</span> </label>
                                                        <input type="date" class="form-control" name="dma_updated_date" id="dma_updated_date">
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>

                                        <div class="border mt-3 border-dashed border-primary"></div>

                                        <div class="mt-4">
                                            <h6 class="mb-3 fs-14 form-label">TECHNICAL INFORMATION</h6>
                                            <div class="row">

                                                <label class="form-label text-info">Asset Mapping <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="asset_mapping_scope" id="asset_mapping_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="asset_mapping_progres" id="asset_mapping_progres">
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <label class="form-label text-info">Consumer Mapping <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="consumer_mapping_scope" id="consumer_mapping_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="consumer_mapping_progress" id="consumer_mapping_progress">
                                                    </div>
                                                </div>

                                                <!--  -->

                                                <label class="form-label text-info">Distribution Pipe Line (km) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="distribution_pipe_line_scope" id="distribution_pipe_line_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="distribution_pipe_line_progress" id="distribution_pipe_line_progress">
                                                    </div>
                                                </div>

                                                <!--  -->
                                                <label class="form-label text-info">Pumping Main (km) <span class="text-danger">*</span> </label>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="pumping_main_scope" id="pumping_main_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="pumping_main_progress" id="pumping_main_progress">
                                                    </div>
                                                </div>
                                                <!--  -->

                                                <label class="form-label text-info">Storage Resorvoir (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="storage_resorvoir_scope" id="storage_resorvoir_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="storage_resorvoir_progress" id="storage_resorvoir_progress">
                                                    </div>
                                                </div>
                                                <!--  -->

                                                <label class="form-label text-info">Pumping Station (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="pumping_station_scope" id="pumping_station_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="pumping_station_progress" id="pumping_station_progress">
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
                                                        <input type="text" class="form-control" name="flowmeter_scope" id="flowmeter_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="flowmeter_progress" id="flowmeter_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <label class="form-label text-info">Pressure Treansmitter (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="pressure_treansmitter_scope" id="pressure_treansmitter_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="pressure_treansmitter_progress" id="pressure_treansmitter_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <label class="form-label text-info">Level Treansmitter (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="level_treansmitter_scope" id="level_treansmitter_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="level_treansmitter_progress" id="level_treansmitter_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <label class="form-label text-info">Sluice Valve and Control Valves (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="sluice_valve_scope" id="sluice_valve_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="sluice_valve_progress" id="sluice_valve_progress">
                                                    </div>
                                                </div>
                                                <!--  -->
                                                <label class="form-label text-info">PLC Pannels along with data cabling and laying if fibre optics (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="plc_scope" id="plc_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="plc_progress" id="plc_progress">
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
                                                        <input type="text" class="form-control" name="house_connection_scope" id="house_connection_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="house_connection_progress" id="house_connection_progress">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="form-label text-info">Meter Connection (In Nos) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="meter_connection_scope" id="meter_connection_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="meter_connection_progress" id="meter_connection_progress">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="form-label text-info">Non-Revenue Water (NRW) Last Week (%) <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="nrw_scope" id="nrw_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="nrw_progress" id="nrw_progress">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="form-label text-info">Water balancing along the DMAs and integration of PLCs with server <span class="text-danger">*</span> </label>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Scope <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="wbadmaipcl_scope" id="wbadmaipcl_scope">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Progress <span class="text-danger">*</span> </label>
                                                        <input type="text" class="form-control" name="wbadmaipcl_progress" id="wbadmaipcl_progress">
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


<!-- Modal  -->
<!-- View -->
<div class="modal fade modal-lg" id="viewDmaDmaDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">View Dma Info :</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body p-5">
                <!-- Input with Placeholder -->

                <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="table-responsive card-body">
                    <!-- <h4 class="text-center">DMA LEVEL INFORMATION</h4> -->
                    <h6>Dma Name: <span id="view_dma_name"></span></h6>
                    <h6>Population: <span id="view_dma_dma_population"></span></h6>
                    <h6>Commissioning Status : <span id="view_dma_commissioning_status"></span></h6>

                    <table class="table table-bordered border-secondary table-nowrap align-middle mb-0">
                        <thead>
                            <tr class="bg-info text-white">
                                <th scope="col">TECHNICAL INFORMATION</th>
                                <th scope="col">SCOPE</th>
                                <th scope="col">PROGRESS <span id=""></span></th>
                                <th scope="col">(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Asset Mapping</td>
                                <td><p>11</p></td>
                                <td><p>11</p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Consumer Mapping</td>
                                <td><p>11</p></td>
                                <td><p>11</p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Distribution Pipe line</td>
                                <td><p id = "view_dma_distribution_pipe_line_scope"></p></td>
                                <td><p id = "view_dma_distribution_pipe_line_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Pumping Main </td>
                                <td><p id= "view_dma_pumping_main_scope"></p></td>
                                <td><p id= "view_dma_pumping_main_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Storage Resorvoir ( _ KL)</td>
                                <td><p id = "view_dma_storage_resorvoir_scope"></p></td>
                                <td><p id = "view_dma_storage_resorvoir_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Pumping Station</td>
                                <td><p id= "view_dma_pumping_station_scope"></p></td>
                                <td><p id= "view_dma_pumping_station_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <!--  -->
                            <tr>
                                <td>Flowmeter </td>
                                <td><p id="view_dma_flowmeter_scope"></p></td>
                                <td><p id="view_dma_flowmeter_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Pressure Treansmitter</td>
                                <td><p id = "view_dma_pressure_treansmitter_scope"></p></td>
                                <td><p id = "view_dma_pressure_treansmitter_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Level Treansmitter</td>
                                <td><p id = "view_dma_level_treansmitter_scope"></p></td>
                                <td><p id = "view_dma_level_treansmitter_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Sluice Valve and Control Valves </td>
                                <td><p id ="view_dma_sluice_htmlve_scope"></p></td>
                                <td><p id ="view_dma_sluice_htmlve_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>PLC </td>
                                <td><p id = "view_dma_plc_scope"></p></td>
                                <td><p id = "view_dma_plc_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>House connection (In Nos)</td>
                                <td><p id ="view_dma_house_connection_scope"></p></td>
                                <td><p id="view_dma_house_connection_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Meter Connection (In Nos) </td>
                                <td><p id = "view_dma_meter_connection_scope"></p></td>
                                <td><p id = "view_dma_meter_connection_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>
                            <tr>
                                <td>Non-Revenue Water (NRW) Last Week </td>
                                <td><p id ="view_dma_nrw_scope"></p></td>
                                <td><p id ="view_dma_nrw_progress"></p></td>
                                <td><p></p>%</td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>

        </div>
            </div>
        </div>
    </div>
</div>
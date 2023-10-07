<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="text-center">DMA LEVEL INFORMATION</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Dma/Zone</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form name='fileter' id='filter' action='' method='get'>
                        <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                        <label for="">Select Division</label>
                        <select onchange="this.form.submit();" name="division_dtl" id="divisions" class="form-control form-select">
                            <option value="" class="text-danger">Select Division</option>
                            <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                                <option <?= ($division_dtl == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?> value='<?= $alldivisionname[$x]->id ?>'><?= $alldivisionname[$x]->division_name ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="transactionid" value="<?= $session->get('trnid') ?>" />
                    </form>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <form name='fileter1' id='filter1' action='' method='get'>
                        <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                        <input type="hidden" name="division_dtl" value="<?= $division_dtl ?>" />
                        <label for="">Select City</label>
                        <select name='city_dtl' id='city_dtl' class='form-control  form-select' onchange="this.form.submit();">
                            <option value="">Select City</option>
                            <?php for ($x = 0; $x < count($dmacitydropdown); $x++) { ?>
                                <option value='<?= $dmacitydropdown[$x]->city_id ?>' <?= ($city_dtl == $dmacitydropdown[$x]->city_id) ? 'selected="selected"' : '' ?>><?= $dmacitydropdown[$x]->city_name ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="transactionid" value="<?= $session->get('trnid') ?>" />
                    </form>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <form name='fileter1' id='filter1' action='' method='get'>
                        <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                        <input type="hidden" name="division_dtl" value="<?= $division_dtl ?>" />
                        <input type="hidden" name="city_dtl" value="<?= $city_dtl ?>" />
                        <label for="">Select Dma/Zone</label>
                        <select name='dma_dtl' id='dma_dtl' class='form-control  form-select' onchange="this.form.submit();">
                            <option value="">Select Dma</option>
                            <?php for ($x = 0; $x < count($dmaoncity); $x++) { ?>
                                <option value='<?= $dmaoncity[$x]->id ?>' <?= ($dma_dtl == $dmaoncity[$x]->id) ? 'selected="selected"' : '' ?>><?= $dmaoncity[$x]->dma_name ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="transactionid" value="<?= $session->get('trnid') ?>" />
                    </form>
                </div>
            </div>
        </div>

    </div>


    <div class="row">

        <?php
        // print_r("<pre>");
        // print_r($getdmainfoonid);
        // print_r("</pre>");
        $dma_name = isset($getdmainfoonid[0]->dma_name) ? $getdmainfoonid[0]->dma_name : "XXXX";
        $dma_population = isset($getdmainfoonid[0]->dma_population) ? $getdmainfoonid[0]->dma_population : "XXXX";
        $commissioning_status = isset($getdmainfoonid[0]->commissioning_status) ? $getdmainfoonid[0]->commissioning_status : "XXXX";
        $dma_updated_date = isset($getdmainfoonid[0]->dma_updated_date) ? $getdmainfoonid[0]->dma_updated_date : "XXXX";

        $asset_mapping_scope = isset($getdmainfoonid[0]->asset_mapping_scope) ? $getdmainfoonid[0]->asset_mapping_scope : "0";
        $asset_mapping_progress = isset($getdmainfoonid[0]->asset_mapping_progress) ? $getdmainfoonid[0]->asset_mapping_progress : "0";
        if ($asset_mapping_scope != 0) {
            $asset_mapping_percentage = round(($asset_mapping_progress / $asset_mapping_scope) * 100, 2);
        } else {
            $asset_mapping_percentage = 0; 
        }

        $consumer_mapping_scope = isset($getdmainfoonid[0]->consumer_mapping_scope) ? $getdmainfoonid[0]->consumer_mapping_scope : "0";
        $consumer_mapping_progress = isset($getdmainfoonid[0]->consumer_mapping_progress) ? $getdmainfoonid[0]->consumer_mapping_progress : "0";
        if ($consumer_mapping_scope != 0) {
            $consumer_mapping_percentage = round(($consumer_mapping_progress / $consumer_mapping_scope) * 100, 2);
        } else {
            $consumer_mapping_percentage = 0; 
        }

        $distribution_pipe_line_scope = isset($getdmainfoonid[0]->distribution_pipe_line_scope) ? $getdmainfoonid[0]->distribution_pipe_line_scope : "0";
        $distribution_pipe_line_progress = isset($getdmainfoonid[0]->distribution_pipe_line_progress) ? $getdmainfoonid[0]->distribution_pipe_line_progress : "0";
        if ($distribution_pipe_line_scope != 0) {
            $distribution_pipe_line_percentage = round(($distribution_pipe_line_progress / $distribution_pipe_line_scope) * 100, 2);
        } else {
            $distribution_pipe_line_percentage = 0; 
        }

        $pumping_main_scope = isset($getdmainfoonid[0]->pumping_main_scope) ? $getdmainfoonid[0]->pumping_main_scope : "0";
        $pumping_main_progress = isset($getdmainfoonid[0]->pumping_main_progress) ? $getdmainfoonid[0]->pumping_main_progress : "0";
        if ($pumping_main_scope != 0) {
            $pumping_main_percentage = round(($pumping_main_progress / $pumping_main_scope) * 100, 2);
        } else {
            $pumping_main_percentage = 0; 
        }

        $storage_resorvoir_scope = isset($getdmainfoonid[0]->storage_resorvoir_scope) ? $getdmainfoonid[0]->storage_resorvoir_scope : "0";
        $storage_resorvoir_progress = isset($getdmainfoonid[0]->storage_resorvoir_progress) ? $getdmainfoonid[0]->storage_resorvoir_progress : "0";
        if ($storage_resorvoir_scope != 0) {
            $storage_resorvoir_percentage = round(($storage_resorvoir_progress / $storage_resorvoir_scope) * 100, 2);
        } else {
            $storage_resorvoir_percentage = 0; 
        }

        $pumping_station_scope = isset($getdmainfoonid[0]->pumping_station_scope) ? $getdmainfoonid[0]->pumping_station_scope : "0";
        $pumping_station_progress = isset($getdmainfoonid[0]->pumping_station_progress) ? $getdmainfoonid[0]->pumping_station_progress : "0";
        if ($pumping_station_scope != 0) {
            $pumping_station_percentage = round(($pumping_station_progress / $pumping_station_scope) * 100, 2);
        } else {
            $pumping_station_percentage = 0; 
        }

        $flowmeter_scope = isset($getdmainfoonid[0]->flowmeter_scope) ? $getdmainfoonid[0]->flowmeter_scope : "0";
        $flowmeter_progress = isset($getdmainfoonid[0]->flowmeter_progress) ? $getdmainfoonid[0]->flowmeter_progress : "0";
        if ($flowmeter_scope != 0) {
            $flowmeter_percentage = round(($flowmeter_progress / $flowmeter_scope) * 100, 2);
        } else {
            $flowmeter_percentage = 0; 
        }

        $pressure_treansmitter_scope = isset($getdmainfoonid[0]->pressure_treansmitter_scope) ? $getdmainfoonid[0]->pressure_treansmitter_scope : "0";
        $pressure_treansmitter_progress = isset($getdmainfoonid[0]->pressure_treansmitter_progress) ? $getdmainfoonid[0]->pressure_treansmitter_progress : "0";
        if ($pressure_treansmitter_scope != 0) {
            $pressure_treansmitter_percentage = round(($pressure_treansmitter_progress / $pressure_treansmitter_scope) * 100, 2);
        } else {
            $pressure_treansmitter_percentage = 0; 
        }

        $level_treansmitter_scope = isset($getdmainfoonid[0]->level_treansmitter_scope) ? $getdmainfoonid[0]->level_treansmitter_scope : "0";
        $level_treansmitter_progress = isset($getdmainfoonid[0]->level_treansmitter_progress) ? $getdmainfoonid[0]->level_treansmitter_progress : "0";
        if ($level_treansmitter_scope != 0) {
            $level_treansmitter_percentage = round(($level_treansmitter_progress / $level_treansmitter_scope) * 100, 2);
        } else {
            $level_treansmitter_percentage = 0; 
        }

        $sluice_valve_scope = isset($getdmainfoonid[0]->sluice_valve_scope) ? $getdmainfoonid[0]->sluice_valve_scope : "0";
        $sluice_valve_progress = isset($getdmainfoonid[0]->sluice_valve_progress) ? $getdmainfoonid[0]->sluice_valve_progress : "0";
        if ($sluice_valve_scope != 0) {
            $sluice_valve_percentage = round(($sluice_valve_progress / $sluice_valve_scope) * 100, 2);
        } else {
            $sluice_valve_percentage = 0; 
        }

        $plc_scope = isset($getdmainfoonid[0]->plc_scope) ? $getdmainfoonid[0]->plc_scope : "0";
        $plc_progress = isset($getdmainfoonid[0]->plc_progress) ? $getdmainfoonid[0]->plc_progress : "0";
        if ($plc_scope != 0) {
            $plc_percentage = round(($plc_progress / $plc_scope) * 100, 2);
        } else {
            $plc_percentage = 0; 
        }
        // print_r($plc_percentage);
        $house_connection_scope = isset($getdmainfoonid[0]->house_connection_scope) ? $getdmainfoonid[0]->house_connection_scope : "0";
        $house_connection_progress = isset($getdmainfoonid[0]->house_connection_progress) ? $getdmainfoonid[0]->house_connection_progress : "0";
        if ($house_connection_scope != 0) {
            $house_connection_percentage = round(($house_connection_progress / $house_connection_scope) * 100, 2);
        } else {
            $house_connection_percentage = 0; 
        }
        
        $meter_connection_scope = isset($getdmainfoonid[0]->meter_connection_scope) ? $getdmainfoonid[0]->meter_connection_scope : "0";
        $meter_connection_progress = isset($getdmainfoonid[0]->meter_connection_progress) ? $getdmainfoonid[0]->meter_connection_progress : "0";
        if ($meter_connection_scope != 0) {
            $meter_connection_percentage = round(($meter_connection_progress / $meter_connection_scope) * 100, 2);
        } else {
            $meter_connection_percentage = 0; 
        }

        $nrw_scope = isset($getdmainfoonid[0]->nrw_scope) ? $getdmainfoonid[0]->nrw_scope : "0";
        $nrw_progress = isset($getdmainfoonid[0]->nrw_progress) ? $getdmainfoonid[0]->nrw_progress : "0";
        if ($nrw_scope != 0) {
            $nrw_percentage = round(($nrw_progress / $nrw_scope) * 100, 2);
        } else {
            $nrw_percentage = 0; 
        }

        $water_balancing_along_plc_with_server = isset($getdmainfoonid[0]->water_balancing_along_plc_with_server) ? $getdmainfoonid[0]->water_balancing_along_plc_with_server : "XXXX";
        $updated_by = isset($getdmainfoonid[0]->updated_by) ? $getdmainfoonid[0]->updated_by : "XXXX";
        $updated_date = isset($getdmainfoonid[0]->updated_date) ? $getdmainfoonid[0]->updated_date : "XXXX";
   

        ?>
        <div class="col-lg-2 col-sm-12"></div>
        <div class="col-lg-8 col-sm-12">
            <div class="card">
                <div class="table-responsive card-body">
                    <!-- <h4 class="text-center">DMA LEVEL INFORMATION</h4> -->
                    <h6>Dma Name: <?= $dma_name ?></h6>
                    <h6>Population: <?= $dma_population ?></h6>
                    <h6>Commissioning Status : <?= $commissioning_status ?></h6>

                    <table class="table table-bordered border-secondary table-nowrap align-middle mb-0">
                        <thead>
                            <tr class="bg-info text-white">
                                <th scope="col">TECHNICAL INFORMATION</th>
                                <th scope="col">SCOPE</th>
                                <th scope="col">PROGRESS</th>
                                <th scope="col">(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Asset Mapping</td>
                                <td><?= $asset_mapping_scope ?></td>
                                <td><?= $asset_mapping_progress ?></td>
                                <td><?= $asset_mapping_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Consumer Mapping</td>
                                <td><?= $consumer_mapping_scope ?></td>
                                <td><?= $consumer_mapping_progress ?></td>
                                <td><?= $consumer_mapping_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Distribution Pipe line</td>
                                <td><?= $distribution_pipe_line_scope ?></td>
                                <td><?= $distribution_pipe_line_progress ?></td>
                                <td><?= $distribution_pipe_line_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Pumping Main </td>
                                <td><?= $pumping_main_scope ?></td>
                                <td><?= $pumping_main_progress ?></td>
                                <td><?= $pumping_main_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Storage Resorvoir ( _ KL)</td>
                                <td><?= $storage_resorvoir_scope ?></td>
                                <td><?= $storage_resorvoir_progress ?></td>
                                <td><?= $storage_resorvoir_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Pumping Station</td>
                                <td><?= $pumping_station_scope ?></td>
                                <td><?= $pumping_station_progress ?></td>
                                <td><?= $pumping_station_percentage ?>%</td>
                            </tr>
                            <!--  -->
                            <tr>
                                <td>Flowmeter </td>
                                <td><?= $flowmeter_scope ?></td>
                                <td><?= $flowmeter_progress ?></td>
                                <td><?= $flowmeter_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Pressure Treansmitter</td>
                                <td><?= $pressure_treansmitter_scope ?></td>
                                <td><?= $pressure_treansmitter_progress ?></td>
                                <td><?= $pressure_treansmitter_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Level Treansmitter</td>
                                <td><?= $level_treansmitter_scope ?></td>
                                <td><?= $level_treansmitter_progress ?></td>
                                <td><?= $level_treansmitter_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Sluice Valve and Control Valves </td>
                                <td><?= $sluice_valve_scope ?></td>
                                <td><?= $sluice_valve_progress ?></td>
                                <td><?= $sluice_valve_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>PLC </td>
                                <td><?= $plc_scope ?></td>
                                <td><?= $plc_progress ?></td>
                                <td><?= $plc_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>House connection (In Nos)</td>
                                <td><?= $house_connection_scope ?></td>
                                <td><?= $house_connection_progress ?></td>
                                <td><?= $house_connection_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Meter Connection (In Nos) </td>
                                <td><?= $meter_connection_scope ?></td>
                                <td><?= $meter_connection_progress ?></td>
                                <td><?= $meter_connection_percentage ?>%</td>
                            </tr>
                            <tr>
                                <td>Non-Revenue Water (NRW) Last Week </td>
                                <td><?= $nrw_scope ?></td>
                                <td><?= $nrw_progress ?></td>
                                <td><?= $nrw_percentage ?>%</td>
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-lg-2 col-sm-12"></div>

        <?php
        // }
        ?>
    </div>
</div>





<!-- ----------------------------------------------- -->
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
                                                        <input type="text" class="form-control" name="asset_mapping" id="asset_mapping">
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
                                                        <input type="text" class="form-control" name="consumer_mapping" id="consumer_mapping">
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
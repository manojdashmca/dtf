<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Pipe Connection Meter Connection</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Pipe Meter Connection</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-4">
            <form name='fileter' id='filter' action='' method='get'>
                <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                <select onchange="this.form.submit();" name="division" id="divisions" class="form-control form-select">
                    <option value="" class="text-danger">Select Division</option>
                    <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                        <option <?= ($division == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?> value='<?= $alldivisionname[$x]->id ?>'><?= $alldivisionname[$x]->division_name ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" name="transactionid" value="<?= $session->get('trnid') ?>" />
            </form>
        </div>
        <div class="col-4">

        </div>
        <div class="col-4">
            <form name='fileter1' id='filter1' action='' method='get'>
                <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                <input type="hidden" name="division" value="<?= $division ?>" />
                <select name='city' id='city' class='form-control  form-select' onchange="this.form.submit();">
                    <option value="">Select City</option>
                    <?php for ($x = 0; $x < count($citydropdown); $x++) { ?>
                        <option value='<?= $citydropdown[$x]->city_id ?>' <?= ($city == $citydropdown[$x]->city_id) ? 'selected="selected"' : '' ?>><?= $citydropdown[$x]->city_name ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" name="transactionid" value="<?= $session->get('trnid') ?>" />
            </form>
        </div>
    </div>
.
    <div class="row">
        <?php 
            // if(isset($alldmadata)){
            //     print_r($alldmadata[0]->total_no_population);die; 
            // }
        ?>
        <div class="col-md-4">
            <div class="h-100">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                Population with DFT</p>
                                <h4 class="fs-22 fw-semibold mb-3">60%</h4>
                                <div class="progress d-inline-block w-100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated  h-100" style="width:60%;">
                                    </div>
                                </div>
                                <h5>No of city: <span class="" id="hmcd"><?= isset($alldmadata[0]->total_cities) ? $alldmadata[0]->total_cities : '0';?></span> </h5>
                                <h5>Population With DFT :  <span class="" id="hmcdpopulation"><?= isset($alldmadata[0]->dma_population) ? $alldmadata[0]->dma_population : '0';?></span></h5>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title blue-bg rounded fs-3">
                                    <i class="bx bx-male-female"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                   
                </div><!-- end card -->

            </div> <!-- end .h-100-->
        </div> <!-- end col -->       


        <div class="col-md-4">
            <div class="h-100">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                House Connection Achieved</p>
                                <h4 class="fs-22 fw-semibold mb-3">87%</h4>
                                <div class="progress d-inline-block w-100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated  h-100" style="width:87%;">
                                    </div>
                                </div>
                                <h5>House Connection Target: <span class="" id="hmcdhousehold"><?= isset($alldmadata[0]->house_connection_scope) ? $alldmadata[0]->house_connection_scope : '0';?></span> </h5>
                                <h5>Connection Achieved : <span class="" id="hmcdhousecomplete"><?= isset($alldmadata[0]->house_connection_progress) ? $alldmadata[0]->house_connection_progress : '0';?></span></h5>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title blue-bg rounded fs-3">
                                    <i class="bx bx-home-alt"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                   
                </div><!-- end card -->

            </div> <!-- end .h-100-->
        </div> <!-- end col -->
        
        <div class="col-md-4">
            <div class="h-100">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                Metered</p>
                                <h4 class="fs-22 fw-semibold mb-3">40%</h4>
                                <div class="progress d-inline-block w-100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated  h-100" style="width:40%;">
                                    </div>
                                </div>
                                <h5>Meter Connection Scope: <span class="" id="hmcdhousehold"><?= isset($alldmadata[0]->meter_connection_scope) ? $alldmadata[0]->meter_connection_scope : '0';?></span> </h5>
                                <h5>Metered : <span class="" id="hmcdmetercomplete"><?= isset($alldmadata[0]->meter_connection_progress) ? $alldmadata[0]->meter_connection_progress : '0';?></span></h5>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title blue-bg rounded fs-3">
                                    <i class=" bx bx-tachometer"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                   
                </div><!-- end card -->

            </div> <!-- end .h-100-->
        </div> <!-- end col -->

    </div>
                
</div>

<!-- container-fluid -->
</div>
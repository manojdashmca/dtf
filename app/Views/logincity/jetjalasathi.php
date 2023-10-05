<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Jalsathi</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Jalsathi</li>
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
                        <option value='<?= $citydropdown[$x]->id ?>' <?= ($city == $citydropdown[$x]->id) ? 'selected="selected"' : '' ?>><?= $citydropdown[$x]->city_name ?></option>
                    <?php } ?>
                </select>
                <input type="hidden" name="transactionid" value="<?= $session->get('trnid') ?>" />
            </form>
        </div>
    </div>

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
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13" id="pmcondashheading">
                                    No of City</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcd"><?= isset($alldmadata[0]->total_cities) ? $alldmadata[0]->total_cities : '0';?></span></h4>

                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title blue-bg rounded fs-3">
                                    <i class="bx bx-water"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                    <div class="animation-effect-6 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-4 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-3 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                </div><!-- end card -->

            </div> <!-- end .h-100-->

        </div> <!-- end col -->
        <div class="col-md-4">
            <div class="h-100">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Population</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcdpopulation"><?= isset($alldmadata[0]->total_no_population) ? $alldmadata[0]->total_no_population : '0';?></span></h4>

                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title blue-bg rounded fs-3">
                                    <i class="bx bx-water"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                    <div class="animation-effect-6 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-4 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-3 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
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
                                    Total Household</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcdhousehold"><?= isset($alldmadata[0]->total_no_house_holds) ? $alldmadata[0]->total_no_house_holds : '0';?></span></h4>

                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title blue-bg rounded fs-3">
                                    <i class="bx bx-water"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                    <div class="animation-effect-6 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-4 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-3 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                </div><!-- end card -->

            </div> <!-- end .h-100-->

        </div> <!-- end col -->
        <div class="col-md-4">
            <div class="h-100">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">House Connnection Completed</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcdhousecomplete"><?= isset($alldmadata[0]->total_no_house_connection_replaced) ? $alldmadata[0]->total_no_house_connection_replaced : '0';?></span></h4>

                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title blue-bg rounded fs-3">
                                    <i class="bx bx-water"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                    <div class="animation-effect-6 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-4 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-3 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                </div><!-- end card -->

            </div> <!-- end .h-100-->

        </div>

        <div class="col-md-4">
            <div class="h-100">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Meter Connnection Completed </p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcdmetercomplete"><?= isset($alldmadata[0]->total_no_metered_house_connections) ? $alldmadata[0]->total_no_metered_house_connections : '0';?></span></h4>

                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title blue-bg rounded fs-3">
                                    <i class="bx bx-water"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end card body -->
                    <div class="animation-effect-6 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-4 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                    <div class="animation-effect-3 text-success opacity-25 fs-18">
                        <i class=" bx bxs-droplet-half"></i>
                    </div>
                </div><!-- end card -->

            </div> <!-- end .h-100-->

        </div>

    </div>

</div>

<!-- container-fluid -->
</div>
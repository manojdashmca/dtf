<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Grievance Customer Service</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Grievance Customer Service</li>
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
        <div class="col-12 mt-2">
            <form action="">
                <div class="row">
                    <div class="col-2">
                        <div class="row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Year</label>
                            <div class="col-sm-8">
                                <select class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example" id="select_dft_nrw_year">
                                    <option value="">Select Year</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                </select>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Monthly</label>
                            <div class="col-sm-8">
                                <select class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example" id="select_dft_nrw_monthly">
                                    <option value="">Select Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Weekly</label>
                            <div class="col-sm-8">
                                <select class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example" id="select_dft_nrw_weekly">
                                    <option value="">Select Week</option>
                                    <option value="01 AND 07">Week One</option>
                                    <option value="08 AND 14">Week Two</option>
                                    <option value="15 AND 21">Week Three</option>
                                    <option value="22 AND 28">Week Four</option>
                                    <option value="29 AND 31">Week Five</option>
                                    <option value="01 AND 31">All Week</option>
                                </select>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-1">
                        <button type="button" class="btn btn-soft-secondary btn-sm" onclick="getAllDistrict()">SEARCH</button>
                    </div>
                    <?php
                    $currentDate = date('Y-m-d');
                    $thisWeekStart = date('Y-m-d', strtotime("last sunday", strtotime($currentDate)));
                    $thisWeekEnd = date('Y-m-d', strtotime("next saturday", strtotime($currentDate)));
                    $lastWeekStart = date('Y-m-d', strtotime("last sunday", strtotime($thisWeekStart)));
                    $lastWeekEnd = date('Y-m-d', strtotime("next saturday", strtotime($thisWeekStart)));

                    $thisMonthStart = date('Y-m-01');
                    $thisMonthEnd = date('Y-m-t');
                    $thisweek = "'" . $thisWeekStart . "'" . ' AND ' . "'" . $thisWeekEnd . "'";
                    $lastweek = "'" . $lastWeekStart . "'" . ' AND ' . "'" . $lastWeekEnd . "'";
                    $thismonth = "'" . $thisMonthStart . "'" . ' AND ' . "'" . $thisMonthEnd . "'";

                    ?>
                    <div class="col-2">
                        <select class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example" id="store_type_filter">
                            <option value="" selected>Store Type</option>
                            <option value="today">Today</option>
                            <option value="<?php echo $thisweek; ?>">This Week</option>
                            <option value="<?php echo $lastweek; ?>">Last Week</option>
                            <option value="<?php echo $thismonth; ?>">This Month</option>
                            <option value="all">All</option>
                        </select>
                    </div>
                    <div class="col-1">
                        <button type="reset" class="btn btn-soft-secondary btn-sm">RESET</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="h-100">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                    Total
                                    Nos. of grievance Received</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="0">0</span>
                                </h4>

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

                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                    Grievance via 24 X 7 Customer service</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="0">0</span>
                                </h4>

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
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                    Grievance via Jalsathi</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="0">0</span>
                                </h4>

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
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                    Grievance by direct visit/ physical</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="0">0</span>
                                </h4>

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
                                    Nos
                                    of grievenced addressed</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="0">0</span>
                                </h4>

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
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                    Resolved with in time limit </p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="0">0</span>
                                </h4>

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
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                    Resolved after time limit </p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="0">0</span>
                                </h4>

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


            </div> <!-- end .h-100-->

        </div>
        <div class="col-md-4">
            <div class="h-100">


            </div> <!-- end .h-100-->

        </div>

        <div class="col-md-4">
            <div class="h-100">


            </div> <!-- end .h-100-->

        </div>
        <div class="col-md-4">
            <div class="h-100">


            </div> <!-- end .h-100-->

        </div>
        <div class="col-md-4">
            <div class="h-100">


            </div> <!-- end .h-100-->

        </div>
        <div class="col-md-4">
            <div class="h-100">


            </div> <!-- end .h-100-->

        </div>
    </div>

</div>

<!-- container-fluid -->
</div>
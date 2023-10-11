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
        <div class="col-lg-4 col-sm-12">
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
        <div class="col-lg-4 col-sm-12">

        </div>
        <div class="col-lg-4 col-sm-12">
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
            <!-- <form action=""> -->
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <div class="row">
                        <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Year</label>
                        <div class="col-sm-8">
                            <form name='fileter1' id='filter1' action='' method='get'>
                                <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                                <input type="hidden" name="division" value="<?= $division ?>" />
                                <input type="hidden" name="city" value="<?= $city ?>" />
                                <select id="filter_grievance_year" name="filter_grievance_year" onchange="this.form.submit();" class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example" required>
                                    <option>Select Year</option>
                                    <option <?= ($filter_grievance_year == '2022') ? 'selected="selected"' : '' ?> value="2022">2022</option>
                                    <option <?= ($filter_grievance_year == '2023') ? 'selected="selected"' : '' ?> value="2023">2023</option>
                                    <option <?= ($filter_grievance_year == '2024') ? 'selected="selected"' : '' ?> value="2024">2024</option>
                                    <option <?= ($filter_grievance_year == '2025') ? 'selected="selected"' : '' ?> value="2025">2025</option>
                                    <option <?= ($filter_grievance_year == '2026') ? 'selected="selected"' : '' ?> value="2026">2026</option>
                                    <option <?= ($filter_grievance_year == '2027') ? 'selected="selected"' : '' ?> value="2027">2027</option>
                                    <option <?= ($filter_grievance_year == '2028') ? 'selected="selected"' : '' ?> value="2028">2028</option>
                                    <option <?= ($filter_grievance_year == '2029') ? 'selected="selected"' : '' ?> value="2029">2029</option>
                                    <option <?= ($filter_grievance_year == '2030') ? 'selected="selected"' : '' ?> value="2030">2030</option>
                                    <option <?= ($filter_grievance_year == '2031') ? 'selected="selected"' : '' ?> value="2031">2031</option>
                                    <option <?= ($filter_grievance_year == '2032') ? 'selected="selected"' : '' ?> value="2032">2032</option>
                                    <option <?= ($filter_grievance_year == '2033') ? 'selected="selected"' : '' ?> value="2033">2033</option>
                                </select>
                            </form>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="row">
                        <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Monthly</label>
                        <div class="col-sm-8">
                            <form name='fileter1' id='filter1' action='' method='get'>
                                <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                                <input type="hidden" name="division" value="<?= $division ?>" />
                                <input type="hidden" name="city" value="<?= $city ?>" />
                                <input type="hidden" name="filter_grievance_year" value="<?= $filter_grievance_year ?>" />

                                <select id="filter_grievance_month" name="filter_grievance_month" onchange="this.form.submit();" class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example">
                                    <option value="0">Select Month</option>
                                    <option <?= ($filter_grievance_month == '01') ? 'selected="selected"' : '' ?> value="01">January</option>
                                    <option <?= ($filter_grievance_month == '02') ? 'selected="selected"' : '' ?> value="02">February</option>
                                    <option <?= ($filter_grievance_month == '03') ? 'selected="selected"' : '' ?> value="03">March</option>
                                    <option <?= ($filter_grievance_month == '04') ? 'selected="selected"' : '' ?> value="04">April</option>
                                    <option <?= ($filter_grievance_month == '05') ? 'selected="selected"' : '' ?> value="05">May</option>
                                    <option <?= ($filter_grievance_month == '06') ? 'selected="selected"' : '' ?> value="06">June</option>
                                    <option <?= ($filter_grievance_month == '07') ? 'selected="selected"' : '' ?> value="07">July</option>
                                    <option <?= ($filter_grievance_month == '08') ? 'selected="selected"' : '' ?> value="08">August</option>
                                    <option <?= ($filter_grievance_month == '09') ? 'selected="selected"' : '' ?> value="09">September</option>
                                    <option <?= ($filter_grievance_month == '10') ? 'selected="selected"' : '' ?> value="10">October</option>
                                    <option <?= ($filter_grievance_month == '11') ? 'selected="selected"' : '' ?> value="11">November</option>
                                    <option <?= ($filter_grievance_month == '12') ? 'selected="selected"' : '' ?> value="12">December</option>
                                </select>
                            </form>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="row">
                        <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Weekly</label>
                        <div class="col-sm-8">
                            <form name='fileter1' id='filter1' action='' method='get'>
                                <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                                <input type="hidden" name="division" value="<?= $division ?>" />
                                <input type="hidden" name="city" value="<?= $city ?>" />
                                <input type="hidden" name="filter_grievance_year" value="<?= $filter_grievance_year ?>" />
                                <input type="hidden" name="filter_grievance_month" value="<?= $filter_grievance_month ?>" />

                                <select id="filter_grievance_week" name="filter_grievance_week" onchange="this.form.submit();" class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example">
                                    <option value="0">Select Week</option>
                                    <option <?= ($filter_grievance_week == '01 AND 07') ? 'selected="selected"' : '' ?> value="01 AND 07">Week One</option>
                                    <option <?= ($filter_grievance_week == '08 AND 14') ? 'selected="selected"' : '' ?> value="08 AND 14">Week Two</option>
                                    <option <?= ($filter_grievance_week == '15 AND 21') ? 'selected="selected"' : '' ?> value="15 AND 21">Week Three</option>
                                    <option <?= ($filter_grievance_week == '22 AND 28') ? 'selected="selected"' : '' ?> value="22 AND 28">Week Four</option>
                                    <option <?= ($filter_grievance_week == '29 AND 31') ? 'selected="selected"' : '' ?> value="29 AND 31">Week Five</option>
                                    <option <?= ($filter_grievance_week == '01 AND 31') ? 'selected="selected"' : '' ?> value="01 AND 31">All Week</option>
                                </select>
                            </form>
                        </div>
                        <hr>
                    </div>
                </div>
                <!-- <div class="col-1">
                    <button type="button" class="btn btn-soft-secondary btn-sm" onclick="getAllDistrict()">SEARCH</button>
                </div> -->
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
                <div class="col-lg-2">
                    <select class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example" id="store_type_filter">
                        <option value="" selected>Store Type</option>
                        <option value="today">Today</option>
                        <option value="<?php echo $thisweek; ?>">This Week</option>
                        <option value="<?php echo $lastweek; ?>">Last Week</option>
                        <option value="<?php echo $thismonth; ?>">This Month</option>
                        <option value="all">All</option>
                    </select>
                </div>
                <div class="col-lg-1">
                    <form action="">
                        <button type="reset" class="btn btn-soft-secondary btn-sm" onclick="this.form.submit();">RESET</button>

                    </form>
                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
    <?php
    // print_r($filtergrievance);
    ?>
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
                                <h4 class="fs-22 fw-semibold mb-3"><span class="" data-target="0"><?= isset($filtergrievance->total_no_of_grievance_received) ? $filtergrievance->total_no_of_grievance_received : "0"; ?></span>
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
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($filtergrievance->count_grivance_via_customerservice) ? $filtergrievance->count_grivance_via_customerservice : "0"; ?>
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
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($filtergrievance->count_grivance_via_jalsathi) ? $filtergrievance->count_grivance_via_jalsathi : "0"; ?>
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
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($filtergrievance->count_grivance_via_visit) ? $filtergrievance->count_grivance_via_visit : "0"; ?>
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
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($filtergrievance->count_pending_griveance) ? $filtergrievance->count_pending_griveance : "0"; ?>
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
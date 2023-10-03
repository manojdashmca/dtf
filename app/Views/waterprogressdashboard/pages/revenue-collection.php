<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">


    <div class="page-content">
        <div class="tab-wrapper">
            <div class="filter-wrapper-con">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            require_once __DIR__ . '/selectd.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-Construction" role="tabpanel" aria-labelledby="v-pills-Construction-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex">
                                        <a class="btn btn-info btn-sm" href="dashboard">Construction</a>
                                        <h4 class="card-title mb-0 flex-grow-1">Overall progress | Component
                                            wise progress</h4>

                                        <div>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                ALL
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                1M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                6M
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-sm">
                                                1Y
                                            </button>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body p-0 pb-2">
                                        <div class="w-100">
                                            <div id="customer_impression_charts" data-colors='["--tb-dark", "--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>

                        </div>

                    </div>
                    <!-- container-fluid -->
                </div>
                <div class="tab-pane fade" id="v-pills-HouseConnection" role="tabpanel" aria-labelledby="v-pills-HouseConnection-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="h-100">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13" id="pmcondashheading">
                                                        No of City</p>
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcd"><?= $pipe_meter_landing['no_of_city']; ?></span></h4>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcdpopulation"><?= $pipe_meter_landing['division_population']; ?></span></h4>

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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcdhousehold"><?= $pipe_meter_landing['division_household']; ?></span></h4>

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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcdhousecomplete"><?= $pipe_meter_landing['division_house_connection']; ?></span></h4>

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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="" id="hmcdmetercomplete"><?= $pipe_meter_landing['division_meter_connection']; ?></span></h4>

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
                <div class="tab-pane fade" id="v-pills-NRW" role="tabpanel" aria-labelledby="v-pills-NRW-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="card-title mb-0">NRW</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body p-0 pb-2">
                                        <div class="grid-chart-nrw">
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
                                                        $thisweek = "'".$thisWeekStart."'" .' AND '. "'".$thisWeekEnd."'";
                                                        $lastweek = "'".$lastWeekStart."'" .' AND '. "'".$lastWeekEnd."'";
                                                        $thismonth = "'".$thisMonthStart."'" .' AND '. "'".$thisMonthEnd."'";

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
                                            <div class="bar-chart-nrw" id="inner_div_nrw_city_wise">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-JalSathi" role="tabpanel" aria-labelledby="v-pills-JalSathi-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="h-100">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Nos.
                                                        of Jalsathi</p>
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" id="no_of_jalsathi">0</span></h4>

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
                                                        Revenue collected by Jalsathi:</p>
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" id="no_of_test_conducted_by_jalasathi">0</span></h4>

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
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Incentive paid to Jalsathi</p>
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" id="incentive_paid_to_jalsathi">0</span></h4>

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
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Nos.
                                                        of test conducted by Jalsathi</p>
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" id="revenue_collected_by_jalasathi">0</span></h4>

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

                            <!-- <div class="col-md-4">
                    <div class="h-100">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-grow-1">
                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Nos.
                                            of test conducted by Jalsathi</p>
                                        <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value"
                                                id="no_of_test_conducted_by_jalasathi">0</span></h4>

                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title blue-bg rounded fs-3">
                                            <i class="bx bx-water"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="animation-effect-6 text-success opacity-25 fs-18">
                                <i class=" bx bxs-droplet-half"></i>
                            </div>
                            <div class="animation-effect-4 text-success opacity-25 fs-18">
                                <i class=" bx bxs-droplet-half"></i>
                            </div>
                            <div class="animation-effect-3 text-success opacity-25 fs-18">
                                <i class=" bx bxs-droplet-half"></i>
                            </div>
                        </div>

                    </div> 

                </div> -->
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-RevenueCollection" role="tabpanel" aria-labelledby="v-pills-RevenueCollection-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="h-100">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Nos. bill generated</p>
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
                                                        Nos. bill distributed</p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Incentive paid to Jalsathi</p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Total revenue collected</p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Revenue collected by Jalsathi
                                                    </p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Incentive paid to Jalsathi
                                                    </p>
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
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-GrievanceCustomer" role="tabpanel" aria-labelledby="v-pills-GrievanceCustomer-tab" tabindex="0">
                    <div class="container-fluid">
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

                                </div> <!-- end .h-100-->

                            </div>

                            <div class="col-md-4">
                                <div class="h-100">
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

                                </div> <!-- end .h-100-->

                            </div>
                            <div class="col-md-4">
                                <div class="h-100">
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

                                </div> <!-- end .h-100-->

                            </div>
                            <div class="col-md-4">
                                <div class="h-100">
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

                                </div> <!-- end .h-100-->

                            </div>
                            <div class="col-md-4">
                                <div class="h-100">
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

                            </div>
                            <div class="col-md-4">
                                <div class="h-100">
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

                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-WQM" role="tabpanel" aria-labelledby="v-pills-WQM-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="h-100">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Nos
                                                        of sample taken </p>
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
                                                        Sample collected at WTP</p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Sample collected at storage</p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Sample collected from <br />distribution network</p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Sample collected at consumer point</p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Nos.
                                                        of Parameters tested</p>
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
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                                        Nos
                                                        of sample failed</p>
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
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-RTM" role="tabpanel" aria-labelledby="v-pills-RTM-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Real time monitoring</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-ReportGeneration" role="tabpanel" aria-labelledby="v-pills-ReportGeneration-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Report generation</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-ReviewMeetings" role="tabpanel" aria-labelledby="v-pills-ReviewMeetings-tab" tabindex="0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Name of division</th>
                                                    <th scope="col">Name of City</th>
                                                    <th scope="col">Meeting Date and time </th>
                                                    <th scope="col">Meeting Chaired by</th>
                                                    <th scope="col">List of participants with add option</th>
                                                    <th scope="col">Decission taken in the meeting </th>
                                                    <th scope="col">Deadline set for each decission </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                    <th scope="col">----</th>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
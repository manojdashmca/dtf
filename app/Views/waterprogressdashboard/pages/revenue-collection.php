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
                                        <h4 class="card-title mb-0 flex-grow-1">NRW</h4>
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
                                        <div class="grid-chart-nrw">
                                            <!-- <div class="chart-label">Hits per Hour, Yesterday</div> -->
                                            <div class="bar-chart-nrw">
                                                <div class="item">
                                                    <div class="bar-nrw" style="height: 200px;" title="200 (100%)"><span class="bar-label-nrw">100%</span></div>
                                                    <span class="item-label-nrw">Jan5</span>
                                                </div>
                                                <div class="item">
                                                    <div class="bar-nrw" style="height: 196px;" title="12 (17%)"><span class="bar-label-nrw">98%</span></div>
                                                    <span class="item-label-nrw">Feb8</span>
                                                </div>
                                                <div class="item">
                                                    <div class="bar-nrw" style="height: 170px;" title="13 (18%)"><span class="bar-label-nrw">85%</span></div>
                                                    <span class="item-label-nrw">Mar8</span>
                                                </div>
                                                <div class="item">
                                                    <div class="bar-nrw" style="height: 160px;" title="10 (14%)"><span class="bar-label-nrw">80%</span></div>
                                                    <span class="item-label-nrw">Apr10</span>
                                                </div>
                                                <div class="item">
                                                    <div class="bar-nrw" style="height: 150px;" title="30 (42%)"><span class="bar-label-nrw">75%</span></div>
                                                    <span class="item-label-nrw">May11</span>
                                                </div>
                                                <div class="item">
                                                    <div class="bar-nrw" style="height: 130px;" title="31 (43%)"><span class="bar-label-nrw">65%</span></div>
                                                    <span class="item-label-nrw">June11</span>
                                                </div>
                                                <div class="item">
                                                    <div class="bar-nrw" style="height: 108px;" title="54 (74%)"><span class="bar-label-nrw">54%</span></div>
                                                    <span class="item-label-nrw">July12</span>
                                                </div>
                                                <div class="item">
                                                    <div class="bar-nrw warning" style="height: 80px;" title="65 (90%)"><span class="bar-label-nrw">40%</span>
                                                    </div>
                                                    <span class="item-label-nrw">Aug8</span>
                                                </div>
                                                <!-- <div class="item">
                    <div class="bar-nrw danger" style="height: 200px;" title="73 (100%)"><span class="bar-label-nrw">73</span>
                    </div>
                    <span class="item-label-nrw">08</span>
                </div>
                <div class="item">
                    <div class="bar-nrw warning" style="height: 187px;" title="68 (94%)"><span class="bar-label-nrw">68</span>
                    </div>
                    <span class="item-label-nrw">09</span>
                </div>
                <div class="item">
                    <div class="bar-nrw warning" style="height: 198px;" title="72 (99%)"><span class="bar-label-nrw">72</span>
                    </div>
                    <span class="item-label-nrw">10</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 168px;" title="61 (84%)"><span class="bar-label-nrw">61</span></div>
                    <span class="item-label-nrw">11</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 168px;" title="61 (84%)"><span class="bar-label-nrw">61</span></div>
                    <span class="item-label-nrw">12</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 157px;" title="57 (79%)"><span class="bar-label-nrw">57</span></div>
                    <span class="item-label-nrw">13</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 132px;" title="48 (66%)"><span class="bar-label-nrw">48</span></div>
                    <span class="item-label-nrw">14</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 151px;" title="55 (76%)"><span class="bar-label-nrw">55</span></div>
                    <span class="item-label-nrw">15</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 168px;" title="61 (84%)"><span class="bar-label-nrw">61</span></div>
                    <span class="item-label-nrw">16</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 162px;" title="59 (81%)"><span class="bar-label-nrw">59</span></div>
                    <span class="item-label-nrw">17</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 113px;" title="41 (57%)"><span class="bar-label-nrw">41</span></div>
                    <span class="item-label-nrw">18</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 127px;" title="46 (64%)"><span class="bar-label-nrw">46</span></div>
                    <span class="item-label-nrw">19</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 94px;" title="34 (47%)"><span class="bar-label-nrw">34</span></div>
                    <span class="item-label-nrw">20</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 96px;" title="35 (48%)"><span class="bar-label-nrw">35</span></div>
                    <span class="item-label-nrw">21</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 85px;" title="31 (43%)"><span class="bar-label-nrw">31</span></div>
                    <span class="item-label-nrw">22</span>
                </div>
                <div class="item">
                    <div class="bar-nrw" style="height: 44px;" title="16 (22%)"><span class="bar-label-nrw">16</span></div>
                    <span class="item-label-nrw">23</span>
                </div> -->
                                            </div> <!-- /.bar-chart-nrw -->
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="20000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="18000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="20000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="18000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="20000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="18000">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="8042">0</span>
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
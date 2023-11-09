<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">REVENUE COLLECTION</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Revenue Collection</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>


    <div class="row mb-3">
        <?php
        if (isset($sessiondivision)) {
        } else {
        ?>
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
        <?php
        }
        ?>
        <!-- Filter -->
        <div class="col-12 mt-2">
            <form action="">
                <input type="hidden" name="pager" value="<?= $pagerid ?>" />
                <input type="hidden" name="division" value="<?= $division ?>" />
                <input type="hidden" name="city" value="<?= $city ?>" />
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Year</label>
                            <div class="col-sm-8">
                                <select id="filter_grievance_year" name="filter_grievance_year" onchange="this.form.submit();" class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example" required>
                                    <option value=''>Select Year</option>
                                    <?php for ($x = 2022; $x < (date('Y') + 1); $x++) { ?>
                                        <option <?= ($filter_grievance_year == $x) ? 'selected="selected"' : '' ?> value="<?= $x ?>"><?= $x ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Monthly</label>
                            <div class="col-sm-8">
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
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Weekly</label>
                            <div class="col-sm-8">
                                <select id="filter_grievance_week" name="filter_grievance_week" onchange="this.form.submit();" class="form-select form-select-sm  mb-3" aria-label=".form-select-sm example">
                                    <option value="0">Select Week</option>
                                    <option <?= ($filter_grievance_week == '1') ? 'selected="selected"' : '' ?> value="1">Week One</option>
                                    <option <?= ($filter_grievance_week == '2') ? 'selected="selected"' : '' ?> value="2">Week Two</option>
                                    <option <?= ($filter_grievance_week == '3') ? 'selected="selected"' : '' ?> value="3">Week Three</option>
                                    <option <?= ($filter_grievance_week == '4') ? 'selected="selected"' : '' ?> value="4">Week Four</option>
                                </select>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button type="reset" class="btn btn-soft-secondary btn-sm">RESET</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Filter -->
    </div>
    <?php
    // print_r($allrevenuecollectionfilter);die;
    ?>

    <div class="row">
        <div class="col-md-4">
            <div class="h-100">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">
                                    Nos. bill generated</p>
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($allrevenuecollectionfilter->total_bill_generate) ? $allrevenuecollectionfilter->total_bill_generate : '0'; ?></h4>

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
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($allrevenuecollectionfilter->total_bill_distributed) ? $allrevenuecollectionfilter->total_bill_distributed : '0'; ?></h4>

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
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($allrevenuecollectionfilter->total_incentive_paid_to_jalasathi) ? $allrevenuecollectionfilter->total_incentive_paid_to_jalasathi : '0'; ?></h4>

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
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($allrevenuecollectionfilter->total_revenue_collected) ? $allrevenuecollectionfilter->total_revenue_collected : '0'; ?></h4>

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
                                <h4 class="fs-22 fw-semibold mb-3"><?= isset($allrevenuecollectionfilter->total_revenue_collected_by_jalasathi) ? $allrevenuecollectionfilter->total_revenue_collected_by_jalasathi : '0'; ?></h4>

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
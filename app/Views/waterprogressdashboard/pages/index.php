<div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Overall progress | Component wise progress</h4>
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
                                        <div id="customer_impression_charts"
                                            data-colors='["--tb-dark", "--tb-primary", "--tb-secondary"]'
                                            class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>

                    </div>

                </div>
                <!-- container-fluid -->
            </div>
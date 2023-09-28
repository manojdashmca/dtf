<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Financial Progress Report</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Financial Progress</a></li>
                        <li class="breadcrumb-item active">Progress Report</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- reserve for displaying session alert-->


    <!-- reserve for displaying session alert-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Financial Progress</h4>
                                       
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0">
                            <thead>
                                <tr>

                                    <th data-ordering="false">SR No.</th>
                                    <th data-ordering="false">City</th>
                                    <th data-ordering="false">Contract Cost</th>
                                    <th data-ordering="false">Acheived Progress</th>
                                    <th data-ordering="false">Achieved %</th>                                                                       
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                for($x=0;$x<count($financialdata);$x++){?>
                                <tr>
                                    <td><?=str_pad(($x+1), 2, "0", STR_PAD_LEFT)?></td>
                                    <td><?=$financialdata[$x]->city_name?></td>
                                    <td><?= number_format($financialdata[$x]->contract_cost,2)?></td>
                                    <td><?= number_format($financialdata[$x]->achievedprogress,2)?></td>
                                    <td><?= $financialdata[$x]->achievedprogress_percentage?></td>                                   
                                    
                                </tr>
                                <?php }?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <div class="card-body">
                    <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Financial Progress Chart view</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="column_chart" data-colors='["--tb-danger", "--tb-primary", "--tb-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <!-- container-fluid -->
</div>
<!-- End Page-content -->


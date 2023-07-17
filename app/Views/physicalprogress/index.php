<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Progress Report</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Physical Progress</a></li>
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
                    <h4 class="card-title mb-0 flex-grow-1"></h4>
                    <div class="d-flex gap-1 flex-wrap" style='margin-right: 10px;'>
                        <form name='fileter' id='filter' action='' method='get'>                            
                            <input type="hidden" name="pager" value="<?=$pagerid?>"/>
                            <select name='city' id='city' class='form-control form-select' onchange="this.form.submit();">
                                <option value="">Select City</option>
                                <?php for($x=0;$x<count($citydropdown);$x++){?>
                                <option value='<?=$citydropdown[$x]->city_id?>' <?= ($city==$citydropdown[$x]->city_id)?'selected="selected"':''?>><?=$citydropdown[$x]->city_name?></option>
                                <?php }?>                                
                            </select>
                            <input type="hidden" name="transactionid" value="<?=$session->get('trnid')?>"/>
                        </form>
                    </div>                    
                </div>
                <?php if (!empty($city)) { ?>

                    <div class="card-body">                
                        <div class="table-responsive">
                            <table class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" width='10%'>Sl No</th>
                                        <th scope="col" width='20%'>Report Header</th>
                                        <th scope="col" width='70%' style='text-align: center;'>Description</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="javascript:void();" class="fw-medium">01</a></th>
                                        <td>Name of Work</td>
                                        <td>Improvement of water supply to provide safe & clean drinking water confirming to drink from tap quality to Anandpur ULB on Engineering Procurement & Construction (EPC) Contract including Operation & Maintenance for the period of three years (Package III)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void();" class="fw-medium">02</a></th>
                                        <td>Name of Contractor</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void();" class="fw-medium">03</a></th>
                                        <td>Date of Contract</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void();" class="fw-medium">04</a></th>
                                        <td>Date of Commencement</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void();" class="fw-medium">05</a></th>
                                        <td>Date of Completion</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="javascript:void();" class="fw-medium">06</a></th>
                                        <td>Contract Cost</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div><!-- end card-body -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0">
                                <thead>
                                    <tr>

                                        <th data-ordering="false">SR No.</th>
                                        <th data-ordering="false">Component</th>
                                        <th data-ordering="false">Status</th>
                                        <th data-ordering="false">Scope Qty</th>
                                        <th data-ordering="false">Progress Qty</th>
                                        <th>Component Completion %</th>
                                        <th>Overall Progress %</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Detailed survey & Investigation and preparation of Base Data, Design & Drawing</td>
                                        <td>Inprogress</td>
                                        <td></td>
                                        <td></td>
                                        <td>32.50</td>
                                        <td>0.49</td>

                                    </tr>
                                    <tr>

                                        <td>02</td>
                                        <td>Intake arrangement/Gabion wall for Intake</td>
                                        <td>Inprogress</td>
                                        <td>1.00</td>
                                        <td>0.00</td>
                                        <td>3.25</td>
                                        <td>0.06</td>

                                    </tr>
                                    <tr>

                                        <td>03</td>
                                        <td>Raw Water Pumping Station Above the Intake Well</td>
                                        <td>Not Started</td>
                                        <td>1.00</td>
                                        <td></td>
                                        <td>0.00</td>
                                        <td>0.00</td>

                                    </tr>
                                    <tr>

                                        <td>04</td>
                                        <td>Raw Water Rising Main</td>
                                        <td>Completed</td>
                                        <td>1.00</td>
                                        <td></td>
                                        <td>1.00</td>
                                        <td>0.00</td>

                                    </tr>
                                    <tr>

                                        <td>05</td>
                                        <td>Water Treatment Plant (WTP)</td>
                                        <td>Completed</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>

                                        <td>06</td>
                                        <td>Clear Water Rising Main</td>
                                        <td>Completed</td>
                                        <td>22.36</td>
                                        <td></td>
                                        <td>2.36</td>
                                        <td>0.46</td>

                                    </tr>
                                    <tr>

                                        <td>07</td>
                                        <td>OHSR</td>
                                        <td>Completed</td>
                                        <td>8.00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>

                                        <td>08</td>
                                        <td>Distribution Pipeline (DI-K7) & Fittings & Civil Works</td>
                                        <td>Completed</td>
                                        <td>93.04</td>
                                        <td></td>
                                        <td>26.23</td>
                                        <td></td>

                                    </tr>
                                    <tr>

                                        <td>09</td>
                                        <td>House connection (New & Replacement work) & consumer Metering</td>
                                        <td>Completed</td>
                                        <td>1.00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>

                                        <td>10</td>
                                        <td>SCADA & Automation</td>
                                        <td>Completed</td>
                                        <td>8.00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>

                                        <td>11</td>
                                        <td>Mechanical Work (Piping work inside WTP)</td>
                                        <td>Completed</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>

                                        <td>12</td>
                                        <td>Electrical Work (Electromechanical Work)*</td>
                                        <td>Completed</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr>

                                        <td>13</td>
                                        <td>IT & Hardware</td>
                                        <td>Completed</td>
                                        <td>1.00</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- start page title -->
                    

                    <div class="row">                       

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Physical Progress as of <?=date('d-m-Y')?></h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="column_chart_datalabel" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                <?php } ?>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <!-- container-fluid -->
</div>
<!-- End Page-content -->


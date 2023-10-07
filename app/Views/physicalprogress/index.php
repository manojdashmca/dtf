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
                                    <?php for($x=0;$x<count($cityheader);$x++){?>
                                    <tr>
                                        <th scope="row"><a href="javascript:void();" class="fw-medium">01</a></th>
                                        <td><?=$cityheader[$x]->header?></td>
                                        <td><?= ($cityheader[$x]->rh_id!=6)?$cityheader[$x]->rh_data:$cc ?></td>
                                    </tr>
                                    <?php } ?>
                                    
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
<!--                                        <th data-ordering="false">Status</th>
                                        <th data-ordering="false">Scope Qty</th>
                                        <th data-ordering="false">Progress Qty</th>-->
                                        <th>Component Completion %</th>
                                        <th>Overall Progress %</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($a=0;$a<count($citycomponent);$a++){?>
                                    <tr>
                                        <td class="fw-medium"><?= str_pad(($a + 1), 2, "0", STR_PAD_LEFT) ?></td>
                                        
                                        <td><?=$citycomponent[$a]->component?></td>
<!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                                        <td><?=$citycomponent[$a]->component_progress_percentage?></td>
                                        <td><?=$citycomponent[$a]->overal_progress_percentage?></td>

                                    </tr>
                                    <?php }?>

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


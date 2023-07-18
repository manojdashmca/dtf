<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Process Entity</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Process Entity</a></li>
                        <li class="breadcrumb-item active">City Component</li>
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
                            <input type="hidden" name="pager" value="<?= $pagerid ?>"/>
                            <select name='city' id='city' class='form-control  form-select' onchange="this.form.submit();">
                                <option value="">Select City</option>
                                <?php for ($x = 0; $x < count($citydropdown); $x++) { ?>
                                    <option value='<?= $citydropdown[$x]->city_id ?>' <?= ($city == $citydropdown[$x]->city_id) ? 'selected="selected"' : '' ?>><?= $citydropdown[$x]->city_name ?></option>
                                <?php } ?>                                
                            </select>
                            <input type="hidden" name="transactionid" value="<?= $session->get('trnid') ?>"/>
                        </form>
                    </div>                   
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">City Components</h4>                                             
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0">
                                    <thead>
                                        <tr>

                                            <th data-ordering="false">SR No.</th>
                                            <th data-ordering="false">Component</th>                                    
                                            <th data-ordering="false">Scope Qty</th>
                                            <th data-ordering="false">Progress Qty</th>                                    
                                            <th>Progress %</th> 
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($x = 0; $x < count($component); $x++) { ?>
                                            <tr>
                                                <td><?= str_pad(($x + 1), 2, "0", STR_PAD_LEFT) ?></td>
                                                <td><?= $component[$x]->component ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><button class="btn btn-primary" onclick="gettaskdata(<?= $city ?>,<?= $component[$x]->cm_id_cm ?>);">Tasks>></button></td>

                                            </tr>
                                        <?php } ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Tasks (Scroll towards bottom of the page to view Subtasks)</h4>                                             
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="taskdata">

                            </div>
                        </div>
                    </div>
                </div>

            </div><!--end col-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="table-responsive" id="subtaskdata">                               


                        </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->

        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
<div class="modal fade" id="progress-entry-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form autocomplete="off" name="createcity" id="createcity">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Progress Update Dialog</h5>
                    <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="form-group mb-3">
                            <label for="breakup-percent" class="form-label">Subtask Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="subtaskname" name="subtaskname" placeholder="Subtask Name" readonly="">
                        </div> 
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="breakup-percent" class="form-label">Unit <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="units" name="units" placeholder="" readonly="">
                        </div>
                        <div class="form-group col-6">
                            <label for="breakup-percent" class="form-label">Quantity <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="" readonly="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="breakup-percent" class="form-label">Break Up <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="breakup" name="breakup" placeholder="" readonly="">
                        </div>
                        <div class="form-group col-6">
                            <label for="breakup-percent" class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="pstatus" id="pstatus" class="form-select">
                                <option>In Progress</option>
                                <option>Completed</option>
                                <option>Not Started</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="breakup-percent" class="form-label">User Entered Progress % <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="userentryprogress" name="userentryprogress" placeholder="">
                        </div>
                        <div class="form-group col-6">
                            <label for="breakup-percent" class="form-label">Entered By Qty/Distance <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="entryqty" name="entryqty" placeholder="" readonly="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="breakup-percent" class="form-label">Allow Partial <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="allowpartial" name="allowpartial" placeholder="" readonly="">
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="createtask">Create City</button>

                    </div>
                </div>
            </div>
        </form>
        <!-- modal content -->
    </div>
</div>
<!-- end modal -->


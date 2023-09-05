<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Subtask Master</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Configuration</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Subtask List</h4>
                    <div class="d-flex gap-1 flex-wrap" style='margin-right: 10px;'>
                        <form name='fileter' id='filter' action='' method='get'>                            
                            <input type="hidden" name="pager" value="<?= $pagerid ?>"/>
                            <select name='city' id='city' class='form-control form-select' onchange="this.form.submit();">
                                <option value="">Select City</option>
                                <?php for ($x = 0; $x < count($citydropdown); $x++) { ?>
                                    <option value='<?= $citydropdown[$x]->city_id ?>' <?= ($city == $citydropdown[$x]->city_id) ? 'selected="selected"' : '' ?>><?= $citydropdown[$x]->city_name ?></option>
                                <?php } ?>                                
                            </select>
                            <input type="hidden" name="transactionid" value="<?= $session->get('trnid') ?>"/>
                        </form>
                    </div>
                    <div class="d-flex gap-1 flex-wrap" style='margin-right: 10px;'>
                        <button type="button" class="btn btn-success create-btn" data-bs-toggle="modal" data-bs-target="#add-subtask-modal">
                            <i class="ri-add-line align-bottom me-1"></i>Add New Record
                        </button>
                    </div> 
                    <div class="d-flex gap-1 flex-wrap">
                        <button type="button" class="btn btn-primary create-btn" data-bs-toggle="modal" data-bs-target="#add-missing-subtask-modal">
                            <i class="ri-add-line align-bottom me-1"></i>Add Missing Subtask
                        </button>
                    </div>
                </div>
                <div class="card-body">                
                    <div class="table-responsive">
                        <table class="table table-borderless table-bordered align-middle mb-0">
                            <thead>
                                <tr>
                                    
                                    <th>Record Sl</th>
                                    <th scope="col">Subtask</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Quantity(Mtr/Nos)</th>
                                    <th scope="col">Breakup %</th>
                                    <th scope="col">Breakup Cost</th>   
                                    <th scope="col">Status</th>  
                                    <th scope="col">Entered Progress</th>  
                                    <th scope="col">Allow Partial(Y/N)</th>  
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($x = 0; $x < count($subtask); $x++) { ?>
                                    <tr>
                                        
                                        <td class="fw-medium"><?= $subtask[$x]->record_sl ?></td>
                                        <td width="10%"><?= $subtask[$x]->subtask ?></td>
                                        <td><?= $subtask[$x]->subtask_unit ?></td>
                                        <td><?= $subtask[$x]->subtask_qty ?></td> 
                                        <td><?= $subtask[$x]->sub_task_breakup ?></td>
                                        <td><?= $subtask[$x]->breakup_cost ?></td> 
                                        <td><?= $subtask[$x]->status ?></td>
                                        <td><?= $subtask[$x]->entered_progress ?></td> 
                                        <td><?= $subtask[$x]->allowedpartial ?></td>
                                        <td>
                                            <div class="hstack gap-3 fs-15">
                                                <a href="javascript:void(0);" class="link-primary"><i class="ri-pencil-fill"></i></a>
                                                <a href="javascript:void(0);" class="link-danger"><i class="ri-delete-bin-5-line"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>                                
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card-body -->
            </div>



        </div>
    </div><!--end col-->
</div><!--end row-->

<!-- container-fluid -->
</div>
<!-- End Page-content -->
<!-- Modal -->
<div class="modal fade" id="add-subtask-modal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form autocomplete="off" name="createsubtask" id="createsubtask">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Create New Subtask Mapping</h5>
                    <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group mb-3">
                            <label for="Task-City" class="form-label">Select The City <span class="text-danger">*</span></label>
                            <select name='taskcity' id='taskcity' class='form-control form-select' onchange="getCityComponent();">
                                <option value="">Select City</option>
                                <?php for ($x = 0; $x < count($citydropdown); $x++) { ?>
                                    <option value='<?= $citydropdown[$x]->city_id ?>' <?= ($city == $citydropdown[$x]->city_id) ? 'selected="selected"' : '' ?>><?= $citydropdown[$x]->city_name ?></option>
                                <?php } ?>                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-3">
                            <label for="Task-Component" class="form-label">Select The Component <span class="text-danger">*</span></label>
                            <select name='citycomponent' id='citycomponent' class='form-control form-select' onchange="getCityComponentTask();">
                                <option value="">Select City Component</option>
                                <?php for ($x = 0; $x < count($component); $x++) { ?>
                                    <option value='<?= $component[$x]->cm_id_cm ?>'><?= $component[$x]->component ?></option>
                                <?php } ?>                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-3">
                            <label for="task-task" class="form-label">Task <span class="text-danger">*</span></label>
                            <select name='citycomponenttask' id='citycomponenttask' class='form-control form-select'>
                                <option value="">Select Component Task</option>                                                            
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-3">
                            <label for="task-task" class="form-label">Sub Task <span class="text-danger">*</span></label>
                            <select name='citycomponentsubtask' id='citycomponentsubtask' class='form-control form-select'>
                                <option value="">Select Subtask</option>
                                <?php for ($x = 0; $x < count($subtaskmaster); $x++) { ?>
                                    <option value='<?= $subtaskmaster[$x]->sm_id ?>'><?= $subtaskmaster[$x]->subtask ?></option>
                                <?php } ?>                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-3">
                                <label for="breakup-percent" class="form-label">Subtask Unit <span class="text-danger">*</span></label>
                                <select name='subtaskunit' id='subtaskunit' class='form-select'>
                                    <option value="">Select Unit</option>                            
                                    <option value='1'>Nos</option>
                                    <option value="2">Mtr</option>                                                           
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-3">
                                <label for="breakup-percent" class="form-label">Subtask Quantity <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subtaskqty" name="subtaskqty" placeholder="min 1 max 100">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-3">
                                <label for="breakup-percent" class="form-label">Allow Partial <span class="text-danger">*</span></label>
                                <select name='allowpartial' id='allowpartial' class='form-select'>
                                    <option value="">Select Value</option>                            
                                    <option value='1'>Yes</option>
                                    <option value="2">No</option>                                                           
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="form-group mb-3">
                                <label for="breakup-percent" class="form-label">Breakup Percent <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="subtaskbreakup" name="subtaskbreakup" placeholder="min 0.0 max 100">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="createtask">Create Subtask Mapping</button>

                    </div>
                </div>
            </div>
        </form>
        <!-- modal content -->
    </div>
</div>
<!-- end modal -->

<div class="modal fade" id="add-missing-subtask-modal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form autocomplete="off" name="createnewsubtask" id="createnewsubtask">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Create New Component</h5>
                    <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div id="api-key-error-msg" class="alert alert-danger py-2 d-none"></div>                    


                    <div class="form-group mb-3">
                        <label for="breakup-percent" class="form-label">Subtask Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="subtaskname" name="subtaskname" placeholder="Enter the Subtask Name">
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="createtask">Create Subtask</button>

                    </div>
                </div>
            </div>
        </form>
        <!-- modal content -->
    </div>
</div>
<!-- end modal -->

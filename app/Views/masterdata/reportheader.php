<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Report Header</h4>

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
                    <h4 class="card-title mb-0 flex-grow-1">Report Header Data</h4>
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
                        <button type="button" class="btn btn-success create-btn" data-bs-toggle="modal" data-bs-target="#add-reportheader-modal">
                            <i class="ri-add-line align-bottom me-1"></i>Add New Record
                        </button>
                    </div>
                    <div class="d-flex gap-1 flex-wrap">
                        <button type="button" class="btn btn-primary create-btn" data-bs-toggle="modal" data-bs-target="#add-missing-reportheader-modal">
                            <i class="ri-add-line align-bottom me-1"></i>Add Missing Report Header
                        </button>
                    </div>                     
                </div>
                <div class="card-body">                
                    <div class="table-responsive">
                        <table class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" width="10%">Sl No</th>
                                    <th scope="col" width="20%">Field</th>
                                    <th scope="col" width="65%">Description</th>                                                                       
                                    <th scope="col" width="5%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($x = 0; $x < count($headerdata); $x++) { ?>
                                    <tr>
                                        <td class="fw-medium"><?= str_pad(($x + 1), 2, "0", STR_PAD_LEFT) ?></td>
                                        <td><?= $headerdata[$x]->header ?></td>
                                        <td><?= ($headerdata[$x]->rh_id!=6)?$headerdata[$x]->rh_data:$cc ?></td>                                    
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
<div class="modal fade" id="add-reportheader-modal" tabindex="-1" aria-labelledby="addReportheaderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form autocomplete="off" name="createreportheader" id="createreportheader">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addReportheaderModalLabel">Create New Report Header Mapping</h5>
                    <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div id="api-key-error-msg" class="alert alert-danger py-2 d-none"></div>                    
                    <div class="form-group mb-3">
                        <label for="Task-City" class="form-label">Select The City <span class="text-danger">*</span></label>
                        <select name='taskcity' id='taskcity' class='form-control form-select'>
                            <option value="">Select City</option>
                            <?php for ($x = 0; $x < count($citydropdown); $x++) { ?>
                                <option value='<?= $citydropdown[$x]->city_id ?>' <?= ($city == $citydropdown[$x]->city_id) ? 'selected="selected"' : '' ?>><?= $citydropdown[$x]->city_name ?></option>
                            <?php } ?>                                
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="Task-Component" class="form-label">Select Report Header <span class="text-danger">*</span></label>
                        <select name='header' id='header' class='form-control form-select'>
                            <option value="">Select Header</option>
                            <?php for ($x = 0; $x < count($headermaster); $x++) { ?>
                                <option value='<?= $headermaster[$x]->rh_id ?>'><?= $headermaster[$x]->header ?></option>
                            <?php } ?>                                
                        </select>
                    </div>                    
                    <div class="form-group mb-3">
                        <label for="breakup-percent" class="form-label">Header Value <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="headervalue" name="headervalue" placeholder="Header Value"></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="createtask">Create Component</button>

                    </div>
                </div>
            </div>
        </form>
        <!-- modal content -->
    </div>
</div>
<!-- end modal -->
<div class="modal fade" id="add-missing-reportheader-modal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form autocomplete="off" name="createnewreportheader" id="createnewreportheader">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Create New Report Header</h5>
                    <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div id="api-key-error-msg" class="alert alert-danger py-2 d-none"></div>                    


                    <div class="form-group mb-3">
                        <label for="breakup-percent" class="form-label">Report Header Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="reportheadername" name="reportheadername" placeholder="Enter the Report Header Name">
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="createtask">Create Report Header</button>

                    </div>
                </div>
            </div>
        </form>
        <!-- modal content -->
    </div>
</div>
<!-- end modal -->

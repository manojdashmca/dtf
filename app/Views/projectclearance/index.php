<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Project Clearance /Issues</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Project Cleararance/ Issues</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">Issues List</h4>
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
                        <button type="button" class="btn btn-success create-btn" data-bs-toggle="modal" data-bs-target="#add-component-modal">
                            <i class="ri-add-line align-bottom me-1"></i>Add New Issue
                        </button>
                    </div> 
                </div>
                <div class="card-body">                
                    <div class="table-responsive">
                        <table class="table table-borderless table-bordered align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th >SR No.</th>
                                    <th >Issue-ID</th>
                                    <th >City Name</th>
                                    <th >Issue Date</th>
                                    <th >Issue Description</th>
                                    <th>Resolution Desc</th>
                                    <th>Resolution Date</th>
                                    <th>Issue Created By</th>
                                    <th>Issue Status</th>   
                                    <th>Action</th>   

                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($x = 0; $x < count($issues); $x++) { ?>
                                    <tr>
                                        <td><?= str_pad(($x + 1), 2, "0", STR_PAD_LEFT) ?></td>
                                        <td><?= $issues[$x]->issue_no ?></td>
                                        <td><?= $issues[$x]->city_name ?></td>
                                        <td><?= $issues[$x]->issue_date ?></td>
                                        <td><?= $issues[$x]->issue_description ?></td>
                                        <td><?= $issues[$x]->issue_resolution_description ?></td>
                                        <td><?= $issues[$x]->issue_resolution_date ?></td>
                                        <td><?= $issues[$x]->issue_entered_by ?></td>
                                        <td><?php if ($issues[$x]->issue_status == 1) { ?>
                                                <span class="info bg-info">Cancelled</span>
                                            <?php } elseif ($issues[$x]->issue_status == 2) { ?>
                                                <span class="success bg-success">Cancelled</span>
                                            <?php } elseif ($issues[$x]->issue_status == 3) { ?>
                                                <span class="badge bg-danger">Cancelled</span>
                                            <?php } ?></td>
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
<div class="modal fade" id="api-key-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New User</h5>
                <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form autocomplete="off">
                    <div id="api-key-error-msg" class="alert alert-danger py-2 d-none"></div>
                    <input type="hidden" id="apikeyId">
                    <div class="mb-3">
                        <label for="api-key-name" class="form-label">API Key Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="api-key-name" placeholder="Enter api key name">
                    </div>
                    <div class="mb-3" id="apikey-element" style="display: none;">
                        <label for="api-key" class="form-label">API Key</label>
                        <input type="text" class="form-control" id="api-key" disabled value="b5815DE8A7224438932eb296Z5">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="hstack gap-2 justify-content-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="createApi-btn">Create User</button>

                </div>
            </div>
        </div>
        <!-- modal content -->
    </div>
</div>
<!-- end modal -->


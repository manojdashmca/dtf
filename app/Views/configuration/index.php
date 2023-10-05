<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Configuration</h4>

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
                    <h4 class="card-title mb-0 flex-grow-1">City List</h4>

                    <div class="d-flex gap-1 flex-wrap">
                        <button type="button" class="btn btn-success create-btn" data-bs-toggle="modal" data-bs-target="#add-city-modal">
                            <i class="ri-add-line align-bottom me-1"></i>Add New Record
                        </button>
                    </div>                    
                </div>
                <div class="card-body">                
                    <div class="table-responsive">
                        <table class="table table-borderless table-bordered align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" width="10%">SL NO</th>
                                    <th scope="col" width="40%">City Name</th> 
                                    <th scope="col" width="40%">Division Name</th> 
                                    <th scope="col" width="45%">Contract Cost</th>                                    
                                    <th scope="col" width="5%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($x = 0; $x < count($citydropdown); $x++) { ?>
                                    <tr>
                                        <td class="fw-medium"><?= str_pad(($x + 1), 2, "0", STR_PAD_LEFT) ?></td>
                                        <td><?= $citydropdown[$x]->city_name ?></td>
                                        <td><?= $citydropdown[$x]->division_name ?></td>
                                        <td><?= $citydropdown[$x]->contract_cost ?></td>                                                                         
                                        <td>
                                            <div class="hstack gap-3 fs-15">
                                                <a href="javascript:void(0);" class="link-primary" data-bs-toggle="modal" data-bs-target="#edit-city-modal" onclick="citycontract(<?= $citydropdown[$x]->city_id ?>, '<?= $citydropdown[$x]->city_name ?>', <?= $citydropdown[$x]->contract_cost ?>);"><i class="ri-pencil-fill"></i></a>
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
<div class="modal fade" id="add-city-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form autocomplete="off" name="createcity" id="createcity">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Create New City</h5>
                    <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="breakup-percent" class="form-label">Division <span class="text-danger">*</span></label>
                        <select class="form-control form-select" id="division" name="division">
                            <option value="">Select Division</option>
                            <?php foreach ($divisions as $division) {
                                ?>
                                <option value="<?= $division->id ?>"><?= $division->division_name ?></option>
                                <?php }
                            ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="breakup-percent" class="form-label">City Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="cityname" name="cityname" placeholder="City Name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="breakup-percent" class="form-label">Contract Cost <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="contractcost" name="contractcost" placeholder="min 1 max 10000000000">
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
<div class="modal fade" id="edit-city-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form autocomplete="off" name="editcity" id="editcity">
            <input type="hidden" name="ecityid" id="ecityid"/>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Edit City Data</h5>
                    <button type="button" class="btn-close" id="close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <div class="form-group mb-3">
                        <label for="breakup-percent" class="form-label">City Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="ecityname" name="ecityname" placeholder="City Name">
                    </div>

                    <div class="form-group mb-3">
                        <label for="breakup-percent" class="form-label">Contract Cost <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="econtractcost" name="econtractcost" placeholder="min 1 max 10000000000">
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="createtask">Update City Data</button>

                    </div>
                </div>
            </div>
        </form>
        <!-- modal content -->
    </div>
</div>
<!-- end modal -->

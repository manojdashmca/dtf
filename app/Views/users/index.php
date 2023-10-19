<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Users List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Users</a></li>
                        <li class="breadcrumb-item active">Users List</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">All Users</h4>                    
                    <div class="d-flex gap-1 flex-wrap">

                        <button type="button" class="btn btn-success create-btn" data-bs-toggle="modal" data-bs-target="#api-key-modal">
                            <i class="ri-add-line align-bottom me-1"></i>Add New User
                        </button>
                    </div>
                </div>

            </div>

            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>

                            <th data-ordering="false">SR No.</th>
                            <th data-ordering="false">Name</th>
                            <th data-ordering="false">User Code</th>
                            <th data-ordering="false">Login Name</th>
                            <th data-ordering="false">Email Id</th>
                            <th data-ordering="false">Mobile No</th>
                            <th data-ordering="false">Registration Date</th>
                            <th>Role</th>
                            <th>Mapped City</th>
                            <th>Status</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x = 1;
                        foreach ($userlist as $data) {
                            ?>
                            <tr>
                                <td><?= str_pad($x, 2, "0", STR_PAD_LEFT) ?></td>
                                <td><?= $data->user_name ?></td>
                                <td><?= $data->user_code ?></td>
                                <td><?= $data->user_login_name ?></td>                            
                                <td><?= $data->user_email ?></td>   
                                <td><?= $data->user_mobile ?></td>   
                                <td><?= date('d M Y', $data->user_create_date) ?></td>
                                <?php if ($data->user_type == 1) { ?>
                                    <td><span class="badge bg-danger">Super Admin</span></td>
                                <?php } else { ?>
                                    <td><span class="badge bg-primary">City User</span></td>
                                <?php } ?>
                                <td><?= $data->city_name ?></td>  
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            $x++;
                        }
                        ?>

                    </tbody>
                </table>
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
                        <label for="api-key-name" class="form-label">User Name  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="api-key-name" placeholder="Enter user name">
                    </div>
                    <div class="mb-3">
                        <label for="api-key-name" class="form-label">User Mobile  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="api-key-name" placeholder="Enter user Mobile No">
                    </div>
                    <div class="mb-3">
                        <label for="api-key-name" class="form-label">User Email  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="api-key-name" placeholder="Enter User Email">
                    </div>
                    <div class="mb-3">
                        <label for="api-key-name" class="form-label">User Role  <span class="text-danger">*</span></label>
                        <select  class="form-control form-select" id="api-key-name">
                            <option value="">Select Role</option>
                            <option value="1">Super Admin</option>
                            <option value="2">City User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="api-key-name" class="form-label">Mapped City  <span class="text-danger">*</span></label>
                        <select name='city' id='city' class='form-control form-select' onchange="this.form.submit();">
                            <option value="">Select City</option>
                            <?php for ($x = 0; $x < count($citydropdown); $x++) { ?>
                                <option value='<?= $citydropdown[$x]->city_id ?>' <?= ($city == $citydropdown[$x]->city_id) ? 'selected="selected"' : '' ?>><?= $citydropdown[$x]->city_name ?></option>
                            <?php } ?>                                
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="api-key-name" class="form-label">User Password  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="api-key-name" placeholder="Enter user Password">
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

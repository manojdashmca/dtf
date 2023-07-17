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
                    <h4 class="card-title mb-0 flex-grow-1">Latest News</h4>
                    <div class="d-flex gap-1 flex-wrap" style='margin-right: 10px;'>
                        <form name='fileter' id='filter' action='' method='get'>                            
                            <input type="hidden" name="pager" value="<?=$pagerid?>"/>
                            <select name='city' id='city' class='form-control' onchange="this.form.submit();">
                                <option value="">Select City</option>
                                <?php for($x=0;$x<count($citydropdown);$x++){?>
                                <option value='<?=$citydropdown[$x]->city_id?>' <?= ($city==$citydropdown[$x]->city_id)?'selected="selected"':''?>><?=$citydropdown[$x]->city_name?></option>
                                <?php }?>                                
                            </select>
                            <input type="hidden" name="transactionid" value="<?=$session->get('trnid')?>"/>
                        </form>
                    </div>                    
                </div>

            </div>

            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>

                            <th data-ordering="false">SR No.</th>
                            <th data-ordering="false">ID</th>
                            <th data-ordering="false">Purchase ID</th>
                            <th data-ordering="false">Title</th>
                            <th data-ordering="false">User</th>
                            <th>Assigned To</th>
                            <th>Created By</th>
                            <th>Create Date</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>01</td>
                            <td>VLZ-452</td>
                            <td>VLZ1400087402</td>
                            <td><a href="#!">Post launch reminder/ post list</a></td>
                            <td>Joseph Parker</td>
                            <td>Alexis Clarke</td>
                            <td>Joseph Parker</td>
                            <td>03 Oct, 2021</td>
                            <td><span class="badge badge-soft-info">Re-open</span></td>
                            <td><span class="badge bg-danger">High</span></td>
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
                        <tr>

                            <td>02</td>
                            <td>VLZ-453</td>
                            <td>VLZ1400087425</td>
                            <td><a href="#!">Additional Calendar</a></td>
                            <td>Diana Kohler</td>
                            <td>Admin</td>
                            <td>Mary Rucker</td>
                            <td>05 Oct, 2021</td>
                            <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                            <td><span class="badge bg-info">Medium</span></td>
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
                        <tr>

                            <td>03</td>
                            <td>VLZ-454</td>
                            <td>VLZ1400087438</td>
                            <td><a href="#!">Make a creating an account profile</a></td>
                            <td>Tonya Noble</td>
                            <td>Admin</td>
                            <td>Tonya Noble</td>
                            <td>27 April, 2022</td>
                            <td><span class="badge badge-soft-danger">Closed</span></td>
                            <td><span class="badge bg-success">Low</span></td>
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
                        <tr>

                            <td>04</td>
                            <td>VLZ-455</td>
                            <td>VLZ1400087748</td>
                            <td><a href="#!">Apologize for shopping Error!</a></td>
                            <td>Joseph Parker</td>
                            <td>Alexis Clarke</td>
                            <td>Joseph Parker</td>
                            <td>14 June, 2021</td>
                            <td><span class="badge badge-soft-warning">Inprogress</span></td>
                            <td><span class="badge bg-info">Medium</span></td>
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
                        <tr>

                            <td>05</td>
                            <td>VLZ-456</td>
                            <td>VLZ1400087547</td>
                            <td><a href="#!">Support for theme</a></td>
                            <td>Donald Palmer</td>
                            <td>Admin</td>
                            <td>Donald Palmer</td>
                            <td>25 June, 2021</td>
                            <td><span class="badge badge-soft-danger">Closed</span></td>
                            <td><span class="badge bg-success">Low</span></td>
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
                        <tr>

                            <td>06</td>
                            <td>VLZ-457</td>
                            <td>VLZ1400087245</td>
                            <td><a href="#!">Benner design for FB & Twitter</a></td>
                            <td>Mary Rucker</td>
                            <td>Jennifer Carter</td>
                            <td>Mary Rucker</td>
                            <td>14 Aug, 2021</td>
                            <td><span class="badge badge-soft-warning">Inprogress</span></td>
                            <td><span class="badge bg-info">Medium</span></td>
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
                        <tr>

                            <td>07</td>
                            <td>VLZ-458</td>
                            <td>VLZ1400087785</td>
                            <td><a href="#!">Change email option process</a></td>
                            <td>James Morris</td>
                            <td>Admin</td>
                            <td>James Morris</td>
                            <td>12 March, 2022</td>
                            <td><span class="badge badge-soft-primary">Open</span></td>
                            <td><span class="badge bg-danger">High</span></td>
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
                        <tr>

                            <td>08</td>
                            <td>VLZ-460</td>
                            <td>VLZ1400087745</td>
                            <td><a href="#!">Support for theme</a></td>
                            <td>Nathan Cole</td>
                            <td>Nancy Martino</td>
                            <td>Nathan Cole</td>
                            <td>28 Feb, 2022</td>
                            <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                            <td><span class="badge bg-success">Low</span></td>
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
                        <tr>

                            <td>09</td>
                            <td>VLZ-461</td>
                            <td>VLZ1400087179</td>
                            <td><a href="#!">Form submit issue</a></td>
                            <td>Grace Coles</td>
                            <td>Admin</td>
                            <td>Grace Coles</td>
                            <td>07 Jan, 2022</td>
                            <td><span class="badge badge-soft-success">New</span></td>
                            <td><span class="badge bg-danger">High</span></td>
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
                        <tr>

                            <td>10</td>
                            <td>VLZ-462</td>
                            <td>VLZ140008856</td>
                            <td><a href="#!">Edit customer testimonial</a></td>
                            <td>Freda</td>
                            <td>Alexis Clarke</td>
                            <td>Freda</td>
                            <td>16 Aug, 2021</td>
                            <td><span class="badge badge-soft-danger">Closed</span></td>
                            <td><span class="badge bg-info">Medium</span></td>
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
                        <tr>

                            <td>11</td>
                            <td>VLZ-463</td>
                            <td>VLZ1400078031</td>
                            <td><a href="#!">Ca i have an e-copy invoice</a></td>
                            <td>Williams</td>
                            <td>Admin</td>
                            <td>Williams</td>
                            <td>24 Feb, 2022</td>
                            <td><span class="badge badge-soft-primary">Open</span></td>
                            <td><span class="badge bg-success">Low</span></td>
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
                        <tr>

                            <td>12</td>
                            <td>VLZ-464</td>
                            <td>VLZ1400087416</td>
                            <td><a href="#!">Brand logo design</a></td>
                            <td>Richard V.</td>
                            <td>Admin</td>
                            <td>Richard V.</td>
                            <td>16 March, 2021</td>
                            <td><span class="badge badge-soft-warning">Inprogress</span></td>
                            <td><span class="badge bg-danger">High</span></td>
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
                        <tr>

                            <td>13</td>
                            <td>VLZ-466</td>
                            <td>VLZ1400089015</td>
                            <td><a href="#!">Issue with finding information about order ?</a></td>
                            <td>Olive Gunther</td>
                            <td>Alexis Clarke</td>
                            <td>Schaefer</td>
                            <td>32 March, 2022</td>
                            <td><span class="badge badge-soft-success">New</span></td>
                            <td><span class="badge bg-danger">High</span></td>
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
                        <tr>

                            <td>14</td>
                            <td>VLZ-467</td>
                            <td>VLZ1400090324</td>
                            <td><a href="#!">Make a creating an account profile</a></td>
                            <td>Edwin</td>
                            <td>Admin</td>
                            <td>Edwin</td>
                            <td>05 April, 2022</td>
                            <td><span class="badge badge-soft-warning">Inprogress</span></td>
                            <td><span class="badge bg-success">Low</span></td>
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

<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Cities Details</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Cities</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0 flex-grow-1">All City</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal" style="float:right;"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                <div id="table-gridjs"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
</div>
<!-- Modal Edit-->
<div class="modal fade" id="staticBackdropEditCity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Edit City</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
        </div>
        <div class="modal-body p-5">
            <!-- Input with Placeholder -->
            <form method="post" id="updatecitydata">
                <div>
                    <label for="placeholderInput" class="form-label">Division Name :</label>
                    <input type="hidden" id="old_city_id" name="old_city_id">
                    <select class="form-control" name="edit_division_name_city" id="edit_division_name_city">
                        <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                            <option value='<?= $alldivisionname[$x]->id ?>'><?= $alldivisionname[$x]->division_name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="placeholderInput" class="form-label">City :</label>
                    <input type="text" class="form-control" id="edit_city_name" name="edit_city_name" placeholder="Enter City Name">
                </div>
                <div class="mt-4">
                    <div class="hstack gap-2 justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                        <button type="submit" class="btn btn-success">Update</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Add  -->
<div class="modal fade" id="showModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Add City</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
        </div>
        <div class="modal-body p-5">
            <!-- Input with Placeholder -->
            <form method="post" id="addCity">
                <div class="mb-3">
                    <p class="text-muted">Select Division <span class="text-danger">*</span> :</p>
                    <select class="form-control" name="division_id" id="division_id">
                        <option value="">Select Division</option>
                        <?php foreach ($alldivisionname as $option_all) : ?>
                            <option value="<?= $option_all->id ?>"><?= $option_all->division_name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <label for="placeholderInput" class="form-label">City :</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter City Name">
                </div>

                <div class="mt-4">
                    <div class="hstack gap-2 justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-6">
            <label for="" style="font-size: 20px;"><b>DIVISION : </b></label>
            <select name='city_dashboard_division' id='divisions' class="custom-select" style="max-width: 200px;display: inline-block;">
                <option value="">Select Division</option>
                <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                    <option value='<?= $alldivisionname[$x]->id ?>' <?= ($city == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?>><?= $alldivisionname[$x]->division_name ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-6 text-right">
            <label for="" style="font-size: 20px;"><b>CITIES : </b></label>
            <select name="city" id="citys" class="custom-select" style="max-width: 200px;display: inline-block;">
                <option value="">Select City</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12"><h6 class="text-info">CITIES DETAILS : </h6></div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p>NO OF. CITIES</p>
                    <h4>23</h4>
                    
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                <p>NO OF. DMA/ZONE</p>
                    <h4>23</h4>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p>TOTAL POPULATION</p>
                    <H4>29,98,656</H4>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p>TOTAL NO OF HOUSEHOLD</p>
                    <h4>4,53,080</h4>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p>HOUSE CONNNECTION COMPLETED</p>
                    <h4>4,11,247</h4>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p>METER CONNNECTION COMPLETED</p>
                    <h4>3,69,180</h4>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <p>TOTAL NO OF JALASATHI</p>
                    <h4>8</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="pipe-dashboard" class="btn btn-info btn-sm">Home</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-6 col-sm-12">
            <label for="" style="font-size: 20px;"><b>DIVISION : </b></label>
            <select name='city_dashboard_division' id='city_dashboard_division' class="custom-select" style="max-width: 200px;display: inline-block;">
                <option value="">Select Division</option>
                <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                    <option value='<?= $alldivisionname[$x]->id ?>' <?= ($city == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?>><?= $alldivisionname[$x]->division_name ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-lg-6 col-sm-12 text-right">
            <label for="" style="font-size: 20px;"><b>CITIES : </b></label>
            <select name="city_dashboard_city" id="city_dashboard_city" class="custom-select" style="max-width: 200px;display: inline-block;">
                <option value="">Select City</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12"><h6 class="text-info">CITIES DETAILS : </h6></div>
        <div class="col-lg-4 col-sm-12" id="cd_no_ct_card">
            <div class="card">
                <div class="card-body">
                    <p>NO OF. CITIES</p>
                    <h4 id="cd_no_ct"><?= $getallcitiscdashboard->no_of_city ?></h4>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p>NO OF. DMA/ZONE</p>
                    <h4 id="cd_no_dma"><?= $getallcitiscdashboard->no_of_dma ?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p>TOTAL POPULATION</p>
                    <H4 id="cd_population"><?= $getallcitiscdashboard->total_population ?></H4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p>TOTAL NO OF HOUSEHOLD</p>
                    <h4 id="cd_household"><?= $getallcitiscdashboard->house_holds ?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p>HOUSE CONNNECTION COMPLETED</p>
                    <h4 id="cd_hm_con_complete"><?= $getallcitiscdashboard->total_house_connection ?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p>METER CONNNECTION COMPLETED</p>
                    <h4 id="cd_mt_con_complete"><?= $getallcitiscdashboard->total_meter_connection ?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <p>TOTAL NO OF JALASATHI</p>
                    <h4 id= "cd_jalsathi"><?= $getallcitiscdashboard->no_of_jalasathi ?></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12 mb-4" id="explore_division_city">
            <!-- <a  href="revewnuecolected?id=1" class="btn btn-info btn-small">Explore Division</a> -->
        </div>
    </div>
</div>
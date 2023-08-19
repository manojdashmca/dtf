
<div class="container mb-4">
    <div class="row">
        <div class="col-lg-12">
            <a href="pipe-dashboard" class="btn btn-info btn-sm">Home</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-12 text-center mb-3">
            <h3 class="text-primary">DMA INFORMATION</h3>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <label for="" style="font-size: 20px;"><b>DIVISION : </b></label>
            <select name='city_dashboard_division' id='city_dashboard_division' class="custom-select" style="max-width: 200px;display: inline-block;">
                <option value="">Select Division</option>
                <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                    <option value='<?= $alldivisionname[$x]->id ?>' <?= ($city == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?>><?= $alldivisionname[$x]->division_name ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="col-lg-4 col-sm-12 text-right text-center">
            <label for="" style="font-size: 20px;"><b>CITIES : </b></label>
            <select name="city_dashboard_city" id="city_dashboard_city" class="custom-select" style="max-width: 200px;display: inline-block;">
                <option value="">Select City</option>
            </select>
        </div>
        <div class="col-lg-4 col-sm-12 text-right text-center">
            <label for="" style="font-size: 20px;"><b>DMA/ZONE : </b></label>
            <select name="dma_zone_dash" id="dma_zone_dash" class="custom-select" style="max-width: 200px;display: inline-block;">
                <option value="">Select City</option>
            </select>
        </div>
    </div>
    <div class="row mt-3" id="dma_container_d">
        <div class="col-lg-12"><h6 class="text-info">CITIES DETAILS : </h6></div>
        <div class="col-lg-12">
            <h6>DMA NAME : <span id="dma_d_name"></span></h6>
            <h6>AREA NAME : <span id="dma_d_areaname"></span></h6>
            <h6>DMA POPULATION : <span id="dma_d_population"></span></h6>
        </div>
        <div class="col-lg-6 col-sm-12" id="">
            <div class="card">
                <div class="card-body">
                    <p>HOUSE CONNECTION TARGET :<span class="dma_house_con_target text-success"></span></p>
                    <p>HOUSE CONNECTION COMPLETE :<span class="dma_house_con_complete text-success"></span></p>
                    <p>METER CONNECTION TARGET :<span class="dma_meter_con_target text-success"></span></p>
                    <p>METER CONNECTION COMPLETE :<span class="dma_meter_con_complete text-success"></span></p>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                <p class="text-primary">Status of Commissioning of DFT</p>
                <p class="">Completed (Month & year)</p>
                <p class="dma_completed_month_year text-success"></p>
                <p class="">Target Date of Completion</p>
                <p class="dma_target_date_of_completion text-success"></p>
                </div>
            </div>
        </div>
        
        <div class="col-lg-12 col-sm-12 mb-4 text-center" id="explore_division_city" >
            <a  href="revewnuecolected?id=1" class="btn btn-info btn-small">Explore Division</a>
        </div>
    </div>
</div>
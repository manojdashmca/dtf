<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <a href="pipe-dashboard" class="btn btn-info btn-sm"> Home </a>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <a href="revewnuecolected?id=1" class="btn btn-info btn-sm"> Explore Division </a>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="text-primary">DMA INFORMATION</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <label for="" style="font-size: 20px;"><b>DIVISION : </b></label>
                            <select name='city_dashboard_division' id='city_dashboard_division' class="custom-select" style="max-width: 200px;display: inline-block;">
                                <option value="">Select Division</option>
                                <?php for ($x = 0; $x < count($alldivisionname); $x++) { ?>
                                    <option value='<?= $alldivisionname[$x]->id ?>' <?= ($city == $alldivisionname[$x]->id) ? 'selected="selected"' : '' ?>><?= $alldivisionname[$x]->division_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <label for="" style="font-size: 20px;"><b>CITIES : </b></label>
                            <select name="city_dashboard_city" id="city_dashboard_city" class="custom-select" style="max-width: 200px;display: inline-block;">
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <label for="" style="font-size: 20px;"><b>DMA : </b></label>
                            <select name="dma_zone_dash" id="dma_zone_dash" class="custom-select" style="max-width: 200px;display: inline-block;">
                                <option value="">Select City</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h6 class="text-info">CITIES DETAILS : </h6>
        </div>
    </div>
    <div class="data-section" id="dma_container_d">
        <div class="row">
            <div class="col-12">
                <h6>DMA NAME : <span id="dma_d_name"></span></h6>
                <h6>AREA NAME : <span id="dma_d_areaname"></span></h6>
                <h6>DMA POPULATION : <span id="dma_d_population"></span></h6>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p style="background:#cc4647;padding-left: 15px;color: white;">HOUSE CONNECTION TARGET | <span class="dma_house_con_target text-white"></span></p>
                <p style="background:#cc4647;padding-left: 15px;color: white;">HOUSE CONNECTION COMPLETE | <span class="dma_house_con_complete text-white"></span></p>
                <p style="background:#cc4647;padding-left: 15px;color: white;">HOUSE CONNECTION COMPLETE % | <span class="dma_house_connection_d_persentage_text text-white"></span></p>
            </div>
            <div class="col-lg-6">
                <p style="background:#cc4647;padding-left: 15px;color: white;">METER CONNECTION TARGET | <span class="dma_meter_con_target text-white"></span></p>
                <p style="background:#cc4647;padding-left: 15px;color: white;">METER CONNECTION COMPLETE | <span class="dma_meter_con_complete text-white"></span></p>
                <p style="background:#cc4647;padding-left: 15px;color: white;">METER CONNECTION COMPLETE % | <span class="dma_meter_connection_d_persentage_text text-white"></span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">HOUSE CONNECTION</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 text-center">
                                <div class="heading_bar"><span class="dma_house_con_target text-success">0000</span> | <span class="text-success">100%</span></div>
                                <hr>
                                <div class="outer-container">
                                    <div class="progress-container">
                                        <div class="progress-bar bg-success" style="height: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="heading_bar_buttom">House Connection Target</div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="heading_bar"><span class="dma_house_con_complete text-success">0000</span> | <span class="text-success dma_house_connection_d_persentage_text">0%</span></div>
                                <hr>
                                <div class="outer-container">
                                    <div class="progress-container">
                                        <div class="progress-bar bg-success dma_house_complete_bar">
                                        </div>
                                    </div>
                                </div>
                                <div class="heading_bar_buttom">House Connection Achieved</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">METER CONNECTION</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 text-center">
                                <div class="heading_bar"> <span class="dma_house_con_target text-success">0000</span> | <span class="text-success">100%</span></div>
                                <hr>
                                <div class="outer-container">
                                    <div class="progress-container">
                                        <div class="progress-bar bg-success" style="height: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="heading_bar_buttom">Meter Connection Target</div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="heading_bar"><span class="dma_meter_con_complete text-success">0000</span> | <span class="text-success dma_meter_connection_d_persentage_text">0%</span></div>
                                <hr>
                                <div class="outer-container">
                                    <div class="progress-container">
                                        <div class="progress-bar bg-success dma_meterd_complete_bar">
                                        </div>
                                    </div>
                                </div>
                                <div class="heading_bar_buttom">Meter Connection Achieved</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">NRW</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 text-center">
                                <h1>NRW %</h1>
                            </div>
                            <div class="col-6 text-center">
                                <div class="progress-bar-round">
                                    <progress value="" min="0" max="100" style="visibility:hidden;height:0;width:0;content:75;" class="dma_nrw">00%</progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">STATUS OF COMMISSIONING OF DFT</div>
                    <div class="card-body text-center">
                        <div>Completed (Month & Year) : </div>
                        <div class="dma_completed_month_year">xxxx xx</div>
                        <div>Target Date of Completion : </div>
                        <div class="dma_target_date_of_completion">xx xx</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
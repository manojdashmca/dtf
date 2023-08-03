<div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashboard <?=$usernewname?></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <!-- <div class="col-lg-1"></div> -->
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="card border card-border-secondary bg-primary-subtle">
                                        <div class="card-header bg-primary">
                                            <h3 class="card-title mb-0 text-white" style="font-size: 19px;">DFT Implementation Coverage Till Date
                                            </h3>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row row_match_1">
                                                <div class="col-6">
                                                    <h5 class="text-primary">Division : </h5>
                                                    <h5 class="text-primary">Cities : </h5>
                                                    <h5 class="text-primary">DMA : </h5>
                                                    <h5 class="text-primary">House Hold : </h5>
                                                    <h5 class="text-primary">Population : </h5>
                                                </div>
                                                <div class="col-6 text-left" style="border-left: 1px solid #438eff;">
                                                    <h5 class="text-primary"><span id="no_of_district">00</span></h5>
                                                    <h5 class="text-primary"><span id="total_no_city">00</span></h5>
                                                    <h5 class="text-primary"><span id="total_no_dma_zone">00</span></h5>
                                                    <h5 class="text-primary"><span id="total_no_house_holds">00</span>
                                                    </h5>
                                                    <h5 class="text-primary"><span id="total_no_population">00</span>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-xxl-12">
                                    <div class="card border card-border-warning bg-warning-subtle">
                                        <div class="card-header bg-warning">
                                            <span class="card-title mb-0 text-white" style="font-size: 19px;">House Connection</span>
                                            <span class="card-title mb-0 text-white" style="font-size: 19px;float: right;">Meter Connection</span>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-6 text-center">
                                                    <div class="row">
                                                        <div class="col-6 text-center">

                                                            <p class="dft_benifit">
                                                                <b><span class="text-info" id="total_no_house_holds2">00</span></b>
                                                                <br><span style="color:transparent;" style="font-size: initial;">100%</span>

                                                            </p>
                                                            <div class="outer-container dft_benifit">
                                                                <div class="progress-container bg-danger">
                                                                    <div class="progress-bar bg-danger" style="height: 100%;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-danger dft_benifit_down_contain">Targeted</p>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <p class="text-info dft_benifit">
                                                                <b><span class="text-info" id="house_connection_complete">00</span></b>
                                                                <br>
                                                                (<span class="" id="house_cocp_complete">0%</span>)
                                                            </p>
                                                            <div class="outer-container">
                                                                <div class="progress-container bg-danger">
                                                                    <div class="progress-bar bg-success" id="hccp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-danger dft_benifit_down_contain">Achieved</p>
                                                        </div>
                                                    </div>
                                                    <p class="text-primary">House Connection</p>
                                                </div>
                                                <div class="col-6 text-center" style="border-left: 1px solid #f6b749;">
                                                    <div class="row">
                                                        <div class="col-6 text-center">

                                                            <p class="dft_benifit">
                                                                <b><span class="text-info " id="total_no_house_holds3">00</span></b>
                                                                <br><span style="color:transparent;">100%</span>

                                                            </p>
                                                            <div class="outer-container">
                                                                <div class="progress-container bg-danger">
                                                                    <div class="progress-bar bg-danger" style="height: 100%;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-danger dft_benifit_down_contain">Targeted</p>
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <p class="text-info dft_benifit">
                                                                <b><span class="text-info" id="meter_connection_complete">00</span></b>
                                                                <br>
                                                                (<span class="" id="meter_cocp_complete">0%</span>)
                                                            </p>
                                                            <div class="outer-container">
                                                                <div class="progress-container bg-danger">
                                                                    <div class="progress-bar bg-success" id="mccp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-danger dft_benifit_down_contain">Achieved </p>
                                                        </div>
                                                    </div>
                                                    <p class="text-primary">Meter Connection</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <a href="division_details.php">
                                        <div class="card border card-border-secondary">
                                            <!-- <div class="card-header">
                                        <h6 class="card-title mb-0">Check your E-mails</h6>
                                    </div> -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <h5 class="text-center bg-primary text-white">DIVISION</h6>
                                                        <div class="col-4 text-center">
                                                            <b>
                                                                <p class="text-warning">
                                                                <h5><span id="no_of_district2" class="text-warning">

                                                                        0</span></h5>
                                                                </p>
                                                            </b>
                                                            <div class="outer-container2">
                                                                <div class="progress-container2">
                                                                    <div class="progress-bar2 bg-danger" style="height: 100%;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-danger dcd">Total <br>Division</p>
                                                        </div>
                                                        <div class="col-4 text-center">

                                                            <p>
                                                            <h5><span class="text-warning"><b>0</b></span></h5>

                                                            </p>


                                                            <div class="outer-container2">
                                                                <div class="progress-container2" style="border: 1px solid green;">
                                                                    <div class="progress-bar2 bg-success" style="height: 0%;"></div>
                                                                </div>
                                                            </div>
                                                            <p class="text-danger dcd">Completed</p>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <p>
                                                            <h5><span class="text-warning" id="no_of_district3">0</span></h5>

                                                            <span class="text-success">
                                                            </span>
                                                            </p>
                                                            <div class="outer-container2">
                                                                <div class="progress-container2" style="border: 1px solid red;">
                                                                    <div class="progress-bar2 bg-danger" style="height: 100%;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="text-danger dcd">Inprogress</p>
                                                        </div>
                                                </div>
                                                <div class="text-end">
                                                    <a href="javascript:void(0);" class="link-dark fw-medium text-primary" style="font-size: small;">Click here for division details<i class="ri-arrow-right-line align-middle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <a href="city_details.php">
                                        <div class="card border card-border-secondary">
                                            <!-- <div class="card-header">
                                                <h6 class="card-title mb-0">Check your E-mails</h6>
                                            </div> -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <h5 class="text-center bg-primary text-white">CITIES</h5>
                                                    <div class="col-4 text-center">
                                                        <b>
                                                            <p>
                                                            <h5 class="text-warning" id="total_no_city_cc">0</h5>
                                                            <!-- <br><span style="color:transparent;">100%</span> -->
                                                            </p>
                                                        </b>
                                                        <div class="outer-container2">
                                                            <div class="progress-container2">
                                                                <div class="progress-bar2 bg-danger" style="height: 100%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-danger dcd">Total <br>Cities</p>
                                                    </div>
                                                    <div class="col-4 text-center">

                                                        <p>
                                                        <h5><span class="text-warning" id="total_no_city_complete_cc">0</span></h5>

                                                        </p>


                                                        <div class="outer-container2">
                                                            <div class="progress-container2" style="border: 1px solid green;">
                                                                <div class="progress-bar2 bg-success" style="height: 18%;"></div>
                                                            </div>
                                                        </div>
                                                        <p class="text-danger dcd">Completed</p>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <p>
                                                        <h5><span class="text-warning" id="total_no_city_pending_cc">0</span></h5>

                                                        </p>
                                                        <div class="outer-container2">
                                                            <div class="progress-container2" style="border: 1px solid red;">
                                                                <div class="progress-bar2 bg-danger" style="height: 82%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="text-danger dcd">Inprogress</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <a href="javascript:void(0);" class="link-dark fw-medium text-primary" style="font-size: small;">Click here for Cities details <i class="ri-arrow-right-line align-middle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-lg-5 col-sm-12">
                                            <a href="search-city.php">
                                                <div class="card border card-border-secondary">

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <h5 class="text-center bg-primary text-white p-1">DMA/ZONE</h5>
                                                            <div class="col-4 text-center">
                                                                <b>

                                                                    <p>
                                                                    <h5><span class="text-warning" id="total_no_dma_zone2"><b> 0</b></span></h5>
                                                                    <!-- <br><span style="color:transparent;">100%</span> -->
                                                                    </p>
                                                                </b>
                                                                <div class="outer-container2">
                                                                    <div class="progress-container2" style="height: 180px;">
                                                                        <div class="progress-bar2 bg-danger" style="height: 100%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-danger dcd">Total DMA</p>
                                                            </div>
                                                            <div class="col-4 text-center">

                                                                <p>
                                                                <h5><span class="text-warning" id="total_complete_no_dma_zone">0</span></h5>

                                                                </p>


                                                                <div class="outer-container2">
                                                                    <div class="progress-container2" style="border: 1px solid green;height: 180px;">
                                                                        <div class="progress-bar2 bg-success" id="total_complete_no_dma_zone_persentage"></div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-danger dcd">Completed</p>
                                                            </div>
                                                            <div class="col-4 text-center">
                                                                <p>
                                                                <h5><span class="text-warning" id="total_inprogress_no_dma_zone"><b>0</b></span></h5>

                                                                </p>
                                                                <div class="outer-container2">
                                                                    <div class="progress-container2" style="border: 1px solid red;height: 180px;">
                                                                        <div class="progress-bar2 bg-danger" id="total_inprogress_no_dma_zone_persentage">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="text-danger dcd">Inprogress</p>
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="javascript:void(0);" class="link-dark fw-medium text-primary" style="font-size: small;">Click here for DMA details <i class="ri-arrow-right-line align-middle"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-sm-12">
                                            <div class="card border card-border-success bg-success-subtle">
                                                <div class="card-header bg-success">
                                                    <h5 class="card-title mb-0 text-white" style="font-size: 19px;">Beneficiary Population <small class="text-danger">(approx)</small></h5>
                                                </div>
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-6 text-center">
                                                            <div class="row">
                                                                <div class="col-6 text-center">

                                                                    <p class="dft_benifit">
                                                                        <b><span class="text-info" id="total_no_population2">0</span></b>
                                                                        <br><span style="color:transparent;" style="font-size: initial;">100%</span>

                                                                    </p>
                                                                    <div class="outer-container dft_benifit">
                                                                        <div class="progress-container bg-danger" style="height: 135px;">
                                                                            <div class="progress-bar bg-danger" style="height: 100%;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-danger dft_benifit_down_contain" >Targeted</p>
                                                                </div>
                                                                <div class="col-6 text-center">
                                                                    <p class="text-info dft_benifit">
                                                                        <b><span class="text-info" id="populat_house">0</span></b>
                                                                        <br>
                                                                        (<span class="" id="populat_housePersentage"></span>)
                                                                    </p>
                                                                    <div class="outer-container">
                                                                        <div class="progress-container bg-danger" style="height: 135px;">
                                                                            <div class="progress-bar bg-success" id="hcc2p">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-danger dft_benifit_down_contain" >Beneficiary</p>
                                                                </div>
                                                            </div>
                                                            <p class="text-primary">House Connection</p>
                                                        </div>
                                                        <div class="col-6 text-center" style="border-left: 1px solid #f6b749;">
                                                            <div class="row">
                                                                <div class="col-6 text-center">

                                                                    <p class="dft_benifit">
                                                                        <b><span class="text-info " id="total_no_population3">0</span></b>
                                                                        <br><span style="color:transparent;">100%</span>

                                                                    </p>
                                                                    <div class="outer-container">
                                                                        <div class="progress-container bg-danger" style="height: 135px;">
                                                                            <div class="progress-bar bg-danger" style="height: 100%;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-danger dft_benifit_down_contain" >Targeted</p>
                                                                </div>
                                                                <div class="col-6 text-center">
                                                                    <p class="text-info dft_benifit">
                                                                        <b><span class="text-info" id="populat_meter">0</span></b>
                                                                        <br>
                                                                        (<span class="" id="populat_meterPersentage">0%</span>)
                                                                    </p>
                                                                    <div class="outer-container">
                                                                        <div class="progress-container bg-danger" style="height: 135px;">
                                                                            <div class="progress-bar bg-success" id="mccp2">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p class="text-danger dft_benifit_down_contain" >Beneficiary </p>
                                                                </div>
                                                            </div>
                                                            <p class="text-primary">Meter Connection</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>







                        </div>
                        <!-- <div class="col-lg-1"></div> -->
                    </div>
                    <hr>


                </div>
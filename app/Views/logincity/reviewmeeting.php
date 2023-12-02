<script>
    function printDiv() {
        var divContents = document.getElementById("GFG").innerHTML;
        var a = window.open('', '', 'height=500, width=500');
        a.document.write('<html>');
        a.document.write('<body > <h1>Div contents are <br>');
        a.document.write(divContents);
        a.document.write('</body></html>');
        a.document.close();
        a.print();
    }
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Review Meeting</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Review Meeting</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-lg-4 col-sm-12">
                    <form name='fileter' id='filter' action='' method='get'>
                        <label for="">Select Year</label>
                        <select onchange="this.form.submit();" class="form-control form-select">
                            <option value="" class="text-danger">Select Year</option>
                            <option></option>
                        </select>
                    </form>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <form name='fileter' id='filter' action='' method='get'>
                        <label for="">Select Month</label>
                        <select onchange="this.form.submit();" class="form-control form-select">
                            <option value="" class="text-danger">Select Month</option>
                            <option></option>
                        </select>
                    </form>
                </div>


                <div class="col-lg-4 col-sm-12">
                    <form name='fileter' id='filter' action='' method='get'>
                        <label for="">Select Week</label>
                        <select onchange="this.form.submit();" class="form-control form-select">
                            <option value="" class="text-danger">Select Week</option>
                            <option></option>
                        </select>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <div class="row" id="GFG">

        <div class="col-12 card">
            <div class="table-responsive">
                <h6 class="mt-3 text-center">CITY NAME : ANANDAPUR</h6>
                <table class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0">
                    <thead>
                        <tr>

                            <th data-ordering="false">SR No.</th>
                            <th data-ordering="false">Component</th>
                            <!--                                        <th data-ordering="false">Status</th>
                                        <th data-ordering="false">Scope Qty</th>
                                        <th data-ordering="false">Progress Qty</th>-->
                            <th>Component Completion %</th>
                            <th>Overall Progress %</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-medium">01</td>

                            <td>Detailed survey &amp; Investigation and preparation of Base Data, Design &amp; Drawing</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td>100.00</td>
                            <td>1.50</td>

                        </tr>
                        <tr>
                            <td class="fw-medium">02</td>

                            <td>Intake arrangement/Gabion wall for Intake</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td>7.50</td>
                            <td>0.13</td>

                        </tr>
                        <tr>
                            <td class="fw-medium">03</td>

                            <td>Raw Water Pumping Station Above the Intake Well</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">04</td>

                            <td>Raw Water Rising Main</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">05</td>

                            <td>Water Treatment Plant (WTP)</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">06</td>

                            <td>Clear Water Rising Main</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">07</td>

                            <td>OHSR</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">08</td>

                            <td>Distribution Pipeline (DI-K7) &amp; Fittings &amp; Civil Works</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">09</td>

                            <td>House connection (New &amp; Replacement work) &amp; consumer Metering</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">10</td>

                            <td>SCADA &amp; Automation</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">11</td>

                            <td>Mechanical Work (Piping work inside WTP)</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">12</td>

                            <td>Electrical Work (Electromechanical Work)*</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td class="fw-medium">13</td>

                            <td>IT &amp; Hardware</td>
                            <!--                                        <td></td>
                                        <td></td>
                                        <td></td>-->
                            <td>100.00</td>
                            <td>1.00</td>

                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Overall Progress</th>
                            <th>2.63</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="table-responsive card-body">



                    <table class="table table-bordered border-secondary table-nowrap align-middle mb-0">
                        <thead>
                            <tr class="bg-info text-white">
                                <th scope="col">TECHNICAL INFORMATION</th>
                                <th scope="col">SCOPE</th>
                                <th scope="col">PROGRESS</th>
                                <th scope="col">(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Asset Mapping</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <td>Consumer Mapping</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <td>Distribution Pipe line</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Pumping Main </td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Storage Resorvoir ( _ KL)</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Pumping Station</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Flowmeter </td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Pressure Treansmitter</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Level Treansmitter</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Sluice Valve and Control Valves </td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>PLC </td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>House connection (In Nos)</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Meter Connection (In Nos) </td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Non-Revenue Water (NRW) Last Week </td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <!-- <h6>City Info : </h6> -->
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col">Jalasathi</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">Revenue Collection</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">Grievance</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th scope="row">Water Quality</th>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- <input type="button" value="click"
					onclick="printDiv()"> -->


    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
        <button class="btn btn-info">Comment</button>
        </div>

    </div>
</div>
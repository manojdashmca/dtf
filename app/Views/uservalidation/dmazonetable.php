<script type="text/javascript">
    window.onload = function () {
    getAllDmaInfo();
};


function getAllDmaInfo() {
    $(document).ready(function () {
        $.getJSON('getDmamasterTable', function (data) {
            console.log("data");
            const outputArray = data.map(item => [
                item.id,
                item.dma_name,
                item.dma_population,
                item.commissioning_status,
                item.dma_updated_date,
                item.distribution_pipe_line_scope,
                item.distribution_pipe_line_progress,
                item.pumping_main_scope,
                item.pumping_main_progress,
                item.storage_resorvoir_scope,
                item.storage_resorvoir_progress,
                item.pumping_station_scope,
                item.pumping_station_progress,
                item.flowmeter_scope,
                item.flowmeter_progress,
                item.pressure_treansmitter_scope,
                item.pressure_treansmitter_progress,
                item.level_treansmitter_scope,
                item.level_treansmitter_progress,
                item.sluice_valve_scope,
                item.sluice_valve_progress,
                item.plc_scope,
                item.plc_progress,
                item.house_connection_scope,
                item.house_connection_progress,
                item.meter_connection_scope,
                item.meter_connection_progress,
                item.nrw_scope,
                item.nrw_progress,
                item.updated_by,
                item.updated_date,
            ]);
            document.getElementById("table-gridjs-dma") && new gridjs.Grid({

                columns: [{
                    name: "ID",
                    width: "80px",
                    formatter: function (e) {
                        return gridjs.html('<span class="fw-semibold">' + e + "</span>")
                    }
                }, {
                    name: "dma name",
                    width: "150px"
                }, {
                    name: "dma population",
                    width: "150px"
                }, {
                    name: "commissioning status",
                    width: "200px"
                }, {
                    name: "dma updated date",
                    width: "200px"
                }, {
                    name: "distribution pipe line scope",
                    width: "250px"
                }, {
                    name: "distribution pipe line progress",
                    width: "250px"
                }, {
                    name: "pumping main scope",
                    width: "200px"
                }, {
                    name: "pumping main progress",
                    width: "200px"
                }, {
                    name: "storage resorvoir scope",
                    width: "200px"
                }, {
                    name: "storage resorvoir progress",
                    width: "250px"
                }, {
                    name: "pumping station scope",
                    width: "200px"
                }, {
                    name: "pumping station progress",
                    width: "250px"
                }, {
                    name: "flowmeter scope",
                    width: "200px"
                }, {
                    name: "flowmeter progress",
                    width: "200px"
                }, {
                    name: "pressure treansmitter scope",
                    width: "250px"
                }, {
                    name: "pressure treansmitter progress",
                    width: "250px"
                }, {
                    name: "level treansmitter scope",
                    width: "200px"
                }, {
                    name: "level treansmitter progress",
                    width: "250px"
                }, {
                    name: "sluice valve scope",
                    width: "200px"
                }, {
                    name: "sluice valve progress",
                    width: "200px"
                }, {
                    name: "plc scope",
                    width: "200px"
                }, {
                    name: "plc progress",
                    width: "200px"
                }, {
                    name: "house connection scope",
                    width: "200px"
                }, {
                    name: "house connection progress",
                    width: "200px"
                }, {
                    name: "meter connection scope",
                    width: "200px"
                }, {
                    name: "meter connection progress",
                    width: "200px"
                }, {
                    name: "nrw scope",
                    width: "200px"
                }, {
                    name: "nrw progress",
                    width: "200px"
                }, {
                    name: "updated by",
                    width: "200px"
                }, {
                    name: "updated date",
                    width: "200px"
                }, {
                    name: "Actions",
                    width: "150px",
                    formatter: function (e, row) {
                        return gridjs.html(`
                          <button data-bs-toggle="modal" data-bs-target="#editDmaZoneDetails" class="btn btn-info btn-sm" id="editIdDmaZone" data-id='${row.cells[0].data}' onclick='getEditDmaMasterDetails(${row.cells[0].data})'>Edit</button>
                          <button class="btn btn-danger btn-sm" onclick="deleteRow(${row.cells[0].data})" disabled>Delete</button>
                        `);
                    }
                }],
                pagination: {
                    limit: 5
                },
                sort: !0,
                search: !0,
                data: outputArray,
            }).render(document.getElementById("table-gridjs-dma"));
        });
    });
}

//   Division DropDown
$('#z_division_id').change(function () {
    var dma_division_id = $(this).val();
    $.post("getCitiesinDivision", { division_id: dma_division_id }, function (data) {
        // console.log()
        var division_dma_data = JSON.parse(data);
        $('#z_citys').html('<option value="">Select City</option>');
        $.each(division_dma_data, function (key, value) {
            $('#z_citys').append('<option value="' + value.id + '">' + value.city_name + '</option>');
        });
    });

});

$('#z_division_id_u').change(function () {
    var dma_division_id = $(this).val();
    $.post("getCitiesinDivision", { division_id: dma_division_id }, function (data) {
        // console.log()
        var division_dma_data = JSON.parse(data);
        $('#z_citys_d').html('<option value="">Select City</option>');
        $.each(division_dma_data, function (key, value) {
            $('#z_citys_d').append('<option value="' + value.id + '">' + value.city_name + '</option>');
        });
    });

});

$(document).on("submit", "#adddmazonedatamastermaster", function () {
    $.post("addDmaMaster", $(this).serialize(), function (data) {
        
        if (data.res == "enterDivision") {
            Swal.fire(
                'No Division',
                'Please select a Division',
                'error'
            )
        } else if (data.res == "enterCity") {
            Swal.fire(
                'No City',
                'Please Enter City',
                'error'
            )
        } else if (data.res == "dma_name") {
            Swal.fire(
                'No Zone Name',
                'Please Enter Zone Name',
                'error'
            )
        } else if (data.res == "dma_population") {
            Swal.fire(
                'No Dma Popula',
                'Please Enter Population',
                'error'
            )
        } else if (data.res == "commissioning_status") {
            Swal.fire(
                'Commissioning Status',
                'Please Enter Commissioning Status',
                'error'
            )
        } else if (data.res == "dma_updated_date") {
            Swal.fire(
                'Dma Updated Date',
                'Please Enter Dma Updated Date',
                'error'
            )
        } else if (data.res == "distribution_pipe_line_scope") {
            Swal.fire(
                'Distribution PipeLine Scope',
                'Please Enter Distribution PipeLine Scope',
                'error'
            )
        } else if (data.res == "distribution_pipe_line_progress") {
            Swal.fire(
                'Distribution Pipeline Progress',
                'Please Enter Population',
                'error'
            )
        } else if (data.res == "pumping_main_scope") {
            Swal.fire(
                'Pumping Main Scope',
                'Please Enter Pumping Main Scope',
                'error'
            )
        } else if (data.res == "pumping_main_progress") {
            Swal.fire(
                'Pumping Main Progress',
                'Please Enter Pumping Main Progress',
                'error'
            )
        } else if (data.res == "storage_resorvoir_scope") {
            Swal.fire(
                'Storage Resorvoir Scope',
                'Please Enter Storage Resorvoir Scope',
                'error'
            )
        } else if (data.res == "storage_resorvoir_progress") {
            Swal.fire(
                'Storage Resorvoir Progress',
                'Please Enter Storage Resorvoir Progress',
                'error'
            )
        } else if (data.res == "pumping_station_scope") {
            Swal.fire(
                'Pumping Station Scope',
                'Please Enter Pumping Station Scope',
                'error'
            )
        } else if (data.res == "pumping_station_progress") {
            Swal.fire(
                'Pumping Station Progress',
                'Please Enter Pumping Station Progress',
                'error'
            )
        } else if (data.res == "flowmeter_scope") {
            Swal.fire(
                'Flowmeter Scope',
                'Please Enter Flowmeter Scope',
                'error'
            )
        } else if (data.res == "flowmeter_progress") {
            Swal.fire(
                'Flowmeter Progress',
                'Please Enter Flowmeter Progress',
                'error'
            )
        } else if (data.res == "pressure_treansmitter_scope") {
            Swal.fire(
                'Pressure Treansmitter Scope',
                'Please Enter Pressure Treansmitter Scope',
                'error'
            )
        } else if (data.res == "pressure_treansmitter_progress") {
            Swal.fire(
                'Pressure Treansmitter Progress',
                'Please Enter Pressure Treansmitter Progress',
                'error'
            )
        } else if (data.res == "level_treansmitter_scope") {
            Swal.fire(
                'Level Treansmitter Scope',
                'Please Enter Level Treansmitter Scope',
                'error'
            )
        } else if (data.res == "level_treansmitter_progress") {
            Swal.fire(
                'Level Treansmitter Progress',
                'Please Enter Level Treansmitter Progress',
                'error'
            )
        } else if (data.res == "sluice_valve_scope") {
            Swal.fire(
                'Sluice Valve Scope',
                'Please Enter Sluice Valve Scope',
                'error'
            )
        } else if (data.res == "sluice_valve_progress") {
            Swal.fire(
                'Sluice Valve Progress',
                'Please Enter Sluice Valve Progress',
                'error'
            )
        } else if (data.res == "plc_scope") {
            Swal.fire(
                'PLC Scope',
                'Please Enter PLC Scope',
                'error'
            )
        } else if (data.res == "plc_progress") {
            Swal.fire(
                'PLC Progress',
                'Please Enter PLC Progress',
                'error'
            )
        }  else if (data.res == "house_connection_scope") {
            Swal.fire(
                'House Connection Scope',
                'Please Enter House Connection Scope',
                'error'
            )
        }else if (data.res == "house_connection_progress") {
            Swal.fire(
                'House Connection Progress',
                'Please Enter House Connection Progress',
                'error'
            )
        }else if (data.res == "meter_connection_scope") {
            Swal.fire(
                'Meter Connection Scope',
                'Please Enter Meter Connection Scope',
                'error'
            )
        }else if (data.res == "meter_connection_progress") {
            Swal.fire(
                'Meter Connection Progress',
                'Please Enter Meter Connection Progress',
                'error'
            )
        }else if (data.res == "nrw_scope") {
            Swal.fire(
                'NRW Scope',
                'Please Enter NRW Scope',
                'error'
            )
        }else if (data.res == "nrw_progress") {
            Swal.fire(
                'NRW Progress',
                'Please Enter NRW Progress',
                'error'
            )
        }
        else if (data.res == "exist") {
            Swal.fire(
                'Already Exist',
                data.dma_name + '<br>Already Exist',
                'error'
            )
        }
        else if (data.res == "success") {
            Swal.fire(
                'Success',
                data.dma_name + '<br>Successfully Added',
                'success'
            )
            $('#adddmazonedatamaster')[0].reset();
            refreshDiv();

        }
    }, 'json')
    return false;
});

function getEditDmaMasterDetails(dma_edit_id) {
    var dma_edit_id = dma_edit_id !== null ? dma_edit_id : 0;
    $("#z_citys_d").empty();
    if (dma_edit_id) {
        $.post("getDmaMasterDetailsOnId", { dma_editid: dma_edit_id }, function (getEditData) {
            var getEditDataFull = JSON.parse(getEditData);
            console.log(getEditDataFull);
            let old_dma_id = getEditDataFull.id;

            let edit_dma_division_id = getEditDataFull.division_id !== null ? getEditDataFull.division_id : "";
            let edit_dma_city_id = getEditDataFull.city_id !== null ? getEditDataFull.city_id : "";

            let edit_dma_name =getEditDataFull.dma_name !== null ?getEditDataFull.dma_name : "";
            let edit_dma_population =getEditDataFull.dma_population != null ?getEditDataFull.dma_population : "";
            let edit_commissioning_status =getEditDataFull.commissioning_status != null ?getEditDataFull.commissioning_status : "";
            let edit_dma_updated_date =getEditDataFull.dma_updated_date != null ?getEditDataFull.dma_updated_date : "";
            let edit_distribution_pipe_line_scope =getEditDataFull.distribution_pipe_line_scope != null ?getEditDataFull.distribution_pipe_line_scope : "";
            let edit_distribution_pipe_line_progress =getEditDataFull.distribution_pipe_line_progress != null ?getEditDataFull.distribution_pipe_line_progress : "";
            let edit_pumping_main_scope =getEditDataFull.pumping_main_scope != null ?getEditDataFull.pumping_main_scope : "";
            let edit_pumping_main_progress =getEditDataFull.pumping_main_progress != null ?getEditDataFull.pumping_main_progress : "";
            let edit_storage_resorvoir_scope =getEditDataFull.storage_resorvoir_scope != null ?getEditDataFull.storage_resorvoir_scope : "";
            let edit_storage_resorvoir_progress =getEditDataFull.storage_resorvoir_progress != null ?getEditDataFull.storage_resorvoir_progress : "";
            let edit_pumping_station_scope =getEditDataFull.pumping_station_scope != null ?getEditDataFull.pumping_station_scope : "";
            let edit_pumping_station_progress =getEditDataFull.pumping_station_progress != null ?getEditDataFull.pumping_station_progress : "";
            let edit_flowmeter_scope =getEditDataFull.flowmeter_scope != null ?getEditDataFull.flowmeter_scope : "";
            let edit_flowmeter_progress =getEditDataFull.flowmeter_progress != null ?getEditDataFull.flowmeter_progress : "";
            let edit_pressure_treansmitter_scope =getEditDataFull.pressure_treansmitter_scope != null ?getEditDataFull.pressure_treansmitter_scope : "";
            let edit_pressure_treansmitter_progress =getEditDataFull.pressure_treansmitter_progress != null ?getEditDataFull.pressure_treansmitter_progress : "";
            let edit_level_treansmitter_scope =getEditDataFull.level_treansmitter_scope != null ?getEditDataFull.level_treansmitter_scope : "";
            let edit_level_treansmitter_progress =getEditDataFull.level_treansmitter_progress != null ?getEditDataFull.level_treansmitter_progress : "";
            let edit_sluice_valve_scope =getEditDataFull.sluice_valve_scope != null ?getEditDataFull.sluice_valve_scope : "";
            let edit_sluice_valve_progress =getEditDataFull.sluice_valve_progress != null ?getEditDataFull.sluice_valve_progress : "";
            let edit_plc_scope =getEditDataFull.plc_scope != null ?getEditDataFull.plc_scope : "";
            let edit_plc_progress =getEditDataFull.plc_progress != null ?getEditDataFull.plc_progress : "";
            let edit_house_connection_scope =getEditDataFull.house_connection_scope != null ?getEditDataFull.house_connection_scope : "";
            let edit_house_connection_progress =getEditDataFull.house_connection_progress != null ?getEditDataFull.house_connection_progress : "";
            let edit_meter_connection_scope =getEditDataFull.meter_connection_scope != null ?getEditDataFull.meter_connection_scope : "";
            let edit_meter_connection_progress =getEditDataFull.meter_connection_progress != null ?getEditDataFull.meter_connection_progress : "";
            let edit_nrw_scope =getEditDataFull.nrw_scope != null ?getEditDataFull.nrw_scope : "";
            let edit_nrw_progress =getEditDataFull.nrw_progress != null ?getEditDataFull.nrw_progress : "";

            
            // let edit_dma_modification_date = getEditDataFull.modification_date !== null ? getEditDataFull.modification_date : "";
            old_dma_id
            $('#old_dma_id').val(old_dma_id);
            $('#edit_dma_name').val(edit_dma_name);
            $('#edit_dma_population').val(edit_dma_population);
            $('#edit_commissioning_status').val(edit_commissioning_status);
            $('#edit_dma_updated_date').val(edit_dma_updated_date);
            $('#edit_distribution_pipe_line_scope').val(edit_distribution_pipe_line_scope);
            $('#edit_distribution_pipe_line_progress').val(edit_distribution_pipe_line_progress);
            $('#edit_pumping_main_scope').val(edit_pumping_main_scope);
            $('#edit_pumping_main_progress').val(edit_pumping_main_progress);
            $('#edit_storage_resorvoir_scope').val(edit_storage_resorvoir_scope);
            $('#edit_storage_resorvoir_progress').val(edit_storage_resorvoir_progress);
            $('#edit_pumping_station_scope').val(edit_pumping_station_scope);
            $('#edit_pumping_station_progress').val(edit_pumping_station_progress);
            $('#edit_flowmeter_scope').val(edit_flowmeter_scope);
            $('#edit_flowmeter_progress').val(edit_flowmeter_progress);
            $('#edit_pressure_treansmitter_scope').val(edit_pressure_treansmitter_scope);
            $('#edit_pressure_treansmitter_progress').val(edit_pressure_treansmitter_progress);
            $('#edit_level_treansmitter_scope').val(edit_level_treansmitter_scope);
            $('#edit_level_treansmitter_progress').val(edit_level_treansmitter_progress);
            $('#edit_sluice_valve_scope').val(edit_sluice_valve_scope);
            $('#edit_sluice_valve_progress').val(edit_sluice_valve_progress);
            $('#edit_plc_scope').val(edit_plc_scope);
            $('#edit_plc_progress').val(edit_plc_progress);
            $('#edit_house_connection_scope').val(edit_house_connection_scope);
            $('#edit_house_connection_progress').val(edit_house_connection_progress);
            $('#edit_meter_connection_scope').val(edit_meter_connection_scope);
            $('#edit_meter_connection_progress').val(edit_meter_connection_progress);
            $('#edit_nrw_scope').val(edit_nrw_scope);
            $('#edit_nrw_progress').val(edit_nrw_progress);

            
            $('#z_division_id_u option').each(function () {
                if ($(this).val() == edit_dma_division_id) {
                    $(this).prop('selected', true);
                }
            });
            $.post("getCitiesinDivision", { division_id: edit_dma_division_id }, function (getdatadmad) {
                var division_dma_data_dd = JSON.parse(getdatadmad);
                $.each(division_dma_data_dd, function (key, value) {
                    $('#z_citys_d').append('<option value="' + value.id + '" ' + (edit_dma_city_id == value.id ? 'selected="selected"' : '') + ' >' + value.city_name + '</option>');
                });
            });

            $('#edit_commissioning_status option').each(function () {
                if ($(this).val() == edit_commissioning_status) {
                    $(this).prop('selected', true);
                }
            });

        });
    }
}


// Update Dma 
$(document).on("submit", "#updatedmamasterzonedata", function () {
    $.post("updatenewdmamasterinfo", $(this).serialize(), function (data) {
        
        if (data.res == "enterDivision") {
            Swal.fire(
                'No Division',
                'Please select a Division',
                'error'
            )
        } else if (data.res == "enterCity") {
            Swal.fire(
                'No City',
                'Please Enter City',
                'error'
            )
        } else if (data.res == "dma_name") {
            Swal.fire(
                'No Zone Name',
                'Please Enter Zone Name',
                'error'
            )
        } else if (data.res == "dma_population") {
            Swal.fire(
                'No Dma Popula',
                'Please Enter Population',
                'error'
            )
        } else if (data.res == "commissioning_status") {
            Swal.fire(
                'Commissioning Status',
                'Please Enter Commissioning Status',
                'error'
            )
        } else if (data.res == "dma_updated_date") {
            Swal.fire(
                'Dma Updated Date',
                'Please Enter Dma Updated Date',
                'error'
            )
        } else if (data.res == "distribution_pipe_line_scope") {
            Swal.fire(
                'Distribution PipeLine Scope',
                'Please Enter Distribution PipeLine Scope',
                'error'
            )
        } else if (data.res == "distribution_pipe_line_progress") {
            Swal.fire(
                'Distribution Pipeline Progress',
                'Please Enter Population',
                'error'
            )
        } else if (data.res == "pumping_main_scope") {
            Swal.fire(
                'Pumping Main Scope',
                'Please Enter Pumping Main Scope',
                'error'
            )
        } else if (data.res == "pumping_main_progress") {
            Swal.fire(
                'Pumping Main Progress',
                'Please Enter Pumping Main Progress',
                'error'
            )
        } else if (data.res == "storage_resorvoir_scope") {
            Swal.fire(
                'Storage Resorvoir Scope',
                'Please Enter Storage Resorvoir Scope',
                'error'
            )
        } else if (data.res == "storage_resorvoir_progress") {
            Swal.fire(
                'Storage Resorvoir Progress',
                'Please Enter Storage Resorvoir Progress',
                'error'
            )
        } else if (data.res == "pumping_station_scope") {
            Swal.fire(
                'Pumping Station Scope',
                'Please Enter Pumping Station Scope',
                'error'
            )
        } else if (data.res == "pumping_station_progress") {
            Swal.fire(
                'Pumping Station Progress',
                'Please Enter Pumping Station Progress',
                'error'
            )
        } else if (data.res == "flowmeter_scope") {
            Swal.fire(
                'Flowmeter Scope',
                'Please Enter Flowmeter Scope',
                'error'
            )
        } else if (data.res == "flowmeter_progress") {
            Swal.fire(
                'Flowmeter Progress',
                'Please Enter Flowmeter Progress',
                'error'
            )
        } else if (data.res == "pressure_treansmitter_scope") {
            Swal.fire(
                'Pressure Treansmitter Scope',
                'Please Enter Pressure Treansmitter Scope',
                'error'
            )
        } else if (data.res == "pressure_treansmitter_progress") {
            Swal.fire(
                'Pressure Treansmitter Progress',
                'Please Enter Pressure Treansmitter Progress',
                'error'
            )
        } else if (data.res == "level_treansmitter_scope") {
            Swal.fire(
                'Level Treansmitter Scope',
                'Please Enter Level Treansmitter Scope',
                'error'
            )
        } else if (data.res == "level_treansmitter_progress") {
            Swal.fire(
                'Level Treansmitter Progress',
                'Please Enter Level Treansmitter Progress',
                'error'
            )
        } else if (data.res == "sluice_valve_scope") {
            Swal.fire(
                'Sluice Valve Scope',
                'Please Enter Sluice Valve Scope',
                'error'
            )
        } else if (data.res == "sluice_valve_progress") {
            Swal.fire(
                'Sluice Valve Progress',
                'Please Enter Sluice Valve Progress',
                'error'
            )
        } else if (data.res == "plc_scope") {
            Swal.fire(
                'PLC Scope',
                'Please Enter PLC Scope',
                'error'
            )
        } else if (data.res == "plc_progress") {
            Swal.fire(
                'PLC Progress',
                'Please Enter PLC Progress',
                'error'
            )
        }  else if (data.res == "house_connection_scope") {
            Swal.fire(
                'House Connection Scope',
                'Please Enter House Connection Scope',
                'error'
            )
        }else if (data.res == "house_connection_progress") {
            Swal.fire(
                'House Connection Progress',
                'Please Enter House Connection Progress',
                'error'
            )
        }else if (data.res == "meter_connection_scope") {
            Swal.fire(
                'Meter Connection Scope',
                'Please Enter Meter Connection Scope',
                'error'
            )
        }else if (data.res == "meter_connection_progress") {
            Swal.fire(
                'Meter Connection Progress',
                'Please Enter Meter Connection Progress',
                'error'
            )
        }else if (data.res == "nrw_scope") {
            Swal.fire(
                'NRW Scope',
                'Please Enter NRW Scope',
                'error'
            )
        }else if (data.res == "nrw_progress") {
            Swal.fire(
                'NRW Progress',
                'Please Enter NRW Progress',
                'error'
            )
        }
        else if (data.res == "exist") {
            Swal.fire(
                'Already Exist',
                data.dma_name + '<br>Already Exist',
                'error'
            )
        }
        else if (data.res == "success") {
            Swal.fire(
                'Success',
                data.dma_name + '<br>Successfully Added',
                'success'
            )
            $('#adddmazonedatamaster')[0].reset();
            refreshDiv();

        }
    }, 'json')
    return false;
});
//   Delete Dma

function deleteDmainfo() {
    $(document).on("click", "#deleteDistrict", function (e) {
        e.preventDefault();
        var id = $(this).data("id");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: "PipelineController/deleteDivision",
                    dataType: "json",
                    data: { id: id },
                    cache: false,
                    success: function (data) {
                        if (data.res == "success") {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            refreshDiv();
                        }
                    },
                    error: function (xhr, ErrorStatus, error) {
                        console.log(status.error);
                    }

                });
                console.log("Failed");


            }
        });
    })
}

function refreshDiv() {
    window.location.reload()
}



</script>
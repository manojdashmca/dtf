window.onload = function () {
    getAllDmaInfo();
};


function getAllDmaInfo() {
    $(document).ready(function () {
        $.getJSON('PipelineController/getDmaInfo', function (data) {
            console.log(data)
            const outputArray = data.map(item => [
                item.id,
                item.dma_no,
                item.area_name,
                item.population,
                item.no_house_holds,
                item.no_house_coction,
                item.no_house_connection_replaced,
                item.no_metered_house_connections,
                item.dft_complete_m_y,
                item.dft_target_date_completion,
                item.nrw
            ]);
            document.getElementById("table-gridjs-dma") && new gridjs.Grid({

                columns: [{
                    name: "ID",
                    width: "80px",
                    formatter: function (e) {
                        return gridjs.html('<span class="fw-semibold">' + e + "</span>")
                    }
                }, {
                    name: "DMA/Zone Name",
                    width: "150px"
                }, {
                    name: "Area",
                    width: "150px"
                }, {
                    name: "Population",
                    width: "150px"
                }, {
                    name: "No. of House Holds",
                    width: "150px"
                }, {
                    name: "No. of House Connections",
                    width: "150px"
                }, {
                    name: "No. of House Connections replaced",
                    width: "150px"
                }, {
                    name: "No. of Metered House Connections",
                    width: "150px"
                }, {
                    name: "DFT Completed Month & Year",
                    width: "150px"
                }, {
                    name: "Target Date of Completion",
                    width: "150px"
                }, {
                    name: "NRW",
                    width: "150px"
                }, {
                    name: "Actions",
                    width: "150px",
                    formatter: function (e, row) {
                        return gridjs.html(`
                          <button data-bs-toggle="modal" data-bs-target="#" class="btn btn-info btn-sm" id="editId" data-id='${row.cells[0].data}' disable>Edit</button>
                          <button class="btn btn-danger btn-sm" onclick="deleteRow(${row.cells[0].data})">Delete</button>
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
        var division_dma_data = JSON.parse(data);
        $('#z_citys').html('<option value="">Select City</option>');
        $.each(division_dma_data, function (key, value) {
            $('#z_citys').append('<option value="' + value.id + '">' + value.city_name + '</option>');
        });
    });

});




$(document).on("submit", "#adddmazonedata", function () {
    $.post("addnewdmainfo", $(this).serialize(), function (data) {
        //    console.log(data);



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
        } else if (data.res == "enterZone") {
            Swal.fire(
                'No Zone Name',
                'Please Enter Zone Name',
                'error'
            )
        } else if (data.res == "enterArea") {
            Swal.fire(
                'No Zone Area',
                'Please Enter Zone Area Name',
                'error'
            )
        } else if (data.res == "enterPopulation") {
            Swal.fire(
                'No Dma Popula',
                'Please Enter Population',
                'error'
            )
        } else if (data.res == "enterHouseHold") {
            Swal.fire(
                'No Dma House Hold',
                'Please Enter No. Of House Hold',
                'error'
            )
        } else if (data.res == "enterHouseConnectionReplaced") {
            Swal.fire(
                'No House Connection Replaced',
                'Please Enter No. Of House Connection Replaced',
                'error'
            )
        } else if (data.res == "enterHouseConnection") {
            Swal.fire(
                'No House Connection',
                'Please Enter No. Of House Connection',
                'error'
            )
        } else if (data.res == "enterMeterConnection") {
            Swal.fire(
                'No Meter Connection',
                'Please Enter No. Of Meter Connection',
                'error'
            )
        } else if (data.res == "enterDftCompleteMonthYear") {
            Swal.fire(
                'No DFT CompleteMonthYear',
                'Please Enter CompleteMonthYear',
                'error'
            )
        } else if (data.res == "enterDftTargetDate") {
            Swal.fire(
                'No DFT Target Date',
                'Please DFT Target Date',
                'error'
            )
        } else if (data.res == "enterNrw") {
            Swal.fire(
                'No NRW',
                'Please Enter NRW',
                'error'
            )
        }
        else if (data.res == "exist") {
            Swal.fire(
                'Already Exist',
                data.dma_no + '<br>Already Exist',
                'error'
            )
        }
        else if (data.res == "success") {
            Swal.fire(
                'Success',
                data.dma_no + '<br>Successfully Added',
                'success'
            )
            $('#adddmazonedata')[0].reset();
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



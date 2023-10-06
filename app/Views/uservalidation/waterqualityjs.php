<script type="text/javascript">
    window.onload = function () {
    addWaterQualityFunction();
};


function addWaterQualityFunction() {
    $(document).ready(function () {
        $.getJSON('getWaterQualityTable', function (data) {
            console.log("data");
            const outputArray = data.map(item => [
                item.id,
                item.no_of_sample_taken,
                item.sample_collected_at_wtp,
                item.sample_collected_at_storage,
                item.resolved_after_time_limit,
                item.sample_collected_from_distribution_network,
                item.sample_collected_at_consumer_point,
                item.no_of_parameter_tested,
                item.no_of_sample_failed,
                item.sample_colected_date,
            ]);
            document.getElementById("table-gridjs-waterq") && new gridjs.Grid({

                columns: [{
                    name: "ID",
                    width: "80px",
                    formatter: function (e) {
                        return gridjs.html('<span class="fw-semibold">' + e + "</span>")
                    }
                }, {
                    name: "NOS OF SAMPLE TAKEN",
                    width: "250px"
                }, {
                    name: "SAMPLE COLLECTED AT WTP",
                    width: "250px"
                }, {
                    name: "SAMPLE COLLECTED AT STORAGE",
                    width: "300px"
                }, {
                    name: "RESOLVED AFTER TIME LIMIT",
                    width: "300px"
                }, {
                    name: "SAMPLE COLLECTED FROM DISTRIBUTION NETWORK",
                    width: "250px"
                },{
                    name: "SAMPLE COLLECTED AT CONSUMER POINT",
                    width: "300px"
                }, {
                    name: "NOS. OF PARAMETERS TESTED",
                    width: "300px"
                },{
                    name: "NOS OF SAMPLE FAILED",
                    width: "300px"
                },{
                    name: "SAMPLE COLLECTED DATE",
                    width: "300px"
                }, {
                    name: "Actions",
                    width: "150px",
                    formatter: function (e, row) {
                        return gridjs.html(`
                          <button data-bs-toggle="modal" data-bs-target="#editDmaZoneDetails" class="btn btn-info btn-sm" id="editIdDmaZone" data-id='${row.cells[0].data}' onclick='getEditDmaMasterDetails(${row.cells[0].data})' disabled>Edit</button>
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
            }).render(document.getElementById("table-gridjs-waterq"));
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
            $('#z_citys').append('<option value="' + value.city_id + '">' + value.city_name + '</option>');
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
            $('#z_citys_d').append('<option value="' + value.city_id + '">' + value.city_name + '</option>');
        });
    });

});

$(document).on("submit", "#addwaterqualityform", function () {
    $.post("addWaterQualitys", $(this).serialize(), function (data) {
        
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
        } else if (data.res == "no_of_sample_taken") {
            Swal.fire(
                'No Sample Taken',
                'Please Enter No Of Sample Taken',
                'error'
            )
        } else if (data.res == "exist") {
            Swal.fire(
                'Already Exist',
                'Already Exist This Record',
                'error'
            )
        }
        else if (data.res == "success") {
            Swal.fire(
                'Success',
                'Successfully Added',
                'success'
            )
            $('#addgriveancecustomer')[0].reset();
            refreshDiv();

        }
    }, 'json')
    return false;
});


function refreshDiv() {
    window.location.reload()
}



</script>
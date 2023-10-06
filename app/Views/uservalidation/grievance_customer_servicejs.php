<script type="text/javascript">
    window.onload = function () {
    getGrievanceCustomerServicef();
};


function getGrievanceCustomerServicef() {
    $(document).ready(function () {
        $.getJSON('getGrievanceCustomerServiceTable', function (data) {
            console.log("data");
            const outputArray = data.map(item => [
                item.id,
                item.total_no_grievance_received,
                item.no_of_grievenced_address,
                item.resolved_with_in_time_limit,
                item.resolved_after_time_limit,
                item.grievance_via_247_cus_service,
                item.grievance_via_jalsathi,
                item.grievance_by_direct_visit_physical,
                item.grievance_collected_date,
            ]);
            document.getElementById("table-gridjs-gcs") && new gridjs.Grid({

                columns: [{
                    name: "ID",
                    width: "80px",
                    formatter: function (e) {
                        return gridjs.html('<span class="fw-semibold">' + e + "</span>")
                    }
                }, {
                    name: "TOTAL NOS. OF GRIEVANCE RECEIVED",
                    width: "250px"
                }, {
                    name: "NOS OF GRIEVENCED ADDRESSED",
                    width: "250px"
                }, {
                    name: "RESOLVED WITH IN TIME LIMIT",
                    width: "300px"
                }, {
                    name: "RESOLVED AFTER TIME LIMIT",
                    width: "300px"
                }, {
                    name: "GRIEVANCE VIA 24 X 7 CUSTOMER SERVICE",
                    width: "250px"
                },{
                    name: "GRIEVANCE VIA JALSATHI",
                    width: "300px"
                }, {
                    name: "GRIEVANCE BY DIRECT VISIT/ PHYSICAL",
                    width: "300px"
                },{
                    name: "COLLECTED DATE",
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
            }).render(document.getElementById("table-gridjs-gcs"));
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

$(document).on("submit", "#addgriveancecustomer", function () {
    $.post("addGrievanceCustomerServices", $(this).serialize(), function (data) {
        
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
        } else if (data.res == "total_no_grievance_received") {
            Swal.fire(
                'No Grievance Received',
                'Please Enter Total Number of Grievance Received',
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
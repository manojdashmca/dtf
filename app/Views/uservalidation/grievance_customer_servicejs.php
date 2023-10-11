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
                item.grievance_name,
                item.grivance_customer_name,
                item.grivance_status,
                item.register_date,
                item.grivance_status,
                item.resolved_with_in_time_limit,
                item.resolved_after_time_limit,
                item.created_date,
            ]);
            document.getElementById("table-gridjs-gcs") && new gridjs.Grid({

                columns: [{
                    name: "ID",
                    width: "80px",
                    formatter: function (e) {
                        return gridjs.html('<span class="fw-semibold">' + e + "</span>")
                    }
                }, {
                    name: "Grievance Name",
                    width: "250px"
                }, {
                    name: "Customer Name",
                    width: "250px"
                }, {
                    name: "Grivance Via",
                    width: "300px"
                }, {
                    name: "Register Date",
                    width: "300px"
                }, {
                    name: "Grievance Status",
                    width: "250px"
                },{
                    name: "Resolved With In Time Limit",
                    width: "300px"
                }, {
                    name: "Resolved After Time Limit",
                    width: "300px"
                },{
                    name: "Created Date",
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
        } else if (data.res == "grievance_name") {
            Swal.fire(
                'No Grievance Name',
                'Please Enter a Grievance Name',
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
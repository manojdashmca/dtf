<script type="text/javascript">
    window.onload = function () {
    getRevenueCollection();
};


function getRevenueCollection() {
    $(document).ready(function () {
        $.getJSON('getRevenueCollection', function (data) {
            console.log("data");
            const outputArray = data.map(item => [
                item.id,
                item.no_bill_generate,
                item.no_bill_distributed,
                item.incentive_paid_to_jalasathi,
                item.total_revenue_collected,
                item.revenue_collected_by_jalasathi,
                item.revenue_collected_date,
            ]);
            document.getElementById("table-gridjs-revenue") && new gridjs.Grid({

                columns: [{
                    name: "ID",
                    width: "80px",
                    formatter: function (e) {
                        return gridjs.html('<span class="fw-semibold">' + e + "</span>")
                    }
                }, {
                    name: "NOS. BILL GENERATED",
                    width: "150px"
                }, {
                    name: "NOS. BILL DISTRIBUTED",
                    width: "150px"
                }, {
                    name: "INCENTIVE PAID TO JALSATHI",
                    width: "200px"
                }, {
                    name: "TOTAL REVENUE COLLECTED",
                    width: "200px"
                }, {
                    name: "REVENUE COLLECTED BY JALSATHI",
                    width: "250px"
                },{
                    name: "UPDATED DATE",
                    width: "200px"
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
            }).render(document.getElementById("table-gridjs-revenue"));
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

$(document).on("submit", "#addrevenuecollectiondatamaster", function () {
    $.post("addRevenueCollectionMaster", $(this).serialize(), function (data) {
        
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
        } else if (data.res == "no_bill_generate") {
            Swal.fire(
                'No Bill Generate',
                'Please Enter No Of Bill Generate',
                'error'
            )
        } else if (data.res == "exist") {
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
            $('#addrevenuecollectiondatamaster')[0].reset();
            refreshDiv();

        }
    }, 'json')
    return false;
});


function refreshDiv() {
    window.location.reload()
}



</script>
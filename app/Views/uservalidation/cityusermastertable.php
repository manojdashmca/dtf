<script type="text/javascript">
    window.onload = function() {
        getAllDmaInfo();
    };


    function getAllDmaInfo() {
        $(document).ready(function() {
            $.getJSON('getCityUserData', function(data) {
                console.log(data);
                const outputArray = data.map(item => [
                    item.id,
                    item.user_name,
                    item.city_name,
                    item.division_name,
                    item.user_email,
                    item.user_contact
                ]);
                document.getElementById("table-gridjs-cityuser") && new gridjs.Grid({

                    columns: [{
                        name: "ID",
                        width: "80px",
                        formatter: function(e) {
                            return gridjs.html('<span class="fw-semibold">' + e + "</span>")
                        }
                    }, {
                        name: "User Name",
                        width: "150px"
                    }, {
                        name: "City Name",
                        width: "150px"
                    }, {
                        name: "Division Name",
                        width: "150px"
                    }, {
                        name: "User Email",
                        width: "150px"
                    }, {
                        name: "User Contact",
                        width: "150px"
                    }, {
                        name: "Actions",
                        width: "150px",
                        formatter: function(e, row) {
                            return gridjs.html(`
                          <button data-bs-toggle="modal" data-bs-target="#editDmaZoneDetails" class="btn btn-info btn-sm" id="editIdDmaZone" data-id='${row.cells[0].data}' onclick='getEditDmadetails(${row.cells[0].data})' disabled>Edit</button>
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
                }).render(document.getElementById("table-gridjs-cityuser"));
            });
        });
    }

    //   Division DropDown
    $('#citymaster_division').change(function() {
        var dma_division_id = $(this).val();
        $.post("getCitiesinDivision", {
            division_id: dma_division_id
        }, function(data) {
            // console.log()
            var division_dma_data = JSON.parse(data);
            $('#cityuser_city').html('<option value="">Select City</option>');
            $.each(division_dma_data, function(key, value) {
                $('#cityuser_city').append('<option value="' + value.id + '">' + value.city_name + '</option>');
            });
        });

    });

    // $('#cityuser_city').change(function() {
    //     var dma_division_id = $(this).val();
    //     $.post("getCitiesinDivision", {
    //         division_id: dma_division_id
    //     }, function(data) {
    //         var division_dma_data = JSON.parse(data);
    //         $('#z_citys_d').html('<option value="">Select City</option>');
    //         $.each(division_dma_data, function(key, value) {
    //             $('#z_citys_d').append('<option value="' + value.id + '">' + value.city_name + '</option>');
    //         });
    //     });

    // });

    $(document).on("submit", "#addCityUserForm", function() {
        $.post("addnewcityUser", $(this).serialize(), function(data) {

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
            } else if (data.res == "userName") {
                Swal.fire(
                    'No User Name',
                    'Please Enter User Name',
                    'error'
                )
            } else if (data.res == "userId") {
                Swal.fire(
                    'No User Id',
                    'Please Enter User Id',
                    'error'
                )
            } else if (data.res == "userContact") {
                Swal.fire(
                    'No User Contact',
                    'Please Enter User Contact',
                    'error'
                )
            } else if (data.res == "exist") {
                Swal.fire(
                    'Already Exist',
                    data.dma_no + '<br>Already Exist',
                    'error'
                )
            } else if (data.res == "success") {
                Swal.fire(
                    'Success',
                    data.dma_no + '<br>Successfully Added',
                    'success'
                )
                $('#addCityUserForm')[0].reset();
                refreshDiv();

            }
        }, 'json')
        return false;
    });

    // function getEditDmadetails(dma_edit_id) {
    //     var dma_edit_id = dma_edit_id !== null ? dma_edit_id : 0;
    //     $("#z_citys_d").empty();
    //     if (dma_edit_id) {
    //         $.post("getDmaDetailsOnId", {
    //             dma_editid: dma_edit_id
    //         }, function(getEditData) {
    //             var getEditDataFull = JSON.parse(getEditData);
    //             let old_dma_id = getEditDataFull.id;
    //             let edit_dma_division_id = getEditDataFull.division_id !== null ? getEditDataFull.division_id : "";
    //             let edit_dma_city_id = getEditDataFull.city_id !== null ? getEditDataFull.city_id : "";
    //             let edit_dma_no = getEditDataFull.dma_no !== null ? getEditDataFull.dma_no : "";
    //             let edit_dma_area_name = getEditDataFull.area_name !== null ? getEditDataFull.area_name : "";
    //             let edit_dma_population = getEditDataFull.population !== null ? getEditDataFull.population : "";
    //             let edit_dma_no_house_holds = getEditDataFull.no_house_holds !== null ? getEditDataFull.no_house_holds : "";
    //             let edit_dma_no_house_coction = getEditDataFull.no_house_coction !== null ? getEditDataFull.no_house_coction : "";
    //             let edit_dma_no_house_connection_replaced = getEditDataFull.no_house_connection_replaced !== null ? getEditDataFull.no_house_connection_replaced : "";
    //             let edit_dma_no_metered_house_connections = getEditDataFull.no_metered_house_connections !== null ? getEditDataFull.no_metered_house_connections : "";
    //             let edit_dma_dft_complete_m_y = getEditDataFull.dft_complete_m_y !== null ? getEditDataFull.dft_complete_m_y : "";
    //             let edit_dma_dft_target_date_completion = getEditDataFull.dft_target_date_completion !== null ? getEditDataFull.dft_target_date_completion : "";
    //             let edit_dma_nrw = getEditDataFull.nrw !== null ? getEditDataFull.nrw : 0;
    //             $('#old_dma_id').val(old_dma_id);
    //             $('#dma_edit_dma_name').val(edit_dma_no);
    //             $('#dma_edit_area_name').val(edit_dma_area_name);
    //             $('#dma_edit_population').val(edit_dma_population);
    //             $('#dma_edit_no_of_house_holds').val(edit_dma_no_house_holds);
    //             $('#dma_edit_house_connection').val(edit_dma_no_house_coction);
    //             $('#dma_edit_house_connection_replaced').val(edit_dma_no_house_connection_replaced);
    //             $('#dma_edit_meter_connection').val(edit_dma_no_metered_house_connections);
    //             $('#dma_edit_dft_complete_month_year').val(edit_dma_dft_complete_m_y);
    //             $('#dma_edit_dft_target_date').val(edit_dma_dft_target_date_completion);
    //             $('#dma_edit_nrw').val(edit_dma_nrw);
    //             $('#cityuser_city option').each(function() {
    //                 if ($(this).val() == edit_dma_division_id) {
    //                     $(this).prop('selected', true);
    //                 }
    //             });
    //             $.post("getCitiesinDivision", {
    //                 division_id: edit_dma_division_id
    //             }, function(getdatadmad) {
    //                 var division_dma_data_dd = JSON.parse(getdatadmad);
    //                 $.each(division_dma_data_dd, function(key, value) {
    //                     $('#z_citys_d').append('<option value="' + value.id + '" ' + (edit_dma_city_id == value.id ? 'selected="selected"' : '') + ' >' + value.city_name + '</option>');
    //                 });
    //             });

    //         });
    //     }
    // }


    // Update Dma 
    // $(document).on("submit", "#updatedmazonedata", function() {
    //     $.post("updatenewdmainfo", $(this).serialize(), function(data) {

    //         if (data.res == "enterDivision") {
    //             Swal.fire(
    //                 'No Division',
    //                 'Please select a Division',
    //                 'error'
    //             )
    //         } else if (data.res == "enterCity") {
    //             Swal.fire(
    //                 'No City',
    //                 'Please Enter City',
    //                 'error'
    //             )
    //         } else if (data.res == "enterZone") {
    //             Swal.fire(
    //                 'No Zone Name',
    //                 'Please Enter Zone Name',
    //                 'error'
    //             )
    //         } else if (data.res == "enterArea") {
    //             Swal.fire(
    //                 'No Zone Area',
    //                 'Please Enter Zone Area Name',
    //                 'error'
    //             )
    //         } else if (data.res == "enterPopulation") {
    //             Swal.fire(
    //                 'No Dma Popula',
    //                 'Please Enter Population',
    //                 'error'
    //             )
    //         } else if (data.res == "enterHouseHold") {
    //             Swal.fire(
    //                 'No Dma House Hold',
    //                 'Please Enter No. Of House Hold',
    //                 'error'
    //             )
    //         } else if (data.res == "enterHouseConnectionReplaced") {
    //             Swal.fire(
    //                 'No House Connection Replaced',
    //                 'Please Enter No. Of House Connection Replaced',
    //                 'error'
    //             )
    //         } else if (data.res == "enterHouseConnection") {
    //             Swal.fire(
    //                 'No House Connection',
    //                 'Please Enter No. Of House Connection',
    //                 'error'
    //             )
    //         } else if (data.res == "enterMeterConnection") {
    //             Swal.fire(
    //                 'No Meter Connection',
    //                 'Please Enter No. Of Meter Connection',
    //                 'error'
    //             )
    //         } else if (data.res == "enterDftCompleteMonthYear") {
    //             Swal.fire(
    //                 'No DFT CompleteMonthYear',
    //                 'Please Enter CompleteMonthYear',
    //                 'error'
    //             )
    //         } else if (data.res == "enterDftTargetDate") {
    //             Swal.fire(
    //                 'No DFT Target Date',
    //                 'Please DFT Target Date',
    //                 'error'
    //             )
    //         } else if (data.res == "enterNrw") {
    //             Swal.fire(
    //                 'No NRW',
    //                 'Please Enter NRW',
    //                 'error'
    //             )
    //         } else if (data.res == "success") {
    //             Swal.fire(
    //                 'Success',
    //                 data.dma_no + '<br>Successfully Added',
    //                 'success'
    //             )
    //             $('#adddmazonedata')[0].reset();
    //             refreshDiv();

    //         }
    //     }, 'json')
    //     return false;
    // });
    //   Delete Dma

    // function deleteDmainfo() {
    //     $(document).on("click", "#deleteDistrict", function(e) {
    //         e.preventDefault();
    //         var id = $(this).data("id");
    //         Swal.fire({
    //             title: 'Are you sure?',
    //             text: "You won't be able to revert this!",
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonColor: '#3085d6',
    //             cancelButtonColor: '#d33',
    //             confirmButtonText: 'Yes, delete it!'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 $.ajax({
    //                     type: "post",
    //                     url: "PipelineController/deleteDivision",
    //                     dataType: "json",
    //                     data: {
    //                         id: id
    //                     },
    //                     cache: false,
    //                     success: function(data) {
    //                         if (data.res == "success") {
    //                             Swal.fire(
    //                                 'Deleted!',
    //                                 'Your file has been deleted.',
    //                                 'success'
    //                             )
    //                             refreshDiv();
    //                         }
    //                     },
    //                     error: function(xhr, ErrorStatus, error) {
    //                         console.log(status.error);
    //                     }

    //                 });
    //                 console.log("Failed");


    //             }
    //         });
    //     })
    // }

    function refreshDiv() {
        window.location.reload()
    }
</script>
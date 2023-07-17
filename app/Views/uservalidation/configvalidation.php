<script type="text/javascript">
    $(document).ready(function () {
        $('#createcity').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                cityname: {
                    validators: {
                        notEmpty: {
                            message: "Enter City Name"
                        }
                    }
                },
                contractcost: {
                    validators: {
                        notEmpty: {
                            message: "Enter Contract Cost"
                        }, between: {
                            min: 0,
                            max: 1000000000,
                            message: "Max Contract cost is 100000000"
                        }
                    }
                }
            }
        }).on('success.form.fv', function (e) {
            // Prevent form submission
            e.preventDefault();
            createCity();
        });



    });

    function createCity() {       
        var cityname = $("#cityname").val();
        var contractcost = $("#contractcost").val();        
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>create-city',
            data: {cityname: cityname, contractcost: contractcost},
            success: function (data) {                
                var jsonData = JSON.parse(data);                
                if (jsonData.status == 'success') {
                   location.reload();
                } else {
                   Swal.fire({ title: jsonData.message, confirmButtonClass: "btn btn-primary w-xs mt-2", buttonsStyling: !1, showCloseButton: !0 });
                }
               
            }
        });
    }
    
    

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#createtask').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                taskcity: {
                    validators: {
                        notEmpty: {
                            message: "Select The City"
                        }
                    }
                },
                citycomponent: {
                    validators: {
                        notEmpty: {
                            message: "Select The City Component"
                        }
                    }
                },
                citycomponenttask: {
                    validators: {
                        notEmpty: {
                            message: "Select The Task"
                        }
                    }
                },
                taskbreakup: {
                    validators: {
                        notEmpty: {
                            message: "Enter breakup percent"
                        }, between: {
                            min: 0,
                            max: 100,
                            message: "Max breakup 100%"
                        }
                    }
                }
            }
        }).on('success.form.fv', function (e) {
            // Prevent form submission
            e.preventDefault();
            createTask();
        });



    });

    function createTask() {
       $("#preloader1").show();
        var taskcity = $("#taskcity").val();
        var citycomponent = $("#citycomponent").val();
        var citycomponenttask = $("#citycomponenttask").val();
        var taskbreakup = $("#taskbreakup").val();
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>create-task-breakup',
            data: {taskcity: taskcity, citycomponent: citycomponent, citycomponenttask: citycomponenttask, taskbreakup: taskbreakup},
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
    
    function getCityComponent() {
        var cityid = $("#taskcity").val();
       $("#citycomponent").html('<option value="">Select Component</option>');
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>get-city-component',
            data: {cityid: cityid},
            success: function (data) {
                var jsonData = JSON.parse(data);
                var component = jsonData.data;
                var listItems = "<option value=''>Select Component</option>";
                for (var i = 0; i < component.length; i++) {
                    listItems += "<option value='" + component[i].cm_id_cm + "'>" + component[i].component + "</option>";
                }
                $("#citycomponent").html(listItems);

            }
        });
    }

</script>
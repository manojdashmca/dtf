<script type="text/javascript">
    $(document).ready(function () {
        $('#createsubtask').formValidation({
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
                }, citycomponentsubtask: {
                    validators: {
                        notEmpty: {
                            message: "Select The Sub Task"
                        }
                    }
                }, subtaskunit: {
                    validators: {
                        notEmpty: {
                            message: "Select The Sub Task Unit"
                        }
                    }
                }, subtaskqty: {
                    validators: {
                        notEmpty: {
                            message: "Enter Subtask Qty"
                        }, between: {
                            min: 0,
                            max: 100,
                            message: "Max breakup 100%"
                        }
                    }
                }, allowpartial: {
                    validators: {
                        notEmpty: {
                            message: "Is Partial Allowed"
                        }
                    }
                },
                subtaskbreakup: {
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
            createSubTask();
        });
        $('#createnewsubtask').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                subtaskname: {
                    validators: {
                        notEmpty: {
                            message: "Enter The Subtask Name"
                        }
                    }
                }
            }
        }).on('success.form.fv', function (e) {
            // Prevent form submission
            e.preventDefault();
            createMissingSubtask();
        });


    });
    function createMissingSubtask() {
        $("#preloader1").show();
        var subtaskname = $("#subtaskname").val();
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>create-new-subtask',
            data: {subtaskname: subtaskname},
            success: function (data) {
                var jsonData = JSON.parse(data);
                if (jsonData.status == 'success') {
                    alertify.success(jsonData.message);
                    setTimeout(function () {
                        location.reload();
                    }, 3000);

                } else {
                    alertify.error(jsonData.message);
                }

            }
        });
    }
    function createSubTask() {
        var taskcity = $("#taskcity").val();
        var citycomponent = $("#citycomponent").val();
        var citycomponenttask = $("#citycomponenttask").val();
        var citycomponentsubtask = $("#citycomponentsubtask").val();
        var subtaskbreakup = $("#subtaskbreakup").val();
        var subtaskunit = $("#subtaskunit").val();
        var subtaskqty = $("#subtaskqty").val();
        var allowpartial = $("#allowpartial").val();

        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>create-sub-task-breakup',
            data: {allowpartial: allowpartial, subtaskqty: subtaskqty, subtaskunit: subtaskunit, taskcity: taskcity, citycomponent: citycomponent, citycomponenttask: citycomponenttask, citycomponentsubtask: citycomponentsubtask, subtaskbreakup: subtaskbreakup},
            success: function (data) {
                var jsonData = JSON.parse(data);
                if (jsonData.status == 'success') {
                    alertify.success(jsonData.message);
//                    setTimeout(function () {
//                        location.reload();
//                    }, 3000);

                } else {
                    alertify.error(jsonData.message);
                }

            }
        });
    }

    function getCityComponentTask() {
        var cityid = $("#taskcity").val();
        var componentid = $("#citycomponent").val();
        $("#citycomponenttask").html('<option value="">Select Component Task</option>');
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>get-city-component-task',
            data: {cityid: cityid, componentid: componentid},
            success: function (data) {
                var jsonData = JSON.parse(data);
                var tasks = jsonData.data;
                var listItems = "<option value=''>Select Component Task</option>";
                for (var i = 0; i < tasks.length; i++) {
                    listItems += "<option value='" + tasks[i].tm_id_tm + "'>" + tasks[i].task_name + "</option>";
                }
                $("#citycomponenttask").html(listItems);

            }
        });
    }
    
    function getCityComponent() {
        var cityid = $("#taskcity").val();
       $("#citycomponent").html('<option value="">Select Component</option>');
       $("#citycomponenttask").html('<option value="">Select Component Task</option>');
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
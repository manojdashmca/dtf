<script type="text/javascript">
    $(document).ready(function () {
        $('#createcomponent').formValidation({
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
                componentbreakup: {
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
            createComponent();
        });
        $('#createnewcomponent').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                componentname: {
                    validators: {
                        notEmpty: {
                            message: "Enter The Component Name"
                        }
                    }
                }
            }
        }).on('success.form.fv', function (e) {
            // Prevent form submission
            e.preventDefault();
            createMissingComponent();
        });


    });
    function createMissingComponent() {
        $("#preloader1").show();
        var componentname = $("#componentname").val();
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>create-new-component',
            data: {componentname: componentname},
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

    function createComponent() {
        $("#preloader1").show();
        var taskcity = $("#taskcity").val();
        var citycomponent = $("#citycomponent").val();
        var componentbreakup = $("#componentbreakup").val();
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>create-component-breakup',
            data: {taskcity: taskcity, citycomponent: citycomponent, componentbreakup: componentbreakup},
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

</script>
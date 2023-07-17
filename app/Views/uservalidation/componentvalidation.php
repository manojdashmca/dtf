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



    });

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
                    location.reload();
                } else {
                    Swal.fire({title: jsonData.message, confirmButtonClass: "btn btn-primary w-xs mt-2", buttonsStyling: !1, showCloseButton: !0});
                }

            }
        });
    }

</script>
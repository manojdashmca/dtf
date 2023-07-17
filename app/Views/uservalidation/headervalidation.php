<script type="text/javascript">
    $(document).ready(function () {
        $('#createreportheader').formValidation({
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
                header: {
                    validators: {
                        notEmpty: {
                            message: "Select Header"
                        }
                    }
                },
                headervalue: {
                    validators: {
                        notEmpty: {
                            message: "Enter header value"
                        }
                    }
                }
            }
        }).on('success.form.fv', function (e) {
            // Prevent form submission
            e.preventDefault();
            createHeader();
        });



    });

    function createHeader() {
        $("#preloader1").show();
        var taskcity = $("#taskcity").val();
        var header = $("#header").val();
        var headervalue = $("#headervalue").val();
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>create-header-mapping',
            data: {taskcity: taskcity, header: header, headervalue: headervalue},
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
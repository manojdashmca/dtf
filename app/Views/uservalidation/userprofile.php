<script type="text/javascript">
    $(document).ready(function () {
        bindDatatable();


        $('#changepassword').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                oldpassword: {
                    validators: {
                        notEmpty: {
                            message: "Current Password Can not be blank"
                        }
                    }
                },
                newpassword: {
                    validators: {
                        notEmpty: {
                            message: "New Password Can not be blank"
                        }, regexp: {
                            regexp: "^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$",
                            message: 'Minimum 8 and Maximum 10 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet, 1 Number and 1 Special Character '
                        }
                    }
                },
                confirmpassword: {
                    validators: {
                        identical: {
                            field: 'newpassword',
                            message: 'The New password and its confirm are not the same'
                        }
                    }
                }
            }
        });
        $('#userprofile').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: "Name Can not be blank"
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: "Email can not be blank"
                        }
                    }
                },
                mobile: {
                    validators: {
                        notEmpty: {
                            message: "Mobile can not be blank"
                        }
                    }
                },
                city: {
                    validators: {
                        notEmpty: {
                            message: "City can not be blank"
                        }
                    }
                },
                state: {
                    validators: {
                        notEmpty: {
                            message: "State can not be blank"
                        }
                    }
                },
                country: {
                    validators: {
                        notEmpty: {
                            message: "Country can not be blank"
                        }
                    }
                }
            }
        });
    });

    function bindDatatable(page = 0) {
        if (page != 0) {
            var page = parseInt(page) * 10;
        }

        $('#example').DataTable().destroy();
        $('#example').DataTable({
            responsive: true,
            searching: false,
            processing: false,
            ordering: true,
            bLengthChange: false,
            serverSide: false,
            displayStart: page,
            pageLength: 10,
            order: [[2, 'desc']]
        });
    }


</script>
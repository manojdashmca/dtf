<script type="text/javascript">
    $(document).ready(function () {
        $('#forgotpasswordform').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                useremail: {
                    validators: {
                        notEmpty: {
                            message: "Username is required"
                        }, regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Enter a valid email address'
                        }
                    }
                }, 
                validcaptcha: {
                    excluded: false,
                    validators: {
                        notEmpty: {
                            message: "Please verify the captcha"
                        }
                    }
                }
            }

        });
        $('#loginform').formValidation({
            message: 'This value is not valid',
            icon: {
            },
            fields: {
                userEmail: {
                    validators: {
                        notEmpty: {
                            message: "Username is required"
                        }, regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Enter a valid email address'
                        }
                    }
                },
                userPassword: {
                    validators: {
                        notEmpty: {
                            message: "Password is required"
                        }
                    }
                },
                validcaptcha: {
                    excluded: false,
                    validators: {
                        notEmpty: {
                            message: "Please verify the captcha"
                        }
                    }
                }
            }
        });

        $('#registrationform').formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            excluded: ':disabled',
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: "Name is required"
                        }
                    }
                }, email: {
                    verbose: false,
                    validators: {
                        notEmpty: {
                            message: "Email Id is required"
                        },
                        regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'Enter a valid email address'
                        }, remote: {
                            url: '<?= CUSTOMPATH ?>check-email',
                            data: function (validator) {
                                return {
                                    email: validator.getFieldElements('email').val(),
                                    userid: ''
                                };
                            },
                            message: 'Email already exists',
                            type: 'POST'
                        }
                    }
                },
                mobile: {
                    verbose: false,
                    validators: {
                        notEmpty: {
                            message: "Mobile is required"
                        }, regexp: {
                            regexp: '[5-9]{1}[0-9]{9}$',
                            message: 'Invalid mobile no'
                        }, stringLength: {
                            max: 10
                        }, remote: {
                            url: '<?= CUSTOMPATH ?>check-mobile',
                            data: function (validator) {
                                return {
                                    mobile: validator.getFieldElements('mobile').val(),
                                    userid: ''
                                };
                            },
                            message: 'Mobile already exists',
                            type: 'POST'
                        }
                    }
                },
                validcaptcha: {
                    excluded: false,
                    validators: {
                        notEmpty: {
                            message: "Please verify the captcha"
                        }
                    }
                }

            }
        });

    });
</script>

// Form-Wizard.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - ThemeOn.net -


$(document).on('nifty.ready', function() {



    // FORM WIZARD
    // =================================================================
    // Require Bootstrap Wizard
    // http://vadimg.com/twitter-bootstrap-wizard-example/
    // =================================================================


    // MAIN FORM WIZARD
    // =================================================================
    $('#demo-main-wz').bootstrapWizard({
        tabClass		: 'wz-steps',
        nextSelector	: '.next',
        previousSelector	: '.previous',
        onTabClick: function(tab, navigation, index) {
            return false;
        },
        onInit : function(){
            $('#demo-main-wz').find('.finish').hide().prop('disabled', true);
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            var wdt = 100/$total;
            var lft = wdt*index;

            $('#demo-main-wz').find('.progress-bar').css({width:wdt+'%',left:lft+"%", 'position':'relative', 'transition':'all .5s'});


            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#demo-main-wz').find('.next').hide();
                $('#demo-main-wz').find('.finish').show();
                $('#demo-main-wz').find('.finish').prop('disabled', false);
            } else {
                $('#demo-main-wz').find('.next').show();
                $('#demo-main-wz').find('.finish').hide().prop('disabled', true);
            }
        }
    });




    // CLASSIC STYLE
    // =================================================================
    $('#demo-cls-wz').bootstrapWizard({
        tabClass		: 'wz-classic',
        nextSelector	: '.next',
        previousSelector	: '.previous',
        onTabClick: function(tab, navigation, index) {
            return false;
        },
        onInit : function(){
            $('#demo-cls-wz').find('.finish').hide().prop('disabled', true);
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            var wdt = 100/$total;
            var lft = wdt*index;
            $('#demo-cls-wz').find('.progress-bar').css({width:$percent+'%'});

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#demo-cls-wz').find('.next').hide();
                $('#demo-cls-wz').find('.finish').show();
                $('#demo-cls-wz').find('.finish').prop('disabled', false);
            } else {
                $('#demo-cls-wz').find('.next').show();
                $('#demo-cls-wz').find('.finish').hide().prop('disabled', true);
            }
        }
    });




    // BUBBLE NUMBERS
    // =================================================================
    $('#demo-step-wz').bootstrapWizard({
        tabClass		: 'wz-steps',
        nextSelector	: '.next',
        previousSelector	: '.previous',
        onTabClick: function(tab, navigation, index) {
            return false;
        },
        onInit : function(){
            $('#demo-step-wz').find('.finish').hide().prop('disabled', true);
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = (index/$total) * 100;
            var wdt = 100/$total;
            var lft = wdt*index;
            var margin = (100/$total)/2;
            $('#demo-step-wz').find('.progress-bar').css({width:$percent+'%', 'margin': 0 + 'px ' + margin + '%'});


            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#demo-step-wz').find('.next').hide();
                $('#demo-step-wz').find('.finish').show();
                $('#demo-step-wz').find('.finish').prop('disabled', false);
            } else {
                $('#demo-step-wz').find('.next').show();
                $('#demo-step-wz').find('.finish').hide().prop('disabled', true);
            }
        }
    });



    // FORM WIZARD WITH TOOLTIP
    // =================================================================
    $('#demo-cir-wz').bootstrapWizard({
        tabClass		    : 'wz-steps',
        nextSelector	    : '.next',
        previousSelector    : '.previous',
        onTabClick: function(tab, navigation, index) {
            return false;
        },
        onInit : function(){
            $('#demo-cir-wz').find('.finish').hide().prop('disabled', true);
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = (index/$total) * 100;
            var margin = (100/$total)/2;
            $('#demo-cir-wz').find('.progress-bar').css({width:$percent+'%', 'margin': 0 + 'px ' + margin + '%'});

            navigation.find('li:eq('+index+') a').trigger('focus');


            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#demo-cir-wz').find('.next').hide();
                $('#demo-cir-wz').find('.finish').show();
                $('#demo-cir-wz').find('.finish').prop('disabled', false);
            } else {
                $('#demo-cir-wz').find('.next').show();
                $('#demo-cir-wz').find('.finish').hide().prop('disabled', true);
            }
        }
    })




    // FORM WIZARD WITH VALIDATION
    // =================================================================
    $('#demo-bv-wz').bootstrapWizard({
        tabClass		    : 'wz-steps',
        nextSelector	    : '.next',
        previousSelector	: '.previous',
        onTabClick          : function(tab, navigation, index) {
            return false;
        },
        onInit : function(){
            $('#demo-bv-wz').find('.finish').hide().prop('disabled', true);
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            var wdt = 100/$total;
            var lft = wdt*index;

            $('#demo-bv-wz').find('.progress-bar').css({width:wdt+'%',left:lft+"%", 'position':'relative', 'transition':'all .5s'});

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#demo-bv-wz').find('.next').hide();
                $('#demo-bv-wz').find('.finish').show();
                $('#demo-bv-wz').find('.finish').prop('disabled', false);
            } else {
                $('#demo-bv-wz').find('.next').show();
                $('#demo-bv-wz').find('.finish').hide().prop('disabled', true);
            }
        },
        onNext: function(){
            isValid = null;
            $('#demo-bv-wz-form').bootstrapValidator('validate');


            if(isValid === false)return false;
        }
    });




    // FORM VALIDATION
    // =================================================================
    // Require Bootstrap Validator
    // http://bootstrapvalidator.com/
    // =================================================================

    var isValid;
    $('#demo-bv-wz-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
        },
        fields: {
        username: {
            message: 'The username is not valid',
            validators: {
                notEmpty: {
                    message: 'The username is required.'
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'The email address is required and can\'t be empty'
                },
                emailAddress: {
                    message: 'The input is not a valid email address'
                }
            }
        },
        firstName: {
            validators: {
                notEmpty: {
                    message: 'The first name is required and cannot be empty'
                },
                regexp: {
                    regexp: /^[A-Z\s]+$/i,
                    message: 'The first name can only consist of alphabetical characters and spaces'
                }
            }
        },
        lastName: {
            validators: {
                notEmpty: {
                    message: 'The last name is required and cannot be empty'
                },
                regexp: {
                    regexp: /^[A-Z\s]+$/i,
                    message: 'The last name can only consist of alphabetical characters and spaces'
                }
            }
        },
        phoneNumber: {
            validators: {
                notEmpty: {
                    message: 'The phone number is required and cannot be empty'
                },
                digits: {
                    message: 'The value can contain only digits'
                }
            }
        },
        amount: {
             validators: {
                 notEmpty: {
                     message: 'The amount is required and cannot be empty'
                 },
                 digits: {
                     message: 'The value can contain only digits'
                 }
             }
         },
           term: {
                validators: {
                    notEmpty: {
                        message: 'The financial aid terms is required and cannot be empty'
                    }
                }
            },
            purpose: {
                validators: {
                    notEmpty: {
                        message: 'The financial aid purpose is required'
                    }
                }
            },business_name: {
                validators: {
                    notEmpty: {
                        message: 'Your business name is required'
                    }
                }
            },
        address: {
            validators: {
                notEmpty: {
                    message: 'The address is required'
                }
            }
        },
            cert_of_reg_num: {
                validators: {
                    notEmpty: {
                        message: 'Business certificate of registration number is required'
                    }
                }
            },
            date_of_reg: {
                validators: {
                    notEmpty: {
                        message: 'Business date of registration is required'
                    }
                }
            },
            business_tin: {
                validators: {
                    notEmpty: {
                        message: 'Business tax identification number is required'
                    }
                }
            },
            nature_of_business: {
                validators: {
                    notEmpty: {
                        message: 'Nature of business is required'
                    }
                }
            },
            business_address: {
                validators: {
                    notEmpty: {
                        message: 'Business address is required'
                    }
                }
            },
            business_phone: {
                validators: {
                    notEmpty: {
                        message: 'Business phone number is required'
                    }
                }
            },
            business_email: {
                validators: {
                    notEmpty: {
                        message: 'Business email is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            number_of_staff: {
                validators: {
                    notEmpty: {
                        message: 'Number of staff is required'
                    },digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            number_of_owners: {
                validators: {
                    notEmpty: {
                        message: 'Number of owners is required'
                    },digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            num_of_office_equip_with_value_above_100k: {
                validators: {
                    notEmpty: {
                        message: 'Number of office equipment with value above 100,000 is required is required'
                    },digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            total_amount_of_office_equip_with_value_above_100k: {
                validators: {
                    notEmpty: {
                        message: 'Total amount of office equipment with value above 100,000 is required is required'
                    },digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            last_financial_year_turn_over: {
                validators: {
                    notEmpty: {
                        message: 'Last financial year turn over is required'
                    },digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            last_financial_year_profit: {
                validators: {
                    notEmpty: {
                        message: 'Last financial year profit is required'
                    },digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            account_number: {
                validators: {
                    notEmpty: {
                        message: 'Enter disbursement account number'
                    }
                }
            },
            bvn: {
                validators: {
                    notEmpty: {
                        message: 'Enter bank verification number for account'
                    }
                },digits: {
                    message: 'The value can contain only digits'
                }
            },
            reference_first_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter your reference first name'
                    }
                }
            },
            reference_middle_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter your reference middle name'
                    }
                }
            },
            reference_last_name: {
                validators: {
                    notEmpty: {
                        message: 'Enter your reference last name'
                    }
                }
            },
            reference_phone_number: {
                validators: {
                    notEmpty: {
                        message: 'Enter your reference phone number'
                    }
                }
            },
            reference_email: {
                validators: {
                    notEmpty: {
                        message: 'Enter your reference email address'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            reference_profession: {
                validators: {
                    notEmpty: {
                        message: 'Enter your reference email address'
                    }
                }
            },
            reference_address: {
                validators: {
                    notEmpty: {
                        message: 'Enter your reference work address'
                    }
                }
            },
            reference_residence_address: {
                validators: {
                    notEmpty: {
                        message: 'Enter your reference residence address'
                    }
                }
            },
            collateral: {
                validators: {
                    notEmpty: {
                        message: 'You must choose a collateral'
                    }
                }
            },
            collateral_description: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your collateral description'
                    }
                }
            },

        }
    }).on('success.field.bv', function(e, data) {
        // $(e.target)  --> The field element
        // data.bv      --> The BootstrapValidator instance
        // data.field   --> The field name
        // data.element --> The field element

        var $parent = data.element.parents('.form-group');

        // Remove the has-success class
        $parent.removeClass('has-success');


        // Hide the success icon
        //$parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]').hide();
    }).on('error.form.bv', function(e) {
        isValid = false;
    });



});

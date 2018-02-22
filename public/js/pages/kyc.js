$(function(){
    let title = [];


    $('#add_business').on('click',function(){

        $('#remove_business').removeClass('hidden');

        var count_kyc_form = $('#count_kyc_form').val();
        var new_count = +count_kyc_form + 1;

        if(new_count > 3){
            $('#add_business').addClass('hidden');
            toastr.error('You can not have more than 3 details for one one financial aid');
            return false;
        }

        $('#count_kyc_form').val(new_count);

        var kyc_form = '    <div class="panel" id="kyc_form_'+ new_count +'">\n' +
            '        <div class="panel-heading">\n' +
            '            <h3 class="panel-title">Business Owner / Partner Detail </h3>\n' +
            '        </div>\n' +
            '        <div class="panel-body">\n' +
            '            <!-- Inline Form  -->\n' +
            '            <!--===================================================-->\n' +
            '\n' +
            '            <div class="row">\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group">\n' +
            '                        <label class="control-label text-semibold">Title</label>\n' +
            '                        <select class="special_select form-control" name="title[]" required>\n' +
            '                            <optgroup label="Select Title">\n' + titles +
            '                            </optgroup>\n' +
            '                        </select>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold">First Name</label>\n' +
            '                        <input type="text" placeholder="First name" class="form-control" name="first_name[]" required>\n' +
            '                        <i class="demo-pli-add-user form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold">Middle Name</label>\n' +
            '                        <input type="text" placeholder="Middle name" class="form-control" name="middle_name[]" required>\n' +
            '                        <i class="demo-pli-add-user form-control-feedback"></i>\n' +
            '\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold">Last Name</label>\n' +
            '                        <input type="text" placeholder="Last name" class="form-control" name="last_name[]" required>\n' +
            '                        <i class="demo-pli-add-user form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '\n' +
            '            </div>\n' +
            '\n' +
            '            <div class="row">\n' +
            '                <div class="col-md-6">\n' +
            '                    <div class="form-group">\n' +
            '                        <label> Address</label>\n' +
            '                        <textarea placeholder="Address" rows="4" class="form-control" required name="address[]"></textarea>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-6">\n' +
            '                    <div class="form-group">\n' +
            '                        <label> Residential Address</label>\n' +
            '                        <textarea placeholder="Residential Address" rows="4" class="form-control" required name="residential_address[]"></textarea>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '\n' +
            '            <div class="row">\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold">Detail Designation</label>\n' +
            '                        <select class="special_select form-control" name="designation" required>\n' +
            '                            <optgroup label="Designation">\n' + designations +
            '                            </optgroup>\n' +
            '                        </select>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold"> Email</label>\n' +
            '                        <input type="email" placeholder="E-mail" class="form-control" name="email" required>\n' +
            '                        <i class="demo-pli-mail form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold"> Phone Number</label>\n' +
            '                        <input type="text" placeholder="11 digits number" class="form-control" name="phone" required>\n' +
            '                        <i class="demo-pli-old-telephone form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold"> Date of Birth</label>\n' +
            '                        <input type="text" placeholder="Date of birth" class="form-control datepicker" name="date_of_birth" required>\n' +
            '                        <i class="demo-pli-calendar-4 form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '\n' +
            '            <div class="row">\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold">ID Type</label>\n' +
            '                        <input type="text" placeholder="Identity Card Type" class="form-control" name="id_type[]" required>\n' +
            '                        <i class="demo-pli-checked-user form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold">ID Number</label>\n' +
            '                        <input type="text" placeholder="Identity Card Number" class="form-control" name="id_number[]" required>\n' +
            '                        <i class="demo-pli-lock-user form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold">ID Issue Date</label>\n' +
            '                        <input type="text" placeholder="Identity Card Issue Date" class="form-control datepicker" name="id_issue_date[]" required>\n' +
            '                        <i class="demo-pli-calendar-4 form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-3">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold">ID Expiry Date</label>\n' +
            '                        <input type="text" placeholder="Identity Card Expiry Date" class="form-control datepicker" name="id_expiry_date[]" required>\n' +
            '                        <i class="demo-pli-calendar-4 form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '\n' +
            '            <div class="row">\n' +
            '                <div class="col-md-4">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold"> Passport Photograph</label>\n' +
            '                        <input type="file" name="passport_photograph[]" class="form-control" required />\n' +
            '                        <i class="demo-pli-file-pictures form-control-feedback"></i>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-md-8">\n' +
            '                    <div class="form-group has-feedback">\n' +
            '                        <label class="control-label text-semibold"> TIN (Tax Identification Number)   *** <small>Mandatory for Directors and Owners</small></label>\n' +
            '                        <input type="text" name="tin[]" class="form-control" placeholder="Tax Identification Number" />\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '\n' +
            '\n' +
            '            <!--===================================================-->\n' +
            '            <!-- End Inline Form  -->\n' +
            '\n' +
            '        </div>\n' +
            '    </div>\n';



        $('.kyc_forms').append(kyc_form);

        $(".special_select").select2({
            placeholder: "Select an option",
            allowClear: true
        });

        $('.datepicker').datepicker({
            showClose : true,
            showClear : true
        });

    });

    $('#remove_business').on('click',function(){

        var count_kyc_form = $('#count_kyc_form').val();
        var new_count = +count_kyc_form - 1;
        $('#add_business').removeClass('hidden');
        if(new_count < 1){
            $('#remove_business').addClass('hidden');
            toastr.error('You can not have less than 1 details for a financial aid');
            return false;
        }

        $('#kyc_form_'+count_kyc_form).remove();

        $('#count_kyc_form').val(new_count);
    });

});
function toastWarning(message){
    return iziToast.warning({
        timeout: 10000,
        close: true,
        id: 'question',
        title: 'Hey',
        message: message,
        position: 'topRight',
        buttons: [
            ['<button><b>OK</b></button>', function (instance, toast) {

                instance.hide(toast, { transitionOut: 'fadeOut' }, 'button');

            }, true]
        ],
        onClosing: function(instance, toast, closedBy){
            // console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function(instance, toast, closedBy){
            // console.info('Closed | closedBy: ' + closedBy);
        }
    });
}

function toastSuccess(message){
    return iziToast.success({
        id: 'success',
        timeout: 7000,
        close: true,
        title: 'Success',
        message: message,
        position: 'bottomRight',
        transitionIn: 'bounceInLeft',
        // iconText: 'star',
        onOpened: function(instance, toast){

        },
        onClosed: function(instance, toast, closedBy){
            console.info('closedBy: ' + closedBy);

        }
    });

}

function toastError(message){
    return iziToast.error({
        id: 'error',
        timeout: 7000,
        close: true,
        title: 'Error',
        message: message,
        position: 'topRight',
        transitionIn: 'fadeInDown'
    });
}

function toastInfo(message) {
    return iziToast.info({
        id: 'info',
        timeout: 60000,
        close: true,
        title: 'Hello',
        message: message,
        position: 'topLeft',
        transitionIn: 'bounceInRight'
    });
}

function modalError(message){
    $("#modalError").iziModal({
        title: "Attention",
        close: true,
        subtitle: message,
        icon: 'icon-power_settings_new',
        headerColor: '#BD5B5B',
        width: 600,
        timeout: 10000,
        timeoutProgressbar: true,
        transitionIn: 'fadeInDown',
        transitionOut: 'fadeOutDown',
        pauseOnHover: true
    });
    event.preventDefault();
    return $('#modalError').iziModal('open');
}

function modalSuccess(message){
    $("#modalSuccess").iziModal({
        title: "Success",
        close: true,
        subtitle: message,
        icon: 'icon-power_settings_new',
        headerColor: '#1bbd65',
        width: 600,
        timeout: 10000,
        timeoutProgressbar: true,
        transitionIn: 'fadeInDown',
        transitionOut: 'fadeOutDown',
        pauseOnHover: true
    });
    event.preventDefault();
    return $('#modalSuccess').iziModal('open');
}

function modalInfo(message){
    $("#modalInfo").iziModal({
        title: "Info",
        close: true,
        subtitle: message,
        icon: 'icon-power_settings_new',
        headerColor: '#1bbd65',
        width: 600,
        timeout: 20000,
        timeoutProgressbar: true,
        transitionIn: 'fadeInDown',
        transitionOut: 'fadeOutDown',
        pauseOnHover: true
    });
    event.preventDefault();
    return $('#modalInfo').iziModal('open');
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function validateFormWithIds(ids) {
    if (Array.isArray(ids))
    {
        for(var i=0; i<ids.length; i++)
        {
            var result = 0;
            if($("#"+ids[i]).val() == "" || $("#"+ids[i]).val() == null)
            {
                $("#"+ids[i]).css("border-color", "red");
                result++;
            }else{
                $("#"+ids[i]).css("border-color", "green");
            }
        }
        if (result > 0){
            toastr["error"]("Please fill all highlighted field(s)");
            return false;
        }
    }else if(typeof ids === 'string')
    {
        if($("#"+ids).val() == "" || $("#"+ids).val() == null)
        {
            $("#"+ids).css("border-color", "red");
        }
        toastr["error"]("Please fill the highlighted field");
        return false;
    }
    return true;
}

function validateFormWithClasses(classes) {
    if (Array.isArray(classes))
    {
        for(var i=0; i < classes.length; i++)
        {
            var result = 0;
            if(Array.isArray($("."+classes[i]))){
                for(var j=0; j < $("."+classes[i]).length; j++){
                    if($("."+classes[i][j]).val() == "" || $("."+classes[i][j]).val() == null)
                    {
                        $("."+classes[i][j]).css("border-color", "red");
                        result++;
                    }else{
                        $("."+classes[i][j]).css("border-color", "green");
                    }
                }
                if (result > 0){
                    toastr.error("Please fill all highlighted field(s)");
                    return false;
                }
            }else{
                if($("."+classes[i]).val() == "" || $("."+classes[i]).val() == null)
                {
                    $("."+classes[i]).css("border-color", "red");
                    result++;
                }else{
                    $("."+classes[i]).css("border-color", "green");
                }
            }

        }
        if (result > 0){
            toastr.error("Please fill all highlighted field(s)");
            return false;
        }
    }else if(typeof classes === 'string')
    {
        if(Array.isArray($("."+classes))){
            for(var k=0; k < $("."+classes).length; k++){
                if($("."+classes[k]).val() == "" || $("."+classes[k]).val() == null)
                {
                    $("."+classes[k]).css("border-color", "red");
                    toastr.error("Please fill all highlighted field(s)");
                    return false;
                }else{
                    $("."+classes).css("border-color", "green");
                }

            }
        }else{
            if($("."+classes).val() == "" || $("."+classes).val() == null)
            {
                $("."+classes).css("border-color", "red");
                toastr.error("Please fill all highlighted field(s)");
                return false;
            }else{
                $("."+classes).css("border-color", "green");
            }

        }
    }
    return true;
}

function buttonClicked(button_id,button_text,option){
    if(option === 1){
        var appendInfo = '<i class="fa fa-refresh fa-spin"></i> '+button_text;
        $('#'+button_id).html(appendInfo);
        $('#'+button_id).prop('disabled',true);
    }else if(option === 0){
        var appendInfo = button_text;
        $('#'+button_id).html(appendInfo);
        $('#'+button_id).prop('disabled',false);
    }

}

function buttonClassClicked(button_class,button_text,option){
    if(option === 1){
        var appendInfo = '<i class="fa fa-refresh fa-spin"></i> '+button_text;
        $('.'+button_class).html(appendInfo);
        $('.'+button_class).prop('disabled',true);
    }else if(option === 0){
        var appendInfo = button_text;
        $('.'+button_class).html(appendInfo);
        $('.'+button_class).prop('disabled',false);
    }

}

function extractError(error) {
    for(var error_log in error.response.data.errors) {
        var err = error.response.data.errors[error_log];
        toastr.error(err);
    }
}


$('.datepicker').datepicker({
    showClose : true,
    showClear : true,
    autoclose : true,
   });

$('.datetimepicker').datetimepicker({
    showClose : true,
    showClear : true,
    sideBySide : true,
    autoclose  : true,
});

$('.dataTable').dataTable({"bSort" : false});

var loader = '<div class="progress">'+
    '<div class="indeterminate"></div>'+
    '</div>';

function triggerRequirements(id){
    bootbox.dialog({
        message: '<ol style="margin-top: 0pt; margin-bottom: 0pt;">\n' +
        '<li style="list-style-type: decimal; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Advance and Repayment</span></li>\n' +
        '<ol style="margin-top: 0pt; margin-bottom: 0pt;">\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">FODDS CAPITAL agrees to advance the Financial aid and the Obligor agrees to take the financial aid subject to the terms and conditions as set out in the financial aid application form and also herein in this offer letter. </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The Obligor agrees to repay the Financial aid (principal plus accrued interest) in accordance with the terms and conditions of this letter. &nbsp;</span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The repayment installments as calculated in the dedicated repayment schedule are done on the basis of payment at regular agreed intervals.</span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Where the Obligor fails to pay FODDS CAPITAL a repayment installment by the due date, FODDS CAPITAL will charge default interest rate at 5% per month on the unpaid sum. </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">FODDS CAPITAL will apply default interest rate from the date on which the Obligor was due to pay the sum. </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The default interest rate is charged by FODDS CAPITAL in addition to the normal interest rate which it charges the Obligor at the same time and in the same manner as that normal interest.</span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;"> In the event of complete default by the Obligor, FODDS CAPITAL has the right to take ownership of any and all collateral provided by the Obligor during the application for the credit facility. &nbsp;</span></li>\n' +
        '</ol>\n' +
        '<li style="list-style-type: decimal; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Representations and Warranties: The Obligor represents and warrants that: </span></li>\n' +
        '<ol style="margin-top: 0pt; margin-bottom: 0pt;">\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">He/she has the right to accept this facility and has taken all necessary actions to authorize same upon the terms and conditions herein. </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The information given to FODDS CAPITAL verbally or in writing in the formal financial aid application form is true and accurate 3. He/she will use the financial aid for the purpose(s) they told FODDS CAPITAL of in their application for the financial aid. </span></li>\n' +
        '</ol>\n' +
        '<li style="list-style-type: decimal; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Events of Default: The occurrence of any of the following events shall cause all outstanding amounts under this facility to become immediately due and payable: </span></li>\n' +
        '<ol style="margin-top: 0pt; margin-bottom: 0pt;">\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The Obligor fails to make a repayment or payment of principal, interest or other amount in respect of the financial aid on the date it was due to be paid; or </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The Obligor breaches any of the terms and conditions of the Financial aid including any representation or confirmation given by the Obligor in this financial aid agreement </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Where a bankruptcy petition is filed against the Obligor. 4. Where the Obligor is unable to pay any other party within the meaning of Section 1 of the Bankruptcy Act (Cap 30) Laws of the Federation of Nigeria. </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Where a situation arises which in the opinion of FODDS CAPITAL makes it inappropriate for FODDS CAPITAL to continue to extend the facility to the Obligor. </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Where the Obligor defaults in the performance or observance of any other term, condition or covenant herein and such breach or default shall continue unremedied after 3 months notice has been given to the Obligor. </span></li>\n' +
        '</ol>\n' +
        '<li style="list-style-type: decimal; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Costs and Expenses </span></li>\n' +
        '<ol style="margin-top: 0pt; margin-bottom: 0pt;">\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The Obligor hereby agrees to pay all administrative costs, charges and expenses (including legal fees) reasonably incurred by FODDS CAPITAL in connection with the processing of this financial aid request. 2. The Obligor hereby agrees to pay all costs and expenses (including legal fees) incurred by FODDS CAPITAL in connection with any proceedings instituted by or against FODDS CAPITAL as a consequence of entering into this financial aid agreement. </span></li>\n' +
        '</ol>\n' +
        '<li style="list-style-type: decimal; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Assignment and Disclosure of Information </span></li>\n' +
        '<ol style="margin-top: 0pt; margin-bottom: 0pt;">\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The Obligor consents irrevocably to any future transfer and assignment, however arising of the financial aid, whether as part of a financial aid transfer scheme or otherwise. </span></li>\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The Obligor authorizes FODDS CAPITAL to disclose any information or documentation relating to the financial aid to third parties including credit reference agencies, collection agencies, as well as the Obligor&rsquo;s employers (where the Obligor is in salaried employment) in the event that the financial aid has ceased to be serviced by the Obligor. </span></li>\n' +
        '</ol>\n' +
        '<li style="list-style-type: decimal; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Variation of Conditions </span></li>\n' +
        '<ol style="margin-top: 0pt; margin-bottom: 0pt;">\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">FODDS CAPITAL reserves the right at all times to vary the terms and conditions of the financial aid agreement. &nbsp;Any such variation will become effective upon notice to the Obligor by any means FODDS CAPITAL considers reasonable in the circumstance </span></li>\n' +
        '</ol>\n' +
        '<li style="list-style-type: decimal; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">Governing Law </span></li>\n' +
        '<ol style="margin-top: 0pt; margin-bottom: 0pt;">\n' +
        '<li style="list-style-type: lower-alpha; font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre; margin-left: 18pt;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">This financial aid agreement is governed by Nigerian law and the courts of the Federal Republic of Nigeria have jurisdiction in any matter arising from it.</span></li>\n' +
        '</ol>\n' +
        '</ol>\n' +
        '<p>&nbsp;</p>\n' +
        '<p style="line-height: 1.295; margin-top: 0pt; margin-bottom: 0pt; margin-left: 36pt; text-align: justify;"><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">**This offer is subject to a satisfactory Risk Assessment and further verification checks in event that your application is unsuccessful, your documents shall be returned to you.**</span></p>\n' +
        '<p><strong><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">DISCLAIMER</span></strong><span style="font-size: 11pt; font-family: Calibri; color: #000000; background-color: transparent; font-weight: 400; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">: As required by law, FODDS CAPITAL is mandated to disclose the status of defaulting financial aids to relevant local or international Credit Bureaus, Credit Monitoring Agencies and Regulatory Bodies</span></p>' +
        '<h3><b>Do you agree to the terms and conditions above ?</b></h3>',
        title: "General Terms and Conditions",
        buttons: {
            success: {
                label: "<i class='fa fa-check'></i> I Agree",
                className: "btn-success",
                callback: function() {
                    $.niftyNoty({
                        type: 'success',
                        message : '<strong>Great !!!</strong> You are good to go, redirecting to financial aid application page',
                        container : 'floating',
                        timer : 5000
                    });

                    var aid_type = 'Individual';

                    if(id === 1){
                      aid_type = 'Cooperate';
                    }

                    window.location.href = baseUrl + '/apply/'+ aid_type+'/financial-aid';
                }
            },

            danger: {
                label: "<i class='fa fa-times'></i> I Disagree",
                className: "btn-danger",
                callback: function() {
                    $.niftyNoty({
                        type: 'danger',
                        message : '<strong>Sorry !!!</strong> You cannot continue with this booking.',
                        container : 'floating',
                        timer : 5000
                    });
                    window.location.href = baseUrl + '/home';

                }
            }
        },
        className: "modal_general_terms_and_conditions"
    });

}

$(".special_select").select2({
    placeholder: "Select an option",
    allowClear: true
});

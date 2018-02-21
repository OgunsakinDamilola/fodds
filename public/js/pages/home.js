$(function(){
        bootbox.dialog({
            message: '<i class="ion-checkmark-round"></i> Direct Debit Mandate and two security cheques\n' +"<br>"+
            '<i class="ion-checkmark-round"></i> Utility Bill' +"<br>"+
            '<i class="ion-checkmark-round"></i> CAC Documents\n' +"<br>"+
            '<i class="ion-checkmark-round"></i> Identity Card of Owner/Partners\n' +"<br>"+
            '<i class="ion-checkmark-round"></i> Financial Statement\n' +"<br>"+
            '<i class="ion-checkmark-round"></i> 12 Month Bank Statement\n' +"<br>"+
            '<i class="ion-checkmark-round"></i> Passport Photograph(s) of Owner/Partners\n' +"<br>"+
            '<i class="ion-checkmark-round"></i> Collateral Information/Documentation (if applicable)\n' +"<br>"+
            '<i class="ion-checkmark-round"></i> Business License (if applicable)' +"<br>"+
            '<b>Do you have all the documents ?</b>',
            title: "Financial Aid Requirements",
            buttons: {
                success: {
                    label: "<i class='fa fa-check'></i> Yes",
                    className: "btn-success",
                    callback: function() {
                        $.niftyNoty({
                            type: 'success',
                            message : '<strong>Great!!!</strong> You are good to go',
                            container : 'floating',
                            timer : 5000
                        });


                    }
                },

                danger: {
                    label: "<i class='fa fa-times'></i> No",
                    className: "btn-danger",
                    callback: function() {
                        $.niftyNoty({
                            type: 'danger',
                            message : '<strong>Oh snap!!!</strong> Please ensure to meet up with our requirements before starting a application',
                            container : 'floating',
                            timer : 5000
                        });

                    }
                }
            }
        });
});
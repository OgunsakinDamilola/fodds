$(function(){
    $("input[name='date_of_reg']").on('change',function(){
        var value = $(this).val();
        var date1 = new Date(value);
        var date2 = new Date();
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24) / 365);
        $("input[name='years_of_existence']").val(diffDays);
    });
});
function getAllDistrict(){
$(document).ready(function () {
    var monthlydatenrwfilterValue = $("#select_dft_nrw_monthly").val() !== '' ? $("#select_dft_nrw_monthly").val() : "";
    var weeklydatenrwfilterValue = $("#select_dft_nrw_weekly").val() !== '' ? $("#select_dft_nrw_weekly").val() : "";
    console.log(monthlydatenrwfilterValue);

    if(monthlydatenrwfilterValue == ""){
        console.log("Please Select A Month");
    }else if((weeklydatenrwfilterValue != "") && (monthlydatenrwfilterValue == "")){
        console.log("First select a Month Then Select A Week");
    }else{
        $.post("dateBetweenNrwfromto", { nrw_monthly_date: monthlydatenrwfilterValue,nrw_weekly_date: weeklydatenrwfilterValue }, function (data_filter_nrw_weekly_monthly) {
            var nrw_progress_dma_divisionwise = JSON.parse(data_filter_nrw_weekly_monthly);
            console.log(nrw_progress_dma_divisionwise);
            if (nrw_progress_dma_divisionwise) {
                $("#inner_div_nrw_city_wise").empty();
                var tot_h_dn = '200';
                $.each(nrw_progress_dma_divisionwise, function (key, dpnrw_dn) {
                    var mod_set_height_dnd = dpnrw_dn.nrw_dn;
                    var conn_dot_dn = mod_set_height_dnd / 100;
                    var barheight_dn = (conn_dot_dn * tot_h_dn);
                    var nrd_dma_down_date_dn = dpnrw_dn.modification_date_dn  !== null ? dpnrw_dn.modification_date_dn  : '00-00-0000';
                    var nrd_dma_top_persent_dn = dpnrw_dn.nrw_dn;
                    $('#inner_div_nrw_city_wise').append('<div class="item"><div class="bar-nrw" style="height: ' + barheight_dn + 'px;" title="200 (100%)"><span class="bar-label-nrw">' + nrd_dma_top_persent_dn + '%</span></div><span class="item-label-nrw">' + nrd_dma_down_date_dn + '</span></div>');
                });
            }
        });
    }


    

    
});
}
$(document).ready(function () {
    $('#explore_division_city').hide();
    $('#dma_container_d').hide();

    $('#divisions').change(function () {
        var division_id = $(this).val();
        $.post("getPipeMeterConDivision", { div_id: division_id }, function (data) {
            var pmcon = JSON.parse(data);
            // console.log(pmcon);
            if (pmcon != null) {
                $('#hmcd').text(pmcon.no_of_city);
                $('#pmcondashheading').text('NO OF CITY');
                $('#hmcdpopulation').text(pmcon.division_population);
                $('#hmcdhousehold').text(pmcon.division_household);
                $('#hmcdhousecomplete').text(pmcon.division_house_connection);
                $('#hmcdmetercomplete').text(pmcon.division_meter_connection);
            }
            $('#citys').html('<option value="">Loading...</option>');
            $.post("getCitiesinDivision", { division_id: division_id }, function (data) {
                $('#citys').html('<option value="">Select City</option>');
                var ddata = JSON.parse(data);
                $.each(ddata, function (key, value) {

                    $('#citys').append('<option value="' + value.id + '">' + value.city_name + '</option>');
                });
            });
            if (division_id) {
                $('#citys').change(function () {
                    var city_id = $(this).val();
                    $.post("getPipeMeterConCityes", { cit_id: city_id }, function (data_city) {
                        var pipemeterconcity = JSON.parse(data_city);
                        $('#hmcd').text(pipemeterconcity.no_of_dma);
                        $('#pmcondashheading').text('NO OF DMA');
                        $('#hmcdpopulation').text(pipemeterconcity.city_population);
                        $('#hmcdhousehold').text(pipemeterconcity.city_household);
                        $('#hmcdhousecomplete').text(pipemeterconcity.city_house_connection);
                        $('#hmcdmetercomplete').text(pipemeterconcity.city_meter_connection);
                    });
                    // jalsathi 
                    $.post("getJalsathiConCity", { cit_id: city_id }, function (data_city_jalsathi) {
                        var jalsathi_ccity = JSON.parse(data_city_jalsathi);
                        console.log(jalsathi_ccity);

                        if (jalsathi_ccity != null) {
                            $('#no_of_jalsathi').text(jalsathi_ccity.no_of_jalasathi);
                            $('#incentive_paid_to_jalsathi').text(jalsathi_ccity.incentive_paid_to_jalsathi);
                            $('#no_of_test_conducted_by_jalasathi').text(jalsathi_ccity.no_of_test_conducted_by_jalasathi);
                            $('#revenue_collected_by_jalasathi').text(jalsathi_ccity.revenue_collected_by_jalasathi);
                        } else {
                            $('#no_of_jalsathi').text('0');
                            $('#incentive_paid_to_jalsathi').text('0');
                            $('#no_of_test_conducted_by_jalasathi').text('0');
                            $('#revenue_collected_by_jalasathi').text('0');
                        }
                    });
                });
            }
            $.post("getJalsathiConDivision", { div_id: division_id }, function (division_jalasathi) {
                var jalscon = JSON.parse(division_jalasathi);
                if (jalscon != null) {
                    $('#no_of_jalsathi').text(jalscon.no_of_jalasathi);
                    $('#incentive_paid_to_jalsathi').text(jalscon.incentive_paid_to_jalsathi);
                    $('#no_of_test_conducted_by_jalasathi').text(jalscon.no_of_test_conducted_by_jalasathi);
                    $('#revenue_collected_by_jalasathi').text(jalscon.revenue_collected_by_jalasathi);
                } else {
                    $('#no_of_jalsathi').text('0');
                    $('#incentive_paid_to_jalsathi').text('0');
                    $('#no_of_test_conducted_by_jalasathi').text('0');
                    $('#revenue_collected_by_jalasathi').text('0');
                }
                // console.log(jalscon);

            });
        });
    });
});

$(document).ready(function () {
    $('#divisions_home_all').change(function () {
        var division_id = $(this).val();
        $.post("getHomePipeMeterConDivision", { div_id: division_id }, function (data) {
            var h_dp_dv = JSON.parse(data);

            if (h_dp_dv != null) {
                $('#h_no_division').hide();
                $('#h_no_city').text(h_dp_dv[0]['total_cities'] !== null ? h_dp_dv[0]['total_cities'] : 0);
                $('#h_no_dma').text(h_dp_dv[0]['total_dma'] !== null ? h_dp_dv[0]['total_dma'] : 0);
                $('#h_no_nrw').text(h_dp_dv[0]['nrw_average_value'] !== null ? h_dp_dv[0]['nrw_average_value'] : 0);
                $('#h_population').text(h_dp_dv[0]['total_no_population'] !== null ? h_dp_dv[0]['total_no_population'] : 0);

                $('#h_household').text(h_dp_dv[0]['total_no_house_holds'] !== null ? h_dp_dv[0]['total_no_house_holds'] : 0);
                $('#h_h_complete').text(h_dp_dv[0]['total_no_house_coction'] !== null ? h_dp_dv[0]['total_no_house_coction'] : 0);
                $('#h_m_complete').text(h_dp_dv[0]['total_no_metered_house_connections'] !== null ? h_dp_dv[0]['total_no_metered_house_connections'] : 0);
                $('#h_jalasathi').text(h_dp_dv[0]['total_jalasathi'] !== null ? h_dp_dv[0]['total_jalasathi'] : 0);
                if (h_dp_dv[0]['division_district_image'] != null) {
                    var division_district_image = 'images/Map/' + h_dp_dv[0]['division_district_image'];
                } else {
                    var division_district_image = 'images/Map/default_division.png';
                }
                $('#division_district_image').attr('src', division_district_image);

            }
        });
    });
});

// city dashboard 
$(document).ready(function () {
    $('#city_dashboard_division').change(function () {
        var division_id = $(this).val();
        $.post("getPipeMeterConDivision", { div_id: division_id }, function (data) {
            var pmcon = JSON.parse(data);
            $('#city_dashboard_city').html('<option value="">Loading...</option>');
            $('#dma_zone_dash').html('<option value="">Loading...</option>');
            $.post("getCitiesinDivision", { division_id: division_id }, function (data) {
                $('#city_dashboard_city').html('<option value="">Select City</option>');
                $('#dma_zone_dash').html('<option value="">Select Dma</option>');
                var ddata = JSON.parse(data);
                $.each(ddata, function (key, value) {

                    $('#city_dashboard_city').append('<option value="' + value.id + '">' + value.city_name + '</option>');
                    

                });
            });
        });
    });

    $('#city_dashboard_city').change(function () {
        $('#explore_division_city').show();
        var city_id_cd = $(this).val();
        if(city_id_cd){
            $.post("getCityDashboardById", { city_id: city_id_cd }, function (data_city_dash) {
                var citydivisionctdata = JSON.parse(data_city_dash);
                console.log(citydivisionctdata.house_connection_percentage);
                $('#cd_no_dma').text(citydivisionctdata.no_of_dma);
                $('#cd_no_ct_card').hide();
                $('#cd_household').text(citydivisionctdata.house_holds);
                $('#cd_hm_con_complete').text(citydivisionctdata.total_house_connection);
                $('#cd_mt_con_complete').text(citydivisionctdata.total_meter_connection);
                $('#cd_population').text(citydivisionctdata.total_population);
                $('#hmcdmetercomplete').text(citydivisionctdata.house_connection_percentage);
                $('#hmcdmetercomplete').text(citydivisionctdata.metered_connections_percentage);
                $('#cd_jalsathi').text(citydivisionctdata.no_of_jalasathi);

            });
        }
        

    });
});


$(document).ready(function () {
    $('#city_dashboard_city').change(function () {
        $('#dma_container_d').hide();
        var city_d_id = $(this).val();
            $('#dma_zone_dash').html('<option value="">Loading...</option>');
            $.post("getAllDmaInfoDashboardOnCity", { city_id: city_d_id }, function (data) {
                $('#dma_zone_dash').html('<option value="">Select City</option>');
                var city_das_data = JSON.parse(data);
                $.each(city_das_data, function (key, value) {
                    $('#dma_zone_dash').append('<option value="' + value.id + '">' + value.dma_no + '</option>');
                });
            });
    });

    $('#dma_zone_dash').change(function () {
        $('#dma_container_d').hide();
        var city_d_idget_dma = $(this).val();
        $.post("getAllDmaInfoOnCity", { dma_id: city_d_idget_dma }, function (data) {
            var dmadata_info_d = JSON.parse(data);
            console.log(dmadata_info_d);

            if(dmadata_info_d){
                $('#dma_container_d').show();
                $('#dma_d_name').text(dmadata_info_d.dma_no !== null ? dmadata_info_d.dma_no : "xxxx");
                $('#dma_d_areaname').text(dmadata_info_d.area_name !== null ? dmadata_info_d.area_name : "0");
                $('#dma_d_population').text(dmadata_info_d.total_population !== null ? dmadata_info_d.total_population : "0");
                $('.dma_house_con_target').text(dmadata_info_d.house_holds !== null ? dmadata_info_d.house_holds : "0");
                $('.dma_house_con_complete').text(dmadata_info_d.total_house_connection !== null ? dmadata_info_d.total_house_connection : "0");
                $('.dma_meter_con_target').text(dmadata_info_d.house_holds !== null ? dmadata_info_d.house_holds : "0");
                $('.dma_meter_con_complete').text(dmadata_info_d.total_meter_connection !== null ? dmadata_info_d.total_meter_connection : "0");
                $('.dma_completed_month_year').text(dmadata_info_d.dft_complete_m_y !== null ? dmadata_info_d.dft_complete_m_y : "xx-xx");
                $('.dma_target_date_of_completion').text(dmadata_info_d.dft_target_date_completion !== null ? dmadata_info_d.dft_target_date_completion : "xx-xx");
                $('.dma_house_connection_d_persentage').text(dmadata_info_d.house_connection_percentage !== null ? dmadata_info_d.house_connection_percentage : "xx-xx");
                $('.dma_meter_connection_d_persentage').text(dmadata_info_d.metered_connections_percentage !== null ? dmadata_info_d.metered_connections_percentage : "xx-xx");
                var dma_house_complete_bar = dmadata_info_d.house_connection_percentage +'%';
                $('.dma_house_connection_d_persentage_text').text(dmadata_info_d.house_connection_percentage !== null ? dma_house_complete_bar : '0%');
                $(".dma_house_complete_bar").css("height", dma_house_complete_bar);

                var dma_meterd_complete_bar = dmadata_info_d.house_connection_percentage +'%';
                $('.dma_meter_connection_d_persentage_text').text(dmadata_info_d.metered_connections_percentage !== null ? dma_meterd_complete_bar : '0%');
                $(".dma_meterd_complete_bar").css("height", dma_meterd_complete_bar);

                var progressBar = $(".progress-bar-round");                
                var check_nrw_null = dmadata_info_d.nrw !== null ? dmadata_info_d.nrw : 0 ;
                var content = check_nrw_null + "%";
                progressBar.css('background', 'radial-gradient(closest-side, white 79%, transparent 80% 100%), conic-gradient(red '+ content +', green 0)');
                progressBar.attr("data-progress", content);
            }
        });
    });
});



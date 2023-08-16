$(document).ready(function () {
    
    $('#divisions').change(function () {
        var division_id = $(this).val();
        $.post("pipeLineDashboardController/getPipeMeterConDivision", {div_id:division_id},function(data){
            var pmcon = JSON.parse(data);
            // console.log(pmcon);
            if(pmcon != null){
                $('#hmcd').text(pmcon.no_of_city);
                $('#pmcondashheading').text('NO OF CITY');
                $('#hmcdpopulation').text(pmcon.division_population);
                $('#hmcdhousehold').text(pmcon.division_household);
                $('#hmcdhousecomplete').text(pmcon.division_house_connection);
                $('#hmcdmetercomplete').text(pmcon.division_meter_connection);
            }
            
        $('#citys').html('<option value="">Loading...</option>');
        $.post("pipeLineDashboardController/getCitiesinDivision", {division_id:division_id},function(data){
            $('#citys').html('<option value="">Select City</option>');
            var ddata = JSON.parse(data);
            $.each(ddata, function (key, value) {

                $('#citys').append('<option value="' + value.id + '">' + value.city_name + '</option>');
            });
        });


        if(division_id){
            $('#citys').change(function () {
                var city_id = $(this).val();

                $.post("pipeLineDashboardController/getPipeMeterConCityes", {cit_id:city_id},function(data_city){
                    var pipemeterconcity = JSON.parse(data_city);
                    // console.log(pipemeterconcity);

                    $('#hmcd').text(pipemeterconcity.no_of_dma);
                    $('#pmcondashheading').text('NO OF DMA');
                    $('#hmcdpopulation').text(pipemeterconcity.city_population);
                    $('#hmcdhousehold').text(pipemeterconcity.city_household);
                    $('#hmcdhousecomplete').text(pipemeterconcity.city_house_connection);
                    $('#hmcdmetercomplete').text(pipemeterconcity.city_meter_connection);
                });

                // jalsathi 
                $.post("pipeLineDashboardController/getJalsathiConCity", {cit_id:city_id},function(data_city_jalsathi){
                    var jalsathi_ccity = JSON.parse(data_city_jalsathi);
                    console.log(jalsathi_ccity);

                    if(jalsathi_ccity != null){
                        $('#no_of_jalsathi').text(jalsathi_ccity.no_of_jalasathi);
                        $('#incentive_paid_to_jalsathi').text(jalsathi_ccity.incentive_paid_to_jalsathi);
                        $('#no_of_test_conducted_by_jalasathi').text(jalsathi_ccity.no_of_test_conducted_by_jalasathi);
                        $('#revenue_collected_by_jalasathi').text(jalsathi_ccity.revenue_collected_by_jalasathi);
                    }else{
                        $('#no_of_jalsathi').text('0');
                        $('#incentive_paid_to_jalsathi').text('0');
                        $('#no_of_test_conducted_by_jalasathi').text('0');
                        $('#revenue_collected_by_jalasathi').text('0');
                    }
                });


            });
        }

        $.post("pipeLineDashboardController/getJalsathiConDivision", {div_id:division_id},function(division_jalasathi){
            var jalscon = JSON.parse(division_jalasathi);
            if(jalscon != null){
                $('#no_of_jalsathi').text(jalscon.no_of_jalasathi);
                $('#incentive_paid_to_jalsathi').text(jalscon.incentive_paid_to_jalsathi);
                $('#no_of_test_conducted_by_jalasathi').text(jalscon.no_of_test_conducted_by_jalasathi);
                $('#revenue_collected_by_jalasathi').text(jalscon.revenue_collected_by_jalasathi);
            }else{
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
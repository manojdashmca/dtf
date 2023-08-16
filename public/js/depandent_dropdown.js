$(document).ready(function() {
    $.getJSON('function_district.php', {
        action: 'getDistrict'
    }, function(data) {
        // console.log(data);
        $.each(data, function(key, value) {
            $('#district_id_d').append('<option value="' + value.id + '">' + value.district_name + '</option>');
        });
    });
});
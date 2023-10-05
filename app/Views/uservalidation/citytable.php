<script type="text/javascript">
    window.onload = function () {
  getAllCity();
};


function getAllCity() {
  $(document).ready(function () {
    $.getJSON('PipelineController/getCitys', function (data) {
      const outputArray = data.map(item => [item.city_id, item.division_name, item.city_name]);
      document.getElementById("table-gridjs") && new gridjs.Grid({

        columns: [{
          name: "ID",
          width: "80px",
          formatter: function (e) {
            return gridjs.html('<span class="fw-semibold">' + e + "</span>")
          }
        }, {
          name: "Division Name",
          width: "150px"
        }, {
          name: "City Name",
          width: "150px"
        }, {
          name: "Actions",
          width: "150px",
          formatter: function (e, row) {
            return gridjs.html(`
                          <button data-bs-toggle="modal" data-bs-target="#staticBackdropEditCity" class="btn btn-info btn-sm" id="editIdCity" onclick="getEditCitydetails(${row.cells[0].data})">Edit</button>
                          <button class="btn btn-danger btn-sm" onclick="deleteRow(${row.cells[0].data})" disabled>Delete</button>
                        `);
          }
        }],
        pagination: {
          limit: 5
        },
        sort: !0,
        search: !0,
        data: outputArray,
      }).render(document.getElementById("table-gridjs"));
    });
  });
}


$(document).on("submit", "#addCity", function () {
  $.post("addnewcity", $(this).serialize(), function (data) {
    if (data.res == "enterDistrict") {
      Swal.fire(
        'No Division',
        'Please select a Division',
        'error'
      )
    } else if (data.res == "enterCity") {
      Swal.fire(
        'No City',
        'Please Enter City',
        'error'
      )
    }
    else if (data.res == "exist") {
      Swal.fire(
        'Already Exist',
        data.city_name + '<br>Already Exist',
        'error'
      )
    }
    else if (data.res == "success") {
      Swal.fire(
        'Success',
        data.city_name + '<br>Successfully Added',
        'success'
      )
      $('#addCity')[0].reset();
      refreshDiv();

    }
  }, 'json')
  return false;
});
// Edit City 

function getEditCitydetails(city_edit_id) {
  var city_edit_id = city_edit_id !== null ? city_edit_id : 0;
  if (city_edit_id) {
    $.post("getCityDetailsOnId", { city_edit_gt_id: city_edit_id }, function (getEditDataCity) {
      var getEditDataCityFull = JSON.parse(getEditDataCity);
      let old_city_id = getEditDataCityFull.city_id;
      let edit_city_division_id = getEditDataCityFull.division_id !== null ? getEditDataCityFull.division_id : "";
      let edit_city_name = getEditDataCityFull.city_name !== null ? getEditDataCityFull.city_name : "";
      $('#old_city_id').val(old_city_id);
      $('#edit_division_name_city option').each(function () {
        if ($(this).val() == edit_city_division_id) {
          $(this).prop('selected', true);
        }
      });
      $('#edit_city_name').val(edit_city_name);
    });
  }
}

$(document).on("submit", "#updatecitydata", function () {

  $.post("editCityDataInId", $(this).serialize(), function (data) {
    if (data.res == "enterDivision") {
      Swal.fire(
        'No Division',
        'Please select a Division',
        'error'
      )
    } else if (data.res == "enterCity") {
      Swal.fire(
        'No City',
        'Please Enter City',
        'error'
      )
    }
    else if (data.res == "exist") {
      Swal.fire(
        'Already Exist',
        data.city_name + '<br>Already Exist',
        'error'
      )
    }
    else if (data.res == "success") {
      Swal.fire(
        'Success',
        data.city_name + '<br>Successfully Updated',
        'success'
      )
      // $('#addCity')[0].reset();
      refreshDiv();

    }
  }, 'json')
  return false;
});



//   Delete City

function deleteCity() {

  $(document).on("click", "#deleteCity", function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "deleteCity",
          dataType: "json",
          data: { id: id },
          cache: false,
          success: function (data) {
            if (data.res == "success") {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              refreshDiv();
            }
          },
          error: function (xhr, ErrorStatus, error) {
            console.log(status.error);
          }

        });
        console.log("Failed");


      }
    });
  })
}

function refreshDiv() {
  window.location.reload()
}



</script>
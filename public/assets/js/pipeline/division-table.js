window.onload = function () {
  getAllDistrict();
};


function getAllDistrict() {
  $(document).ready(function () {
    $.getJSON('PipelineController/getDivision', function (data) {
      const outputArray = data.map(item => [item.id, item.division_name]);
      document.getElementById("table-gridjs-m-division") && new gridjs.Grid({
        columns: [{
          name: "ID",
          width: "80px",
          formatter: function (e) {
            return gridjs.html('<span class="fw-semibold">' + e + "</span>")
          }
        }, {
          name: "Name",
          width: "150px"
        }, {
          name: "Actions",
          width: "150px",
          formatter: function (e, row) {
            return gridjs.html(`
                            <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-info btn-sm" id="editDistrict" data-id='${row.cells[0].data}' onclick='getEditDivisiondetails(${row.cells[0].data})'>Edit</button>
                            <button class="btn btn-danger btn-sm delete-district" onclick="deleteDistrict()" id="deleteDistrict" data-id='${row.cells[0].data}' disabled>Delete</button>
                          `);
          }
        }],
        pagination: {
          limit: 5
        },
        sort: !0,
        search: !0,
        data: outputArray,
      }).render(document.getElementById("table-gridjs-m-division"));
    });
  });
}

// add division 

$(document).on("submit", "#addDivision", function () {
  var vvv = $(this).serialize();
  $.post("PipelineController/addDivision", $(this).serialize(), function (data) {
    if (data.res == "enterDivision") {
      Swal.fire(
        'No Division',
        'Please enter Division name',
        'error'
      )
    }
    else if (data.res == "exist") {
      Swal.fire(
        'Already Exist',
        data.division_name.toUpperCase() + '<br>Already Exist',
        'error'
      )
    }
    else if (data.res == "success") {
      Swal.fire(
        'Success',
        data.division_name.toUpperCase() + '<br>Successfully Added',
        'success'
      )
      $('#addDivision')[0].reset();
      refreshDiv();

    }
  }, 'json')
  return false;
});

//  Edit Division Master Table 

function getEditDivisiondetails(division_edit_id) {
  var division_edit_id = division_edit_id !== null ? division_edit_id : 0;
  if (division_edit_id) {
    $.post("getDivisionDetailsOnId", { division_edit_gt_id: division_edit_id }, function (getEditDataDivision) {
      var getEditDataDivisionFull = JSON.parse(getEditDataDivision);
      console.log(getEditDataDivisionFull);
      let old_division_id = getEditDataDivisionFull.id;
      let edit_division_name = getEditDataDivisionFull.division_name !== null ? getEditDataDivisionFull.division_name : "";
      $('#old_division_id').val(old_division_id);
      $('#edit_division_name').val(edit_division_name);
    });
  }
}

// Update Division 
$(document).on("submit", "#updatedmazonedata", function () {
  
  $.post("editDivisionDataInId", $(this).serialize(), function (data) {
      
    if (data.res == "enterDivision") {
      Swal.fire(
        'No Division',
        'Please enter Division name',
        'error'
      )
    }
    else if (data.res == "exist") {
      Swal.fire(
        'Already Exist',
        data.division_name.toUpperCase() + '<br>Already Exist',
        'error'
      )
    }
    else if (data.res == "success") {
      Swal.fire(
        'Success',
        data.division_name.toUpperCase() + '<br>Successfully Updated',
        'success'
      )
      refreshDiv();

    }
  }, 'json')
  return false;
});


//   Delete Division

function deleteDistrict() {

  $(document).on("click", "#deleteDistrict", function (e) {
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
          url: "PipelineController/deleteDivision",
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



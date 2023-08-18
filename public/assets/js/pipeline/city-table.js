window.onload = function() {
    getAllCity();
  };


  function getAllCity(){
      $(document).ready(function () {
          $.getJSON('PipelineController/getCitys', function (data) {
            console.log(data);
            const outputArray = data.map(item => [item.id, item.division_name, item.city_name]);
            document.getElementById("table-gridjs") && new gridjs.Grid({
         
                columns: [{
                    name: "ID",
                    width: "80px",
                    formatter: function(e) {
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
                    formatter: function(e, row) {
                        return gridjs.html(`
                          <button data-bs-toggle="modal" data-bs-target="#staticBackdropEditCity" class="btn btn-info btn-sm" id="editIdCity" data-id='${row.cells[0].data}' onclick="editCitis()" disabled>Edit</button>
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

//   function addCity()
//   {
      $(document).on("submit","#addCity" , function(){
          $.post("addnewcity", $(this).serialize() , function(data){
        //    console.log(data);
            if(data.res == "enterDistrict")
           {
              Swal.fire(
                  'No Division',
                  'Please select a Division',
                  'error'
               )
            }else if(data.res == "enterCity")
            {
                Swal.fire(
                    'No City',
                    'Please Enter City',
                    'error'
                )
              }
             else if(data.res == "exist")
            {
              Swal.fire(
                'Already Exist',
                data.city_name + '<br>Already Exist',
                'error'
              )
            }
            else if(data.res == "success")
            {
              Swal.fire(
                'Success',
                data.city_name + '<br>Successfully Added',
                'success'
              )
                  $('#addCity')[0].reset();
                  refreshDiv();
      
            }
          },'json')
          return false;
        });
//   }



    //   Delete Division

    function deleteDistrict()
    {
    
        $(document).on("click", "#deleteDistrict", function(e){
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
            type : "post",
            url : "PipelineController/deleteDivision",
            dataType : "json",  
            data : {id:id},
            cache : false,
            success : function(data){
            if(data.res == "success")
            {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    refreshDiv();
            }
            },
            error : function(xhr, ErrorStatus, error){
            console.log(status.error);
            }

        });
            console.log("Failed");


        }
        });
    })
    }

    function refreshDiv()
    {
      window.location.reload()
    }


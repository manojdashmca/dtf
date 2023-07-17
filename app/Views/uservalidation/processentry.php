<script type="text/javascript">




    function gettaskdata(cityid, componentid) {
        $("#taskdata").html('');
        var task = '<table class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0">' +
                '<thead>' +
                '<tr>' +
                '<th data-ordering="false">SR No.</th>' +
                '<th data-ordering="false">Task</th>' +
                '<th data-ordering="false">Task Completion %</th>' +
                '<th></th>' +
                '</tr>' +
                '</thead>';
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>get-city-component-task',
            data: {cityid: cityid, componentid: componentid},
            success: function (data) {
                var jsonData = JSON.parse(data);
                var tasks = jsonData.data;
                task += '<tbody>';
                for (var i = 0; i < tasks.length; i++) {
                    task += '<tr>';
                    task += '<td>' + (i + 1) + '</td>';
                    task += '<td>' + tasks[i].task_name + '</td>';
                    task += '<td></td>';
                    task += '<td><button class="btn btn-primary" onclick="getsubtaskdata('+cityid+','+componentid+','+tasks[i].tm_id_tm+')">See Subtasks Below</button></td>';
                    task += '</tr>';
                    //listItems += "<option value='" + tasks[i].tm_id_tm + "'>" + tasks[i].task_name + "</option>";
                }
                task += '</tbody>';
                task += '</table>';
                $("#taskdata").html(task);
            }
        });

    }
    
    
    function getsubtaskdata(cityid, componentid,taskid) {       
        $("#subtaskdata").html('');
        var subtask='<table class="table table-bordered dt-responsive nowrap table-striped align-middle mb-0">' +
                                    '<thead>' +
                                        '<tr>' +
                                            '<th data-ordering="false">SR No.</th>' +
                                            '<th data-ordering="false">Sub Task</th>' +                                    
                                            '<th data-ordering="false">Unit</th> ' +
                                            '<th data-ordering="false">Scope Qty</th>  ' +
                                            '<th data-ordering="false">Progress Qty</th>' +
                                            '<th data-ordering="false">Status</th>  ' +
                                            '<th data-ordering="false">Progress %</th>' +                                              
                                        '</tr>' +
                                    '</thead>';
        $.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>get-city-component-task-subtask',
            data: {cityid: cityid, componentid: componentid,taskid:taskid},
            success: function (data) {
                var jsonData = JSON.parse(data);
                var subtasks = jsonData.data;
                subtask += '<tbody>';                
                for (var i = 0; i < subtasks.length; i++) {
                    subtask += '<tr>';
                    subtask += '<td>' + (i + 1) + '</td>';
                    subtask += '<td><a href="javascript:void();" class="fw-medium" data-bs-toggle="modal" data-bs-target="#progress-entry-modal">' + subtasks[i].subtask + '</a></td>';                    
                    subtask += '<td>' + subtasks[i].subtask_unit + '</td>';
                    subtask += '<td></td>';
                    subtask += '<td></td>';
                    subtask += '<td>'+subtasks[i].subtask_status+'</td>';
                    subtask += '<td>' + subtasks[i].entered_progress + '</td>';
                    subtask += '</tr>';
                   }
                subtask += '</tbody>';
                subtask += '</table>';
                $("#subtaskdata").html(subtask);

            }
        });
    }
</script>
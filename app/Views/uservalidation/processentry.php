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
                    task += '<td class="fw-medium">' + tasks[i].record_sl + '</td>';
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
                	var strigifydata = subtasks[i];
                	console.log(strigifydata)
                    subtask += '<tr>';
                    subtask += '<td class="fw-medium">' + subtasks[i].record_sl + '</td>';
                    subtask += '<td><a href="javascript:void();" class="fw-medium" data-bs-toggle="modal" data-bs-target="#progress-entry-modal" onclick="fetchProgressEntryModalDetail(`' + subtasks[i].subtask + '`,`' + subtasks[i].subtask_unit + '`,`' + subtasks[i].subtask_qty + '`,`' + subtasks[i].sub_task_breakup + '`,`' + subtasks[i].status + '`,`' + subtasks[i].chchths_id + '`,`' + subtasks[i].entered_progress + '`,`' + cityid + '`,`' + componentid + '`,`' + taskid + '`)">' + subtasks[i].subtask + '</a></td>';                    
                    subtask += '<td>' + subtasks[i].subtask_unit + '</td>';
                    subtask += '<td>'+subtasks[i].subtask_qty+'</td>';
                    subtask += '<td></td>';
                    subtask += '<td>'+subtasks[i].status+'</td>';
                    subtask += '<td>' + subtasks[i].entered_progress + '</td>';
                    subtask += '</tr>';
                   }
                subtask += '</tbody>';
                subtask += '</table>';
                $("#subtaskdata").html(subtask);

            }
        });
    }
    function fetchProgressEntryModalDetail(subtask,subtask_unit,subtask_qty,sub_task_breakup,status, chchths_id, entered_progress,cityid, componentid,taskid) {
    	/*$('#subtaskname').val(data.subtask);
    	$('#units').val(data.subtask_unit);
    	$('#quantity').val(data.subtask_qty);
    	$('#breakup').val(data.sub_task_breakup);
    	$('#pstatus').val(data.status);
    	$('#entryqty').val();*/
        $('#cityid').val(cityid);
        $('#componentid').val(componentid);
        $('#taskid').val(taskid);
    	$('#subtaskname').val(subtask);
    	$('#units').val(subtask_unit);
    	$('#quantity').val(subtask_qty);
    	$('#breakup').val(sub_task_breakup);
    	$('#pstatus').val(status);
    	$('#chchths_id').val(chchths_id);
    	$('#userentryprogress').val(entered_progress);
    	$('#entryqty').val();
    	
    }
    $('#updateprogress').click(function(){
        var chchths_id = $('#chchths_id').val();
    	var userentryprogress = $('#userentryprogress').val();
    	var allowpartial = $('#allowpartial').val();
    	var entryqty = $('#entryqty').val();
    	var cityid = $('#cityid').val();
    	var componentid = $('#componentid').val();
    	var taskid = $('#taskid').val();
        if (userentryprogress <= 0 || userentryprogress > 100) {
            alert("User Progress entry must be in between 1 to 100");
            return;
        }
    	$.ajax({
            type: "POST",
            url: '<?= CUSTOMPATH ?>update-task-progress-entry',
            data: {chchths_id: chchths_id, userentryprogress: userentryprogress, entryqty:entryqty, allowpartial:allowpartial},
            success: function (responce) {
                var data = JSON.parse(responce);
                alert(data.message)
                if (data.status == 'success') {
                    $('#close-modal').click();
                    getsubtaskdata(cityid, componentid,taskid);
                }
            }
        });
    })
</script>
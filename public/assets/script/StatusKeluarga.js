var table;
var edit;

function load() {
    table = $('#example').dataTable( {
        "processing": true,
        "ajax": {
            "url": "http://10.10.117.159:5188/api/status-keluarga",
            "type": "GET",
            "dataType": "json",
        },
        "columns": [
            { "data": "id" },
            { "data": "statusKeluarga" },
            { "data": "status" },
            { "data": "aksi" }
        ],
        fnCreatedRow: function (nRow, mData, iDataIndex) {
            $('td:eq(3)', nRow).html('');
            var row3 = $('td:eq(3)', nRow).html();
            row3 += "<button type='button' id='bt-edit' data-id='"+mData.id+"' class='btn btn-label-secondary waves-effect'><i class='fa fa-edit'></i></button>";
            row3 += "<button type='button' id='bt-delete' data-id='"+mData.id+"' class='btn btn-label-secondary waves-effect'><i class='fa fa-trash'></i></button>";
            $('td:eq(3)', nRow).html(row3);  
        }
    });
}

function clear() {
    $("#ed_status_keluarga").val('');
}

$(document).ready(function() {

    load();

    edit = false;

    $( "#bt-save" ).on( "click", function() {   
        event.preventDefault();
        var data = JSON.stringify({
            statusKeluarga: $('#ed_status_keluarga').val(),
            status: $('input[name="ed_status"]:checked').val(),
            userCreated: "andry"
        })

        $.ajax({
            url :  'http://10.10.117.159:5188/api/status-keluarga',
            type: "POST",
            data: data,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            dataType : 'json',
            success: function(res){
                Swal.fire({
                    icon: 'success',
                    title: 'Data berhasil di simpan!',
                    showConfirmButton: false
                });
                $('#example').DataTable().ajax.reload();
                clear();
                edit = false;
            },
            error : function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal simpan data!',
                    showConfirmButton: false
                });
            } 
        });
    
    } );

    $('#example').on('click', '#bt-delete', function(){
        let id = $(this).attr('data-id');

        $.ajax({
            url :  'http://10.10.117.159:5188/api/status-keluarga',
            type: "POST",
            data: data,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            dataType : 'json',
            success: function(res){
                Swal.fire({
                    icon: 'success',
                    title: 'Data berhasil di simpan!',
                    showConfirmButton: false
                });
                $('#example').DataTable().ajax.reload();
                clear();
                edit = false;
            },
            error : function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal simpan data!',
                    showConfirmButton: false
                });
            } 
        });
    });

    $('#example').on('click', '#bt-edit', function(){
        let id = $(this).attr('data-id');
        // event.preventDefault();
        // var data = JSON.stringify({
        //     statusKeluarga: $('#ed_status_keluarga').val(),
        //     status: $('input[name="ed_status"]:checked').val(),
        //     userCreated: "andry"
        // })

        $('#ed_status_keluarga').val()
        $.ajax({
            url :  'http://10.10.117.159:5188/api/status-keluarga/'+id,
            type: "GET",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            dataType : 'json',
            success: function(res){
                $('#ed_status_keluarga').val(res.statusKeluarga),
                $('#ed_status_keluarga').val(res.statusKeluarga)
            },
            error : function(){
            } 
        });

    });

});

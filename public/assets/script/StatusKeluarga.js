var table;

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
            row3 += "<button type='button' id='"+mData.id+"' class='btn btn-label-secondary waves-effect'><i class='fa fa-edit'></i></button>";
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

    $("#bt-delete").on( "click", function() {
        $.ajax({
            url :  'http://10.10.117.159:5188/api/status-keluarga/'+$(),
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
                    title: 'Data berhasil di delete!',
                    showConfirmButton: false
                });
                $('#example').DataTable().ajax.reload();
                clear();
            },
            error : function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal delete data!',
                    showConfirmButton: false
                });
            } 
        });
    });

    $('#example').on('click', '#bt-delete', function(){
        let id = $(this).attr('data-id');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            // showCancelButton: false, // There won't be any cancel button
            // showConfirmButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
                $.ajax({
                    url :  'http://10.10.117.159:5188/api/status-keluarga/'+id,
                    type: "DELETE",
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    dataType : 'json',
                    success: function(res){
                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil di delete!',
                            showConfirmButton: false
                        });
                        $('#example').DataTable().ajax.reload();
                        clear();
                    },
                    error : function(){
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal delete data!',
                            showConfirmButton: false
                        });
                    } 
                });
            }
          })

        
    });

});

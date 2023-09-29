// "url": "http://10.10.117.159:5188/api/kecamatan",
$(document).ready(function() {

    $.ajax({
        type: 'GET', 
        url: 'http://10.10.117.159:5188/api/kabupaten', 
        success: function(result) { 
            var selOpts = "";
            for (let i=0;i<result.data.length;i++)
            {
                var id = result.data[i]['id'];
                var val = result.data[i]['kabupaten'];
                selOpts += "<option value='"+id+"'>"+val+"</option>";
            }
            $('#ed_kabupaten').append(selOpts);
        }
    });

    var table = $('#table').dataTable({
        "processing": true,
        "ajax": {
            "url": "http://10.10.117.159:5188/api/kecamatan",
            "type": "GET",
            "dataType": "json",
        },
        "columns": [
            { "data": "id" },
            { "data": "kecamatan" },
            { "data": "idKabupaten" },
            { "data": "kabupaten" },
            { 
                "data": "status",
                "render": function (data, type, row, meta) {
                    if(data == 1) {
                        return `<span class="badge rounded-pill bg-info">Aktif</span>`;
                    } else {
                        return `<span class="badge rounded-pill bg-light">Tidak Aktif</span>`;
                    }
                } 
            },
            { 
                "data": "aksi",
                "render": function (data, type, row, meta) {
                    return `
                        <button type='button' class='btn btn-label-secondary waves-effect btn-edit' data-id='${row.id}'><i class='fa fa-edit'></i></button>
                        <button type='button' class='btn btn-label-secondary waves-effect btn-delete' data-id='${row.id}'><i class='fa fa-trash'></i></button>
                    `;
                }
            }
        ],
        "columnDefs": [
            {
                "targets": [ 2 ],
                "visible": false,
                "searchable": false
            }
        ]
    });

    var edit = false;
    var id = null;

    $("#bt-save").on("click", function() {
        event.preventDefault();

        var url, type, action;
        var data = {
            kecamatan: $('#ed_kecamatan').val(),
            idKabupaten: $('#ed_kabupaten').val(),
            status: $('input[name="ed_status"]:checked').val(),
        };

        if (edit === false) {
            url = 'http://10.10.117.159:5188/api/kecamatan';
            type = "POST";
            action = "simpan";
            data.userCreated = 1;
        } else {
            url = 'http://10.10.117.159:5188/api/kecamatan/' + id;
            type = "PUT";
            action = "update";
            data.userUpdated = 1;
        }

        $.ajax({
            url: url,
            type: type,
            data: JSON.stringify(data),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            dataType: 'json',
            success: function(res) {
                Swal.fire({
                    icon: 'success',
                    title: 'Data berhasil di ' + action + '!',
                    showConfirmButton: false
                });
                table.api().ajax.reload();
                clear();
                edit = false;
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal ' + action + ' data!',
                    showConfirmButton: false
                });
            }
        });
    });

    $('#table').on('click', '.btn-delete', function() {
        var id = $(this).data('id');
        var data = {
            userDeleted: 1
        };

        Swal.fire({
            title: "Anda yakin?",
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: "warning",
            confirmButtonText: 'Ya, Hapus!'
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'http://10.10.117.159:5188/api/kecamatan/' + id,
                    type: "DELETE",
                    data: JSON.stringify(data),
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    dataType: 'json',
                    success: function(res) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil di Delete!',
                            showConfirmButton: false
                        });
                        table.api().ajax.reload();
                        clear();
                        edit = false;
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Delete data!',
                            showConfirmButton: false
                        });
                    }
                });
            }
        });
    });

    $('#table').on('click', '.btn-edit', function() {
        id = $(this).data('id');
        edit = true;

        $.ajax({
            url: 'http://10.10.117.159:5188/api/kecamatan/' + id,
            type: "GET",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            dataType: 'json',
            success: function(res) {
                $('#ed_kecamatan').val(res.kecamatan);
                $('#ed_kabupaten').val(res.idKabupaten).trigger('change');
                if (res.status == 1) {
                    $('#ed_status_tidak_aktif').prop('checked', false);
                    $('#ed_status_aktif').prop('checked', true);
                } else {
                    $('#ed_status_aktif').prop('checked', false);
                    $('#ed_status_tidak_aktif').prop('checked', true);
                }
            }
        });
    });

    function clear() {
        $("#ed_kecamatan").val('');
        $("#ed_kabupaten").val('').trigger('change');
        $("#ed_status").val(1).trigger('change');
    }

    $("#bt-cancel").on("click", function() {
        clear();
    });
});


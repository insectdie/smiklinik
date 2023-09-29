// "url": "http://10.10.117.159:5188/api/asuransi",
$(document).ready(function() {
    $('.input-daterange').datepicker({});

    var table = $('#table').dataTable({
        "processing": true,
        "ajax": {
            "url": "http://10.10.117.159:5188/api/asuransi",
            "type": "GET",
            "dataType": "json",
        },
        "columns": [
            { "data": "id" },
            { "data": "asuransi" },
            { "data": "tgl_kerjasama" },
            { "data": "no_mou" },
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
        ]
    });

    var edit = false;
    var id = null;

    $("#bt-save").on("click", function() {
        event.preventDefault();

        var url, type, action;
        var data = {
            asuransi: $('#ed_asuransi').val(),
            alamat: $('#ed_alamat').val(),
            tgl_awal: $('#ed_tgl_awal').val(),
            tgl_akhir: $('#ed_tgl_akhir').val(),
            no_telephone: $('#ed_no_telephone').val(),
            no_mou: $('#ed_no_mou').val(),
            nama_pic: $('#ed_nama_pic').val(),
            no_hp_pic: $('#ed_no_hp_pic').val(),
            keterangan: $('#ed_keterangan').val(),
            status: $('input[name="ed_status"]:checked').val(),
        };

        console.log(data);
        return;

        if (edit === false) {
            url = 'http://10.10.117.159:5188/api/asuransi';
            type = "POST";
            action = "simpan";
            data.userCreated = 1;
        } else {
            url = 'http://10.10.117.159:5188/api/asuransi/' + id;
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
                    url: 'http://10.10.117.159:5188/api/asuransi/' + id,
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
            url: 'http://10.10.117.159:5188/api/asuransi/' + id,
            type: "GET",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            dataType: 'json',
            success: function(res) {
                $('#ed_asuransi').val(res.asuransi);
                $('#ed_alamat').val(res.alamat);
                $('#ed_tgl_awal').val(res.tgl_awal);
                $('#ed_tgl_akhir').val(res.tgl_akhir);
                $('#ed_no_telephone').val(res.no_telephone);
                $('#ed_no_mou').val(res.no_mou);
                $('#ed_nama_pic').val(res.nama_pic);
                $('#ed_no_hp_pic').val(res.no_hp_pic);
                $('#ed_keterangan').val(res.keterangan);
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
        $("#ed_asuransi").val('');
        $('#ed_alamat').val('');
        $('#ed_tgl_awal').val('');
        $('#ed_tgl_akhir').val('');
        $('#ed_no_telephone').val('');
        $('#ed_no_mou').val('');
        $('#ed_nama_pic').val('');
        $('#ed_no_hp_pic').val('');
        $('#ed_keterangan').val('');
    }
});


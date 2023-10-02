// "url": "http://10.10.117.159:5188/api/cabang-klinik",
$(document).ready(function() {

    var table = $('#table').dataTable({
        "processing": true,
        "ajax": {
            "url": "http://10.10.117.159:5188/api/cabang-klinik",
            "type": "GET",
            "dataType": "json",
        },
        "columns": [
            { "data": "no" },
            { "data": "kode" },
            { "data": "klinik" },
            { "data": "cabang" },
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

        function reformatDateString(s) {
            var b = s.split(/\D/);
            return b.reverse().join('-');
        }

        var url, type, action;
        var data = {
            kode: $('#ed_kode').val(),
            klinik: $('#ed_nama_klinik').val(),
            cabang: $('#ed_nama_cabang').val(),
            alamat: $('#ed_alamat').val(),
            tlpRumah: $('#ed_tlp_rumah').val(),
            fax: $('#ed_fax').val(),
            email: $('#ed_email').val(),
            status: $('input[name="ed_status"]:checked').val(),
        };

        console.log(data);
        // return;

        if (edit === false) {
            url = 'http://10.10.117.159:5188/api/cabang-klinik';
            type = "POST";
            action = "simpan";
            data.userCreated = 1;
        } else {
            url = 'http://10.10.117.159:5188/api/cabang-klinik/' + id;
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
                    url: 'http://10.10.117.159:5188/api/cabang-klinik/' + id,
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
            url: 'http://10.10.117.159:5188/api/cabang-klinik/' + id,
            type: "GET",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            dataType: 'json',
            success: function(res) {
                $('#ed_asuransi').val(res.asuransi);
                $('#ed_alamat').val(res.alamat);
                $('#ed_tgl_awal').val(reformatDateString(res.tanggalAwal)); 
                $('#ed_tgl_akhir').val(reformatDateString(res.tanggalAkhir));
                $('#ed_no_telephone').val(res.noTelp);
                $('#ed_email').val(res.alamatEmail);
                $('#ed_no_mou').val(res.noMou);
                $('#ed_nama_pic').val(res.namaPIC);
                $('#ed_no_hp_pic').val(res.noHpPIC);
                $('#ed_keterangan').val(res.keterangan);

                $('#ed_kode').val(res.kode);
                $('#ed_nama_klinik').val(res.klinik);
                $('#ed_nama_cabang').val(res.cabang);
                $('#ed_alamat').val(res.alamat);
                $('#ed_tlp_rumah').val(res.tlpRumah);
                $('#ed_fax').val(res.fax);
                $('#ed_email').val(res.email);
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
        $('#ed_kode').val('');
        $('#ed_nama_klinik').val('');
        $('#ed_nama_cabang').val('');
        $('#ed_alamat').val('');
        $('#ed_tlp_rumah').val('');
        $('#ed_fax').val('');
        $('#ed_email').val('');
        $("#ed_status").val(1).trigger('change');
    }

    $("#bt-cancel").on("click", function() {
        clear();
    });
});


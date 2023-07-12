$(function () {

    $('.ubah').on('click', function () {

        $('#judulmodal').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/PhpMVC/public/siswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/PhpMVC/public/siswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id)
                $('#nama').val(data.nama)
                $('#hobi').val(data.hobi)
                $('#umur').val(data.umur)
            }
        });
    });


    $('.tambah').on('click', function () {

        $('#judulmodal').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#hobi').val('');
        $('#umur').val('');

    });
    
});



$(document).on('click', '#btn-hapus', function (e) {

    e.preventDefault();
    let link = $(this).attr('href');

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
            window.location = link;
        }
    });

});


$(function () {

    $('.ubah').on('click', function () {

        $('#modal-title').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Techma/public/siswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/Techma/public/siswa/getUbah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {

                // console.log(data);
                $('#id').val(data.id)
                $('#gambar').attr(data.gambar)
                $('#nama').val(data.nama)
                $('#hobi').val(data.hobi)
                $('#umur').val(data.umur)
            }
        });
    });


    $('.add').on('click', function () {

        $('#modal-title').html('Add Employee');
        $('.modal-footer button[type=submit]').html('Add Employe');
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


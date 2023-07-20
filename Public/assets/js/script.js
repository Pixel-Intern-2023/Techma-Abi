$(function () {

    $('.update-employe').on('click', function () {

      
        $('#modal-title').html('Update Employegg');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('.modal-body form').attr('action', 'http://localhost/Techma/public/employe/update');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/Techma/public/employe/getUpdate',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {

                console.log(data)

                $('#id_employe').val(data.id_employe)
                $('#profile').attr(data.employe_image)
                $('#profile').attr('required',false)
                $('#name').val(data.name)
                $('#id_occupation').val(data.id_occupation)
                $('#description').val(data.description)
                $('#salary').val(data.salary)
                $('#created_at').val(data.created_at)
                $('#update_at').val(data.update_at)
            }
        });

    });


    $('.add-employe').on('click', function () {

        $('#modal-title').html('Add Employee');
        $('.modal-footer button[type=submit]').html('Add Employe');

        $('#id_employe').val('')
        $('#profile').attr('')
        $('#name').val('')
        $('#id_occupation').val('')
        $('#description').val('')
        $('#salary').val('')
        $('#created_at').val('')
        $('#update_at').val('')

    });


    $('.delete').on('click', function(e) {
        e.preventDefault();
        let link = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete employe!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link;
            }
        });
    });

    $('.fire').on('click', function(e) {
        e.preventDefault();
        let link = $(this).attr('href');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, fire employe!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = link;
            }
        });
    });


    $('#passwordCheck').on('click', function(){
        let passInput = $("#password");

        if(passInput.attr('type') == 'password'){

           passInput.attr('type','text');

        }else{

           passInput.attr('type','password');
           
        }
    });
    
    
});


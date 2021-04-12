$(document).ready(function (){

    $('#create_user').validate({
        rules:{
            nombre:{
                required: true,
                maxlength: 124
            },
            email:{
                required: true,
                maxlength: 124,
                email: true
            },
        },
        message:{
            nombre: {
                required: 'El campo nombre es obligatorio',
                maxlength: 'El campd de Nombre debe tener entre 10 a 124 caracteres'
            },
            email: {
                required: 'El campo nombre es obligatorio',
                maxlength: 'El campd de Nombre debe tener entre 10 a 124 caracteres'
            }
        }
    });
})

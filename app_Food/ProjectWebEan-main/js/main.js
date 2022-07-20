/* Funciones de validación de formularios */

function validarRegistro(formulario) {

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if (formulario.usuario.value == "") {
        Swal.fire({text:"Debe ingresar un nombre de usuario para continuar",icon:'warning',confirmButtonColor: '#000000'});
        return false;
    }
    if (formulario.correo.value.trim().length == 0) {
        Swal.fire({text:"Debe ingresar un Email para continuar",icon:'warning',confirmButtonColor: '#000000'});
        return false;
    } else if (!re.test(formulario.correo.value)) {
        Swal.fire({text:"Email inválido",icon:'error',confirmButtonColor: '#000000'});
        return false;
    }

    if (formulario.contraseña.value.trim().length == 0) {
        Swal.fire({text:"Debe ingresar una contraseña para continuar",icon:'warning',confirmButtonColor: '#000000'});
        return false;
    } else if (formulario.contraseña.value.trim().length < 9) {
        Swal.fire({text:"En contraseña debe ingresar más de 8 caracteres",icon:'error',confirmButtonColor: '#000000'});
        return false;
    }

    if (formulario.contraseña.value != formulario.confirmacion.value) {
        Swal.fire({text:"Contraseña no coincide",icon:'error',confirmButtonColor: '#000000'});
        return false;
    }
    if (formulario.genero.value == "") {
        Swal.fire({text:"Debe seleccionar un género para continuar",icon:'warning',confirmButtonColor: '#000000'});
        return false;
    }

    if (formulario.edad.value == "") {
        Swal.fire({text:"Debe seleccionar un rango de edad para continuar",icon:'warning',confirmButtonColor: '#000000'});
        return false;
    }

    if (!formulario.terminos.checked) {
        Swal.fire({text:"Debe aceptar los términos y condiciones",icon:'warning',confirmButtonColor: '#000000'});
        return false;
    }


    $.ajax({
        type:'post',
        url:'includes/register.php',
        data:$("#registro").serialize(),
        success:function(data){
            $("#resp_registro").html(data);
        }
    })
    



    
}

function validarLogin(formulario) {

    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (formulario.correo.value.trim().length == 0) {
        Swal.fire({text:"Debe ingresar un mail para continuar",icon:'warning',confirmButtonColor: '#000000'})
        return false;
    } else if (!re.test(formulario.correo.value)) {
        Swal.fire({text:"Email inválido",icon:'error',confirmButtonColor: '#000000'})
        return false;
    }

    if (formulario.contraseña.value.trim().length == 0) {
        Swal.fire({text:"Debe ingresar una contraseña para continuar",icon:'warning',confirmButtonColor: '#000000'})
        return false;
    } else if (formulario.contraseña.value.trim().length < 9) {
        Swal.fire({text:"Debe ingresar más de 8 caracteres",icon:'error',confirmButtonColor: '#000000'})

        return false;
    }



    $.ajax({
        type:'post',
        url:'includes/validar.php',
        data:$("#login").serialize(),
        success:function(data){
            $("#resp_login").html(data);
        }
    })


    return true;
}


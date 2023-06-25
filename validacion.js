//Validación formulario de envío
function validarFormulario() {
        // Obtener los valores ingresados por el usuario
        var nombre = document.forms["form"]["nombre"].value;
        var email = document.forms["form"]["email"].value;
        var asunto = document.forms["form"]["asunto"].value;
        var mensaje = document.forms["form"]["mensaje"].value;

        // Validar que los campos no estén vacíos
        if (nombre == "" || email == "" || asunto == "" || mensaje == "") {
            alert("Por favor, completa todos los campos del formulario.");
            return false; // Evita que el formulario se envíe
        }

        // Validar el formato del email usando una expresión regular
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Por favor, ingresa un email válido.");
            return false; // Evita que el formulario se envíe
        }

        // Si todas las validaciones pasan, el formulario es válido
        return true;
    }
function validarFormulario() {
    // Obtener los valores de los campos
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var email = document.getElementById('email').value;
    var telefono = document.getElementById('telefono').value;

    // Verificar si algún campo está vacío
    if (nombre.trim() === "" || apellido.trim() === "" || email.trim() === "" || telefono.trim() === "") {
        alert("Por favor, complete todos los campos.");
        return false; // No enviar el formulario
    }

    // Validación del email (básica)
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
        alert("Por favor, introduzca un correo electrónico válido.");
        return false;
    }

    // Validación del teléfono (debe contener 8 dígitos)
    if (!/^\d{8}$/.test(telefono)) {
        alert("El número de teléfono debe contener exactamente 8 dígitos.");
        return false;
    }

    // Si pasa todas las validaciones, enviar el formulario
    return true;
}

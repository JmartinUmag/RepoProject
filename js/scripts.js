function validarFormulario(event) {
    event.preventDefault(); // Evitar envío del formulario por defecto

    // Obtener los valores de los campos
    var nombre = document.getElementById("inputNombre").value;
    var apellido = document.getElementById("inputApellido").value;
    var email = document.getElementById("inputEmail").value;
    var password = document.getElementById("inputPassword").value;

    // Verificar que los campos no estén vacíos
    if (nombre.trim() === "" || apellido.trim() === "" || email.trim() === "" || password.trim() === "") {
        alert("Por favor, complete todos los campos.");
        return;
    }

    // Realizar la solicitud AJAX para insertar los datos en la base de datos
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "registro.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Manejar la respuesta del servidor
            var response = xhr.responseText;
            // Restablecer los valores de los campos
            document.getElementById("inputNombre").value = "";
            document.getElementById("inputApellido").value = "";
            document.getElementById("inputEmail").value = "";
            document.getElementById("inputPassword").value = "";
        }
    };
    // Enviar los datos al servidor
    xhr.send("nombre=" + encodeURIComponent(nombre) + "&apellido=" + encodeURIComponent(apellido) + "&email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password));
}
document.getElementById("registroForm").addEventListener("submit", validarFormulario);
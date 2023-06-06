<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Innovacursos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/estilos.css" rel="stylesheet" />
        <script link="js/registro.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-6 fondoRegistro">
                <img src="img/fondoRegistro.png" width="100%" class="img-fluid">
            </div>
            <div class="col-md-5">
                <!-- formulario de registro: nombre, apellido, email, contraseña, aceptar terminos y condiciones, boton de registro, boton de inicio de sesion -->
                <div class="mt-5 col-10 offset-1 d-md-flex">
                    <a class="ms-3" href="index.php"><img src="img/logo.png"></a>
                    <h1 class="flex-shrink-0 ms-3">¡Aprende con nosotros!</h1>
                </div>
                <form class="row g-3 mx-2 my-4" id="registroForm" method="POST">
                    <div class="col-md-12">
                        <label for="inputNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputNombre" name="nombre">
                    </div>
                    <div class="col-md-12">
                        <label for="inputApellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="inputApellido" name="apellido">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword" name="password">
                    </div>
                    <!-- checkbox -->
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <!-- iniciar sesion -->
                    <a class="btn btn-primary" href="inicio_sesion.php">¿Ya tienes cuenta?  Iniciar sesión</a>
                </form>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">&copy; Innovacursos 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
        </script>
    </body>
</html>

<?php
// Incluir archivo de conexión a la base de datos
include "conexionDB.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los valores enviados desde el formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Verificar que los campos no estén vacíos
    if ($nombre == "" || $apellido == "" || $email == "" || $password == "") {
        echo "error";
        exit;
    }

    // Valor fijo para id_Tipo
    $id_Tipo = 1;

    // Insertar los valores en la base de datos
    $sql = "INSERT INTO Usuario (nombre, apellido, email, contrasena, id_Tipo) VALUES ('$nombre', '$apellido', '$email', '$password', '$id_Tipo')";
    $conn->query($sql);
}
?>

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
                <form class="row g-3 mx-2 my-4">
                    <div class="col-md-12">
                        <label for="inputNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputNombre">
                    </div>
                    <div class="col-md-12">
                        <label for="inputApellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="inputApellido">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <!-- checkbox -->
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <!-- iniciar sesion -->
                    <a class="btn btn-primary" href="inicio_sesion.php">¿Ya tienes cuenta?  Iniciar sesión</a>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Innovacursos 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

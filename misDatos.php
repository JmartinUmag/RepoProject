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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="50%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="index.php">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorías</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="cursos.php">Redes</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="cursos.php">Frontend</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="cursos.php">Backend</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="misCursos.php">Mis cursos</a></li>
                    </ul>

                        <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="misDatos.php">Mis Datos</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="index.php">Cerrar Sesion</a></li>
                        </ul>
                    </ul>
                        </form>
                    
                </div>
            </div>
        </nav>
        <!-- ENavigation-->
        <body>
            <form action="#" autocomplete="on">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col bg-dark bg-color m-md-5 my-3 mx-1 rounded">
                            <div class="mt-5 col-md-6 offset-md-3 col-10 offset-1">
                                <div class="d-md-flex">
                                    <h2 class="flex-shrink-0 text-white mx-4">Mis Datos</h2>
                                </div>
                                <p class="card-text text-white">
                                    <label class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="inputName" value="A">
                                </p>
                                <p class="card-text text-white">
                                    <label for="inputEmail" class="form-label">Apellido:</label>
                                    <input type="text" class="form-control" id="inputSurname" value="B">
                                </p>
                                <p class="card-text text-white">
                                    <label for="inputEmail" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="inputEmail" value="C">
                                </p>
                                <p class="card-text text-white">
                                    <label for="inputEmail" class="form-label">Contraseña:</label>
                                    <input type="password" class="form-control" id="inputPassword">
                                </p>
                                <input type="submit" value="Guardar">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </body>
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

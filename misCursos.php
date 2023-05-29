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
                        <li class="nav-item"><a class="nav-link active" href="misCursos.php">Mis cursos</a></li>
                    </ul>

                        <form class="d-md-flex">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Usuario</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="inicio_sesion.php">Iniciar sesión</a></li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li><a class="dropdown-item" href="registro.php">Registrarse</a></li>
                                    </ul>
                                </ul>
                        </form>
                    
                </div>
            </div>
        </nav>
        <!-- ENavigation-->
        <!-- ModalLogin -->
        <div class="modal fade" id="ModalInicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Inicio de sesion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    Tipo de Usuario
                    <select class="col-12 form-select my-3" aria-label="Default select example">
                        <option value="Alumno">Alumno</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Administrador">Administrador</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Ingresar</button>
                </div>
                </div>
            </div>
        </div>
        <!-- EModalLogin -->
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col bg-dark bg-color m-md-5 my-3 mx-1 rounded">
                        <div class="mt-5">
                            <div class="d-md-flex">
                                <h2 class="flex-shrink-0 text-white mx-4">Mis cursos</h2>
                                <div class="input-group w-auto">
                                </div>
                            </div>
                        </div>
            
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card m-3 bg-secondary">
                                    <a href="inscripcionCurso.php">
                                        <img src="img/php.png" class="img-fluid rounded-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">PHP desde cero 1/3</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card m-3 bg-secondary">
                                    <a href="inscripcionCurso.php">
                                        <img src="img/php.png" class="img-fluid rounded-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">PHP desde cero</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card m-3 bg-secondary">
                                    <a href="inscripcionCurso.php">
                                        <img src="img/php.png" class="img-fluid rounded-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">PHP desde cero</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card m-3 bg-secondary">
                                    <a href="inscripcionCurso.php">
                                        <img src="img/php.png" class="img-fluid rounded-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">PHP desde cero</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card m-3 bg-secondary">
                                    <a href="inscripcionCurso.php">
                                        <img src="img/php.png" class="img-fluid rounded-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">PHP desde cero</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card m-3 bg-secondary">
                                    <a href="inscripcionCurso.php">
                                        <img src="img/php.png" class="img-fluid rounded-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">PHP desde cero</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card m-3 bg-secondary">
                                    <a href="inscripcionCurso.php">
                                        <img src="img/php.png" class="img-fluid rounded-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">PHP desde cero</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card m-3 bg-secondary">
                                    <a href="inscripcionCurso.php">
                                        <img src="img/php.png" class="img-fluid rounded-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">PHP desde cero</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
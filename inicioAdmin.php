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
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="inicioAdmin.php">Inicio</a></li>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="misCursosAdmin.php">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link" href="crudAdmin.php">CRUD</a></li>
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
    <div class="container my-4">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Seleccionar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Introducción a HTML</td>
                                <td><select class="form-select" aria-label="Default select example">
                                    <option selected>No carrusel</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Introducción a JavaScript</td>
                                <td><select class="form-select" aria-label="Default select example">
                                    <option selected>No carrusel</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Introducción a CSS</td>
                                <td><select class="form-select" aria-label="Default select example">
                                    <option selected>No carrusel</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Python</td>
                                <td><select class="form-select" aria-label="Default select example">
                                    <option selected>No carrusel</option>
                                    <option selected>No carrusel</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PHP</td>
                                <td><select class="form-select" aria-label="Default select example">
                                    <option selected>No carrusel</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <label for="categorias">Categorías inicio</label>
                <select class="form-select" id="categorias" name="categorias">
                    <option value="1">Frontend</option>
                    <option value="2">Backend</option>
                    <option value="3">Redes</option>
                </select>
                <div class="offset-md-4 d-flex justify-content-between">
                    <div class="text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark mt-5 bottom">
            <div class="container"><p class="m-0 text-center text-white">© Innovacursos 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
include "conexionDB.php";
?>
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
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
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Innovacursos</h1>
                    <p class="lead fw-normal text-white-50 mb-0">¡Aprende gratis con nosotros!</p>
                </div>
            </div>
        </header>
        <!-- EHeader-->
        <!-- Carousel -->
        <div class="row">
            <div class="col-10 offset-1 col-md-4 offset-md-4 mt-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <a href="inscripcionCurso.php">
                                <img src="img/uml.png" class="d-block w-100 h-30" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="inscripcionCurso.php">
                                <img src="img/css.png" class="d-block w-100 h-30" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="inscripcionCurso.php">
                                <img src="img/php.png" class="d-block w-100 h-30" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- ECarousel -->
        <!-- Section-->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-3 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/php.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Inicio en PHP</h5>
                                    <!-- Product details -->
                                    Aprende con el curso de inicio en php!.
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#ModalDetalles">Ver Detalles</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-3 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/php.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Inicio en PHP</h5>
                                    <!-- Product details -->
                                    Aprende con el curso de inicio en php!.
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#ModalDetalles">Ver Detalles</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-3 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/php.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Inicio en PHP</h5>
                                    <!-- Product details -->
                                    Aprende con el curso de inicio en php!.
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#ModalDetalles">Ver Detalles</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-3 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/php.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Inicio en PHP</h5>
                                    <!-- Product details -->
                                    Aprende con el curso de inicio en php!.
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" data-bs-toggle="modal" data-bs-target="#ModalDetalles">Ver Detalles</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="cursos.php">Ver más cursos</a></div>
                </div>
                <!-- ModalDetails-->
                <div class="modal fade" id="ModalDetalles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel" >Detalles del curso</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <div class="modal-body">
                            <div class="col-12">
                                <label class="form-label">Nombre del profesor: </label>
                                <label class="form-label" id="profesor"> A </label>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Duracion: </label>
                                <label class="form-label" id="duracion"> B </label>
                            </div>
                            <div class="row">
                            <div class="col-8">
                                <label class="form-label">Detalles: </label>
                                <label class="form-label" id="detalles" style="max-height: 400px; overflow-y: auto">  
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent purus lectus, imperdiet eget velit a, molestie vehicula dolor. Aenean vulputate sollicitudin pellentesque. Nam tempus dapibus justo, quis tristique ipsum sagittis in. Sed vulputate velit est, in consequat nisi dignissim non. Maecenas molestie velit ac nulla pellentesque, ut fringilla velit sollicitudin. Donec tincidunt ex ut metus porta, eu ultricies massa bibendum. Aliquam pharetra auctor congue. Ut vel consectetur turpis, a cursus mauris. Cras mi mi, aliquet id erat vel, rutrum lacinia ante. Morbi sit amet orci mattis, cursus felis at, ullamcorper lorem. Aliquam erat volutpat. Integer quis tortor vel nibh lacinia elementum nec non ante. Etiam placerat tincidunt purus faucibus maximus. In hac habitasse platea dictumst. Nunc tristique dui elementum massa fringilla tincidunt.
                                    Nunc scelerisque pharetra est vitae tristique. Integer elementum nibh lorem, at facilisis dui condimentum in. Sed imperdiet erat et mauris luctus facilisis. Donec commodo, justo ac ullamcorper porta, dui eros rutrum mi, non mattis eros augue quis nunc. Aliquam eu congue sem. Cras maximus magna imperdiet tempor cursus. Sed venenatis eros efficitur volutpat finibus. Nullam ac condimentum metus, et varius neque. Aliquam venenatis risus arcu, sit amet sagittis libero condimentum quis. Aenean quis neque tellus. Ut non mi augue. Nunc ut sem vestibulum, venenatis nulla sed, porta ligula. Duis pretium, lorem at fringilla gravida, nibh sem tincidunt nunc, et maximus neque sem sed urna.  
                                    Maecenas consequat vitae augue eu pretium. Mauris fringilla, massa id aliquet consequat, sapien dolor feugiat leo, sed bibendum sem odio at mi. Aenean elementum tincidunt tellus, et tincidunt orci scelerisque sit amet. Cras tempus pretium tempus. Phasellus est quam, tristique non dignissim id, consectetur scelerisque nibh. Praesent quam ante, ultricies id tortor vel, ultricies volutpat sem. Suspendisse ac vestibulum erat. Ut id molestie ipsum. Nam varius enim eu neque rutrum, vitae viverra risus placerat. Vestibulum ultrices euismod metus vel eleifend. In fermentum arcu est, at dictum tortor gravida eget. Mauris ac volutpat tellus. Sed lacinia sem nulla, sit amet fringilla libero rhoncus sed. Aenean sollicitudin porttitor congue. Mauris malesuada, metus fermentum rutrum aliquam, ante ipsum iaculis lectus, vitae tincidunt nulla ante venenatis turpis. Pellentesque laoreet nunc in odio mollis efficitur.
                                    Praesent pellentesque faucibus felis, quis consectetur quam auctor non. Phasellus ultrices dolor at ante auctor, ac suscipit nisl lacinia. Vestibulum malesuada maximus lobortis. In nec diam at nunc posuere dignissim. Nam placerat a turpis in porttitor. Quisque gravida turpis a lacus condimentum, ut tristique enim blandit. Duis quis auctor augue.
                                    Cras blandit quis leo nec dapibus. Nam vitae est non metus euismod suscipit at elementum metus. Nullam dapibus vestibulum mollis. Quisque luctus urna est, id tincidunt sem ultrices et. Quisque ultrices orci id sapien pharetra lobortis. Curabitur sed tempor nulla, dignissim consequat ipsum. Nullam massa augue, rhoncus at dictum nec, consequat et arcu. In hac habitasse platea dictumst. Nulla molestie facilisis mauris, ac viverra lacus sodales maximus. Cras mattis justo sed risus ornare, at imperdiet odio tincidunt. Vestibulum consequat sem sed est dignissim luctus. Suspendisse tristique tortor nec magna vestibulum laoreet. Fusce non erat ac tellus consequat venenatis quis vel mi. Nunc iaculis ex vitae nulla viverra suscipit nec vitae massa. Maecenas gravida, eros eget porta fringilla, libero tortor pretium eros, vel ultricies velit elit sed tortor. Cras id odio volutpat, mattis sem vel, tempor arcu. 
                                </label>
                            </div>
                            <div class="col-4">
                                <img src="img/logo.png" width="100%" class="img-fluid" id="imagen"/>
                            </div>
                            </row>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <a class="btn btn-primary" href="inscripcionCurso.php">Ver Curso</a>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- EModalDetails-->
                </div>
            </div>
        </section>
        <!-- ESection-->
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
<?php
    include_once "conexionDB.php";
    $id=$_GET['id'];
    $sql = "SELECT * FROM usuario where id_Usuario='$id'";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
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
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="inicioAdmin.php">Inicio</a></li>
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
                            </li>
                        </ul>
                    </form>

                </div>
            </div>
        </nav>
        <!-- ENavigation-->
        <form action="editUsProc.php" method="POST" enctype="multipart/form-data">
          <div class="container my-4">
            <h4><?=$row['nombre']?> <?=$row['apellido']?></h4>
            <div class="input-group">
              <span class="input-group-text">ID Usuario</span>
              <input type="text" class="form-control, col-2, text-center" required="required" name="id" value="<?=$id?>" disabled>
              <input type="hidden" name="id_Usuario" value="<?=$id?>">
            </div></br>
            <div class="input-group">
              <span class="input-group-text">Nombre</span>
              <input type="text" class="form-control, text-center" required="required" name="nombre" value="<?=$row['nombre']?>">
              <span class="input-group-text">Apellido</span>
              <input type="text" class="form-control, text-center" name="apellido" value="<?=$row['apellido']?>">
            </div></br>
            <div class="input-group">
              <span class="input-group-text">Email</span>
              <input type="email" class="form-control, text-center" required="required" name="email" value="<?=$row['email']?>">
            </div></br>
            <div class="input-group">
              <span class="input-group-text">Contraseña</span>
              <input type="password" class="form-control, text-center" required="required" name="contrasena" value="<?=$row['contrasena']?>">
            </div></br>
            <div class="input-group">
              <span class="input-group-text">ID Tipo de Usuario</span>
              <input type="number" class="form-control, col-2, text-center" required="required" name="id_tipo" value="<?=$row['id_Tipo']?>">
            </div></br>
            <button class="btn btn-primary" type="submit">Modificar</button>
            <a href="editarUsuario.php"><button class="btn btn-secondary">Volver</button></a>
          </div>
          </form>
        <!-- Footer-->
        <footer class="py-5 bg-dark mt-5 bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright © 
              Innovacursos 2023</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
    include_once "conexionDB.php";
    $id=$_GET['id'];
    /*Esta consulta es para obtener los datos relacionados al curso como lo son los id de los profesores
    mediante la tabla usuario, el id de las clases, el id de la categoria y el id de las pruebas*/
    $sql = "SELECT * FROM curso c, usuario_curso uc, usuario u, clases l, categoria t, pruebas p WHERE c.id_Curso='$id' AND c.id_Curso=uc.id_Curso AND u.id_Usuario=uc.id_Usuario AND uc.id_Tipo='2' AND l.id_Clases=c.id_Clases AND t.id_Categoria=c.id_Categoria AND c.id_Pruebas=p.id_Pruebas;";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    $id_Usuario=$row['id_Usuario'];
    $id_Clases=$row['id_Clases'];
    $id_Categoria=$row['id_Categoria'];
    $id_Pruebas=$row['id_Pruebas'];
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
        <h2>Editar Curso</h2>
        <hr>
        <form action="editCurProc.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="id" class="col-sm-2 col-form-label">ID Curso</label>
                <div class="col-sm-3">
                <input type="text" required="required" name="id" value="<?=$id?>" disabled>
                <input type="hidden" name="id_Curso" value="<?=$id?>">
                </div>
                <label for="relevancia" class="col-sm-2 col-form-label">Relevancia</label>
                <div class="col-sm-3">
                <input type="text" required="required" name="relevancia" value="<?=$row['relevancia']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nombre_cur" class="col-sm-2 col-form-label">Nombre del curso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombre_cur" value="<?=$row['nombre_cur']?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="profesor" class="col-sm-2 col-form-label">Profesor</label>
                <div class="col-sm-10">
                    <select class="form-control" name="profesor">
                        <option value="<?=$id_Usuario?>"><?=$row['nombre']?> <?=$row['apellido']?></option>
                        <?php
                            $sql2 = "SELECT * FROM usuario WHERE id_Tipo='2' AND NOT id_Usuario='$id_Usuario' AND NOT id_Usuario='0';";
                            $result2 = $conn->query($sql2);
                            while($row2=$result2->fetch_assoc()){?>
                            <?=$id_Usuario?>
                                <option value="<?=$row2['id_Usuario']?>"><?=$row2['nombre']?> <?=$row2['apellido']?></option>"
                            <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="dir_imagen" class="col-sm-2 col-form-label">Directorio imagen </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="dir_imagen" value="<?=$row['dir_imagen']?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="detalles" class="col-sm-2 col-form-label">Detalles del curso </label>
                <div class="col-sm-10">
                    <textarea name="detalles" class="form-control" rows="4" cols="50"><?=$row['detalles']?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
                <div class="col-sm-10">
                    <select class="form-control" name="categoria">
                        <option value="<?=$id_Categoria?>"><?=$row['nombre_cat']?></option>
                        <?php
                            $sql3 = "SELECT * FROM categoria WHERE NOT id_Categoria='$id_Categoria' AND NOT id_Categoria='0';";
                            $result3 = $conn->query($sql3);
                            while($row3=$result3->fetch_assoc()){?>
                                <option value="<?=$row3['id_Categoria']?>"><?=$row3['nombre_cat']?></option>"
                            <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="clases" class="col-sm-2 col-form-label">Clases</label>
                <div class="col-12 w-auto">
                    <div class="table-responsive">
                        
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Número</th>
                            <th>URL</th>
                            <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM clases WHERE id_Clases='$id_Clases';";
                                $result = $conn->query($sql);
                                $row=$result->fetch_assoc();
                                $i=1;
                                while($i<=3){
                            ?>
                                <tr>
                                <td><?=$i?></td>
                                <td><input type="text" name="url<?=$i?>" value="<?=$row['URL_video'.$i]?>"></td>
                                <td><input type="text" name="desc<?=$i?>" value="<?=$row['descripcion'.$i]?>"></td>
                                </tr>
                                <?php
                                $i++;
                                }
                                ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="clases" class="col-sm-2 col-form-label">Pruebas o Examenes</label>
                <div class="col-12 w-auto">
                    <div class="table-responsive">
                        
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Número</th>
                            <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM pruebas WHERE id_Pruebas='$id_Pruebas';";
                                $result = $conn->query($sql);
                                $row=$result->fetch_assoc();
                                $i=1;
                                while($i<=3){
                            ?>
                                <tr>
                                <td><?=$i?></td>
                                <td><input type="text" name="url<?=$i?>" value="<?=$row['URL'.$i]?>"></td>
                                </tr>
                                <?php
                                $i++;
                                }
                                ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Guardar</button>
            <a href="eliminar.php?id=<?=$id?>&tabla=curso" class="btn btn-danger" role="button"><i class="far fa-trash-alt"></i> Eliminar curso</a>
            <div class="offset-md-4 d-flex justify-content-between">
                <div class="text-right">
                </div>
            </div>
        </form>
    </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark mt-5 bottom">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Innovacursos 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
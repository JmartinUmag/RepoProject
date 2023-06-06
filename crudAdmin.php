<?php
    include_once "conexionDB.php";
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
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="inicioAdmin.php">Inicio</a></li>
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
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col bg-dark bg-color m-md-5 my-3 mx-1 rounded">
                        <div class="mt-5">
                            <div class="d-md-flex">
                                <h2 class="flex-shrink-0 text-white mx-4">Sección CRUD</h2>
                                <div class="input-group w-auto">
                                <form class="d-flex" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                                <select class="form-select bg-dark text-white" name="tablaSeleccionada">
                                    <option value="Alumnos">Alumnos</option>
                                    <option value="Profesores">Profesores</option>
                                    <option value="Categorias">Categorías</option>
                                    <option value="Cursos">Cursos</option>
                                    </select>
                                </div>
                                <button type="submit" class="ms-3 btn btn-outline-light" name="submit">Aceptar</button>                        
                                </form>
                            </div>
                        </div>
                        <?php
                        if(isset($_POST['submit'])&& isset($_POST['tablaSeleccionada']))
                        {
                            ?>
                            <table class="table table-striped table-dark my-5">
                            <thead>
                                <?php
                                if($_POST['tablaSeleccionada'] == 'Alumnos'||$_POST['tablaSeleccionada'] == 'Profesores')
                                {
                                ?>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                                <a href='agregarform.php?tabla=usuario'><button class="ms-3 btn btn-outline-light" name="agregar">AGREGAR USUARIO</button></a>    
                                <?php
                                }
                                else if($_POST['tablaSeleccionada'] == 'Cursos')
                                {
                                ?>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre Curso</th>
                                    <th scope="col">Relevancia</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                                <a href='agregarform.php?tabla=curso'><button class="ms-3 btn btn-outline-light" name="agregar">AGREGAR CURSO</button></a>    
                                <?php
                                }
                                else if($_POST['tablaSeleccionada'] == 'Categorias')
                                {
                                ?>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre Categoria</th>
                                    <th scope="col">Opciones</th>
                                </tr>             
                                <a href='agregarform.php?tabla=categoria'><button class="ms-3 btn btn-outline-light" name="agregar">AGREGAR CATEGORIA</button></a>    
                                <?php
                                }
                                ?>
                            </thead>
                            <tbody>
                                <?php
                                    // Verificar si la opción seleccionada es "Alumnos"
                                    if ($_POST['tablaSeleccionada'] === 'Alumnos') {
                                        // Realizar consulta a la base de datos
                                        $sql = "SELECT id_Usuario, nombre, apellido, email FROM Usuario where id_Tipo='3' AND NOT id_Usuario='0'";
                                        $result = $conn->query($sql);
                                        // Verificar si hay resultados
                                        if ($result->num_rows > 0) {
                                            // Mostrar los datos en la tabla
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $row['id_Usuario'] . "</th>";
                                                echo "<td>" . $row['nombre'] . "</td>";
                                                echo "<td>" . $row['apellido'] . "</td>";
                                                echo "<td>" . $row['email'] . "</td>";
                                                echo "<td>";
                                                echo "<a href='editarUsuario.php?id=" . $row['id_Usuario'] . "'><button><i class='bi bi-pen'></i></button></a>";
                                                echo "<a href='eliminar.php?id=" . $row['id_Usuario'] . "&tabla=".'usuario'."'><button><i class='bi bi-trash'></i></button></a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='5'>No se encontraron resultados.</td></tr>";
                                        }
                                        // Cerrar la conexión (opcional si no se utilizará más adelante)
                                        $conn->close();
                                    }
                                    // Verificar si la opción seleccionada es "Profesores"
                                    else if ($_POST['tablaSeleccionada'] === 'Profesores') {
                                        // Realizar consulta a la base de datos
                                        $sql = "SELECT id_Usuario, nombre, apellido, email FROM Usuario where id_Tipo='2' AND NOT id_Usuario='0'";
                                        $result = $conn->query($sql);
                                        // Verificar si hay resultados
                                        if ($result->num_rows > 0) {
                                            // Mostrar los datos en la tabla
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $row['id_Usuario'] . "</th>";
                                                echo "<td>" . $row['nombre'] . "</td>";
                                                echo "<td>" . $row['apellido'] . "</td>";
                                                echo "<td>" . $row['email'] . "</td>";
                                                echo "<td>";
                                                echo "<a href='editarUsuario.php?id=" . $row['id_Usuario'] . "'><button><i class='bi bi-pen'></i></button></a>";
                                                echo "<a href='eliminar.php?id=" . $row['id_Usuario'] . "&tabla=".'usuario'."'><button><i class='bi bi-trash'></i></button></a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='5'>No se encontraron resultados.</td></tr>";
                                        }

                                        // Cerrar la conexión (opcional si no se utilizará más adelante)
                                        $conn->close();
                                    }
                                    // Verificar si la opción seleccionada es "Categorias"
                                    else if ($_POST['tablaSeleccionada'] === 'Categorias') {
                                        // Realizar consulta a la base de datos
                                        $sql = "SELECT * FROM Categoria WHERE NOT id_Categoria='0'";
                                        $result = $conn->query($sql);

                                        // Verificar si hay resultados
                                        if ($result->num_rows > 0) {
                                            // Mostrar los datos en la tabla
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $row['id_Categoria'] . "</th>";
                                                echo "<td>" . $row['nombre_cat'] . "</td>";
                                                echo "<td>";
                                                #Ver a donde redirigir
                                                #
                                                #
                                                #
                                                #echo "<a href='editarUsuario.php?id=" . $row['id_Categoria'] . "'><button><i class='bi bi-pen'></i></button></a>";
                                                echo "<a href='eliminar.php?id=" . $row['id_Categoria'] . "&tabla=".'categoria'."'><button><i class='bi bi-trash'></i></button></a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
                                        }

                                        // Cerrar la conexión (opcional si no se utilizará más adelante)
                                        $conn->close();
                                    }
                                    // Verificar si la opción seleccionada es "Cursos"
                                    else if ($_POST['tablaSeleccionada'] == 'Cursos') {
                                        // Realizar consulta a la base de datos
                                        $sql = "SELECT C.id_Curso, C.nombre_cur, C.relevancia, K.nombre_cat FROM Curso C, Categoria K WHERE C.id_Categoria=K.id_Categoria";
                                        $result = $conn->query($sql);
                                        // Verificar si hay resultados
                                        if ($result->num_rows > 0) {
                                            // Mostrar los datos en la tabla
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $row['id_Curso'] . "</th>";
                                                echo "<td>" . $row['nombre_cur'] . "</td>";
                                                echo "<td>" . $row['relevancia'] . "</td>";
                                                echo "<td>" . $row['nombre_cat'] . "</td>";
                                                echo "<td>";
                                                echo "<a href='editarCurso.php?id=" . $row['id_Curso'] . "'><button><i class='bi bi-pen'></i></button></a>";
                                                echo "<a href='eliminar.php?id=" . $row['id_Curso'] . "&tabla=".'curso'."'><button><i class='bi bi-trash'></i></button></a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='5'>No se encontraron resultados.</td></tr>";
                                        }

                                        // Cerrar la conexión (opcional si no se utilizará más adelante)
                                        $conn->close();
                                    }
                                    else if (isset($_POST['submit']) && $_POST['tablaSeleccionada'] == 'Opcion') {

                                        // Cerrar la conexión (opcional si no se utilizará más adelante)
                                        $conn->close();
                                    }
                                    else {
                                        echo "<tr><td colspan='4'>No se encontraron resultados.</td></tr>";
                                    }
                                ?>
                                </tbody>
                            </table>
                        <?php
                        }
                        ?>
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

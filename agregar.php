<?php
    include_once "conexionDB.php";
{
    $tabla=$_POST['tabla'];
        if($tabla=="usuario")
        {
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $email=$_POST['email'];
            $contrasena=$_POST['contrasena'];
            $id_tipo=$_POST['id_tipo'];
            $query="INSERT INTO usuario(nombre, apellido, email, contrasena, id_Tipo) VALUES ( '$nombre', '$apellido', '$email', '$contrasena', '$id_tipo')";
            $resultado=$conn->query($query);
        }
        else if($tabla=="curso")
        {
            $nombre=$_POST['nombre'];
            $detalles=$_POST['detalles'];
            $dir_imagen=$_POST['dir_imagen'];
            $relevancia=$_POST['relevancia'];
            $query="INSERT INTO pruebas(URL1, URL2, URL3) VALUES ( NULL, NULL, NULL)";
            $resultado=$conn->query($query);
            $id_Pruebas = mysqli_insert_id($conn);
            $query="INSERT INTO clases(URL_video1, URL_video2, URL_video3, descripcion1, descripcion2, descripcion3) VALUES ( NULL, NULL, NULL, NULL, NULL, NULL)";
            $resultado=$conn->query($query);
            $id_Clases = mysqli_insert_id($conn);
            $query="INSERT INTO curso(nombre_cur, detalles, dir_imagen, relevancia, id_Categoria, id_Pruebas, id_Clases) VALUES ( '$nombre', '$detalles', '$dir_imagen', '$relevancia', '0', '$id_Pruebas', '$id_Clases')";
            $resultado=$conn->query($query);
            $id_Curso = mysqli_insert_id($conn);
            $query="INSERT INTO usuario_curso(id_Usuario, id_Curso, id_Notas, id_Tipo, avance) VALUES ( '0', '$id_Curso', NULL, '2', NULL)";
            $resultado=$conn->query($query);
        }
        else if($tabla=="categoria")
        {
            $nombre=$_POST['nombre'];
            $inicio=$_POST['inicio'];
            $query="INSERT INTO categoria(nombre_cat, inicio) VALUES ( '$nombre', '$inicio')";
            $resultado=$conn->query($query);
        }
        if($resultado)
        {
            header("Location: crudAdmin.php");
        }
        else
        {
            echo "No se ha podido ingresar el dato";
        }
}
?>
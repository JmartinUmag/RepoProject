<?php
    include_once "conexionDB.php";
{
    $id=$_GET['id'];
    $tabla=$_GET['tabla'];

        $query="DELETE FROM $tabla WHERE id_Usuario=$id";
        $resultado=$conn->query($query);
            
        if($resultado)
        {
            header("Location: crudAdmin.php");
        }
        else
        {
            echo "No se puede eliminar el producto";
        }
}
?>
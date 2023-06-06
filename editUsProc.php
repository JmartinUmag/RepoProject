<?php
  include_once "conexionDB.php";
    $id_Usuario=$_POST['id_Usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];
    $id_tipo=$_POST['id_tipo'];
    $sql="SELECT * FROM usuario WHERE id_Usuario=$id_Usuario";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    
  if($nombre!=$row['nombre']||$apellido!=$row['apellido']||$email!=$row['email']||$contrasena!=$row['contrasena']||$id_tipo!=$row['id_tipo'])
  {
    $sql = "UPDATE usuario SET nombre='$nombre', apellido='$apellido', email='$email', contrasena='$contrasena', id_Tipo='$id_tipo' WHERE id_Usuario='$id_Usuario'";
    $result=$conn->query($sql);
    if($result)
    {
      header("Location:crudAdmin.php");
    }
    else
    {
      echo "No se ha podido modificar el usuario";
    }
  }
  else
  {
    echo "No se ha modificado el usuario";
  }
?>
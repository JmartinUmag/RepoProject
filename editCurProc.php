<?php
  include_once "conexionDB.php";
  $id_Curso=$_POST['id_Curso'];
  $nombre_cur=$_POST['nombre_cur'];
  $relevancia=$_POST['relevancia'];
  $id_profesor=$_POST['profesor'];
  $dir_imagen=$_POST['dir_imagen'];
  $detalles=$_POST['detalles'];
  $id_Categoria=$_POST['categoria'];
  $sql = "SELECT * FROM curso c, usuario_curso uc, usuario u, categoria t WHERE c.id_Curso='$id_Curso' AND c.id_Curso=uc.id_Curso AND u.id_Usuario=uc.id_Usuario AND uc.id_Tipo='2' AND t.id_Categoria=c.id_Categoria;";
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();

  if($nombre_cur!=$row['nombre_cur']||$relevancia!=$row['relevancia']||$id_profesor!=$row['id_Usuario']||$dir_imagen!=$row['dir_imagen']||$detalles!=$row['detalles']||$id_Categoria!=$row['id_Categoria'])
  {
    $sql = "UPDATE curso SET nombre_cur='$nombre_cur', detalles='$detalles', dir_imagen='$dir_imagen', relevancia='$relevancia', id_Categoria='$id_Categoria' WHERE id_Curso='$id_Curso';";
    $result=$conn->query($sql);
    
    $sql = "UPDATE usuario_curso SET id_Usuario='$id_profesor' WHERE id_Curso='$id_Curso';";
    $result2=$conn->query($sql);
    
    if($result&&$result2)
    {
      header("Location:crudAdmin.php");
    }
    else
    {
      echo "No se ha podido modificar el curso";
    }
  }
  else
  {
    echo "No se ha modificado el curso";
  }
?>
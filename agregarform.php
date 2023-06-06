<?php
    include_once "conexionDB.php";
    $tabla=$_GET['tabla'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de imagenes</title>
</head>
<body>
    <form action="agregar.php" method="POST" enctype="multipart/form-data">
    <?php if($tabla=="usuario") { ?>
    <p>    
        Nombre:
        <input type="text" required="required" name="nombre">
    </p>
    <p>    
        Apellido:
        <input type="text" name="apellido">
    </p>
    <p>
        EMAIL:
        <input type="text" required="required" name="email">
    </p>
    <p>    
        Contraseña:
        <input type="password" required="required" name="contrasena">
    </p>
    <p>    
        ID Tipo:
        <input type="number" required="required" name="id_tipo">
    </p>
    <input type="hidden" name="tabla" value="<?=$tabla?>">
        <button type="submit">Ingresar</button>
    </p>
    <?php } ?>
    <?php if($tabla=="curso") { ?>
    <p>
        Nombre:
        <input type="text" required="required" name="nombre">
    </p>
    <p>    
        Detalles:
        <input type="text" name="detalles">
    </p>
    <p>
        Direccion Imagen:
        <input type="text" name="dir_imagen">
    </p>
    <p>    
        Relevancia:
        <input type="text" name="relevancia">
    </p>
    <p>    
        ID Categoria:
        <input type="number" name="id_categoria" value="0">
    </p>
    <input type="hidden" name="tabla" value="<?=$tabla?>">
        <button type="submit">Ingresar</button>
    </p>
    <?php } ?>
    <?php if($tabla=="categoria") { ?>
    <p>    
        Nombre:
        <input type="text" required="required" name="nombre">
    </p>
    <p>    
        Inicio:
        <input type="number" name="inicio" value="0">
    </p>
    <input type="hidden" name="tabla" value="<?=$tabla?>">
        <button type="submit">Ingresar</button>
    </p>
    <?php } ?>
    </form>
</body>
</html>
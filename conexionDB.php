<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "innovacursos";

// Establecer conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>

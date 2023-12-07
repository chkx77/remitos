<?php

$servername = "localhost";
$username = "id21582866_francor";
$password = "Ciromilo77+";
$database = "id21582866_remitos";
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
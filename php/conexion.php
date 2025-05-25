<?php
//DATOS CONEXIÓN A BASE DE DATOS, DEBE COINCIDIR CON EL Dockerfile
$servername = "db";  //PMA_HOST
$username = "root";  //siempre root
$password = "root";  //MYSQL_ROOT_PASSWORD
$dbname = "cine";
// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
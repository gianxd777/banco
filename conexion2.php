<?php
$servername = "localhost"; // o la dirección de tu servidor
$username = "root"; // tu usuario de MySQL
$password = ""; // tu contraseña de MySQL (déjalo vacío si no tienes contraseña)
$dbname = "prestamos_db"; // nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

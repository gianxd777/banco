<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thebest";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dni = $_POST['dni'];
$address = $_POST['address'];
$workplace = $_POST['workplace'];
$school = $_POST['school'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$referral = $_POST['referral'];

$monto = $_POST['monto'];
$plazo = $_POST['plazo'];
$tipo = $_POST['tipo'];

// Cálculo de los detalles del préstamo
$interest = 0.12; // Este es solo un ejemplo, el cálculo debería depender del monto
$monthlyPayment = $monto * (1 + $interest) / $plazo;
$totalAmount = $monto + ($monto * $interest);

// Insertar los detalles del préstamo
$sql = "INSERT INTO prestamos (usuario_id, monto, plazo, tipo, interes, cuota_mensual, total_a_pagar, fecha_solicitud) VALUES (1, $monto, $plazo, '$tipo', $interest, $monthlyPayment, $totalAmount, NOW())";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Préstamo solicitado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

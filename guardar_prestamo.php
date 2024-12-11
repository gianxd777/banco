<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_prestamos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['firstName'];
$apellido = $_POST['lastName'];
$dni = $_POST['dni'];
$direccion = $_POST['address'];
$lugar_trabajo = $_POST['workplace'];
$lugar_estudio = $_POST['school'];
$telefono1 = $_POST['phone1'];
$telefono2 = $_POST['phone2'];
$referencia = $_POST['referral'];
$monto = $_POST['monto'];
$tipo_prestamo = $_POST['tipo'];
$plazo = $_POST['plazo'];
$interes = $_POST['interest'];  // El valor de interés
$cuota_mensual = $_POST['monthlyPayment'];  // Cuota mensual
$total_a_pagar = $_POST['totalAmount'];  // Total a pagar

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO prestamos (nombre, apellido, dni, direccion, lugar_trabajo, lugar_estudio, telefono1, telefono2, referencia, monto, tipo_prestamo, plazo, interes, cuota_mensual, total_a_pagar)
        VALUES ('$nombre', '$apellido', '$dni', '$direccion', '$lugar_trabajo', '$lugar_estudio', '$telefono1', '$telefono2', '$referencia', '$monto', '$tipo_prestamo', '$plazo', '$interes', '$cuota_mensual', '$total_a_pagar')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo '<div class="success-message"><span class="check-icon">&#10004;</span> Préstamo solicitado exitosamente</div>';
} else {
    echo '<div class="error-message"><span class="error-icon">&#10008;</span> Error: ' . $conn->error . '</div>';
}

// Cerrar la conexión
$conn->close();
?>

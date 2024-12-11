<?php
// Incluir la conexión a la base de datos
include('conexion.php');

// Verificar si los datos fueron enviados mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    $usuario = $_POST['Usuario'];
    $nombreCompleto = $_POST['NombreCompleto']; // Asegúrate de tener este campo en el formulario
    $clave = $_POST['Clave'];
    $confirmarClave = $_POST['ConfirmarClave'];

    // Verificar que las contraseñas coincidan
    if ($clave != $confirmarClave) {
        // Si las contraseñas no coinciden, redirigir al formulario con un mensaje de error
        header("Location: CrearCuenta.php?error=Las contraseñas no coinciden");
        exit();
    }

    // No realizar hash en la contraseña, solo tomarla como está
    $claveSinEncriptar = $clave;

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (Usuario, NombreCompleto, Contraseña, Clave) 
            VALUES ('$usuario', '$nombreCompleto', '$claveSinEncriptar', NULL)";  // La columna "Clave" se deja como NULL si no se utiliza

    if (mysqli_query($conexion, $sql)) {
        // Si la inserción es exitosa, redirigir a la página de inicio de sesión
        header("Location: IniciarSesion.php?success=Cuenta creada con éxito");
    } else {
        // Si ocurre un error al insertar los datos
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

<?php
session_start();
include('conexion.php'); // Asegúrate de que la conexión esté bien definida en el archivo 'conexion.php'

if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {

    // Función para limpiar los datos (prevenir inyecciones SQL)
    function validate($data) {
        $data = trim($data);  // Eliminar espacios en blanco al principio y al final
        $data = stripslashes($data);  // Eliminar barras invertidas
        $data = htmlspecialchars($data);  // Convertir caracteres especiales en HTML
        return $data;
    }

    $usuario = validate($_POST['Usuario']);
    $clave = validate($_POST['Clave']);

    // Validar que los campos no estén vacíos
    if (empty($usuario)) {
        header("Location: Index.php?error=El Usuario Es Requerido");
        exit();
    } elseif (empty($clave)) {
        header("Location: Index.php?error=La Clave Es Requerida");
        exit();
    } else {
        // Consulta para verificar que el usuario exista y la contraseña sea correcta
        $sql = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Contraseña = '$clave'";
        $result = mysqli_query($conexion, $sql);

        // Si se encuentra el usuario en la base de datos
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // Verificar que el usuario y la contraseña coincidan
            if ($row['Usuario'] === $usuario && $row['Contraseña'] === $clave) {
                // Guardar la información del usuario en la sesión
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Nombre_Completo'] = $row['NombreCompleto'];
                $_SESSION['Id'] = $row['id']; // Asumí que 'id' es el identificador del usuario

                // Redirigir al área de inicio después de un inicio de sesión exitoso
                header("Location: Inicio.php");
                exit();
            } else {
                header("Location: Index.php?error=El usuario o la clave son incorrectos");
                exit();
            }
        } else {
            header("Location: Index.php?error=El usuario o la clave son incorrectos");
            exit();
        }
    }
} else {
    // Si no se envían los datos mediante POST, redirigir a la página de inicio de sesión
    header("Location: Index.php");
    exit();
}
?>

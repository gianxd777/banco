<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Crear Cuenta</title>

    <link rel="stylesheet" href="banco.css">
</head>
<body>
    <form action="RegistrarCuenta.php" method="POST">
        <h1>Crear Cuenta</h1>
        <hr>

        <!-- Mostrar errores si existen -->
        <?php 
            if (isset($_GET['error'])) {
        ?>
            <p class="error">
                <?php
                echo $_GET['error'];
                ?>
            </p>
        <?php    
            }
        ?>

        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Nombre de Usuario</label>
        <input type="text" name="Usuario" placeholder="Ingresa tu nombre de usuario" required>

        <i class="fa-solid fa-user"></i>
        <label>Nombre Completo</label>
        <input type="text" name="NombreCompleto" placeholder="Ingresa tu nombre completo" required>

        <i class="fa-solid fa-envelope"></i>
        <label>Correo Electrónico</label>
        <input type="email" name="Correo" placeholder="Ingresa tu correo electrónico" required>

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="Clave" placeholder="Crea una contraseña" required>

        <i class="fa-solid fa-unlock"></i>
        <label>Confirmar Clave</label>
        <input type="password" name="ConfirmarClave" placeholder="Confirma tu contraseña" required>

        <hr>
        <button type="submit">Crear Cuenta</button>
        <a href="IniciarSesion.php">Ya tengo cuenta</a>
    </form>
</body>
</html>

<?php
// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Inicializar variable para almacenar mensajes
$message = '';
$messageType = ''; // Agregar tipo de mensaje

// Si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM ticket WHERE Nombre = :nombre AND Apellido = :apellido";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    
    $stmt->execute();
    
    // Comprobar si se encontró un registro
    if ($stmt->rowCount() > 0) {
        $message = "¡Bienvenido, $nombre! Has iniciado sesión exitosamente.";
        $messageType = "success"; // Tipo de mensaje exitoso
    } else {
        $message = "Error de Login. Por favor verifica tus datos.";
        $messageType = "error"; // Tipo de mensaje de error
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<header>
    <div class="header-container">
        <nav>
            <ul>
                <a href="index.php">
                    <img src="img/logo.png" alt="Logo" class="logo">
                </a>
                <li class="login-icon"><a href="login.php"><i class="fas fa-user-circle"></i></a></li>
                <li><a href="valores.php">Valores</a></li>
                <li><a href="quienes_somos.php">Quienes somos</a></li>
                <li><a href="seguros.php">Tipos de seguros</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="form-container">
    <h2>Iniciar Sesión</h2>
    <form action="" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <button type="submit" class="btn-submit">Iniciar Sesión</button>
        <button type="button" class="btn-submit" onclick="location.href='registro.php'">Registrarse</button>
    </form>

    <!-- Mostrar mensaje si hay mensaje -->
    <?php if ($message): ?>
        <div class="alert <?php echo $messageType; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
</div>

<footer>
    <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
</footer>
</body>
</html>

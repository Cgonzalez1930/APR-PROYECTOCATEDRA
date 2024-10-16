<?php
// Incluir el archivo de conexión a la base de datos
require 'conexion.php';

// Inicializar variable para almacenar mensajes
$message = '';

// Si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_origen = date("Y-m-d"); // Fecha actual

    // Consulta SQL para insertar los datos en la tabla 'ticket' (sin Id_estado)
    $sql = "INSERT INTO ticket (Nombre, Apellido, Email, Telefono, Fecha_origen)
            VALUES (:nombre, :apellido, :email, :telefono, :fecha_origen)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':apellido', $apellido);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':fecha_origen', $fecha_origen);

    // Ejecutar la consulta una sola vez
    if ($stmt->execute()) {
        $message = "Registro guardado correctamente.";
    } else {
        $message = "Error al guardar el registro.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <h2>Registro</h2>
        <form action="" method="POST" onsubmit="return validarFormulario()">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
            <input type="email" id="email" name="email" placeholder="Correo electrónico">
            <input type="text" id="telefono" name="telefono" placeholder="Número de celular" maxlength="8">
            <button type="submit" class="btn-submit">Registrar</button>
        </form>
    </div>

    <script src="js/javascript.js"></script>

    <?php if ($message): ?>
        <script>
            Swal.fire({
                title: "<?php echo $message; ?>",
                icon: "<?php echo ($message === 'Registro guardado correctamente.' ? 'success' : 'error'); ?>",
                confirmButtonText: 'Aceptar'
            });
        </script>
    <?php endif; ?>

    <footer>
        <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

<?php
// Incluir la conexión a la base de datos
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Validaciones adicionales (si fuera necesario)
    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $nombre)) {
        die("El nombre contiene caracteres no válidos.");
    }
    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $apellido)) {
        die("El apellido contiene caracteres no válidos.");
    }

    try {
        // Preparar la consulta de inserción
        $stmt = $conn->prepare("INSERT INTO ticket (Nombre, Apellido, Email, Telefono, Fecha_origen, Id_estado) VALUES (:nombre, :apellido, :email, :telefono, NOW(), 1)");

        // Ligar los parámetros a la consulta
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            session_start(); // Iniciar sesión
            $_SESSION['toast'] = 'Registro insertado correctamente.'; // Almacenar el mensaje en la sesión
        
            // Redirigir a index.php
            header('Location: index.php');
            exit;

        } else {
            echo "Error al insertar el registro.";
        }
    } catch (PDOException $e) {
        echo "Error en la inserción: " . $e->getMessage();
    }
}
?>

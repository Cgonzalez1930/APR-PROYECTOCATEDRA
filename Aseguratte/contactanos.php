<?php
require 'insertar.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="header-container">
        <nav>
            <ul>
                <a href="index.php">
                    <img src="img/logo.png" alt="Logo" class="logo">
                </a>
                <li><a href="valores.php">Valores</a></li>
                <li><a href="quienes_somos.php">Quienes somos</a></li>
                <li><a href="seguros.php">Tipos de seguros</a></li>
                <li><a href="contactanos.php">contactanos</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="form-container">
    <h4>Nos contactaremos contigo</h2>
    <form method="POST" action="insertar.php">
            <div class="mb-3 mt-5">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required pattern="[0-9]{10}" title="Debe ingresar un número de teléfono válido de 10 dígitos">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
</div>

<footer>
    <p>&copy; 2024 Aseguratte. Todos los derechos reservados.</p>
</footer>
</body>
</html>

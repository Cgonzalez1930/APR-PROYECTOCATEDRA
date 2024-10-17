<?php
include 'conexion.php';

// Inicializar variables para el toast
$showToast = false;
$toastMessage = ''; // Inicializar la variable aquí

session_start(); // Iniciar sesión

// Verificar si hay un mensaje en la sesión
if (isset($_SESSION['toast'])) {
    $showToast = true;
    $toastMessage = htmlspecialchars($_SESSION['toast']);
    unset($_SESSION['toast']); // Limpiar el mensaje después de mostrarlo
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Incluir Font Awesome para los íconos -->
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
                <li><a href="quienes_somos.php">¿Quienes somos?</a></li>
                <li><a href="seguros.php">Tipos de seguros</a></li>
                <li><a href="valores.php">Nuestros valores</a></li>
                <li><a href="contactanos.php">contactanos</a></li>

            </ul>
        </nav>
    </div>
</header>
<div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="<?= $showToast ? 'display: block;' : 'display: none;' ?>">
            <div class="toast-header">
                <strong class="me-auto">Notificación</strong>
                <small><?= date('h:i A'); ?></small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $toastMessage; ?>
            </div>
        </div>
    </div>
</div>
    <main>
        <section class="contenido-principal">
            <div class="texto">
                <h1>ASEGURATTE</h1>
                <h2>#AseguratteSiempreContigo</h2>
            </div>

            <div class="cuadro-celeste estandar" style="top: 65px; left: 950px;"></div> <!-- Tamaño estándar -->
            <div class="cuadro-celeste grande" style="top: 250px; left: 1100px;"></div> <!-- Tamaño diferente -->
            <div class="cuadro-celeste estandar" style="top: 250px; left: 700px;"></div> <!-- Tamaño estándar -->
            <div class="cuadro-celeste estandar" style="top: 395px; left: 550px;"></div> <!-- Tamaño estándar -->
            <div class="cuadro-celeste grande" style="top: 500px; left: 850px;"></div> <!-- Tamaño diferente -->

            <div class="imagenes">
                <div class="imagen-cuadro">
                    <img src="img/imagen1.jpg" alt="edificio">
                </div>
                <div class="imagen-cuadro">
                    <img src="img/imagen2.jpg" alt="familia">
                </div>
                <div class="imagen-cuadro">
                    <img src="img/imagen3.jpg" alt="familia2">
                </div>
                <div class="imagen-cuadro">
                    <img src="img/imagen4.jpg" alt="mujer">
                </div>
                <div class="imagen-cuadro">
                    <img src="img/imagen5.jpg" alt="trabajo">
                </div>
                <div class="imagen-cuadro">
                    <img src="img/imagen6.jpg" alt="moto">
                </div>
                <div class="imagen-cuadro">
                    <img src="img/imagen7.jpg" alt="mujer2">
                </div>
            </div>

        </section>
    </main>

    <footer>
        <p>&copy; 2024 Aseguratte. Todos los derechos reservados.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Mostrar el toast si está configurado
        $(document).ready(function() {
            <?php if ($showToast): ?>
                var toast = new bootstrap.Toast($('#liveToast'));
                toast.show();
            <?php endif; ?>
        });
    </script>
</body>
</html>

<?php
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
        <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

<?php
$servidor = $_SERVER['SERVER_NAME'] ?? 'localhost';
$fecha = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Caso Práctico Nginx y PHP</title>
</head>
<body>
    <h1>Servidor Nginx con PHP-FPM</h1>
    <p>Host: <?php echo htmlspecialchars($servidor); ?></p>
    <p>Fecha: <?php echo $fecha; ?></p>
</body>
</html>

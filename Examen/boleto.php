<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$funcion = $_POST['funcion'];
$es_estudiante = isset($_POST['estudiante']) && $_POST['estudiante'] === 'si';

$precio_base = 0;
$descuento = 0;
$tipo_descuento = "Ninguno";

// Define el precio segun la funcion
switch ($funcion) {
    case "2D":
        $precio_base = 40;
        break;
    case "3D":
        $precio_base = 60;
        break;
    case "IMAX":
        $precio_base = 85;
        break;
    case "VIP":
        $precio_base = 105;
        break;
}

// nos da el descuento o lo determina
if ($edad <= 12) {
    $descuento = 0.20;
    $tipo_descuento = "Niño (20%)";
} elseif ($edad >= 65) {
    $descuento = 0.25;
    $tipo_descuento = "Adulto Mayor (25%)";
} elseif ($es_estudiante) {
    $descuento = 0.15;
    $tipo_descuento = "Estudiante (15%)";
}

$precio_final = $precio_base - ($precio_base * $descuento);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Boleto Generado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <div>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
        <p><strong>Función:</strong> <?php echo $funcion; ?></p>
        <p><strong>Precio Base:</strong> $<?php echo number_format($precio_base, 2); ?> MXN</p>
        <p><strong>Descuento:</strong> <?php echo $tipo_descuento; ?></p>
        <p><strong>Precio Final:</strong> $<?php echo number_format($precio_final, 2); ?> MXN</p>
    </div>
</body>
</html>
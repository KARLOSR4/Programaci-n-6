<?php
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
    $num1 = $_POST["num1"] ?? 0;
    $num2 = $_POST["num2"] ?? 0;
    $operacion = $_POST["operacion"] ?? '';

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $resultado = "Por favor ingrese números válidos.";
    } else {
        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "No se puede dividir entre 0.";
                }
                break;
            default:
                $resultado = "Operación no válida.";
        }
    }
} else {
    $resultado = "No se recibieron datos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            margin: 0;
        }

        .resultado {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        .resultado a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #0084ff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .resultado a:hover {
            background-color: #005fcc;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <h2>Resultado:</h2>
        <p><?php echo htmlspecialchars($resultado); ?></p>
        <a href="calculadora.html">Volver</a>
    </div>
</body>
</html>
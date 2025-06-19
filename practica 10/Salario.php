<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Salario</title>
    <link rel="stylesheet" href="salario.css">

</head>
<body>
    <h2>Cálculo de Salario</h2>

    <form method="POST">
        <label>Empleado:</label>
        <input type="text" name="empleado" required><br><br>

        <label>Horas trabajadas:</label>
        <input type="number" name="horas" required><br><br>

        <label>Categoría:</label>
        <select name="categoria" required>
            <option value="jefe">Jefe ($460/hr)</option>
            <option value="administrativo">Administrativo ($350/hr)</option>
            <option value="operador">Operador ($270/hr)</option>
            <option value="practicante">Practicante ($150/hr)</option>
        </select><br><br>

      

        <input type="submit" name="procesar" value="Procesar">
    </form>

    <?php

    if (isset($_POST['procesar'])) {
        $empleado = $_POST['empleado'];
        $horas = $_POST['horas'];
        $categoria = $_POST['categoria'];
    

        // Asignar pago por hora según categoría
        switch ($categoria) {
            case "jefe": $pagoHora = 460; break;
            case "administrativo": $pagoHora = 350; break;
            case "operador": $pagoHora = 270; break;
            case "practicante": $pagoHora = 150; break;
            default: $pagoHora = 0;
        }
        $porcentaje=10;
        $salarioBruto = $horas * $pagoHora;
        $descuento = $salarioBruto * ($porcentaje / 100);
        $salarioNeto = $salarioBruto - $descuento;

        echo "<h3>Resultados:</h3>";
        echo "<div class='resultados'>";
        echo "Empleado: $empleado<br>";
        echo "Horas trabajadas: $horas<br>";
        echo "Salario Bruto: $$salarioBruto<br>";
        echo "Descuento: $$porcentaje<br>";
        echo "Salario Neto: $$salarioNeto<br>";
        echo "</div>";
    }
    ?>
</body>
</html>
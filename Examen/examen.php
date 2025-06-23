<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación de Calificaciones</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .radio-group {
            display: flex;
            gap: 15px;
        }
        .radio-option {
            display: flex;
            align-items: center;
        }
        .calificaciones-container {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        .calificacion-input {
            flex: 1;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 20px auto;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        .resultado {
            margin-top: 30px;
            padding: 20px;
            background-color: #e8f4fc;
            border-radius: 8px;
            border-left: 5px solid #3498db;
        }
        .resultado h2 {
            color: #2c3e50;
            margin-top: 0;
        }
        .resultado p {
            margin: 8px 0;
        }
        .estatus {
            font-weight: bold;
            font-size: 18px;
        }
        .exento {
            color: #27ae60;
        }
        .ordinario {
            color: #f39c12;
        }
        .reprobado {
            color: #e74c3c;
        }
        .university-header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .university-name {
            font-weight: bold;
            font-size: 18px;
            color: #2c3e50;
        }
        .faculty {
            font-size: 14px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="university-header">
            <div class="university-name">UNIVERSIDAD DE MATAMOROS</div>
            <div class="faculty">FACULTAD DE INGENIERÍA EN SISTEMAS Y AUTOMATIZACIÓN</div>
            <div class="faculty">PROGRAMACIÓN V</div>
            <div>Ing. Alexia del Carmen Castro Vázquez</div>
        </div>

        <h1>Evaluación de Calificaciones</h1>
        
        <form method="post" action="">
            <div class="form-group">
                <label for="nombre">Nombre del Alumno:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label>Género:</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="hombre" name="genero" value="Hombre" required>
                        <label for="hombre">Hombre</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="mujer" name="genero" value="Mujer">
                        <label for="mujer">Mujer</label>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="materia">Materia:</label>
                <select id="materia" name="materia" required>
                    <option value="">Seleccione una materia</option>
                    <option value="Programación">Programación</option>
                    <option value="Matemáticas">Matemáticas</option>
                    <option value="Física">Física</option>
                    <option value="Inglés">Inglés</option>
                    <option value="Historia">Historia</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Calificaciones:</label>
                <div class="calificaciones-container">
                    <div class="calificacion-input">
                        <label for="parcial1">1er Parcial:</label>
                        <input type="number" id="parcial1" name="parcial1" min="0" max="100" required>
                    </div>
                    <div class="calificacion-input">
                        <label for="parcial2">2do Parcial:</label>
                        <input type="number" id="parcial2" name="parcial2" min="0" max="100" required>
                    </div>
                    <div class="calificacion-input">
                        <label for="parcial3">3er Parcial:</label>
                        <input type="number" id="parcial3" name="parcial3" min="0" max="100" required>
                    </div>
                </div>
            </div>
            
            <button type="submit">Calcular Calificación Final</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener datos del formulario
            $nombre = $_POST["nombre"];
            $genero = $_POST["genero"];
            $materia = $_POST["materia"];
            $parcial1 = $_POST["parcial1"];
            $parcial2 = $_POST["parcial2"];
            $parcial3 = $_POST["parcial3"];
            
            // Calcular promedio
            $promedio = ($parcial1 + $parcial2 + $parcial3) / 3;
            $promedio_redondeado = round($promedio, 1);
            
            // Determinar estatus
            if ($promedio <= 69) {
                $estatus = "REPROBADO";
                $clase_estatus = "reprobado";
            } elseif ($promedio >= 70 && $promedio <= 95) {
                $estatus = "ORDINARIO";
                $clase_estatus = "ordinario";
            } else {
                $estatus = "EXENTO";
                $clase_estatus = "exento";
            }
            
            // Mostrar resultados
            echo '<div class="resultado">';
            echo '<h2>Resultado de Evaluación</h2>';
            echo '<p><strong>Nombre:</strong> ' . htmlspecialchars($nombre) . '</p>';
            echo '<p><strong>Género:</strong> ' . htmlspecialchars($genero) . '</p>';
            echo '<p><strong>Materia:</strong> ' . htmlspecialchars($materia) . '</p>';
            echo '<p><strong>Calificaciones:</strong> ' . $parcial1 . ', ' . $parcial2 . ', ' . $parcial3 . '</p>';
            echo '<p><strong>Promedio Final:</strong> ' . $promedio_redondeado . '</p>';
            echo '<p><strong>Estatus:</strong> <span class="estatus ' . $clase_estatus . '">' . $estatus . '</span></p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
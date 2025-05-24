<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1551519642-3a26558be311?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGFpc2FqZSUyMGRlJTIwcGFyJUMzJUFEc3xlbnwwfHwwfHx8MA%3D%3D');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculadora {
            background-color: rgba(31, 86, 30, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            width: 300px;
            box-sizing: border-box;
        }

        input, select, button {
            background-color: rgba(181, 24, 92, 0.9);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input::placeholder {
            color: black;
            opacity: 1;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
        }
    </style>
</head>
<body>
    <div class="calculadora">
        <h2>CALCULADORA</h2>
        <form action="procesar.php" method="POST">
            <input type="number" name="num1" placeholder="Primer Número" required>
            <input type="number" name="num2" placeholder="Segundo Número" required>
            <select name="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
            <button type="submit" name="calcular">CALCULAR</button>
        </form>
    </div>
</body>
</html>
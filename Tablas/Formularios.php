<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tablas de Multiplicar con PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background:rgba(241, 97, 97, 0.9);
      padding: 20px;
    }

    .formulario {
      background: white;
      padding: 25px;
      margin: 10px auto;
      width: 250px;
      border-radius: 30px;
      box-shadow: 0 0 15px rgba(114, 248, 107, 0.1);
      background-color:rgb(71, 179, 236);
    }

    h3 {
      text-align: center;
      color: #333;
    }

    input[type="number"], button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      font-size: 16px;
      background-color:rgb(226, 237, 243);


    }

    .resultado {
      background-color:rgb(144, 205, 238);
      margin-top: 15px;
      padding: 10px;
      border-radius: 5px;
      font-family: monospace;
    }
  </style>
</head>
<body>

  <!-- FOR -->
  <div class="formulario">
    <h3>Tabla con FOR</h3>
    <form method="post">
      <input type="number" name="numero_for" placeholder="Número" required>
      <button type="submit">Generar con FOR</button>
    </form>

    <?php
    if (isset($_POST['numero_for'])) {
        $num = intval($_POST['numero_for']);
        echo "<div class='resultado'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$i x $num = " . ($i * $num) . "<br>";
        }
        echo "</div>";
    }
    ?>
  </div>

  <!-- WHILE -->
  <div class="formulario">
    <h3>Tabla con WHILE</h3>
    <form method="post">
      <input type="number" name="numero_while" placeholder="Número" required>
      <button type="submit">Generar con WHILE</button>
    </form>

    <?php
    if (isset($_POST['numero_while'])) {
        $num = intval($_POST['numero_while']);
        $i = 1;
        echo "<div class='resultado'>";
        while ($i <= 10) {
            echo "$i x $num = " . ($i * $num) . "<br>";
            $i++;
        }
        echo "</div>";
    }
    ?>
  </div>

  <!-- DO WHILE -->
  <div class="formulario">
    <h3>Tabla con DO WHILE</h3>
    <form method="post">
      <input type="number" name="numero_do" placeholder="Número" required>
      <button type="submit">Generar con DO WHILE</button>
    </form>

    <?php
    if (isset($_POST['numero_do'])) {
        $num = intval($_POST['numero_do']);
        $i = 1;
        echo "<div class='resultado'>";
        do {
            echo "$i x $num = " . ($i * $num) . "<br>";
            $i++;
        } while ($i <= 10);
        echo "</div>";
    }
    ?>
  </div>

</body>
</html
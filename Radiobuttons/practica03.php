<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pokémon Favorito</title>
</head>
<body>
    <h2>¿Cuál es tu Pokémon favorito?</h2>

    <form method="post" action="">
        <input type="radio" id="pikachu" name="pokemon" value="Pikachu">
        <label for="pikachu">Pikachu</label><br>

        <input type="radio" id="charmander" name="pokemon" value="Charmander">
        <label for="charmander">Charmander</label><br>

        <input type="radio" id="bulbasaur" name="pokemon" value="Bulbasaur">
        <label for="bulbasaur">Bulbasaur</label><br>

        <input type="radio" id="squirtle" name="pokemon" value="Squirtle">
        <label for="squirtle">Squirtle</label><br>

        <input type="radio" id="mew" name="pokemon" value="Mew">
        <label for="mew">Mew</label><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['pokemon'])) {
            $pokemon = htmlspecialchars($_POST['pokemon']);
            echo "<h3>Tu Pokémon favorito es: <span style='color:green;'>$pokemon</span></h3>";
        } else {
            echo "<h3 style='color:red;'>No seleccionaste ningún Pokémon.</h3>";
        }
    }
    ?>
</body>
</html>
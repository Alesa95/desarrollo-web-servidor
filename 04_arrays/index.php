<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $videojuegos = array(
            "juego1" => "Cyberpunk 2077",
            "juego2" => "Minecraft",
            "juego3" => "My Little Ponny"
        );
        print_r($videojuegos);

        echo "<br><br>";

        $consolas = [
            "consola1" => "PS4",
            "consola2" => "PS5",
            "consola3" => "Nintendo Switch"
        ];
        print_r($consolas);

        echo "<br><br>";

        $personas = [
            "23242627F" => "Albertiño",
            "95542627T" => "Armando",
            "87234455G" => "Pepe"
        ];
        echo $personas["23242627G"];

        echo "<br><br>";

        $series = [
            'El juego del calamar',
            'La casa de papel',
            'Alice in borderland',
            'The Witcher'
        ];    
    
        print_r($series);
        echo "<br><br>";
        echo $series[1];    //  Devuelve 'The Witcher'
    ?>  
</body>
</html>
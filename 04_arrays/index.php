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
        
        $series = [
            'El juego del calamar',
            'La casa de papel',
            'Alice in borderland',
            'The Witcher'
        ];    
        //  Inserta elementos al final del array
        array_push($series, "Cuéntame", "Dark");

        $series[] = "Big Bang Theory";

        $series[10] = "La que se avecina";

        array_push($series, "Haikyuu");

        $series[10] = "Aquí no hay quien viva";

        unset($series[10]);

        $series = array_values($series);

        foreach ($series as $indice => $serie) {
            echo $indice . " => " . $serie . "<br>";
        }

        /*  MEDIANTE FOR EACH, MOSTRAR TODAS LAS PERSONAS
            Y SUS DNI EN UNA TABLA
        */
        
        echo "<br><br>";

        //  Array Personas
        $personas = [
            "23242627F" => "Albertiño",
            "95542627T" => "Armando",
            "87234455G" => "Pepe"
        ];
        
        $personas["12345678D"] = "Rodolfo";

        $personas["87234455G"] = "Ruperto";

        unset($personas["23242627F"]);

        $personas = array_values($personas);

        print_r($personas);

        echo "<br><br>";

        echo "Hay " . count($personas) . " personas";
    ?>  


    <!-- Bucle for para las series -->
    <ul>
        <?php
        for ($i = 0; $i < count($series); $i++) {
        ?>
            <li><?php echo $series[$i] ?></li>
        <?php
        }
        ?>
    </ul>

    <!-- Bucle while para las series -->
    <ol>
        <?php 
        $i = 0;
        while ($i < count($series)) {
        ?>
            <li><?php echo $series[$i] ?></li>
        <?php
            $i++;
        }
        ?>
    </ol>
</body>
</html>
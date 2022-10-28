<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>

    <?php

    function calificacionIf (int $nota) {
        if ($nota < 5) {
            $calificacion = "Suspenso";
        } else if ($nota >= 5 && $nota < 7) {
            $calificacion = "Aprobado";
        } else if ($nota >= 7 && $nota < 9) {
            $calificacion = "Notable";
        } else {
            $calificacion = "Sobresaliente";
        }
        return $calificacion;
    }

    function calificacionMatch (int $nota) {
        $calificacion = match (true) {
            $nota < 5 => "Suspenso",
            $nota >= 5 and $nota < 7 => "Aprobado",
            $nota >= 7 and $nota < 9 => "Notable",
            default => "Sobresaliente"
        };
        return $calificacion;
    }

    /*
    $estudiantes = [
        ["Luis", rand(0,10)],
        ["Alfredo", rand(0,10)],
        ["Elena", rand(0,10)]
    ];
    */

    $estudiantes = [
        ["Luis"],
        ["Alfredo"],
        ["Elena"]
    ];

    for ($i = 0; $i < count($estudiantes); $i++) {
        $estudiantes[$i][1] = rand(0,10);
        $estudiantes[$i][2] = rand(0,10);
    }

    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Califiación</th>
        </tr>
        <?php
        foreach ($estudiantes as $estudiante) {
            list($nombre, $nota1, $nota2) = $estudiante;
        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $nota1 ?></td>
                <td><?php echo $nota2 ?></td>
                <td><?php echo calificacionMatch($nota2) ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];

            $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

            if (preg_match($pattern, $nombre)) {
                echo "<p>$nombre sigue el patrón</p>";
            } else {
                echo "<p>$nombre no sigue el patrón</p>";
            }
        }
    ?>

    <form action="" method="post">
        <p>Nombre: 
            <input type="text" name="nombre">
        </p>
        <p>Apellidos: 
            <input type="text" name="apellidos">
        </p>
        <p>DNI: 
            <input type="text" name="dni">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>
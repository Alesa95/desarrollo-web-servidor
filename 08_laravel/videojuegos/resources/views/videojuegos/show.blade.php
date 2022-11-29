<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Mostrar videojuego</h1>
        <p>Título: {{ $videojuego -> titulo }}</p>
        <p>Precio: {{ $videojuego -> precio }}</p>
        <p>PEGI: {{ $videojuego -> pegi }}</p>
        <p>Descripción: {{ $videojuego -> descripcion }}</p>
        <form method="GET" action="{{ route('videojuegos.edit', ['videojuego' => $videojuego -> id]) }}">
            <button class="btn btn-primary" type="submit">Editar</button>
        </form>
    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
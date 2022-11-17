<?php
    session_start();
    session_destroy();
    header("location: http://localhost/06_bases_de_datos/tienda_ropa/public/iniciar_sesion.php");
?>
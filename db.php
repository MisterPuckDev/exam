<?php
    // Variables que se usarán para conectar a la base de datos
    $host = "localhost"; // Servidor local
    $user = "argentina"; // Usuario de la base de datos
    $password = "instituto2024"; // Clave de la base de datos
    $dbname = "bd_veterinaria"; // nombre de la base datos
    $puerto = "3306";

    // Código para conectar a la base de datos
    $conn = new mysqli($host, $user, $password, $dbname,$puerto);

    if ($conn->connect_error) {// Si la conexion falla hacer lo siguiente 
        die('Connection failed: ' . $conn->connect_error);
    }
?>
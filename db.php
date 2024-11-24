<?php
    // Variables que se usarán para conectar a la base de datos
    $host = "localhost"; // Servidor local
    $user = "argentina"; // Usuario de la base de datos
    $password = "instituto2024"; // Clave de la base de datos
    $dbname = "bd_veterinaria"; // nombre de la base datos
    $puerto = "3306"; //Colocar puerto que aparece en xampp

    // Código para conectar a la base de datos
    $conn = new mysqli($host, $user, $password, $dbname,$puerto);

    if ($conn->connect_error) {// Si la conexion falla hacer lo siguiente 
        die('Connection failed: ' . $conn->connect_error);
    }
        //opcion 1
        // http://localhost/phpmyadmin/ consola mysql
        // http://localhost/proyectoCRUD/db.php validar primero
        // http://localhost/proyectoCRUD/index.php pagina web

        //opcion2 colocando puerto que aparecen xampp
        // http://localhost:8080/phpmyadmin/ consola mysql
        // http://localhost:8080/proyectoCRUD/db.php validar primero
        // http://localhost:8080/proyectoCRUD/index.php pagina web
?>

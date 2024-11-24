<?php
    include("db.php");

    if (isset($_POST["submit"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $peso = $_POST["peso"];

        $query = "INSERT INTO  pacientes  (nombre, apellido, direccion,peso) VALUES ('$nombre', '$apellido', '$direccion','$peso')";
        $result = $conn->query($query);

    if ($result) {
        echo "Registro agregado correctamente!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Agregar Registro</title>
</head>
<body>
<h1>Formulario Registrar</h1>
<br><br>
<form method="POST" action="agregar.php">
    
    nombre: 
    <input type="text" name="nombre"><br><br>

    apellido: 
    <input type="text" name="apellido"><br><br>

    direccion: 
    <input type="text" name="direccion"><br><br>

    peso: 
    <input type="text" name="peso"><br><br>

    <input type="submit" name="submit" value="Agregar">
</form>
<br><br>
<a href="index.php">Regresar al Listado</a>
</body>
</html>

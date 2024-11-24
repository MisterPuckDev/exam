<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM  pacientes  WHERE id=$id";
    if ($conn->query($query)) {
        echo "Registro eliminado!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Eliminar Registro</title>
</head>
<body>
<br><br>
<a href="index.php">Regresar al Listado</a>
</body>
</html>
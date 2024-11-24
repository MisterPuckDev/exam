<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM  pacientes  WHERE id=$id";
    $result = $conn->query($query);
    $user = $result->fetch_assoc();
}

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $peso = $_POST['peso'];

    $query = "UPDATE  pacientes  SET nombre='$nombre', apellido='$apellido', direccion='$direccion', peso='$peso' WHERE id=$id";
    if ($conn->query($query)) {
        echo "Registro actualizado satisfactoriamente";
    }
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Actualizar Registro</title>
</head>
<body>
<h1>Formulario Actualizar</h1>
<br><br>
<form method="post" action="actualizar.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
    nombre: <input type="text" name="nombre" value="<?php echo $user['nombre']; ?>"><br><br>
    apellido: <input type="apellido" name="apellido" value="<?php echo $user['apellido']; ?>"><br><br>
    direccion: <input type="text" name="direccion" value="<?php echo $user['direccion']; ?>"><br><br>
    peso: <input type="number" name="peso" value="<?php echo $user['peso']; ?>"><br><br>
    <input type="submit" name="submit" value="Actualizar">
</form>
<br><br>
<a href="index.php">Regresar al Listado</a>
</body>
</html>


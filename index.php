<?php
include('db.php');
$query = "SELECT * FROM  pacientes ";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Listado</title>
</head>
<body>
<h1>Listado</h1>
<br><br>
<a href="agregar.php">Registrar</a>
<br><br>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Peso</th>
        <th colspan="2">Acciones</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellido']; ?></td>
        <td><?php echo $row['direccion']; ?></td>
        <td><?php echo $row['peso']; ?></td>
        <td><a href="actualizar.php?id=<?php echo $row['id']; ?>">Actualizar</a></td>
        <td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>

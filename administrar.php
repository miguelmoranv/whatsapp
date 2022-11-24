<?php
include_once('conexion.php');

$sql="select * from contacto";
$resultado=mysqli_query($con,$sql);
$num_filas=mysqli_num_rows($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Contacos</title>
</head>
<body>
<center>
    <br>
    <h1>Administrar Contactos</h1>
    <hr>
        <table border=1>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>E-mail</th>
                <th>Telefono</th>
                <th>Celular</th>
                <th>Whatsapp</th>
                <th>Acciones</th>
            </tr>
            <?php 
            while($fila=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $fila['id_contacto'] ?></td>
                <td><?php echo $fila['nombre_suc'] ?></td>
                <td><?php echo $fila['direccion'] ?></td>
                <td><?php echo $fila['email'] ?></td>
                <td><?php echo $fila['tel'] ?></td>
                <td><?php echo $fila['cel'] ?></td>
                <td><?php echo $fila['whatsapp'] ?></td>
                <td><a href="actualizar.php?id=<?php echo $fila['id_contacto']; ?>">Actualizar</a> </td>
            </tr>
            <?php } ?>
        </table>
        <hr>
        <h2>Total de registros:<?php echo $num_filas ?></h2>
    </center>
</body>
</html>
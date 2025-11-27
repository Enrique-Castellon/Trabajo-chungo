<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario-Edit</title>
</head><?php 
    $id=$_GET['id'];
?>
<body>
    <h1>Edición de <?php echo $cliente-> getNombre() ?></h1>
    <form action="../controller/edit_cliente_ctl.php" method="post">
        <table border='1';>
			<tr><td>ID:</td><td><input type="text" name="id" readonly value="<?php echo $cliente->getId(); ?>"></td>			</tr>
			<tr><td>dni: </td><td><input type="text" value="<?php echo $cliente->getDni(); ?>" name="dni"></td></tr>
			<tr><td>Nombre: </td><td><input type="text" value="<?php echo $cliente->getNombre(); ?>" name="nombre"></td></tr>
			<tr><td>Apellidos: </td><td><input type="text"value="<?php echo $cliente->getApellidos(); ?>" name="apellidos"></td></tr>
            <tr><td>Fecha Nacimiento: </td><td><input type="date"value="<?php echo $cliente->getFecha(); ?>" name="fechaN"></td></tr>
        </table>
        <input type="submit" value="envia" name="submit">
    </form>
</body>
</html>
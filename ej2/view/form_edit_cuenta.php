<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario-Edit</title>
</head><?php 
    $id=$_GET['id'];
    $clientes=new clienteDAO();
    $arrayClientes=[];
    $arrayClientes=$clientes->verClientes();
?>
<body>
    <h1>Edición de <?php echo $cuenta-> getCodigo() ?></h1>
    <form action="../controller/edit_cuenta_ctl.php" method="post">
        <table border='1';>
			<tr><td>ID:</td><td><input type="text" name="id" readonly value="<?php echo $cuenta->getId(); ?>"></td>			</tr>
			<tr><td>Codigo: </td><td><input type="text" value="<?php echo $cuenta->getCodigo(); ?>" name="codigo"></td></tr>
			<tr><td>Saldo: </td><td><input type="number" value="<?php echo $cuenta->getSaldo(); ?>" name="saldo"></td></tr>
			<tr><td>Cliente: </td><td><?php echo '<select name="cliente">';foreach($arrayClientes as $cliente){
                $ids = $cliente->getId();
                $nombre = $cliente->getNombre() . ' ' . $cliente->getApellidos();
                if($ids == $cuenta->getCliente()){

                    echo '<option value="'.$ids.'" selected>'.$nombre.'</option>';
                }else{
                    echo '<option value="'.$ids.'">'.$nombre.'</option>';
                }
                
            }
            echo'</select>';
            ?></td></tr>
        </table>
        <input type="submit" value="envia" name="submit">
    </form>
</body>
</html>
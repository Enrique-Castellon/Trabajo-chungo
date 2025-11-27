<?php
	require_once '../config/config.inc.php';
	require_once '../model/business/class_cuenta.php';
	require_once '../model/persistence/class_cuentaDAO.php';
	require_once '../view/printMsg.php';
	require_once '../view/linkInicioCue.php';
    require_once '../model/persistence/class_clienteDAO.php';
    require_once '../model/business/class_cliente.php';

	$cuentaDAO = new cuentaDAO();

  // comprobamos si la cuenta existe antes de eliminarla
	if (isset($_REQUEST['id'])) {
	    $id = $_REQUEST['id'];
			$cuenta = $cuentaDAO->buscarId($id);
	}
	$msg = null;
    try{
        if(isset($_REQUEST['submit'])){
            if($cuenta != null){
                if(isset($_REQUEST['codigo'])){
                    $cuenta->setCodigo($_REQUEST['codigo']);
                }
                if(isset($_REQUEST['saldo'])){
                    $cuenta->setSaldo($_REQUEST['saldo']);
                }
                if(isset($_REQUEST['cliente'])){
                    $cuenta->setCliente($_REQUEST['cliente']);
                }
                $resultado = $cuentaDAO->modificar($cuenta);
                if($resultado){
                    $msg='Datos modificados correctamente';
                }
            }else{
                $msg="No se puede editar. La cuenta no existe";
            }
        }else{
            require_once '../view/form_edit_cuenta.php';
        }
    }
    catch(Exception $e){
        $msg = "Error al editar los datos".$e;
    }
if ($msg != null) {
	printMsg($msg);
}

linkInicioCue();
?>

<?php
	require_once '../config/config.inc.php';
	require_once '../model/business/class_cliente.php';
	require_once '../model/persistence/class_clienteDAO.php';
	require_once '../view/printMsg.php';
	require_once '../view/linkInicioCli.php';

	$clienteDAO = new clienteDAO();

  // comprobamos si la cliente existe antes de eliminarla
	if (isset($_REQUEST['id'])) {
	    $id = $_REQUEST['id'];
			$cliente = $clienteDAO->buscarId($id);
	}
	$msg = null;
    try{
        if(isset($_REQUEST['submit'])){
            if($cliente != null){
                if(isset($_REQUEST['dni'])){
                    $cliente->setDni($_REQUEST['dni']);
                }
                if(isset($_REQUEST['nombre'])){
                    $cliente->setNombre($_REQUEST['nombre']);
                }
                if(isset($_REQUEST['apellidos'])){
                    $cliente->setApellidos($_REQUEST['apellidos']);
                }
                if(isset($_REQUEST['fechaN'])){
                    $fecha=date("Y-m-d",strtotime($_REQUEST['fechaN']));
                    $cliente->setFecha($_REQUEST['fechaN']);
                }
                $resultado = $clienteDAO->modificar($cliente);
                if($resultado){
                    $msg='Datos modificados correctamente';
                }
            }else{
                $msg="No se puede editar. el cliente no existe";
            }
        }else{
            require_once '../view/form_edit_cliente.php';
        }
    }
    catch(Exception $e){
        $msg = "Error al editar los datos".$e;
    }
if ($msg != null) {
	printMsg($msg);
}

linkInicioCli();
?>

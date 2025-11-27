<?php
		require_once '../config/config.inc.php';
		require_once '../model/business/class_cuenta.php';
		require_once '../model/persistence/class_cuentaDAO.php';
		require_once '../view/linkInicioCue.php';
		require_once '../model/persistence/class_clienteDAO.php';
		require_once '../model/business/class_cliente.php';

		$cuentaDAO = new cuentaDAO();

		$arrayCuentas = $cuentaDAO->verCuentas();

		require_once '../view/list_cuentas.php';

		linkInicioCue();
?>

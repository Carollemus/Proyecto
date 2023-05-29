<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd();
	$Id_cliente=$_POST['Id_cliente'];
	echo $obj->ExtraerInformacionEnJsonPorNombresUnRegistro("SELECT * FROM Tabla_clientes WHERE(Id_cliente=".$Id_cliente.")");
?>
	
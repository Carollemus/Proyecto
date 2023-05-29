<?php
	session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_proveedor=$_POST['id_proveedor'];
	echo $obj->ExtraerInformacionEnJsonPorNombresUnRegistro("SELECT * FROM Tabla_proveedor WHERE(id_proveedor=".$id_proveedor.")");

?>
	
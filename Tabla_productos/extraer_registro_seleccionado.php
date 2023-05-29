<?php
	session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_producto=$_POST['id_producto'];
	echo $obj->ExtraerInformacionEnJsonPorNombresUnRegistro("SELECT * FROM Tabla_productos WHERE(id_producto=".$id_producto.")");

?>
	
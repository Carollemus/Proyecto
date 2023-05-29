<?php
	session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_inventario=$_POST['id_inventario'];
	echo $obj->ExtraerInformacionEnJsonPorNombresUnRegistro("SELECT * FROM Tabla_inventario WHERE(id_inventario=".$id_inventario.")");

?>
	
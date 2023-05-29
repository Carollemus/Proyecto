<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd();
	$Nit=$_POST['Nit'];
	echo $obj->ExtraerInformacionEnJsonPorNombresUnRegistro("SELECT * FROM Tabla_clientes WHERE(Nit=".$Nit.")");
?>
	
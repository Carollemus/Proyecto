<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd();
	$consulta=$_POST['valorenviado'];
	$existe= $obj->Registros($consulta);
	echo $existe;
?>

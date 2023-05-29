<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 

	$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];

	$parametros="null,'".$nombre."','".$telefono."'" ;

	$obj->Insertar('Tabla_proveedor',$parametros);
?>
	
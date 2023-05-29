<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_proveedor=$_POST['id_proveedor'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];

	$parametros="nombre='".$nombre."',telefono='".$telefono."'" ;
	$obj->Modificar('Tabla_proveedor',$parametros,'id_proveedor',$id_proveedor);
?>
	
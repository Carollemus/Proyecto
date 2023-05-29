<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_proveedor=$_POST['id_proveedor'];
	$obj->Eliminar('Tabla_proveedor','id_proveedor',$id_proveedor,"=");
?>

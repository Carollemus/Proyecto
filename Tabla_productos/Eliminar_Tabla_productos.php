<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_producto=$_POST['id_producto'];
	$obj->Eliminar('Tabla_productos','id_producto',$id_producto,"=");
?>

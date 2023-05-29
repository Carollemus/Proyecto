<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_inventario=$_POST['id_inventario'];
	$obj->Eliminar('Tabla_inventario','id_inventario',$id_inventario,"=");
?>

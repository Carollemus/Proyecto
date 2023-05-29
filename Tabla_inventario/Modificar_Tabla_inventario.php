<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_inventario=$_POST['id_inventario'];
$id_sucursal=$_POST['id_sucursal'];
$fecha=$_POST['fecha'];
$tipo=$_POST['tipo'];
$id_producto=$_POST['id_producto'];
$cantidad=$_POST['cantidad'];

	$parametros="id_sucursal=".$id_sucursal.",fecha='".$fecha."',tipo='".$tipo."',id_producto=".$id_producto.",cantidad=".$cantidad;
	$obj->Modificar('Tabla_inventario',$parametros,'id_inventario',$id_inventario);
?>
	
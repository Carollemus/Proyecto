<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	$id_producto=$_POST['id_producto'];
$id_sucursal=$_POST['id_sucursal'];
$id_proveedor=$_POST['id_proveedor'];
$id_marca=$_POST['id_marca'];
$id_categoria=$_POST['id_categoria'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

	$parametros="id_sucursal=".$id_sucursal.",id_proveedor=".$id_proveedor.",id_marca=".$id_marca.",id_categoria=".$id_categoria.",descripcion='".$descripcion."',cantidad=".$cantidad;
	$obj->Modificar('Tabla_productos',$parametros,'id_producto',$id_producto);
?>
	
<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 

	$id_sucursal=$_POST['id_sucursal'];
$id_proveedor=$_POST['id_proveedor'];
$id_marca=$_POST['id_marca'];
$id_categoria=$_POST['id_categoria'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

	$parametros="null,".$id_sucursal . ",".$id_proveedor . ",".$id_marca . ",".$id_categoria . ",'".$descripcion."',".$cantidad ;

	$obj->Insertar('Tabla_productos',$parametros);
?>
	
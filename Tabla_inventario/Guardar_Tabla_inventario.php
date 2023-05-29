<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 

	$id_sucursal=$_POST['id_sucursal'];
$fecha=$_POST['fecha'];
$tipo=$_POST['tipo'];
$id_producto=$_POST['id_producto'];
$cantidad=$_POST['cantidad'];

	$parametros="null,".$id_sucursal . ",'".$fecha."','".$tipo."',".$id_producto . ",".$cantidad ;

	$obj->Insertar('Tabla_inventario',$parametros);
?>
	
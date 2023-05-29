<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 

	$Id_producto=$_POST['Id_producto'];

	$Id_factura=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_facturas WHERE(Token='".$_POST['Token']."')",'Id_factura');
	/*
	$obj->AumentarProductosConElAutomataDeVentas("Tabla_detalle_cotizacion","SELECT count(Tabla_detalle_cotizacion.Id_producto) as Cantidad,Tabla_detalle_cotizacion.Id_cotizacion,Tabla_detalle_cotizacion.Id_producto,sum(Tabla_productos.Precio_de_venta) as SumatoriaTotalPrecioDeVenta,Tabla_productos.Nombre FROM Tabla_detalle_cotizacion INNER JOIN Tabla_productos ON Tabla_productos.Id_producto=Tabla_detalle_cotizacion.Id_producto WHERE(Tabla_detalle_cotizacion.Id_cotizacion=".$Id_cotizacion." and Tabla_detalle_cotizacion.Id_producto=".$Id_producto.") GROUP BY Tabla_detalle_cotizacion.Id_producto;",$_POST['Token']);
	*/
	$obj->EliminarFacturaSinRestriccionParaElAutomataVentas('Tabla_detalle_factura_personalizado','Id_factura',$Id_factura." and Id_detalle_personalizado=".$Id_producto,"=");

?>

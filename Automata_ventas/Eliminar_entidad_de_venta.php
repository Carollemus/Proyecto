<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 

	$Id_producto=$_POST['Id_producto'];

	$Id_factura=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_facturas WHERE(Token='".$_POST['Token']."')",'Id_factura');

	$obj->AumentarProductosConElAutomataDeVentas("Tabla_detalle_factura","SELECT count(Tabla_detalle_factura.Id_producto) as Cantidad,Tabla_detalle_factura.Id_factura,Tabla_detalle_factura.Id_producto,sum(Tabla_productos.Precio_de_venta) as SumatoriaTotalPrecioDeVenta,Tabla_productos.Nombre FROM Tabla_detalle_factura INNER JOIN Tabla_productos ON Tabla_productos.Id_producto=Tabla_detalle_factura.Id_producto WHERE(Tabla_detalle_factura.Id_factura=".$Id_factura." and Tabla_detalle_factura.Id_producto=".$Id_producto.") GROUP BY Tabla_detalle_factura.Id_producto;",$_POST['Token']);

	$obj->EliminarFacturaSinRestriccionParaElAutomataVentas('Tabla_detalle_factura','Id_factura',$Id_factura." and Id_producto=".$Id_producto,"=");

?>

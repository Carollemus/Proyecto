<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd();

$Id_factura=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_facturas WHERE(Token='".$_GET['Token']."')",'Id_factura');


echo $obj->GeneradorDeTablaDetalleDeFacturasParaElAgenteDeVentas("Eliminar,Cantidad,Nombre,Total,","Cantidad,Nombre,Descripcion,Total,","Automata_ventas","SELECT Tabla_productos.Descripcion as Descripcion,count(Tabla_detalle_factura.Id_producto) as Cantidad,Tabla_detalle_factura.Id_factura,Tabla_detalle_factura.Id_producto,sum(Tabla_productos.Precio_de_venta) as Total,Tabla_productos.Nombre FROM Tabla_detalle_factura INNER JOIN Tabla_productos ON Tabla_productos.Id_producto=Tabla_detalle_factura.Id_producto WHERE(Tabla_detalle_factura.Id_factura=".$Id_factura.") GROUP BY Tabla_detalle_factura.Id_producto;","SELECT * FROM Tabla_facturas INNER JOIN Tabla_detalle_factura_personalizado ON Tabla_detalle_factura_personalizado.Id_factura=Tabla_facturas.Id_factura WHERE(Tabla_facturas.Id_factura=".$Id_factura.");");


?>
	
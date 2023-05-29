<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd();

$Id_factura=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_facturas WHERE(Token='".$_GET['Token']."')",'Id_factura');


$sumatoriaTotalPrecioDeVenta = $obj->ExtraerCampoEspecifico("SELECT sum(Tabla_productos.Precio_de_venta) as Total FROM Tabla_detalle_factura INNER JOIN Tabla_productos ON Tabla_productos.Id_producto=Tabla_detalle_factura.Id_producto WHERE(Tabla_detalle_factura.Id_factura=".$Id_factura.");",'Total');

$sumatoriaTotalPrevioDeCompra = $obj->ExtraerCampoEspecifico("SELECT sum(Tabla_productos.Precio_de_compra) as Total FROM Tabla_detalle_factura INNER JOIN Tabla_productos ON Tabla_productos.Id_producto=Tabla_detalle_factura.Id_producto WHERE(Tabla_detalle_factura.Id_factura=".$Id_factura.");",'Total');

$sumatoriaRegistrosPersonalizados = $obj->ExtraerCampoEspecifico("SELECT sum(Tabla_detalle_factura_personalizado.Monto) as Total FROM Tabla_detalle_factura_personalizado WHERE(Tabla_detalle_factura_personalizado.Id_factura=".$Id_factura.");",'Total');

echo $sumatoriaTotalPrecioDeVenta+$sumatoriaRegistrosPersonalizados."/".$sumatoriaTotalPrevioDeCompra."/";
?>
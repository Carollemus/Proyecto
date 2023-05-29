<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd();
echo $obj->GeneradorDeTabla("Opcion,id_inventario,id_sucursal,fecha,tipo,id_producto,cantidad,","id_inventario,id_sucursal,fecha,tipo,id_producto,cantidad,","id_inventario","Tabla_inventario");
?>
	
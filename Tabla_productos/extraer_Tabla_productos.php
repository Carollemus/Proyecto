<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd(); 
echo $obj->GeneradorDeTabla("Opcion,Codigo,Cantidad,Categoria,Nombre,Descripcion,Precio_de_compra,Precio_de_venta,Id_producto,Id_sucursal,Estado_registro,","Codigo,Cantidad,Categoria,Nombre,Descripcion,Precio_de_compra,Precio_de_venta,Id_producto,Id_sucursal,Estado_registro,","Id_producto","Tabla_productos");
?>

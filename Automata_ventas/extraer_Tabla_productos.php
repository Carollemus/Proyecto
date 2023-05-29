<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd();
echo $obj->GeneradorDeTablaSinRestriccion("Opcion,Codigo,Nombre,Descripcion,Precio_de_venta,","Codigo,Nombre,Descripcion,Precio_de_venta,","Id_producto","Tabla_productos");
?>
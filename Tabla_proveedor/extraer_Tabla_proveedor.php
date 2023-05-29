<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd();
echo $obj->GeneradorDeTabla("Opcion,id_proveedor,nombre,telefono,","id_proveedor,nombre,telefono,","id_proveedor","Tabla_proveedor");
?>
	
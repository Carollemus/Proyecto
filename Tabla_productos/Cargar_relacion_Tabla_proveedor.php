<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd(); 
echo $obj->ExtraerAutomaticamenteCamposRelacionados('Tabla_proveedor','Tabla_proveedor','id_proveedor');
?>

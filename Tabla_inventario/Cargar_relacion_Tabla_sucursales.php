<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd(); 
echo $obj->ExtraerAutomaticamenteCamposRelacionados('Tabla_sucursales','Tabla_sucursales','id_sucursal');
?>

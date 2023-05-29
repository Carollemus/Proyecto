<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd(); 
echo $obj->ExtraerAutomaticamenteCamposRelacionados('Tabla_marcas','Tabla_marcas','id_marca');
?>

<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd(); 
echo $obj->ExtraerAutomaticamenteCamposRelacionados('Tabla_productos','Tabla_productos','id_producto');
?>

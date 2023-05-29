<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd(); 
echo $obj->ExtraerAutomaticamenteCamposRelacionados('Tabla_categorias','Tabla_categorias','id_categoria');
?>

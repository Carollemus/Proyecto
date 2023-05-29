<?php
session_start();
include '../../controlador/controlador.php';
$obj=new cmd();

$fechaDocumento=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_facturas WHERE(Token='".$_GET['Token']."')",'Fecha');

echo $fechaDocumento;
?>
	
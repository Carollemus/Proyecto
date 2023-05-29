<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 

	$Id_factura=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_facturas WHERE(Token='".$_POST['Token']."')",'Id_factura');
	$Descripcion=$_POST['Descripcion'];
	$Monto=$_POST['Monto'];

	$parametros="".$Id_factura.",null,'".$Descripcion."',".$Monto ;
	$obj->InsertarFacturaSinRestriccionParaElAutomataVentas('Tabla_detalle_factura_personalizado',$parametros);
		
?>
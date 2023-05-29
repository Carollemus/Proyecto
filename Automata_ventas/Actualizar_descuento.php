<?php
	session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 

	$Id_factura=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_facturas WHERE(Token='".$_POST['Token']."')",'Id_factura');
	$parametrosModificacion="Descuento='".$_POST['Descuento']."'";
	$obj->ModificarFacturaSinRestriccionParaElAutomataVentas('Tabla_facturas',$parametrosModificacion,"Id_factura",$Id_factura);
?>
	
<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	if(!isset($_SESSION['GalletaRol'])){
		  	session_start();
	}
	
	$Id_cliente=$_POST['Id_cliente'];
	$Token=$_POST['Token'];
	$Id_sucursal=$_SESSION['GalletaIdSucursal'];

	$parametros="null,null,".$Id_cliente . ",'".$Token."','0.0',".$Id_sucursal.",'Descongelado'";

	$obj->InsertarFacturaSinRestriccionParaElAutomataVentas('Tabla_facturas',$parametros);
?>
	
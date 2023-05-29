<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 
	
	if(!isset($_SESSION['GalletaRol'])){
		  	session_start();
	}
	
	$Id_persona=$_SESSION['GalletaIdPersona'];
	$Id_sucursal=$_SESSION['GalletaIdSucursal'];
	$Token_factura=$_POST['Token'];

	$parametros="null,null,'".$Token_factura."',".$Id_persona . ",".$Id_sucursal . ",''" ;

	$obj->Insertar('Tabla_log_facturas',$parametros);
?>
	
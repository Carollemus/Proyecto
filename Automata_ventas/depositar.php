<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 


	if(!isset($_SESSION['GalletaRol'])){
		  	session_start();
	}


try {

	$motivo=$_POST['motivo'];
	$monto=$_POST['monto'];
	$Id_sucursal=$_SESSION['GalletaIdSucursal'];

	$cajaActual=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_sucursales WHERE(Id_sucursal=".$Id_sucursal.")",'Caja');
	
	$CantidadNueva=$cajaActual+$monto;

	$parametros="null,null,'".$motivo."',".$monto.",'+',".$Id_sucursal.",''";

	$obj->InsertarFacturaSinRestriccionParaElAutomataVentas('Tabla_movimientos_caja',$parametros);

	$parametrosModificacionEstado="Caja=".$CantidadNueva;
	$obj->ModificarFacturaSinRestriccionParaElAutomataVentas('Tabla_sucursales',$parametrosModificacionEstado,"Id_sucursal",$Id_sucursal);

	//echo true;

} catch (Exception $e) {
    //echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    echo false;
}


?>
	
<?php
session_start();
	include '../../controlador/controlador.php';
	$obj=new cmd(); 

	$Id_factura=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_facturas WHERE(Token='".$_POST['Token']."')",'Id_factura');
	$Id_producto=$_POST['Id_producto'];
	$Cantidad=$_POST['Cantidad'];

	$CantidadActualDeProducto=$obj->ExtraerCampoEspecifico("SELECT * FROM Tabla_productos WHERE(Id_producto=".$Id_producto.")",'Cantidad');
	if($Cantidad<=$CantidadActualDeProducto){

		$CantidadNueva=$CantidadActualDeProducto-$Cantidad;
		$parametrosModificacionCantidad="Cantidad='".$CantidadNueva."'";
		$obj->ModificarFacturaSinRestriccionParaElAutomataVentas('Tabla_productos',$parametrosModificacionCantidad,"Id_producto",$Id_producto);
		
		for($iterador=0;$iterador<$Cantidad;$iterador++){
			$parametros="".$Id_factura . ",".$Id_producto ;
			$obj->InsertarFacturaSinRestriccionParaElAutomataVentas('Tabla_detalle_factura',$parametros);
		}
		echo true;
	}
	else{
		echo false;
	}
?>
	
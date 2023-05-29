<?php
session_start();
include './controlador/controlador.php';
$obj=new cmd(); 
$obj->Proteccion_session('../');
?>

<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

	<title>productos</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="./librerias/css/bootstrap.min.css">

	<!-- Custom styles for this template -->
	<link href="./librerias/css/dashboard.css" rel="stylesheet">

	<link href="./librerias/css/notifications.css" rel="stylesheet">

    <!--  Datatables  -->
    <link rel="stylesheet" href="./librerias/css/jquery.dataTables.min.css">

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="./librerias/css/responsive.dataTables.min.css">

	<script src="./librerias/js/jquery-3.6.0.min.js"></script>
	<script src="./librerias/js/Notify.js"></script>



   <!--   Datatables-->
    <script src="./librerias/js/jquery.dataTables.min.js"></script> 
      


    <link rel="stylesheet" href="./librerias/css/buttons.dataTables.min.css">

		<!--   librerias para exportar tabla -->
		<script src="./librerias/js/dataTables.buttons.min.js"></script>
		<script src="./librerias/js/pdfmake.min.js"></script>
		<script src="./librerias/js/vfs_fonts.js"></script>
		<script src="./librerias/js/buttons.html5.min.js"></script>
		<script src="./librerias/js/jszip.min.js"></script><!--  para excel -->
		<script src="./librerias/js/buttons.print.min.js"></script>
		<script src="./librerias/js/buttons.colVis.min.js"></script>


    <!-- extension responsive -->
    <script src="./librerias/js/dataTables.responsive.min.js"></script>


  <style type="text/css">
  main{
    display: none;
  }
  .modal {
	visibility: hidden;
	position: fixed;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	padding: 1.5rem;
	display: flex;
	justify-content: center;
	align-items: center;
	transition: all 0.3s;
  }
  .modal_inner {
	/*width:70%;*/
	/*max-width: 80rem;*/
	height: 100%;
	padding: 1.2rem;
	border-radius: 15px;
	background-color: #ffffff;
	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
	opacity: 0;
	transform: scale(0.8);
	transition: all 0.3s;
	overflow-y: scroll;
  }
  .modal.-open {
	visibility: visible;
	background-color: rgba(0, 0, 0, 0.4);
  }
  .modal.-open .modal_inner {
	opacity: 1;
	transform: scale(1);
	/*background-color: #27293d;*/
  }


/*Estilo del menu*/
.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: rgb(240,248,255);
  position: fixed;
  top: 0px;
  /*width: 300px;*/
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
	/*
  font-family: FontAwesome;
  content: "105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  */
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu ul a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}

.EstiloParaBotonesDelMenu{
    display: grid;
  align-items: center;
    text-align: center;
  /*background: radial-gradient(black, transparent);*/
  background: rgb(255,255,255);
  color: black;
  height: 20vh;
}
.EstiloParaBotonesDelMenu:hover {
    transition: 0.8s;
    background: rgba(0, 0, 0, 0.4);
    /*transform: scale(1.2);*/
}
.EstiloParaBotonesDelMenu>h1{
  font-size: 16px;
  ont-weight: bold;
}
.fuenteDeOpcion{
    font-size: 18px;
}

.btn-primary{
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

table.dataTable thead th{
  color: #fff;
  background-color: #6c757d;
}

  </style>

</head>


<body>

<div id="notifications"></div>




<!--inicio modal formulario-->

<div class="modal" id="modalFormulario">
<div class="modal_inner">


  <div class="container">
	
	<div class="row">
		<div class="col-lg-12 ml-auto mr-auto">
		  <div class="row"> 
			<div class="col-md-4">
			  <button class="btn btn-primary" onclick="LimpiarFormulario();$('#modalFormulario').toggleClass('-open');">Cerrar</button>
			</div> 
		  </div>
		</div>
	  </div>

	  <br><br><br>
	<div class="row">  

	
	<div class="form-group col-sm-12 col-md-12" hidden>
		<label for="id_producto">id_producto</label>
		<input value="0" onkeypress="return restrictCharacters(this, event, digitsOnly);" class="form-control" type="Number" placeholder="id_producto" id="id_producto">
	</div>

		<div class="form-group col-sm-12 col-md-12">
			<label for="id_sucursal">id_sucursal</label>
			<select class="form-control" id="id_sucursal"></select>
		</div>

		<div class="form-group col-sm-12 col-md-12">
			<label for="id_proveedor">id_proveedor</label>
			<select class="form-control" id="id_proveedor"></select>
		</div>

		<div class="form-group col-sm-12 col-md-12">
			<label for="id_marca">id_marca</label>
			<select class="form-control" id="id_marca"></select>
		</div>

		<div class="form-group col-sm-12 col-md-12">
			<label for="id_categoria">id_categoria</label>
			<select class="form-control" id="id_categoria"></select>
		</div>

			<div class="form-group col-sm-12 col-md-12">
				<label for="descripcion">descripcion</label>
				<textarea class="form-control" id="descripcion" rows="3"></textarea>
			</div>
			<div class="form-group col-sm-12 col-md-12">
				<label for="cantidad">cantidad</label>
				<input value="0" onkeypress="return restrictCharacters(this, event, digitsOnly);" class="form-control" type="Number" placeholder="cantidad" id="cantidad">
			</div>
		<div class="form-group p-1">
			<button class="btn btn-primary" data-target="modalFormulario" id="BotonGuardar" onclick="Guardar_Tabla_productos();">Guardar</button>
		</div>
		<div class="form-group p-1">
			<button class="btn btn-primary" data-target="modalFormulario" id="BotonModificar" onclick="Modificar_Tabla_productos();" disabled>Modificar</button>
		</div>
		<div class="form-group p-1">
			<button class="btn btn-primary" data-target="modalFormulario" id="BotonEliminar" onclick="Eliminar_Tabla_productos();" disabled>Eliminar</button>
		</div>
		<div class="form-group p-1">
			<button class="btn btn-primary" data-target="modalFormulario" id="BotonCancelar" onclick="LimpiarFormulario();$('#modalFormulario').toggleClass('-open');" disabled>Cancelar</button>
		</div>
		<div class="form-group col-sm-12 col-md-12">
			 <form enctype='multipart/form-data' action='' method='post' id="formUpload">
		      <input name='uploadedfile' type='file' id="archivo" multiple="multiple" onchange="visualizarGaleria();">
		    </form>                 
		    <div id="galeriaImg"></div>
		</div>
		

	</div>

   
	</div>
	<!--fin del doom formulario-->


</div>
</div>
<!--fin del modal formulario-->





<nav class="navbar navbar-expand-lg navbar-light bg-light" id="menuDeNavegacion">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
 
$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_marcas' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_marcas.php">marcas</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_categorias' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_categorias.php">categorias</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_proveedor' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_proveedor.php">proveedor</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_sucursales' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_sucursales.php">sucursales</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_productos' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_productos.php">productos</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_inventario' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_inventario.php">inventario</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_roles' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_roles.php">roles</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_tipo_privilegio' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_tipo_privilegio.php">tipo privilegio</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_privilegios' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_privilegios.php">privilegios</a></li>';}

$resultadoDePrivilegio = $obj->Registros("SELECT * FROM Tabla_privilegios WHERE(id_rol=".$_SESSION['GalletaRol']." and id_sucursal=".$_SESSION['GalletaIdSucursal']." and Nombre_de_tabla='Tabla_usuarios' and Id_tipo_privilegio=4);");
if($resultadoDePrivilegio>=1||$_SESSION['GalletaRol']==1){echo '<li class="nav-item"><a class="nav-link" href="./Tabla_usuarios.php">usuarios</a></li>';}
?><?php
 ?><li class="nav-item"><a class="nav-link" href="./log_out.php">salir</a></li>
    </ul>
  </div>
</nav>



		<main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4" id="ContenedorMain">
		  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
			<h1 class="h2">productos</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
				
			  <button class="btn btn-sm btn-outline-secondary buttonCerrarModal" data-target="modalFormulario" id="botonParaCrearNuevoRegistro">
				<span data-feather="calendar"></span>
				Crear nuevo registro
			  </button>
			</div>
		  </div>

		  <div class="col-sm-12 col-md-12" style="padding-bottom: 5%;overflow-x: scroll;" id="ContenedorDomTabla_productos"></div>

		</main>
	  </div>
	</div>




	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
	<script src="./librerias/js/popper.min.js"></script>
	<script src="./librerias/js/bootstrap.min.js"></script>

	<!-- Icons -->
	<script src="./librerias/js/feather.min.js"></script>
	<script>
	  feather.replace()

	  $(".button[data-target]").click(function() {
		$("#" + this.dataset.target).toggleClass("-open");  
	  })

	  $(".buttonCerrarModal[data-target]").click(function() {
		$("#" + this.dataset.target).toggleClass("-open");
	  })

	  $(".modal").click(function(e) {
		if (e.target === this) {
		  $(this).toggleClass("-open")
		  DescongelarRegistro();
		}
	  })

    if (screen.width < 720){
      $("#menuDeOpciones").toggleClass("show");
      $("#menuDeNavegacion").toggleClass("sticky-top");
    }
    if (screen.width > 720){
    }

	</script>


</body>

<script src="./librerias/js/read-excel-file.min.js"></script>

<script>

jQuery(document).ready(function($) {
  Notify("Cargando pagina.", null, null, 'info');
  document.getElementById("notifications").innerHTML="";
});

$(window).on("load", PaginaCargadaCompletamente);
function PaginaCargadaCompletamente(){
		document.getElementById("menuDeNavegacion").hidden=false;
    document.getElementById("ContenedorMain").style.display='grid';
    const myTimeout = setTimeout(MostrarMensajeDePaginaCargadaExitosamente, 100);
}

function MostrarMensajeDePaginaCargadaExitosamente(){
    Notify("La pagina se cargo exitosamente!.", null, null, 'info');
}

var proteccionDeTRansaccion=false;

	function Guardar_Tabla_productos(){
		if(document.getElementById('id_sucursal').value.length>0&&document.getElementById('id_proveedor').value.length>0&&document.getElementById('id_marca').value.length>0&&document.getElementById('id_categoria').value.length>0&&document.getElementById('descripcion').value.length>0&&document.getElementById('cantidad').value.length>0){
		if(proteccionDeTRansaccion==false){
			$.post('./abc/Tabla_productos/Guardar_Tabla_productos.php',{
							id_producto:document.getElementById('id_producto').value,
			id_sucursal:document.getElementById('id_sucursal').value,
			id_proveedor:document.getElementById('id_proveedor').value,
			id_marca:document.getElementById('id_marca').value,
			id_categoria:document.getElementById('id_categoria').value,
			descripcion:document.getElementById('descripcion').value,
			cantidad:document.getElementById('cantidad').value

			}).done(function(data){
			        const imagenInput = document.querySelector("#archivo");
		            if(imagenInput.files.length>0){
		              upload_img();
		            }
					Notify(data, null, null, 'info');
					Cargar_Tabla_productos_sin_recargar_pagina();
					LimpiarFormulario();
					$("#modalFormulario").toggleClass("-open");
					//location.reload();
			})
			.fail(function(error) {
        Notify("Se produjo un error!.", "error");
    	});
		}
		if(proteccionDeTRansaccion==true){
			Notify("Existe un campo erroneo", null, null, 'info');
		}
		}
		else{
			Notify("tienes que configurar los campos faltantes para poder guardar el registro.", null, null, 'info');
		}
	}
	
	function Modificar_Tabla_productos(){
		if(document.getElementById('id_sucursal').value.length>0&&document.getElementById('id_proveedor').value.length>0&&document.getElementById('id_marca').value.length>0&&document.getElementById('id_categoria').value.length>0&&document.getElementById('descripcion').value.length>0&&document.getElementById('cantidad').value.length>0){
		if(proteccionDeTRansaccion==false){
			$.post('./abc/Tabla_productos/Modificar_Tabla_productos.php',{
							id_producto:document.getElementById('id_producto').value,
			id_sucursal:document.getElementById('id_sucursal').value,
			id_proveedor:document.getElementById('id_proveedor').value,
			id_marca:document.getElementById('id_marca').value,
			id_categoria:document.getElementById('id_categoria').value,
			descripcion:document.getElementById('descripcion').value,
			cantidad:document.getElementById('cantidad').value

			}).done(function(data){
			        const imagenInput = document.querySelector("#archivo");
		            if(imagenInput.files.length>0){
		              upload_img();
		            }
					Notify(data, null, null, 'info');
					Cargar_Tabla_productos_sin_recargar_pagina();
					LimpiarFormulario();
					$("#modalFormulario").toggleClass("-open");
					//location.reload();
			})
			.fail(function(error) {
        Notify("Se produjo un error!.", "error");
    	});
		}
		if(proteccionDeTRansaccion==true){
			Notify("Existe un campo erroneo", null, null, 'info');
		}
		}
		else{
			Notify("tienes que configurar los campos faltantes para poder guardar el registro.", null, null, 'info');
		}
	}
	
	function Eliminar_Tabla_productos(){

		  let text = "Estas seguro que quieres eliminar el registro?";
		  if (confirm(text) == true) {
		    $.post('./abc/Tabla_productos/Eliminar_Tabla_productos.php',{
							id_producto:document.getElementById('id_producto').value

			}).done(function(data){
				Eliminar_galeria_productos();
				Notify(data, null, null, 'info');
				Cargar_Tabla_productos_sin_recargar_pagina();
				LimpiarFormulario();
				$("#modalFormulario").toggleClass("-open");
			})
			.fail(function(error) {
        Notify("Se produjo un error!.", "error");
    	});
		  } else {
		    Notify("Se cancelo la eliminacion", null, null, 'info');
		  }

	}
	

  function Cargar_Tabla_productos_sin_recargar_pagina() {
	  $.get("./abc/Tabla_productos/extraer_Tabla_productos.php",{
		}).done(function(data){
		  document.getElementById("ContenedorDomTabla_productos").innerHTML=data;
		  var tabla = $('#TablaGeneralParaElABC').DataTable({
      		responsive: true,
      		dom: 'Bfrtip',
		    buttons: [
			    { extend: 'pdf', text: 'Exportar a PDF',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},
			    { extend: 'copy', text: 'Copy',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},
			    { extend: 'csv', text: 'CSV',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},{ extend: 'excel', text: 'Excel',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},
			    { extend: 'print', text: 'Print',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},
                'pageLength'
            ]
        	});
        	

	  });
  }


		
  function Eliminar_galeria_productos(){
    $.post('./borrar.php',{
      idProducto:document.getElementById('Id_producto').value
    }).done(function(data){
    })
    .fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
  }
  
  //esta funcion se invoca en la funcion SeleccionarRegistro
  function renderizarGaleria(){
    $.post('./renderizar.php',{
      codigoProducto:document.getElementById('Codigo').value
      }).done(function(data){
        document.getElementById("galeriaImg").innerHTML=data;
      })
      .fail(function(error) {
        Notify("Se produjo un error!.", "error");
    	});
  }

	function visualizarGaleria(){
  document.getElementById("galeriaImg").innerHTML="";
  var imagen=document.getElementById('archivo');
  var imagenPrevisualizacion = document.getElementById("imagenPrevisualizacion");
  const Archivos = imagen.files;
  for(var i=0;i<Archivos.length;i++){
      const objectURL = URL.createObjectURL(imagen.files[i]);
      var img = document.createElement("img");
      img.src = objectURL;
      img.style.width = "20%";
      document.getElementById("galeriaImg").appendChild(img);
  }

}

function upload_img(){

    const imagenInput = document.querySelector("#archivo");
    const codigoProducto = document.querySelector("#Codigo");
    var archivo = imagenInput.files; 
    var imagen = new FormData();
    for(i=0; i<archivo.length; i++){
      imagen.append('archivo'+i,archivo[i]); 
    }
    imagen.append("codigoProducto", codigoProducto.value);
    $.ajax({
    type: 'POST',
    url: './subida.php',
    data: imagen,
    contentType: false,
    processData: false
    }).done(function(data) {
      console.log(data);
    })
    .fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
      

}
	
	function DescongelarRegistro(){
		$.post('./abc/Tabla_productos/Descongelar_registro_Tabla_productos.php',{
						id_producto:document.getElementById('id_producto').value

		}).done(function(data){
		})
		.fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
	}
	
	function Cargar_relacion_Tabla_sucursales(){
		$.get('./abc/Tabla_productos/Cargar_relacion_Tabla_sucursales.php',{
		}).done(function(data){
			document.getElementById('id_sucursal').innerHTML=data;
		})
		.fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
	}
	Cargar_relacion_Tabla_sucursales();
	
	function Cargar_relacion_Tabla_proveedor(){
		$.get('./abc/Tabla_productos/Cargar_relacion_Tabla_proveedor.php',{
		}).done(function(data){
			document.getElementById('id_proveedor').innerHTML=data;
		})
		.fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
	}
	Cargar_relacion_Tabla_proveedor();
	
	function Cargar_relacion_Tabla_marcas(){
		$.get('./abc/Tabla_productos/Cargar_relacion_Tabla_marcas.php',{
		}).done(function(data){
			document.getElementById('id_marca').innerHTML=data;
		})
		.fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
	}
	Cargar_relacion_Tabla_marcas();
	
	function Cargar_relacion_Tabla_categorias(){
		$.get('./abc/Tabla_productos/Cargar_relacion_Tabla_categorias.php',{
		}).done(function(data){
			document.getElementById('id_categoria').innerHTML=data;
		})
		.fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
	}
	Cargar_relacion_Tabla_categorias();
	
	  function SeleccionarRegistro(IdRegistro){
		$.post('./abc/Tabla_productos/extraer_registro_seleccionado.php',{
			id_producto:IdRegistro
		  }).done(function(data){
		  	if(data==0){
		  		$('#modalFormulario').toggleClass('-open');
		  		Notify("No puedes administrar este registro otro usuario lo esta utilizando.", null, null, 'info');
		  	}
		  	else{
		  		data=JSON.parse(data);
							document.getElementById('id_producto').value=data.result.id_producto;
			document.getElementById('id_sucursal').value=data.result.id_sucursal;
			document.getElementById('id_proveedor').value=data.result.id_proveedor;
			document.getElementById('id_marca').value=data.result.id_marca;
			document.getElementById('id_categoria').value=data.result.id_categoria;
			document.getElementById('descripcion').value=data.result.descripcion;
			document.getElementById('cantidad').value=data.result.cantidad;

				renderizarGaleria();
		  	}
		  })
		  .fail(function(error) {
        Notify("Se produjo un error!.", "error");
    	});

		  $("#modalFormulario").addClass("-open");
		  document.getElementById('BotonGuardar').disabled=true;
		  document.getElementById('BotonModificar').disabled=false;
		  document.getElementById('BotonEliminar').disabled=false;
		  document.getElementById('BotonCancelar').disabled=false;
	}
	
	<?php
	if(!isset($_SESSION['GalletaRol'])){
		session_start();
	}
	if(isset($_SESSION['GalletaRol'])){
	$SucursalActual=$_SESSION['GalletaIdSucursal'];
	}
	echo 'var sucursalActualParaFiltrarExistencia='.$SucursalActual.';';
	?>

	function verificarExistenciaDelRegistro(nombreDeTabla,campoorigen,campovalor){
	  $.post('./abc/Tabla_productos/Verificar_existencia_Tabla_productos.php',{
			valorenviado:"SELECT * FROM "+nombreDeTabla+" where (BINARY "+campoorigen+"='"+campovalor+"' and Id_sucursal="+sucursalActualParaFiltrarExistencia+")"
		  }).done(function(data){
			console.log(data);
			if(data>=1){
				proteccionDeTRansaccion=true;
			  document.getElementById(campoorigen).style.border= "2px solid red";
			}
			else{
				proteccionDeTRansaccion=false;
			  document.getElementById(campoorigen).style.border= "2px solid green";
			}
		  });
	}
		
	function LimpiarFormulario(){
		
		DescongelarRegistro();
		
		document.getElementById('id_producto').value=0;
			document.getElementById('id_sucursal').value=0;
			document.getElementById('id_proveedor').value=0;
			document.getElementById('id_marca').value=0;
			document.getElementById('id_categoria').value=0;
			document.getElementById('descripcion').value='';
			document.getElementById('cantidad').value=0;
			
		
		document.getElementById("galeriaImg").innerHTML="";

		const imagenInput = document.querySelector("#archivo");
		imagenInput.value = '';

		document.getElementById('BotonGuardar').disabled=false;
		document.getElementById('BotonModificar').disabled=true;
		document.getElementById('BotonEliminar').disabled=true;
		document.getElementById('BotonCancelar').disabled=true;
		proteccionDeTRansaccion=false;

	}
	
  function Cargar_Tabla_productos() {
  	//Notify("Cargando registros espere.", null, null, 'info');
	  $.get("./abc/Tabla_productos/extraer_Tabla_productos.php",{
		}).done(function(data){
		  document.getElementById("ContenedorDomTabla_productos").innerHTML=data;
		  $('#TablaGeneralParaElABC').DataTable({
      		responsive: true,
		      		dom: 'Bfrtip',
		    buttons: [
			    { extend: 'pdf', text: 'Exportar a PDF',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},
			    { extend: 'copy', text: 'Copy',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},
			    { extend: 'csv', text: 'CSV',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},{ extend: 'excel', text: 'Excel',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},
			    { extend: 'print', text: 'Print',exportOptions: {columns: [ 1, 2, 3, 4, 5, 6, 7 ]}},
                'pageLength'
                ]
        	});
      //document.getElementById("notifications").innerHTML="";
      //Notify("Se cargaron los registros exitosamente.", null, null, 'info');
	  })
	  .fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
  }
  Cargar_Tabla_productos();
	
	function renderizarBusqueda(valor) {
		var table = $('#TablaGeneralParaElABC').DataTable();
		table.search(valor).draw();
	}
	
  var fechaExtraida="";
  function Extraer_fecha_documento() {
	  $.get("./abc/Automata_cotizaciones/Extraer_fecha_documento.php",{
	  	Token:document.getElementById('tokenDeLaFacturaDom').value
		}).done(function(data){
		  fechaExtraida=data;
	  })
	  .fail(function(error) {
        Notify("Se produjo un error!.", "error");
    });
  }
	

var digitsOnly = /[1234567890]/g;
var integerOnly = /[0-9\.]/g;
var alphaOnly = /[A-Za-z]/g;

function restrictCharacters(myfield, e, restrictionType) {
	if (!e) var e = window.event
	if (e.keyCode) code = e.keyCode;
	else if (e.which) code = e.which;
	var character = String.fromCharCode(code);

	// if they pressed esc... remove focus from field...
	if (code==27) { this.blur(); return false; }
	
	// ignore if they are press other keys
	// strange because code: 39 is the down key AND ' key...
	// and DEL also equals .
	if (!e.ctrlKey && code!=9 && code!=8 && code!=36 && code!=37 && code!=38 && (code!=39 || (code==39 && character=="'")) && code!=40) {
		if (character.match(restrictionType)) {
			return true;
		} else {
			return false;
		}
		
	}
}

window.addEventListener("beforeunload", function (e) {
  DescongelarRegistro();
});



</script>


</html>

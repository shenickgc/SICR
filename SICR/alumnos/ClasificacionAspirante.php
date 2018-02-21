<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="formularioaspirantes.css" type="text/css" rel="stylesheet"/>
	<link href="../css/formularioaspirantes.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="../js/validar.js"></script>
	<title>Clasificación de aspirante</title>
</head>
<body>
	<?php
		include('../header.html');
	?>

	<style>
	@media only screen and (min-width: 176px) and (max-width:767px){
		table {
	    border-collapse: collapse;
	    width: 100%;
	    border: 1px solid #DDDDDD;
	    table-layout:fixed;
		}
		th:not(:nth-child(3)), td:not(:nth-child(3)) {
	    text-align: center;
	    padding: 8px;
	    border: 1px solid #DDDDDD;
	    width: 230px;
		}
		th:nth-child(3), td:nth-child(3){
				text-align: center;
		    padding: 8px;
		    border: 1px solid #DDDDDD;
		    width: 310px;
		}
	}
	@media only screen and (min-width: 768px){
		table {
	    border-collapse: collapse;
	    width: 100%;
	    border: 1px solid #DDDDDD;
		}
		th, td {
	    text-align: center;
	    padding: 8px;
	    border: 1px solid #DDDDDD;
	    width: 230px;
		}
	}
	

	tr:hover {background-color: #f5f5f5}

	th {
		text-align:center;
	  background-color: #29b6f6;
	  color: white;
	}
	</style>
	<div class="contenedor-formulario">
	  	<div class="wrap">
			<form action="InsertClasificacionAspirante.php" method="post" enctype="multipart/form-data" class="formulario" name="formExcel" onsubmit= "Excel();">
			<div class="input-group">
				
		          <label class="label" for="escuela_procedencia" >Para subir registros de forma masiva, debe seleccionar un archivo EXCEL (extención .xlsx):</label>
		        </div></BR></BR></BR>

			    <input type="file" name="archivo" id="archivo" style="color:#959494; font-size: 16px;">
			    <input type="submit" value="Subir archivo" >
			    <input type="text" name="opcion" id="opcion" style="visibility:hidden;">
			</form>
	  	</div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<?php
	include('../footer.html');
	?>
	
		<!--  Scripts-->
	<script src="../js/jquery.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script src="../js/init.js"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
	    $('select').material_select();
	    });
  	</script>
	<script>
		$(document).ready(function(){

			// Initialize collapse button
			$('.button-collapse').sideNav({
      		menuWidth: 300, // Default is 300
      		closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      		draggable: true // Choose whether you can drag to open on touch screens
    		}
  		);
			// Initialize collapsible (uncomment the line below if you use the dropdown variation)
			$('.collapsible').collapsible();
			$('.dropdown-button').dropdown({
		      constrainWidth: false, // Does not change width of dropdown to that of the activator
		      hover: true, // Activate on ohver
		      belowOrigin: true, // Displays dropdown below the button
		      alignment: 'left', // Displays dropdown with edge aligned to the left of button
		    }
		  );
		});
		
	</script>
	<script>
		function Excel() {
	    var txt=0;
	    //var r = confirm("¿Te gustaría editar los registros antes de subirlos? Presiona 'Ok'\n Si no deseas editar los registros Presiona 'Cancel'");
	    var r = confirm("¿Seguro que quiere subir todos los registros?");
	    if (r == true) {
	        txt = 1;
	    } else {
	        txt = 2;
	        //window.location.replace('importarExcel.php');
	    }
	   	 document.formExcel.opcion.value = txt
	}
	</script>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="../css/formularioaspirantes.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="../js/validar.js"></script>
	<title>Alta Aspirante Masiva</title>
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
			<form action="InsertExcelAspirantes.php" method="post" enctype="multipart/form-data" class="formulario" name="formExcel" onsubmit= "Excel();">
			<div class="input-group">
		          <label class="label" for="escuela_procedencia" >Para subir registros de forma masiva, debe seleccionar un archivo EXCEL (extención .xlsx):</label>
		        </div></BR></BR></BR>
			    <input type="file" name="archivo" id="archivo" style="color:#959494; font-size: 16px;">
			    <input type="submit" value="Subir archivo" >
			    <input type="text" name="opcion" id="opcion" style="visibility:hidden;">
			</form>
	  	</div>
	</div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	
	<?php
		include('../footer.html');
	?>
	
	<script src="../js/jquery.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script src="../js/init.js"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
	    $('select').material_select();
	    });
  	</script>
	<?php
		include('../ScriptMenu.html');
	?>
	<script>
		function Excel() {
	    var txt=0;
	    //var r = confirm("¿Te gustaría editar los registros antes de subirlos? Presiona 'Ok'\n Si no deseas editar los registros Presiona 'Cancel'");
	    var r = confirm("¿Seguro que quiere subir todos los registros?");
	    if (r == true) {
	        txt = 1;
	    } else {
	        txt = 2;
	    }
	   	 document.formExcel.opcion.value = txt
	}
	</script>
</body>
</html>
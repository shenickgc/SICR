<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="../css/formulariogrupo.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
	<title>Consulta Aspirante</title>
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

	</br></br>
	<div class="container">

<?php

	include('../conexion.php');

	$sql = "SELECT * FROM aspirantes";
	$resultado = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("AltaAspirante.php");</script>');			

	echo "<table class='responsive-table centered striped highlight'>
	<thead>
	<tr>
	<th data-field='no_solicitud'>No. solicitud</th>
	<th data-field='nombre'>Nombre</th> 
	<th data-field='carrera'>Carrera</th>
	<th data-field='escuela_procedencia'>Escuela de procedencia</th>
	<th data-field='fecha_nacimiento'>Fecha de nacimiento</th>  
	<th data-field='correo'>Correo</th> 
	<th data-field='telefono>Teléfono</th> 
	<th data-field='nombre_emergencia'>Emergencia</th>
	<th data-field='talla'>talla</th>
	<th>Eliminar</th>
	<th>Modificar</th> 
	</tr>
	</thead>";
	echo "<tbody>";
	while($renglon = pg_fetch_array($resultado)) {
		
		echo "
		<tr>
			 <td style='border:1px solid #088A68'>" . $renglon['no_solicitud'] . "</td>
			 <td style='border:1px solid #088A68'>" . $renglon['nombre'] . " " . $renglon['apellido_paterno'] . " " . $renglon['apellido_materno'] . "</td>
			 <td style='border:1px solid #088A68'>" . $renglon['carrera'] . "</td>
			 <td style='border:1px solid #088A68'>" . $renglon['escuela_procedencia'] . "</td>
			 <td style='border:1px solid #088A68'>" . $renglon['fecha_nacimiento'] . "</td>
			 <td style='border:1px solid #088A68'>" . $renglon['correo'] . "</td>
			 <td style='border:1px solid #088A68'>" . $renglon['telefono'] . "</td>
			 <td style='border:1px solid #088A68'>" . $renglon['nombre_emergencia'] . "  Tel: " . $renglon['telefono_emergencia'] . "</td>
			 <td style='border:1px solid #088A68'>" . $renglon['talla'] . "</td>
			 <td style='border:1px solid #088A68'>" . "<button class='mdl-button' align='center'><i class='material-icons'>delete</i></button>" . "</td>
			 <td style='border:1px solid #088A68'>" . "<button class='mdl-button'><i class='material-icons'>create</i></button>" . "</td>
		</tr>";
		}
		echo "
		</tbody>
		</table>";
		pg_close($dbconn);
?>
</div>
	<script type="text/javascript">
		function showHideShipInfo(){
			if (document.getElementById('Base').checked==true) {
				document.getElementById('mostrar').style.display='block';

			}else{
				document.getElementById('mostrar').style.display='none';
			}
		}
	</script>
	<style type="text/css">
  		.bg1 { background:#088A68; color:#FFF; }
  	</style>
	<script type="text/javascript">
	    $(document).ready(function(){
	    $('select').material_select();
	    });
	 </script>
	<style type="text/css">
		.pcol{
			color: #009688;
		}
	</style>
	<?php
		include('../footer.html');
	?>
		<!--  Scripts-->
	<script src="../js/jquery.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script src="../js/init.js"></script>
	<?php
		include('../ScriptMenu.html');
	?>
</body>
</html>
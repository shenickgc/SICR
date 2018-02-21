<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="../formulariogrupo.css" type="text/css" rel="stylesheet"/>
	  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
	  <style type="text/css">
	  .bg1 { background:#088A68; color:#FFF; }
	  </style>
	  <script type="text/javascript">
	    $(document).ready(function(){
	    $('select').material_select();
	    });
	  </script>
	<title>Carga Industrial</title>
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
	$sql = "select aspirantes.no_solicitud, aspirantes.id_grupo, aspirantes.nombre, aspirantes.apellido_paterno, aspirantes.apellido_materno, aspirantes.carrera,
			grupos.aula, grupos.horario, grupos.periodo, materias.nombre_materia from aspirantes inner join grupos on (aspirantes.id_grupo = grupos.id_grupo) inner join
			materias on (grupos.id_materia = materias.id_materia) where aspirantes.carrera = 
			'tics'";
	$resultado = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("CargaMaterias.php");</script>');
	while($fila = pg_fetch_array($resultado)) 
		{
			echo "<div class='col s12 m12 l12 xl12'>";
            echo "<div class='card grande'>";
            echo "<div class='card-image'>
              		<img src='../img/logo.png'>";

            echo "<div class='card-stacked'>";
            echo "<div class='card-content'>
            				<table>                    			

                    			<tr>
                    				<td>
                    				<p style='font-size: 9px; font-weight:bold;'>" . '"Año del centenario de la promulgación de la Constitución Política de los Estados Unidos Mexicanos"' . "</p></br>
                    				<p style='font-size: 15px; font-weight:bold;'>" . 'DEPARTAMENTO DE DESARROLLO ACADÉMICO' . "</p></br>
                    				<p style='font-size: 15px; font-weight:bold;'>" . 'CARGA DE MATERIAS CURSO DE REGULARIZACIÓN DE ASPIRANTES DE OTOÑO 2017' . "</p>
                    				</td>
                    			</tr>

                    		</table>
            		</br>
                    <p style='font-size: 15px;'>No. Solicitud: " . $fila['no_solicitud'] . "</p>
                    <p style='font-size: 15px;'>Grupo: " . $fila['id_grupo'] . "</p>
                    <p style='font-size: 18px;'>Nombre: " . $fila['nombre'] . " " . $fila['apellido_paterno'] . " " . $fila['apellido_materno'] . "</p>
                    <p style='font-size: 15px;'>Carrera: " . $fila['carrera'] . "</p>
                    <p style='font-size: 15px;'>Materias: </p>
                    <p style='font-size: 15px;'>Horario: </p>
                    <p style='font-size: 15px;'>Salón: </p></br>
                    <p style='font-size: 12px;'>" . '_________________________' . "</br>" . 'FIRMA DEL ALUMNO' . "</p>
                  </div>";

            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
		}
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
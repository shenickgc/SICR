<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="../css/formulariogrupo.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
	<title>Consulta grupo</title>
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
	<div align="center" class="container">
	</br>
  <h4 class="bg1">Consulta de Grupos</h4>
  </br>

<?php

	include('../conexion.php');

	$sql = "select * from grupos";
	$resultado = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("index.php");</script>');				
	
	echo "<table class='responsive-table centered striped highlight'>
	    <thead>
	    <tr>
	      <th data-field='id_grupo'>ID Grupo</th>
	      <th data-field='id_materia'>ID de Materia</th>
	      <th data-field='rfc_profesor'>RFC del Profesor</th>
	      <th data-field='limite'>Limite</th>
	      <th data-field='aula'>Aula</th>
	      <th data-field='horario'>Horario</th>
	      <th data-field='periodo'>Periodo</th>
	      <th data-field='año'>Año</th>
	      <th>Modificar</th>
	      <th>Borrar</th>
	    </tr>
	    </thead>";
	    echo "<tbody>";
	while($row = pg_fetch_array($resultado)) {

	echo "
          <tr>
           <td>".$row["id_grupo"]."</td>
           <td>".$row["id_materia"]."</td>
           <td>".$row["rfc_profesor"]."</td>
           <td>".$row["limite"]."</td>
           <td>".$row["aula"]."</td>
           <td>".$row["horario"]."</td>
           <td>".$row["periodo"]."</td>
           <td>".$row["anio"]."</td>
           <td>"."<button class='mdl-button'><i class='material-icons'>create</i></button>"."</td>
           <td>"."<button class='mdl-button' align='center'><i class='material-icons'>delete</i></button>"."</td>
          </tr>";
        }
    echo "</tbody>
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
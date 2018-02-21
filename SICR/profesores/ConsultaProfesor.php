<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  	<link href="../css/formulariogrupo.css" type="text/css" rel="stylesheet"/>
  	<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
	<title>Consulta Profesor</title>
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
</head>
<body>
	<?php
		include('../header.html');
	?>
	</br></br>
	<div class="container">
<?php
	include('../conexion.php');	

	$sql = "SELECT * FROM profesor";
	$resultado = pg_query($dbconn, $sql);				
	echo "<table class='responsive-table centered striped highlight'>
	<thead>
	<tr> 
	<th data-field='nombre'>Nombre</th>
	<th data-field='ap_paterno'>Apellido Paterno</th> 
	<th data-field='ap_materno'>Apellido Materno</th>
	<th data-field='titulo'>Titulo</th>
	<th data-field='nivel'>Nivel</th>  
	<th data-field='cedula'>Cedula</th> 
	<th data-field='status'>Status</th> 
	<th data-field='correo_electronico'>Correo Electronico</th>
	<th data-field='nombramiento'>Nombramiento</th>
	<th data-field='departamento'>Departamento</th>
	<th>Eliminar</th>
	<th>Modificar</th> 
	</tr>
	</thead>";
	echo "<tbody>";
	while($renglon = pg_fetch_array($resultado)) {
		echo "
		<tr>
			 <td>" . $renglon['nombre'] . "</td>
			 <td>" . $renglon['ap_materno'] ."</td>
			 <td>" . $renglon['ap_paterno'] . "</td>
			 <td>" . $renglon['titulo'] . "</td>
			 <td>" . $renglon['nivel'] . "</td>
			 <td>" . $renglon['cedula'] . "</td>
			 <td>" . $renglon['status'] . "</td>
			 <td>" . $renglon['correo_electronico'] . "</td>
			 <td>" . $renglon['nombramiento'] . "</td>
			 <td>" . $renglon['departamento'] . "</td>
			 <td>" . "<button class='mdl-button' align='center'><i class='material-icons'>delete</i></button>" . "</td>
			 <td>" . "<button class='mdl-button'><i class='material-icons'>create</i></button>" . "</td>
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
	.pcol{
		color: #009688;
	}
	</style>
	<?php
		include('../footer.html');
	?>

	<script src="../js/jquery.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script src="../js/init.js"></script>
	<style type="text/css">
  		.bg1 { background:#088A68; color:#FFF; }
 	 </style>
	<script type="text/javascript">
	    
	    $(document).ready(function(){
	    $('select').material_select();
	    });

	</script>
	<?php
		include('../ScriptMenu.html');
	?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="/vinc/css/formulariogrupo.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
  <!--<script type="text/javascript" src="../js/validar_profesor.js"></script>-->
  <script src="../js/jquery.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/init.js"></script>
  <style type="text/css">
  .bg1 { background:#088A68; color:#FFF; }
  </style>
  <!--<link rel="stylesheet" type="text/css" href="../css/font.css">
  <link rel="stylesheet" type="text/css" href="../css/materialize_calendar.min.css">-->
  
  <script type="text/javascript">
    
    $(document).ready(function(){
    $('select').material_select();
    });

  </script>
	<title>Semestre cero</title>
</head>
<body>
	<?php
	//echo $_SERVER["REQUEST_URI"];
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

	include('conexion.php');	

	$sql = "select * from aspirantes where carrera = 'mecanica'";
	$resultado = pg_query($dbconn, $sql);
	while($fila = pg_fetch_array($resultado)) 
		{
			echo "<div class='col s12 m8 l9'>";
                    echo "<div class='card horizontal'>";
                    echo "<div class='card-image'>
                    		<img src='../img/logo.png'>
                    		<table>                    			

                    			<tr>
                    				<td>
                    				<p style='font-size: 15px;'>" . 'VIGENCIA:' . "</p></br></br> 
                    				<p style='font-size: 12px;'>" . 'ROCÍO CONTRERAS JIMÉNEZ' . "</br>" . 'JEFA DEL DEPARTAMENTO' . "</br>" . 'DE DESARROLLO ACADÉMICO' . "</p></br></br>
                    				<p style='font-size: 12px;'>" . 'FIRMA DEL ALUMNO' . "</br>" . '_________________________' . "</p>
                    				</td>
                    			</tr>

                    		</table>

                          </div>";

                    echo "<div class='card horizontal'>";      
                    echo "<div class='card-image'>
                            </br></br></br><img height='100px' width='100px' src='../img/user.png'>
                          </div>";
                    echo "<div class='card-stacked'>";
                    echo "<div class='card-content'>
                    		<p style='font-size: 20px;'>" . 'CURSO DE REGULARIZACION PARA' . "</br>" . 'ASPIRANTES DE OTOÑO' . "</p></br></br>
                            <p style='font-size: 15px;'>No. Solicitud: " . $fila['no_solicitud'] . "</p>
                            <p style='font-size: 15px;'>Grupo: " . $fila['id_grupo'] . "</p>
                            <p style='font-size: 15px;'>Carrera: " . $fila['carrera'] . "</p>
                            <p style='font-size: 18px;'>Nombre: " . $fila['nombre'] . " " . $fila['apellido_paterno'] . " " . $fila['apellido_materno'] . "</p>
                        </div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
		}
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


</body>
</html>
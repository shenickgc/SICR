<?php

	include('../conexion.php');
    
    $clavemateria = $_POST["clave"];
	$nombremateria = $_POST["nombre"];
	$tipo = $_POST["tipomateria"];
	$carrera = $_POST["materias"];
	

	$sql = "INSERT INTO materias (id_materia, nombre_materia, tipo_materia) VALUES ('$clavemateria', '$nombremateria', '$tipo')";
	$result = pg_query($dbconn, $sql) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());

	foreach($_POST["materias"] as $x){
		$sql2 = "INSERT INTO carrera_materias (id_carrera, id_materia) VALUES ('$x', '$clavemateria')";
		$result2 = pg_query($dbconn, $sql2) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("AltaMaterias.php");</script>');
	};
	pg_close($dbconn);
	print "<script>alert('El registro fue guardado con éxito')</script>";
 	print("<script>window.location.replace('AltaMaterias.php');</script>"); 
?>	
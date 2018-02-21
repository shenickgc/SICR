<?php

	include('../conexion.php');
    
    $no_solicitud = $_POST["no_solicitud"];
    $nombres = $_POST["nombres"];
	$apellidoP = $_POST["apellido_p"];
	$apellidoM = $_POST["apellido_m"];
	$carrera = $_POST["carrera"];
	$escuela_procedencia = $_POST["escuela_procedencia"];
	$bachillerato = $_POST["bachillerato"];
	$fecha_nacimiento = $_POST["fecha_nacimiento"];
	$correo = $_POST["correo"];
	$telefono = $_POST["telefono"];
	$nombre_emergencia = $_POST["nombre_emergencia"];
	$telefono_emergencia = $_POST["telefono_emergencia"];
	$talla = $_POST["talla"];
	$sexo = $_POST["sexo"];

	$sql = "INSERT INTO aspirantes (no_solicitud, nombre, apellido_paterno, apellido_materno, carrera, escuela_procedencia, bachillerato, fecha_nacimiento, correo, telefono, nombre_emergencia, telefono_emergencia, talla,sexo) VALUES ('$no_solicitud', '$nombres', '$apellidoP', '$apellidoM', '$carrera', '$escuela_procedencia', '$bachillerato', '$fecha_nacimiento', '$correo', $telefono, '$nombre_emergencia', $telefono_emergencia, '$talla','$sexo')";

	$result = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("AltaAspirante.php");</script>');
	print "<script>alert('El registro fue guardado con éxito')</script>";
 	print("<script>window.location.replace('AltaAspirante.php');</script>"); 

 	pg_close($dbconn);
?>	
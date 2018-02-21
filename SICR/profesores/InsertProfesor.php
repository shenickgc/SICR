<?php

	include('../conexion.php');
    
    $Nombre = $_POST["nombre"];
	$AP_paterno = $_POST["AP_materno"];
	$AP_materno = $_POST["AP_paterno"];
	$titulo = $_POST["titulo"];
	$nivel = $_POST["nivel"];
	$cedula = $_POST["cedula"];
	$tipo = $_POST["tipo"];
	$clave_de_plaza_presupuestal = $_POST["clave_presupuestal"];
	$departamento_de_adscripcion = $_POST["departamento_de_adscripcion"];
	$status = $_POST["status"];
	$curp = $_POST["curp"];
	$edo_civil = $_POST["edo_civil"];
	$telefono = $_POST["telefono"];
	$celular = $_POST["celular"];
	$correo_electronico = $_POST["correo"];
	$calle = $_POST["calle"];
	$numero = $_POST["numero"];
	$colonia = $_POST["colonia"];
	$municipio = $_POST["municipio"];
	$codigo_postal = $_POST["cp"];
	$estado = $_POST["estado"];
	$nombramiento = $_POST["nombramiento"];
	$fecha_de_ingreso = $_POST["fecha"];
	$departamento = $_POST['departamento'];
	$rfc = $_POST['rfc'];
	

	$sql = "INSERT INTO profesor (nombre, ap_materno, ap_paterno, titulo, nivel, cedula, tipo, clave_de_plaza_presupuestal, departamento_de_adscripcion, status, curp, edo_civil, telefo, celular, correo_electronico, calle, numero, colonia, municipio, codigo_postal, estado, nombramiento, fecha_de_ingreso, departamento, RFC_Profesor) VALUES ('$Nombre', '$AP_materno', '$AP_paterno', '$titulo', '$nivel', '$cedula', '$tipo', '$clave_de_plaza_presupuestal', '$departamento_de_adscripcion', '$status', '$curp', '$edo_civil', '$telefono', '$celular', '$correo_electronico', '$calle', '$numero', '$colonia', '$municipio', '$codigo_postal', '$estado', '$nombramiento', '$fecha_de_ingreso', '$departamento', '$rfc')";

	$result = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("AltaProfesor.php");</script>');
	pg_close($dbconn);
	print "<script>alert('El registro fue guardado con éxito')</script>";
 	print("<script>window.location.replace('AltaProfesor.php');</script>"); 
?>	
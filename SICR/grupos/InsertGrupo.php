<?php

	include('../conexion.php');
    
    $id_materia = $_POST["id_materia"];
	$clavegrupo = $_POST["grupo"];
	$rfc = $_POST["rfc"];
	$limite = $_POST["limite"];
	$aula = $_POST["aula"];
	$horario = $_POST["horario"];
	$periodo = $_POST["periodo"];
	$año = $_POST["año"];
	

	$sql = "INSERT INTO grupos (id_grupo, id_materia, rfc_profesor, limite, aula, horario, periodo, anio)
	 VALUES ('$clavegrupo', '$id_materia', '$rfc', '$limite', '$aula', '$horario', '$periodo', '$año')";

	$result = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("AltaGrupo.php");</script>');

	print "<script>alert('El registro fue guardado con éxito')</script>";
 	print("<script>window.location.replace('alta_grupo.php');</script>"); 

 	pg_close($dbconn);
?>	
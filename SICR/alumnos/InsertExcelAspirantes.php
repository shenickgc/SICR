<?php
	require '../Classes/PHPExcel/IOFactory.php';

	include('../conexion.php');
	echo $_FILES['archivo']['type'];
	if ($_FILES['archivo']['error'] > 0){
		print "<script>alert('El tipo de archivo no es aceptado')</script>";
		print("<script>window.location.replace('ExcelAspirantes.php');</script>");
	}
	else{
		move_uploaded_file($_FILES['archivo']['tmp_name'], 'ArchivosExcel/' . $_FILES['archivo']['name'] );
		
		$opcion =  $_POST["opcion"];
		
		$nombreArchivo = "ArchivosExcel/" . $_FILES["archivo"]["name"];
		
		$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
		
		$objPHPExcel->setActiveSheetIndex(0);
		
		$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
		
		if ($opcion == 2){
			/*echo '<table border=1>';
			for($i = 1; $i <= $numRows; $i++){
				$Solicitud = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$ApellidoP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$ApellidoM = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$Carrera = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
				$EscuelaProcedencia = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
				$Bachillerato = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
				$FechaNacimiento = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
				$Correo = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
				$Telefono = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
				$NombreEmergencia = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
				$TelefonoEmergencia = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
				$Talla = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
				
				
				/*$sql = "INSERT INTO aspirantes (no_solicitud, nombre, apellido_p, apellido_m, carrera, escuela_procedencia, bachillerato, fecha_nacimiento, correo, telefono, nombre_emergencia, telefono_emergencia, talla) VALUES ('$Solicitud', '$Nombre', '$ApellidoP', '$ApellidoM', '$Carrera', '$EscuelaProcedencia', '$Bachillerato', '$FechaNacimiento', '$Correo', $Telefono, '$NombreEmergencia', $TelefonoEmergencia, '$Talla')";

				$result = pg_query($dbconn, $sql) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());*/

				/*	echo '<tr>';
					echo '<td>'.$Solicitud.'</td>';
					echo '<td>'.$Nombre.'</td>';
					echo '<td>'.$ApellidoP.'</td>';
					echo '<td>'.$ApellidoM.'</td>';
					echo '<td>'.$Carrera.'</td>';
					echo '<td>'.$EscuelaProcedencia.'</td>';
					echo '<td>'.$Bachillerato.'</td>';
					echo '<td>'.$FechaNacimiento.'</td>';
					echo '<td>'.$Correo.'</td>';
					echo '<td>'.$Telefono.'</td>';
					echo '<td>'.$NombreEmergencia.'</td>';
					echo '<td>'.$TelefonoEmergencia.'</td>';
					echo '<td>'.$Talla.'</td>';

					echo '</tr>';
			}
			echo '</table>';*/
			print("<script>window.location.replace('importarExcel.php');</script>");
		}
		elseif ($opcion == 1) {
			for($i = 2; $i <= $numRows; $i++){
				$Solicitud = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
				$Nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
				$ApellidoP = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
				$ApellidoM = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
				$Carrera = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
				$EscuelaProcedencia = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
				$Bachillerato = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
				$FechaNacimiento = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
				$Correo = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
				$Telefono = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
				$NombreEmergencia = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
				$TelefonoEmergencia = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();
				$Talla = $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();
				$Sexo =  $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
				
				
				$sql = "INSERT INTO aspirantes (no_solicitud, nombre, apellido_paterno, apellido_materno, carrera, escuela_procedencia, bachillerato, fecha_nacimiento, correo, telefono, nombre_emergencia, telefono_emergencia, talla, sexo) VALUES ('$Solicitud', '$Nombre', '$ApellidoP', '$ApellidoM', '$Carrera', '$EscuelaProcedencia', '$Bachillerato', '$FechaNacimiento', '$Correo', $Telefono, '$NombreEmergencia', $TelefonoEmergencia, '$Talla', '$Sexo')";

				$result = pg_query($dbconn, $sql) or die('<script language="javascript">alert("Error en el Servidor");</script> <script>window.location.replace("ExcelAspirantes.php");</script>');
			}
			print "<script>alert('Los registros fueron guardados con éxito')</script>";
			print("<script>window.location.replace('AltaAspirante.php');</script>");
		}
		else{
			print("<script>window.location.replace('ExcelAspirantes.php');</script>");
		}
	}
	pg_close($dbconn);	
?>